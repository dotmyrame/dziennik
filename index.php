<?php
session_start();
if ($_SESSION['login'] == false || empty($_SESSION['login'])) {
    $_SESSION['login'] == false;
    header('Location: login.php');
}

require_once('./src/libs/mysqli.php')
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☄️ Meteor - Dziennik Szkolny</title>
    <link rel="stylesheet" href="./src/styles/main.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">
    <main class="w-full flex flex-col items-center">
        <?php
        include('./src/pages/header.php');
        ?>
        <div class="container px-5 md:px-12 flex lg:flex-row flex-col my-5">
            <div class="w-full flex flex-col items-center lg:mr-5">
                <?php
                require('./src/pages/mainPage.php');
                ?>
            </div>
            <?php
            require('./src/pages/prawyPanel.php');
            ?>
        </div>
        <?php
        include('./src/pages/footer.php');
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fbea9334a.js" crossorigin="anonymous"></script>
</body>

</html>