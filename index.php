<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $program = array('bobo', 'doraemon', 'spiderman');
        list($Majalah, $komik, $film) = $program;

        echo "jenis buku & hiburan";
        echo "<br/>";
        echo "Cerpen : $Majalah";
        echo "<br/>";
        echo "Cerita bergambar : $komik";
        echo "<br/>";
        echo "bioskop : $film";

        $arr = array("test","test","test","test","test","test");
        $isArr = is_array($arr);

        if ($isArr == false) {
            echo "bukan array";
        }

        echo "<br/>";
        echo "is array";
    ?>
</body>
</html>