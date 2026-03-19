<?php

require 'connection2.php';

if (isset($_POST['submit'])) {
    $login_username = $_POST['username'];
    $login_password = md5($_POST['password']);

    $stmt = $connection->prepare('SELECT username,password FROM signedin WHERE username = ?');
    $stmt->bind_param('s', $login_username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($login_password === $user['password']) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header('Location: homepage.php');
            exit;
        } else {
            echo "<script>alert('Invalid username or password')</script>";
        }
    } else {
        echo "<script>alert('User not found')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | My App</title>
    <style>
        :root {
            --primary: #2a62ff;
            --background: #f3f6ff;
            --card: #ffffff;
            --text: #1c1c27;
            --muted: #575d6a;
            --radius: 14px;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: radial-gradient(circle at top, #dbe7ff, var(--background));
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
        }

        .container {
            width: min(420px, 100%);
            background: var(--card);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 32px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .brand {
            text-align: center;
            margin-bottom: 24px;
        }

        .brand h1 {
            margin: 0;
            font-size: 1.8rem;
            letter-spacing: 0.04em;
        }

        .brand p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            font-size: 1rem;
            border: 1px solid rgba(0,0,0,0.15);
            border-radius: 10px;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(42, 98, 255, 0.18);
        }

        .button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: var(--primary);
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .button:hover {
            background: #1e4ad8;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: var(--muted);
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .message {
            background: rgba(255, 76, 66, 0.12);
            border: 1px solid rgba(255, 76, 66, 0.2);
            color: #a82b2b;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>
    <main class="container" aria-label="Login form">
        <section class="brand">
            <h1>Welcome Back</h1>
            <p>Sign in to continue to your account.</p>
        </section>

        <form method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required autocomplete="current-password">
            </div>

            <button type="submit" name="submit" class="button">Sign in</button>
        </form>

        <div class="footer">
            <span>Don't have an account?</span>
            <a href="signup.html">Sign up</a>
        </div>
    </main>
</body>
</html>

