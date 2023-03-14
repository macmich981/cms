<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/jquery.datetimepicker.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <header>
            <div class="row">
                <div class="text-center">
                    <h1>My blog</h1>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-dark">
            <ul class="nav m-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <?php if (Auth::isLoggedIn()): ?>
                    <li class="nav-item"><a class="nav-link" href="/admin">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>
                <?php endif; ?>

                <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
            </ul>
        </nav>
        <main>
