<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        panjang :
        <input type="number" name="panjang"><br><br>
        lebar :
        <input type="number" name="lebar"><br><br>
        tinggi :
        <input type="number" name="tinggi"><br><br>
        <input type="submit" name="volume" value="Hitung">
        
        
    </form>
    <?php
      $panjang=0;
      $lebar=0;
      $tinggi=0;
    class volume
    {
        function balok($p, $l, $t)
        {
            $v = $p * $l * $t;
            return $v;
        }

        function luas($p,$l,$t){
            $L=2*($p*$l + $p*$t +$l*$t);
            return $L;
        }
    }
  
    $volume = new volume;
    if (isset($_GET['panjang'])) {
        $panjang = $_GET['panjang'];
        $lebar = $_GET['lebar'];
        $tinggi = $_GET['tinggi'];
    }
    $hasil = $volume->balok($panjang, $lebar, $tinggi);
    $luas = $volume ->luas($panjang, $lebar, $tinggi)
    ?>
    volume :<input type="number" value="<?php echo $hasil ?>">
    <br><br>
    luas alas:<input type="number" value="<?php echo $luas ?>">
</body>

</html>