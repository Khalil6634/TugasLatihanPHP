<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $program = array("PHP", "JAVASCRIPT", "HTML", "CSS");
        $cari = "JAVASCRIPT";

        print_r( $program );
        echo"<br/>";

        if (in_array($cari, $program)) {
            echo "pemograman berbasis web $cari";
        } else {
            echo "tidak masuk dalam pemograman dasar web";
        }
    ?>
</body>
</html>