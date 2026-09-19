<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method="POST">
      <input type="number" name="number1">
      <select name="operator">
        <option value="+">+</option>
        <option value="/">/</option>
        <option value="-">-</option>
        <option value="*">x</option>
      </select>
      <input type="number" name="number2">

      <br><br>
      <button type="submit">Jumlahkan</button>
    </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $operator = $_POST["operator"];

    if (!$_POST["number1"] && !$_POST["number2"] && !$_POST["operator"]) {
      echo "Silahkan masukan angka!!";
    }

    $hasil;

    if ($operator == "+") {
      echo "hasil : " . $number1 + $number2 . "<br>";
    } elseif ($operator == "x") {
        echo "hasil : " . $number1 * $number2 . "<br>";
    } elseif ($operator == "-") {
      echo "hasil : " . $number1 - $number2 . "<br>";
    } elseif ($operator == "/") {
      echo "hasil : ". $number1 / $number2 . "<br>";
    } else {
      echo "masukan operator!!";
    }
  }
?>
  </body>
</html>
