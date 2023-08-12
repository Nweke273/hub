<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;

use App\Mail\BootcampMail;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\bootcampFormRequest;
use App\Mail\BootcampInterviewScheduleMail;
use App\Mail\BootcampInterviewCongratulatoryEmail;

class BootcampController extends Controller
{
  public function index()
  {
    // return view("layouts.pages.bootcamp-reg");
    return view("bootcamp");
  }



  public function apply(bootcampFormRequest $request)
  {


    $user = Bootcamp::firstOrCreate(
      ['email' => $request->email],
      [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'program' => $request->program,
        'state' => $request->state,
        'country' => $request->country,
        'comment' => $request->comment
      ]
    );

    if ($user->wasRecentlyCreated) {
      // Record was created
      session()->flash('success', "Congratulations, your application was successfully submitted, kindly check your e-mail!");
    } else {
      // Record already exists
      session()->flash('warning', "You already registered for this bootcamp! ");
    }


    try {
      Mail::to($user->email)->send(new BootcampMail([
        // "unique_id" => $vaccinated->unique_id,
        "name" => $user->name,
      ]));
    } catch (\Throwable $error) {
      Log::error('SMTP network error: ' . $error->getMessage());
    }

    return redirect("/bootcamp/register");
  }




  public function bootcampInterviewMailHome()
  {
    return view('bootcamp-interview-send-mail');
  }


  //Schedule bootcamp interview for students via email

  public function bootcampInterviewMail(Request $request)
  {


    
    $students = Bootcamp::all();

    $groupSize = 40;
    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    $studentCount = 1; // Global counter for students
    $date = 7;

    $emailStatus = []; // Array to store the status of each email sent

    foreach ($students->chunk($groupSize) as $groupNumber => $group) {
      $scheduleDay = $days[$groupNumber % count($days)] . ' August ' .  $date;

      foreach ($group as $student) {

        $uniqueCode = 'ExpertHub' . Str::padLeft($studentCount, 3, '0');
        $data = [
          'name' => $student->name,
          'scheduleDay' => $scheduleDay,
          'uniqueCode' => $uniqueCode,
        ];

        // Send the email using the BootcampInterviewScheduleMail mailable with a delay of 10 seconds
        Mail::to($student->email)->later(now()->addSeconds(10), new BootcampInterviewScheduleMail($data));

        // Mark the email as sent successfully
        $emailStatus[] = true;

        $studentCount++; // Increment the student counter
      }
      $date++; // Increment the date once for each group
    }

    // Check the overall status of all emails sent
    $allEmailsSent = !in_array(false, $emailStatus);

    if ($allEmailsSent) {
      return redirect("bootcampInterviewSendMail")->with('success', 'E-mails were sent successfully.');
    } else {
      return redirect("bootcampInterviewSendMail")->with('warning', 'E-mails were not sent successfully.');
    }
  }


  public function mailView()
  {
    return view("emails.bootcamp-interview-mail");
  }


public function bootcampCongratulatoryMail()
{

        
          $studentEmails = [
              'smmbam3@gmail.com',
              'ugwukasey@gmail.com',
              'edejoachim@gmail.com',
              'ozorchidubem2003@gmail.com',
              'enyisuccesskel@gmail.com',
              'georgedesire06@gmail.com',
              'samuel.simon1156@gmail.com',
              'chisomlinda676@gmail.com',
              'chukwuemekagodspower93@gmail.com',
              'clarefausty@gmail.com',
              'Chibundo75@gmail.com',
              'nugemb@gmail.com',
              'contact.icezekiel@gmail.com',
              'uokafor158@gmail.com',
              'abioladolapo2021@gmail.com',
              'davinnewton9th@gmail.com',
              'aguenuemmanuella@gmail.com',
              'alfredsalvadorfav@gmail.com',
              'okpanachinuhu@gmail.com',
              'ehuntober@gmail.com',
              'cajethanchuks97@gmail.com',
              'geraldifebuche904@gmail.com',
              'chinedud767@gmail.com',
              'chigbogiovanni@gmail.com',
              'Emmanuelanweke8@gmail.com',
              'godspoweramalu@gmail.com',
          ];
          
          foreach ($studentEmails as $email) {
              Mail::to($email)->later(now()->addSeconds(10), new BootcampInterviewCongratulatoryEmail($email));

                        
        // Mark the email as sent successfully
        $emailStatus[] = true;
          }
          

    // Check the overall status of all emails sent
    $allEmailsSent = !in_array(false, $emailStatus);

    if ($allEmailsSent) {
      return redirect("/bootcamp/interview/congratulatory/Mail/button")->with('success', 'E-mails were sent successfully.');
    } else {
      return redirect("/bootcamp/interview/congratulatory/Mail/button")->with('warning', 'E-mails were not sent successfully.');
    }
    





      }
      public function bootcampCongratulatoryMailButtonHome()
      {

        return view("bootcamp-interview-congratulatory-mail-button");
      }
  }
  

