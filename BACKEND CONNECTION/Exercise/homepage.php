<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [
        'Coding 1 Hour',
        'Breakfast',
        'lunch',
        'Dinner',
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $task = trim($_POST['task'] ?? '');
    $index = isset($_POST['index']) ? (int) $_POST['index'] : -1;

    if ($action === 'add' && $task !== '') {
        $_SESSION['tasks'][] = $task;
    }

    if ($action === 'edit' && $task !== '' && isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index] = $task;
    }

    if ($action === 'delete' && isset($_SESSION['tasks'][$index])) {
        array_splice($_SESSION['tasks'], $index, 1);
    }

    header('Location: homepage.php');
    exit;
}
?>
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

        .todo-app {
            max-width: 420px;
            margin: 0 auto 2rem;
            padding: 1rem;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .todo-form {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .todo-input {
            width: 100%;
            min-width: 0;
            padding: 0.85rem 0.75rem;
            border: 1px solid #d7dbe0;
            border-radius: 4px;
            color: var(--text);
            font: inherit;
        }

        .todo-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(42, 98, 255, 0.14);
            outline: none;
        }

        .todo-button {
            border: 0;
            border-radius: 4px;
            cursor: pointer;
            font: inherit;
            font-weight: 700;
            transition: filter 0.2s ease, transform 0.2s ease;
        }

        .todo-button:hover {
            filter: brightness(0.95);
        }

        .todo-button:active {
            transform: translateY(1px);
        }

        .add-button {
            padding: 0.85rem 0.95rem;
            background: #0d83ff;
            color: white;
        }

        .todo-list {
            display: grid;
            gap: 0.5rem;
        }

        .todo-item {
            display: grid;
            grid-template-columns: 1fr auto auto;
            gap: 0.6rem;
            align-items: center;
            padding: 0.65rem 0.75rem;
            background: #f7f7f7;
            border: 1px solid #d7dbe0;
            border-radius: 4px;
        }

        .todo-title {
            min-width: 0;
            color: #606060;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .edit-form,
        .delete-form {
            margin: 0;
        }

        .edit-button,
        .delete-button {
            min-width: 54px;
            padding: 0.45rem 0.65rem;
        }

        .edit-button {
            background: #ffc107;
            color: #111111;
        }

        .delete-button {
            background: #ee3f5b;
            color: white;
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

            .todo-app {
                max-width: 100%;
            }

            .todo-item {
                grid-template-columns: 1fr;
                align-items: stretch;
            }

            .edit-button,
            .delete-button {
                width: 100%;
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
                <?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?> !
            </h2>
            <p>Welcome to my homepage. This is where I share my thoughts and ideas with the world. Explore the content
                and feel free to reach out!</p>
            <a href="logout.php" class="logout-link">Logout</a>
        </section>

        <section class="todo-app" aria-label="Task list">
            <form class="todo-form" method="post" action="homepage.php">
                <input type="hidden" name="action" value="add">
                <input class="todo-input" type="text" name="task" placeholder="Enter a new task" required>
                <button class="todo-button add-button" type="submit">Add</button>
            </form>

            <div class="todo-list">
                <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
                    <div class="todo-item">
                        <span class="todo-title"><?php echo htmlspecialchars($task); ?></span>
                        <form class="edit-form" method="post" action="homepage.php">
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="index" value="<?php echo $index; ?>">
                            <input type="hidden" name="task" value="<?php echo htmlspecialchars($task); ?>">
                            <button class="todo-button edit-button" type="submit"
                                onclick="const updatedTask = prompt('Edit task', this.form.task.value); if (updatedTask === null || updatedTask.trim() === '') return false; this.form.task.value = updatedTask.trim();">
                                Edit
                            </button>
                        </form>
                        <form class="delete-form" method="post" action="homepage.php">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="index" value="<?php echo $index; ?>">
                            <button class="todo-button delete-button" type="submit">Delete</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        &copy; 2026 My App. All rights reserved.
    </footer>

</body>
