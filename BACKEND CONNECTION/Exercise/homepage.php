<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | My App</title>
    <style>
        :root {
            --primary: #2a62ff;
            --secondary: #f0f4ff;
            --background: #ffffff;
            --text: #1c1c27;
            --muted: #575d6a;
            --border: #e1e5e9;
            --radius: 12px;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(135deg, var(--primary), #1e4ad8);
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: var(--shadow);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
        }

        nav {
            background: var(--secondary);
            border-bottom: 1px solid var(--border);
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        nav a {
            display: block;
            padding: 1rem;
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        nav a:hover {
            color: var(--primary);
        }

        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
            flex: 1;
        }

        .hero {
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--muted);
            max-width: 600px;
            margin: 0 auto;
        }

        .logout-link {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.75rem 1.5rem;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: var(--radius);
            font-weight: 600;
            transition: background 0.2s ease;
        }

        .logout-link:hover {
            background: #1e4ad8;
        }

        footer {
            background: var(--secondary);
            text-align: center;
            padding: 1rem;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav ul {
                flex-direction: column;
                gap: 0;
            }

            nav a {
                padding: 0.75rem 1rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to My Homepage</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section class="hero">
            <h2>Hello,
                <?php session_start(); echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?> !
            </h2>
            <p>Welcome to my homepage. This is where I share my thoughts and ideas with the world. Explore the content
                and feel free to reach out!</p>
            <a href="logout.php" class="logout-link">Logout</a>
        </section>
    </main>
    <footer>
        &copy; 2026 My App. All rights reserved.
    </footer>

</body>