<!DOCTYPE html>
<html>
<head>
    <title>Bootcamp Congratulatory Mail</title>
</head>
<body>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif




    <h1>Click the button to send congratulatory  emails</h1>
    <form action="/send/bootcamp/interview/congratulatory/mail" method="POST">
        @csrf
        <button type="submit">Send Mail</button>
    </form>
</body>
</html>
