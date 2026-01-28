<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI,sans-serif}
        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#667eea,#764ba2);
        }
        .card{
            width:360px;
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
            background:linear-gradient(to right,#ff758c,#ff7eb3);
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
    <h2>Login</h2>
    <form>
        <input type="email" placeholder="Email address">
        <input type="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <div class="link">
        Don't have an account? <a href="register.html">Register</a>
    </div>
</div>

</body>
</html>
