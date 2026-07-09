<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: oklch(55% 0.18 25);
            --primary-light: oklch(92% 0.04 25);
            --primary-hover: oklch(48% 0.2 25);
            --neutral-900: oklch(18% 0.01 25);
            --neutral-700: oklch(35% 0.008 25);
            --neutral-500: oklch(55% 0.006 25);
            --neutral-200: oklch(88% 0.005 25);
            --neutral-100: oklch(95% 0.004 25);
            --neutral-50: oklch(98.5% 0.003 25);
            --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
        }

        html {
            font-optical-sizing: auto;
        }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background-color: var(--neutral-50);
            color: var(--neutral-900);
            min-height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: oklch(90% 0.08 25);
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.6;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -15%;
            width: 500px;
            height: 500px;
            background: oklch(88% 0.06 50);
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.5;
            pointer-events: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 420px;
            width: 100%;
            animation: fadeUp 600ms var(--ease-out-expo) both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 48px;
            height: 48px;
            background: var(--primary);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 32px;
            box-shadow: 0 4px 12px oklch(55% 0.18 25 / 0.2);
        }

        .logo svg {
            width: 24px;
            height: 24px;
            color: white;
        }

        h1 {
            font-size: clamp(1.75rem, 4vw, 2.25rem);
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.02em;
            color: var(--neutral-900);
            margin-bottom: 12px;
            text-wrap: balance;
        }

        .subtitle {
            font-size: 1.0625rem;
            color: var(--neutral-500);
            line-height: 1.5;
            margin-bottom: 48px;
        }

        .greeting {
            font-size: 1.25rem;
            font-weight: 500;
            color: var(--neutral-700);
            margin-bottom: 36px;
            line-height: 1.4;
        }

        .greeting span {
            color: var(--primary);
            font-weight: 700;
        }

        .actions {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 28px;
            border-radius: 12px;
            font-family: inherit;
            font-size: 0.9375rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 200ms var(--ease-out-expo);
            cursor: pointer;
            border: none;
            text-align: center;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 2px 8px oklch(55% 0.18 25 / 0.25),
                        0 1px 2px oklch(55% 0.18 25 / 0.1);
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            box-shadow: 0 4px 16px oklch(55% 0.18 25 / 0.3),
                        0 2px 4px oklch(55% 0.18 25 / 0.15);
            transform: translateY(-1px);
        }

        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 1px 4px oklch(55% 0.18 25 / 0.2);
        }

        .btn-secondary {
            background: var(--neutral-100);
            color: var(--neutral-700);
            border: 1px solid var(--neutral-200);
        }

        .btn-secondary:hover {
            background: var(--neutral-200);
            color: var(--neutral-900);
            transform: translateY(-1px);
        }

        .btn-secondary:active {
            transform: translateY(0);
        }

        .btn-text {
            background: transparent;
            color: var(--primary);
            padding: 14px 28px;
        }

        .btn-text:hover {
            background: var(--primary-light);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 4px 0;
            color: var(--neutral-500);
            font-size: 0.8125rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--neutral-200);
        }

        .footer {
            margin-top: 64px;
            font-size: 0.8125rem;
            color: var(--neutral-500);
        }

        @media (max-width: 480px) {
            .container {
                max-width: 100%;
            }

            h1 {
                font-size: 1.625rem;
            }

            .subtitle {
                margin-bottom: 36px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                <polyline points="10 17 15 12 10 7"/>
                <line x1="15" y1="12" x2="3" y2="12"/>
            </svg>
        </div>

        <?php if (isset($_SESSION['user_id'])): ?>

            <h1>Welcome back</h1>
            <p class="greeting">Good to see you, <span><?php echo htmlspecialchars($_SESSION['fullname']); ?></span> 👋</p>

            <div class="actions">
                <a href="dashboard.php" class="btn btn-primary">Go to Dashboard</a>
                <a href="auth/logout.php" class="btn btn-text">Log out</a>
            </div>

        <?php else: ?>

            <h1>Welcome to your account</h1>
            <p class="subtitle">Sign in to access your dashboard, or create a new account to get started.</p>

            <div class="actions">
                <a href="auth/login.php" class="btn btn-primary">Sign in</a>
                <div class="divider">or</div>
                <a href="auth/register.php" class="btn btn-secondary">Create an account</a>
            </div>

        <?php endif; ?>

        <p class="footer">Secure authentication powered by PHP sessions</p>
    </div>

</body>
</html>