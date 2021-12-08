<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strona2.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <a href="main.html"><img src="baner.jpg" alt="baner.jpg"></a>
    </header>
    <div id="side">
        <h2>Menu</h2>
        <ul>
            <li><a href="strona1.html">proste dzialania</a></li>
            <li><a href="strona2.php">potegowanie</a></li>
        </ul>
    </div>
    <div id="middle">
        <h2>POTĘGOWANIE</h2>
        <form method="GET">
        Podaj podstawę potęgi: <input type="text" name="l1"><br>
        Podaj wykładnik potęgi: <input type="text" name="l2"><br>
        <input type="submit" value="POTĘGOWANIE">
        </form>
        <?php
        if (isset($_GET['l1']) && isset($_GET['l2'])){
        $liczba1 = $_GET['l1'];
        $liczba2 = $_GET['l2'];
            if ($liczba1 == "" || $liczba2 == ""){
                echo "Wpisz podstawę i wykładnik potęgi.";
            }
            else{
                $wynik = 1;
            for ($i=0; $i<$liczba2; $i++) {
            $wynik = $wynik*$liczba1;
            }
            echo "Wynik działania".$liczba1."<sup>".$liczba2."</sup>: ".$wynik;
            }     
        }
        ?>
        <!-- Dzialajacy kod w JS
        <form>
        Podaj podstawę potęgi: <input type="number" id="php1"><br>
        Podaj dodatni, całkowity wykładnik potęgi: <input type="number" id="php2"><br>
    </form>
    <button id="button">POTĘGOWANIE</button> -->
    <p id="p1"></p>
    </div>
    <!-- Dzialajacy kod w JS -->
    <!-- <script>
        document.getElementById("button").addEventListener("click", function(){
            var a = document.getElementById("php1").value;
            var b = document.getElementById("php2").value;
            if (a == "") document.getElementById("p1").innerHTML = "Wpisz podstawę i wykładnik potęgi";
            else if (b == "") document.getElementById("p1").innerHTML = "Wpisz podstawę i wykładnik potęgi";
            else {
                var a = parseInt(document.getElementById("php1").value);
                var b = parseInt(document.getElementById("php2").value); 
                if (b<0){
                    document.getElementById("p1").innerHTML = "Wykładnik potęgi musi być dodany";
                }
                else{
                    var wynik = Math.pow(a, b)
                    document.getElementById("p1").innerHTML = "Wynik działania wynosi: "+wynik;
                }
            }
        })
    </script> -->
</body>
</html>