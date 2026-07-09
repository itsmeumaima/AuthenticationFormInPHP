<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

            --ease:cubic-bezier(0.16,1,0.3,1);

        }

        body{

            font-family:'DM Sans',sans-serif;

            background:var(--neutral-50);

            display:flex;
            justify-content:center;
            align-items:center;

            min-height:100vh;

            overflow:hidden;

            position:relative;

            padding:20px;

        }

        body::before{

            content:"";

            position:absolute;

            width:600px;
            height:600px;

            top:-220px;
            right:-220px;

            background:oklch(90% 0.08 25);

            border-radius:50%;

            filter:blur(100px);

        }

        body::after{

            content:"";

            position:absolute;

            width:500px;
            height:500px;

            bottom:-180px;
            left:-180px;

            background:oklch(88% 0.06 50);

            border-radius:50%;

            filter:blur(90px);

        }

        .card{

            position:relative;
            z-index:1;

            width:100%;
            max-width:460px;

            background:white;

            padding:40px;

            border-radius:22px;

            box-shadow:0 20px 45px rgba(0,0,0,.08);

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

            width:56px;
            height:56px;

            border-radius:16px;

            background:var(--primary);

            color:white;

            display:flex;
            justify-content:center;
            align-items:center;

            font-size:24px;

            margin-bottom:24px;

        }

        h2{

            color:var(--neutral-900);

            font-size:2rem;

            margin-bottom:8px;

        }

        .subtitle{

            color:var(--neutral-500);

            margin-bottom:32px;

            line-height:1.5;

        }

        .form-group{

            margin-bottom:18px;

        }

        label{

            display:block;

            margin-bottom:8px;

            font-weight:500;

            color:var(--neutral-700);

        }

        input{

            width:100%;

            padding:14px 16px;

            border-radius:12px;

            border:1px solid var(--neutral-200);

            outline:none;

            font-size:15px;

            font-family:inherit;

            transition:.25s;

        }

        input:focus{

            border-color:var(--primary);

            box-shadow:0 0 0 4px var(--primary-light);

        }

        button{

            width:100%;

            margin-top:12px;

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

            margin-top:26px;

            text-align:center;

            color:var(--neutral-500);

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
        👤
    </div>

    <h2>Create Account</h2>

    <p class="subtitle">
        Create your account to access the dashboard and manage your profile.
    </p>

    <form action="process_register.php" method="POST">

        <div class="form-group">
            <label>Full Name</label>
            <input
                type="text"
                name="fullname"
                placeholder="Enter your full name"
                required>
        </div>

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
                placeholder="Create a password"
                required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm your password"
                required>
        </div>

        <button type="submit">
            Create Account
        </button>

    </form>

    <div class="footer">

        Already have an account?

        <a href="login.php">
            Sign In
        </a>

    </div>

</div>

</body>
</html>