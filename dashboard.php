<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

            padding:20px;

        }

        body::before{

            content:"";

            position:absolute;

            width:600px;
            height:600px;

            background:oklch(90% 0.08 25);

            border-radius:50%;

            top:-220px;
            right:-220px;

            filter:blur(100px);

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
            max-width:520px;

            background:white;

            border-radius:24px;

            padding:45px;

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

            width:60px;
            height:60px;

            background:var(--primary);

            border-radius:18px;

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;

            font-size:28px;

            margin-bottom:25px;

        }

        h1{

            color:var(--neutral-900);

            font-size:2rem;

            margin-bottom:8px;

        }

        .subtitle{

            color:var(--neutral-500);

            margin-bottom:35px;

            line-height:1.6;

        }

        .info{

            background:var(--neutral-100);

            border:1px solid var(--neutral-200);

            border-radius:16px;

            padding:20px;

            margin-bottom:30px;

        }

        .info p{

            margin-bottom:12px;

            color:var(--neutral-700);

        }

        .info p:last-child{

            margin-bottom:0;

        }

        .label{

            font-weight:700;

            color:var(--neutral-900);

        }

        .buttons{

            display:flex;

            gap:15px;

            flex-wrap:wrap;

        }

        .btn{

            flex:1;

            text-align:center;

            padding:14px;

            border-radius:12px;

            text-decoration:none;

            font-weight:600;

            transition:.25s;

        }

        .primary{

            background:var(--primary);

            color:white;

        }

        .primary:hover{

            background:var(--primary-hover);

            transform:translateY(-2px);

        }

        .secondary{

            background:var(--neutral-100);

            color:var(--neutral-700);

            border:1px solid var(--neutral-200);

        }

        .secondary:hover{

            background:var(--neutral-200);

        }

        @media(max-width:500px){

            .buttons{

                flex-direction:column;

            }

        }

    </style>

</head>
<body>

<div class="card">

    <div class="logo">
        👋
    </div>

    <h1>
        Welcome,
        <?php echo htmlspecialchars($_SESSION['fullname']); ?>
    </h1>

    <p class="subtitle">
        You have successfully logged into your account.
    </p>

    <div class="info">

        <p>
            <span class="label">Full Name:</span>
            <?php echo htmlspecialchars($_SESSION['fullname']); ?>
        </p>

        <p>
            <span class="label">Email:</span>
            <?php echo htmlspecialchars($_SESSION['email']); ?>
        </p>

        <p>
            <span class="label">Status:</span>
            Logged In 
        </p>

    </div>

    <div class="buttons">

        <a href="profile.php" class="btn secondary">
            View Profile
        </a>

        <a href="auth/logout.php" class="btn primary">
            Logout
        </a>

    </div>

</div>

</body>
</html>