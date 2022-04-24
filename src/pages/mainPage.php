<?php
$query = "SELECT imie FROM uczniowie WHERE id_ucznia='" . $_SESSION['id'] . "'";

$result = mysqli_query($connection, $query);
$imie = '';
while ($row = mysqli_fetch_row($result)) {
    $imie = $row[0];
};
?>
<h1 class="w-full text-left text-5xl font-bold py-5">👋 Cześć <?php echo $imie ?></h1>
<div class="rounded-lg py-5 md:p-5 w-full shadow-lg my-2 bg-white">
    <h1 class="text-4xl pl-5 md:p-0 font-semibold">
        Terminarz
    </h1>
    <div class="grid grid-cols-7 mt-3 w-full bg-gray-100 rounded-md">
        <div class="font-semibold text-center h-8 border-r-2">
            <span class="">Pn</span>
        </div>
        <div class="font-semibold text-center h-8 border-r-2">
            <span class="">Wt</span>
        </div>
        <div class="font-semibold text-center h-8 border-r-2">
            <span class="">Śr</span>
        </div>
        <div class="font-semibold text-center h-8 border-r-2">
            <span class="">Czw</span>
        </div>
        <div class="font-semibold text-center h-8 border-r-2">
            <span class="">Pt</span>
        </div>
        <div class="font-semibold text-center h-8 border-r-2">
            <span class="">Sb</span>
        </div>
        <div class="font-semibold text-center h-8">
            <span class="">Nd</span>
        </div>
        <div class="font-normal text-left h-16 bg-gray-200 pl-2 pt-1 hover:bg-gray-300 cursor-pointer text-gray-600 border-r-2 border-gray-300">
            29</div>
        <div class="font-normal text-left h-16 bg-gray-200 pl-2 pt-1 hover:bg-gray-300 cursor-pointer text-gray-600 border-r-2 border-gray-300">
            30</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">1</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">2</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">3</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">4</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer">5</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">6</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">7</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">8</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">9</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">10</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">11</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer">12</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">13</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">14</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">15</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">16</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">17</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">18</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer">19</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">20</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">21</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">22</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">23</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">24
            <div class="w-full flex flex-row h-6">
                <div class="w-1/6 bg-purple-400 h-6 rounded-l-md"></div>
                <div class="w-full bg-purple-200 h-6 mr-2 pl-1.5 text-purple-900 rounded-r-md">Wigilia
                </div>
            </div>
        </div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">25</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer">26</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">27</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">28</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">29</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2">30</div>
        <div class="font-normal text-left h-16 pl-2 pt-1 hover:bg-gray-200 cursor-pointer border-r-2 border-gray-300">31</div>
        <div class="font-normal text-left h-16 bg-gray-200 pl-2 pt-1 hover:bg-gray-300 cursor-pointer text-gray-600 border-r-2 border-gray-300">
            1</div>
        <div class="font-normal text-left h-16 bg-gray-200 pl-2 pt-1 hover:bg-gray-300 cursor-pointer text-gray-600">
            2</div>
    </div>
</div>