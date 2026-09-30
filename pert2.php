<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  <?php
    $nama_file = "counter.dat";

    if (file_exists($nama_file)) {
      $berkas = fopen($nama_file, "r");
      $pencacah = (integer)trim(fgets($berkas, 255));

      $pencacah++;
      fclose($berkas);
    } 

    else 
      $pencacah = 1;
      $berkas = fopen($nama_file, "w");
      Fputs($berkas, $pencacah);
      fclose($berkas);

      print("Anda pengunjung ke-$pencacah <br>\n");
    
  ?>
  </body>
</html>
