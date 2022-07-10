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
        Jari-jari:
        <input type="number" name="jari" placeholder="masukkan jari-jari">
        <br> <br>
        <input type="submit" name="volume" value="hitung">
        <br>
       
    </form>
    <?php
    $jari = 0;
    class bola
    {
        function volume($jari)
        {
            $v = 1.33 * 3.14 * $jari * $jari * $jari;
            return $v;
        }
        function l_alas($jari){
            $l_alas=4*3.14*$jari*$jari;
            return $l_alas;
        }
        
    }
    $volume = new bola;
    if (isset($_GET['jari'])) {
        $jari = $_GET['jari'];
    }
    $hasil = $volume->volume($jari);
    $luas = $volume->l_alas($jari)

    ?>
    volume :<input type="number" value="<?php echo $hasil ?>">
    <br> <br>
    luas alas :<input type="number" value="<?php echo $luas ?>">
</body>

</html>