<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI KALKULATOR</title>
</head>
<body>
    <?php
    if(isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($_POST['operasi']) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;               
        }
    }
    ?>
    <div class="top">
        <p>PASYA AWAN RIZKY SAPUTRO</p>
        <p>Kelas : XII RPL 1</p>
    </div>
    <div class="kal">
         <h2 class="j">KALKULATOR</h2>
         <form method="post" action="kalkulator.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukan Bilangan Kedua">
            <select class="slt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="hitung" class="tombol">
         </form>
         <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil"> 
        <?php }else{ ?>
            <input type="text" value="0" class="0">
        <?php } ?>   
    </div>
        <p>
    
</body>
</html>