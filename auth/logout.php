<?php
session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect after 2 seconds
header("Refresh:2; url=login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out</title>

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
            --neutral-50: oklch(98.5% 0.003 25);

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

            background:white;

            width:100%;
            max-width:430px;

            padding:45px;

            border-radius:22px;

            text-align:center;

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

        .icon{

            width:70px;
            height:70px;

            margin:auto;
            margin-bottom:25px;

            border-radius:18px;

            background:var(--primary);

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;

            font-size:34px;

        }

        h1{

            color:var(--neutral-900);

            margin-bottom:12px;

        }

        p{

            color:var(--neutral-500);

            line-height:1.6;

        }

        .loader{

            width:42px;
            height:42px;

            border:4px solid var(--neutral-200);
            border-top:4px solid var(--primary);

            border-radius:50%;

            margin:30px auto 0;

            animation:spin .9s linear infinite;

        }

        @keyframes spin{

            100%{

                transform:rotate(360deg);

            }

        }

    </style>

</head>
<body>

<div class="card">

    <div class="icon">
        👋
    </div>

    <h1>Logged Out Successfully</h1>

    <p>
        Thank you for visiting.<br>
        Redirecting you to the login page...
    </p>

    <div class="loader"></div>

</div>

</body>
</html>