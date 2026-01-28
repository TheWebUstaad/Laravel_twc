<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI,sans-serif}
        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#43cea2,#185a9d);
        }
        .card{
            width:380px;
            padding:30px;
            border-radius:15px;
            background:rgba(255,255,255,0.15);
            backdrop-filter:blur(15px);
            box-shadow:0 20px 40px rgba(0,0,0,.2);
            color:#fff;
        }
        h2{text-align:center;margin-bottom:20px}
        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:none;
            border-radius:8px;
            outline:none;
        }
        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:8px;
            background:linear-gradient(to right,#36d1dc,#5b86e5);
            color:#fff;
            font-size:16px;
            cursor:pointer;
        }
        .link{
            text-align:center;
            margin-top:15px;
            font-size:14px;
        }
        .link a{color:#fff;text-decoration:underline}
    </style>
</head>
<body>

<div class="card">
    <h2>Register</h2>
    <form method="post" action="{{ route('register.formstore') }}">
        @csrf
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="Email address">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <button type="submit">Create Account</button>
    </form>
    <div class="link">
        Already have an account? <a href="{{ route('login.form') }}">Login</a>
    </div>
</div>

</body>
</html>
