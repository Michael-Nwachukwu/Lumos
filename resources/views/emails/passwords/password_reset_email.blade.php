<!DOCTYPE html>
<html>
    <head>
        <title>Homework Notification</title>
    </head>
    <body>

        <img src="{{ asset('img/lumosBOW.jpg') }}" alt="">

        <h2>Password Resest</h2>

        <p>Click the following link to reset your password:</p>
        <p>
            <a href="{{ route('password.reset', ['token' => $token]) }}">Reset Password</a>
        </p>

        <p>please ignore and report to school authorities if you did not request a password change</p>


        <p>Thank you.</p>
    </body>
</html>
