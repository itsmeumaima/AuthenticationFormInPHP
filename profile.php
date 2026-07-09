<?php
session_start();

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
    <title>Profile</title>

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

            padding:20px;

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

        .avatar{

            width:80px;
            height:80px;

            border-radius:50%;

            background:var(--primary);

            color:white;

            display:flex;
            justify-content:center;
            align-items:center;

            font-size:34px;
            font-weight:bold;

            margin:0 auto 20px;

        }

        h1{

            text-align:center;

            color:var(--neutral-900);

            margin-bottom:8px;

        }

        .subtitle{

            text-align:center;

            color:var(--neutral-500);

            margin-bottom:35px;

        }

        .info{

            background:var(--neutral-100);

            border:1px solid var(--neutral-200);

            border-radius:16px;

            padding:20px;

            margin-bottom:30px;

        }

        .info-item{

            display:flex;

            justify-content:space-between;

            margin-bottom:18px;

            padding-bottom:14px;

            border-bottom:1px solid var(--neutral-200);

        }

        .info-item:last-child{

            border:none;

            margin-bottom:0;

            padding-bottom:0;

        }

        .label{

            font-weight:700;

            color:var(--neutral-700);

        }

        .value{

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

            text-decoration:none;

            padding:14px;

            border-radius:12px;

            font-weight:600;

            transition:.25s;

        }

        .secondary{

            background:var(--neutral-100);

            border:1px solid var(--neutral-200);

            color:var(--neutral-700);

        }

        .secondary:hover{

            background:var(--neutral-200);

        }

        .primary{

            background:var(--primary);

            color:white;

        }

        .primary:hover{

            background:var(--primary-hover);

            transform:translateY(-2px);

        }

        @media(max-width:500px){

            .buttons{

                flex-direction:column;

            }

            .info-item{

                flex-direction:column;

                gap:6px;

            }

        }

    </style>

</head>
<body>

<div class="card">

    <div class="avatar">

        <?php
            echo strtoupper(substr($_SESSION['fullname'],0,1));
        ?>

    </div>

    <h1><?php echo htmlspecialchars($_SESSION['fullname']); ?></h1>

    <p class="subtitle">
        Welcome to your profile page.
    </p>

    <div class="info">

        <div class="info-item">

            <span class="label">User ID</span>

            <span class="value">
                <?php echo htmlspecialchars($_SESSION['user_id']); ?>
            </span>

        </div>

        <div class="info-item">

            <span class="label">Full Name</span>

            <span class="value">
                <?php echo htmlspecialchars($_SESSION['fullname']); ?>
            </span>

        </div>

        <div class="info-item">

            <span class="label">Email</span>

            <span class="value">
                <?php echo htmlspecialchars($_SESSION['email']); ?>
            </span>

        </div>

        <div class="info-item">

            <span class="label">Account Status</span>

            <span class="value">🟢 Active</span>

        </div>

    </div>

    <div class="buttons">

        <a href="dashboard.php" class="btn secondary">
            Dashboard
        </a>

        <a href="auth/logout.php" class="btn primary">
            Logout
        </a>

    </div>

</div>

</body>
</html>