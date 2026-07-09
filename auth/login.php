<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        :root{
            --primary: oklch(55% 0.18 25);
            --primary-hover: oklch(48% 0.20 25);
            --primary-light: oklch(92% 0.04 25);

            --neutral-900: oklch(18% 0.01 25);
            --neutral-700: oklch(35% 0.008 25);
            --neutral-500: oklch(55% 0.006 25);
            --neutral-200: oklch(88% 0.005 25);
            --neutral-100: oklch(95% 0.004 25);
            --neutral-50: oklch(98.5% 0.003 25);

            --ease: cubic-bezier(0.16,1,0.3,1);
        }

        body{
            font-family:'DM Sans',sans-serif;
            background:var(--neutral-50);
            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            overflow:hidden;
            position:relative;
        }

        body::before{
            content:"";
            position:absolute;
            width:550px;
            height:550px;
            background:oklch(90% 0.08 25);
            border-radius:50%;
            top:-180px;
            right:-180px;
            filter:blur(90px);
        }

        body::after{
            content:"";
            position:absolute;
            width:500px;
            height:500px;
            background:oklch(88% 0.06 50);
            border-radius:50%;
            bottom:-180px;
            left:-180px;
            filter:blur(90px);
        }

        .card{

            position:relative;
            z-index:1;

            width:100%;
            max-width:430px;

            background:white;

            padding:40px;

            border-radius:22px;

            box-shadow:
            0 20px 50px rgba(0,0,0,.08);

            animation:fade .6s ease;
        }

        @keyframes fade{

            from{
                opacity:0;
                transform:translateY(20px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }

        }

        .logo{

            width:55px;
            height:55px;

            background:var(--primary);

            border-radius:16px;

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;
            font-size:22px;

            margin-bottom:25px;
        }

        h2{

            color:var(--neutral-900);

            font-size:32px;

            margin-bottom:8px;
        }

        p{

            color:var(--neutral-500);

            margin-bottom:35px;
        }

        .form-group{

            margin-bottom:20px;

        }

        label{

            display:block;

            margin-bottom:8px;

            color:var(--neutral-700);

            font-weight:500;

        }

        input{

            width:100%;

            padding:14px 16px;

            border-radius:12px;

            border:1px solid var(--neutral-200);

            font-size:15px;

            font-family:inherit;

            transition:.25s;

            outline:none;

        }

        input:focus{

            border-color:var(--primary);

            box-shadow:0 0 0 4px var(--primary-light);

        }

        button{

            width:100%;

            margin-top:10px;

            padding:15px;

            border:none;

            border-radius:12px;

            background:var(--primary);

            color:white;

            font-size:15px;

            font-weight:600;

            cursor:pointer;

            transition:.25s;

        }

        button:hover{

            background:var(--primary-hover);

            transform:translateY(-2px);

        }

        .footer{

            margin-top:28px;

            text-align:center;

            color:var(--neutral-500);

            font-size:15px;

        }

        .footer a{

            color:var(--primary);

            text-decoration:none;

            font-weight:600;

        }

        .footer a:hover{

            text-decoration:underline;

        }

    </style>

</head>
<body>

<div class="card">

    <div class="logo">
        🔒
    </div>

    <h2>Welcome Back</h2>

    <p>Sign in to continue to your account.</p>

    <form action="process_login.php" method="POST">

        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required>

        </div>

        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Enter your password"
                required>

        </div>

        <button type="submit">
            Sign In
        </button>

    </form>

    <div class="footer">

        Don't have an account?

        <a href="register.php">
            Create Account
        </a>

    </div>

</div>

</body>
</html>