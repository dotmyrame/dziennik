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
        <div class="container px-5 md:px-12 flex flex-col my-5 text-black">
            <h1 class="w-full text-left text-5xl font-bold py-5"><i class="fa-solid fa-graduation-cap"></i> Oceny</h1>
            <div class="w-full">
                <?php
                $query = "SELECT id_przedmiotu, nazwa FROM przedmioty";
                $topic = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_row($topic)) {
                    $query = "SELECT oceny.ocena, oceny.waga, oceny.data_dodania, nauczyciele.`imię`, nauczyciele.nazwisko FROM oceny INNER JOIN nauczyciele USING(id_nauczyciela) WHERE id_ucznia = '" . $_SESSION['id'] . "' AND id_przedmiotu='" . $row[0] . "' ORDER BY oceny.data_dodania DESC";
                    $grades = mysqli_query($connection, $query);
                    $id = $row[0];

                    echo '<div class="w-full rounded-xl h-24 bg-white shadow-lg mt-5">';
                    echo '<div class="w-full h-full p-8 flex justify-beetwen items-center">';
                    echo '<div class="w-full font-bold text-3xl">';
                    switch ($id) {
                        case 1:
                            echo '<i class="fa-solid fa-book mr-2.5"></i>' . $row[1];
                            break;
                        case 2:
                            echo '<i class="fa-solid fa-calculator mr-2.5"></i>' . $row[1];
                            break;
                        case 3:
                            echo '<i class="fa-solid fa-language mr-2.5"></i>' . $row[1];
                            break;
                        case 4:
                            echo '<i class="fa-solid fa-utensils mr-2.5"></i>' . $row[1];
                            break;
                        case 5:
                            echo '<i class="fa-solid fa-volleyball mr-2.5"></i>' . $row[1];
                            break;
                        case 6:
                            echo '<i class="fa-solid fa-code mr-2.5"></i>' . $row[1];
                            break;
                    }
                    echo '</div>';
                    echo '<div class="flex">';
                    if (!mysqli_num_rows($grades)) {
                        echo '<div class="text-3xl">';
                        echo '-.--';
                        echo '</div>';
                        echo '<div class="text-gray-400 ml-5 text-2xl hover:text-gray-500 cursor-pointer" onclick="dropDown(\'grades-' . $id . '\')">';
                        echo '<i class="fa-solid fa-sort-down"></i>';
                        echo '</div>';
                    } else {
                        $all = 0;
                        $sum = 0;
                        while ($row = mysqli_fetch_row($grades)) {
                            $all += $row[0] * $row[1];
                            $sum += $row[1];
                        }
                        $result = $all / $sum;
                        echo '<div class="text-3xl">';
                        echo round($result, 2);
                        echo '</div>';
                        echo '<div class="text-gray-400 ml-5 text-2xl hover:text-gray-500 cursor-pointer" onclick="dropDown(\'grades-' . $id . '\')">';
                        echo '<i class="fa-solid fa-sort-down"></i>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="mx-3 pt-5 px-8 bg-gray-100 shadow-xl rounded-b-xl flex flex-row justify-left hidden flex-wrap" id="grades-' . $id . '">';
                    if (!mysqli_num_rows($grades)) {
                        echo '<h1 class="text-3xl p-2 text-gray-500 mb-5">Jeszcze nie ma tutaj żadnych ocen.</h1>';
                    } else {
                        mysqli_data_seek($grades, 0);
                        while ($row = mysqli_fetch_row($grades)) {
                            echo '<a class="block w-max bg-white rounded-lg cursor-pointer mr-5 mb-5">';
                            $color = '';
                            switch ($row[0]) {
                                case 1:
                                    $color = 'red';
                                    break;
                                case 2:
                                    $color = 'orange';
                                    break;
                                case 3:
                                    $color = 'yellow';
                                    break;
                                case 4:
                                    $color = 'green';
                                    break;
                                case 5:
                                    $color = 'blue';
                                    break;
                                case 6:
                                    $color = 'pink';
                                    break;
                            }
                            echo '<div class="w-full h-20 flex items-center justify-center text-4xl rounded-t-md font-semibold bg-' . $color . '-100 text-' . $color . '-600">' . $row[0] . '</div>';
                            echo '<div class="container flex items-center justify-around flex-col p-1.5">';
                            echo '<p class="w-max">' . $row[3] . ' ' . $row[4] . '</p>';
                            echo '<p class="w-max"><i class="fa-solid fa-scale-unbalanced mr-1.5"></i>' . $row[1] . '</p>';
                            echo '<p class="w-max">' . date('d-m-Y', strtotime($row[2])) . '</span>';
                            echo '</div>';
                            echo '</a>';
                        }
                    }
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