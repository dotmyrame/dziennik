<?php
session_start();
if ($_SESSION['login'] == false || empty($_SESSION['login'])) {
    $_SESSION['login'] == false;
    header('Location: login.php');
}
require_once('./src/libs/mysqli.php');
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./src/javascript/dropDown.js"></script>
</head>

<body class="font-sans bg-gray-100">
    <main class="w-full flex flex-col items-center">
        <?php
        include('./src/pages/header.php');
        ?>
        <div class="container px-4 w-full md:px-12 flex flex-col my-5 text-black">
            <h1 class="w-full text-left text-5xl font-bold py-5"><i class="fa-solid fa-users mr-1.5"></i>Klasy</h1>
            <div class="w-full flex justify-center md:justify-start flex-wrap flex-row space-x-4">
                <?php
                $query = "SELECT klasy.nazwa, count(uczniowie.id_klasy), nauczyciele.`imię`, nauczyciele.nazwisko FROM klasy INNER JOIN nauczyciele USING(id_nauczyciela) INNER JOIN uczniowie USING(id_klasy) GROUP BY uczniowie.id_klasy ORDER BY klasy.nazwa";
                $query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_row($query)) {
                    echo '<div class="p-5 bg-white rounded-lg mb-4 shadow-md">';
                    echo '<div class="w-36 h-36 flex text-5xl text-gray-100 rounded-full font-bold items-center justify-center klasa">';
                    echo $row[0];
                    echo '</div>';
                    echo '<div class="flex flex-col text-sm md:text-md items-center mt-2">';
                    echo '<p><i class="fa-solid fa-users mr-1.5"></i>' . $row[1] . " uczniów";
                    echo '<p><i class="fa-solid fa-chalkboard-user mr-1.5"></i>' . $row[2] . ' ' . $row[3];
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <?php
        include('./src/pages/footer.php');
        ?>
    </main>
    <script src="https://kit.fontawesome.com/1fbea9334a.js" crossorigin="anonymous"></script>
</body>

</html>