<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogađanje</title>
    <link rel="stylesheet" href="style.css">
</head>

<h1>Igra (pogodi broj)</h1>


<form method="post">
    <label for="broj">Upiši jedan broj od 1 do 9:</label>
    <input type="number" id="broj" name="broj" min="1" max="9" required>
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uneseniBroj = intval($_POST["broj"]); 
        $zamisljeniBroj = rand(1, 9); 

        echo "<div class='result'>";
        if ($uneseniBroj == $zamisljeniBroj) {
            echo "<p class='correct'>Pogodak! Zamisljeni broj je $zamisljeniBroj.</p>";
            echo "<button class='button-green'>Pogodak, probaj ponovo!</button>";
        } else {
            echo "<p class='incorrect'>Krivo, probaj ponovno! Zamisljeni broj je: $zamisljeniBroj.</p>";
            echo "<button class='button-red'>Krivo, probaj ponovo</button>";
        }
        echo "</div>";
    } else {
        echo "<button class='button-green'>Pogodak, probaj ponovo!</button>";
    }
    ?>
</form>


 <!-- vjezba 5 - Igra pogodi broj -->

</body>
</html>
