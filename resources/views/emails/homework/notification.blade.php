<!DOCTYPE html>
<html>
    <head>
        <title>Homework Notification</title>
    </head>
    <body>
        <img src="{{ asset('img/lumosBOW.jpg') }}" alt="">
        <h2>Homework Notification</h2>
        <p>Dear {{ $user->firstname }},</p>
        <p>
            A new homework has been assigned to you for the course "{{ $course->coursename }}". Please find the details below:
        </p>
        <ul>
            <li>Title: {{ $homework->title }}</li>
            <li>Due Date: {{ $homework->due_date }}</li>
        </ul>

        @if($homework->pdf)
            You can find additional resources attached
        @endif

        <p>Thank you.</p>
    </body>
</html>
