<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <h1>Submitted details</h1>
    <p>Applicant Name : {{ $mailData['name'] }}</p>
    <p>Email : {{ $mailData['email'] }}</p>
    <p>Phone Number : {{ $mailData['phone'] }}</p>
    <p>Subject : {{ $mailData['subject'] }}</p>
    <p>Message : {{ $mailData['message'] }}</p>
</body>

</html>
