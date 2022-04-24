<?php
session_start();
if (empty($_SESSION['login']) || $_SESSION['login'] == false) {
    $_SESSION['login'] = false;
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/styles/main.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100 h-screen flex flex-col items-center justify-center">
    <div class="bg-white text-black rounded-lg p-5 shadow-lg">
        <div class="logo w-full h-40 mb-2"></div>
        <form action="./src/modules/checkCredentials.php" method="post">
            <h1 class="text-3xl font-semibold">Logowanie</h1>
            <div class="flex flex-col w-72 my-3 justify-around h-24">
                <input class="w-full bg-gray-100 rounded-lg h-10 pl-5" type="text" name="login" id="" placeholder="Login">
                <input class="w-full bg-gray-100 rounded-lg h-10 pl-5" type="password" name="pass" id="" placeholder="Hasło">
            </div>
            <div class="flex justify-end">
                <input class="p-2 w-28 bg-black text-white font-semibold rounded-full cursor-pointer" type="submit" value="Zaloguj">
            </div>
        </form>
    </div>
</body>

</html>