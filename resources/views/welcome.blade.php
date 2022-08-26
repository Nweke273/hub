@extends('layouts.app')
  @section('content')

      
        {{-- Home --}}
       @include('layouts.pages.home')
        {{--About Us --}}
       @include('layouts.pages.about-us')

        {{-- Our Services --}}
        @include('layouts.pages.services') 

       {{-- Get Started --}}
       @include('layouts.pages.get-started')

       {{-- what's new --}}
       @include('layouts.pages.whats-new')
   
       {{-- Trainings --}}
       @include('layouts.pages.trainings')

       {{-- Contact us --}}
       @include('layouts.pages.contact-us')
  
@endsection
