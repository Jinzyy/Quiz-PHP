<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Quiz 2</title>
    <link rel="stylesheet" href="css/style_php.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
</head>

<body>
    <header>
        <h1>Nota Pemesanan Barang</h1>
    </header>
    <?php
    $namaBarang = $_GET["nama-barang"];
    $hargaBarang = $_GET["harga-barang"];
    $jumlahBarang = $_GET["jumlah-barang"];
    $totalBayar = $hargaBarang * $jumlahBarang;

    function rupiah($totalBayar){ //formater untuk rupiah
	
        $hasil_rupiah = "Rp " . number_format($totalBayar,2,',','.');
        return $hasil_rupiah;
     
    }

    ?>
    <table>
        <tr>
            <td><?php echo "Nama Barang" ?></td>
            <td class="data"><?php echo $namaBarang ?></td>
        </tr>
        <tr>
            <td><?php echo "Harga Barang" ?></td>
            <td class='data'> <?php echo rupiah($hargaBarang) ?></td>
        </tr>
        <tr>
            <td><?php echo "Jumlah" ?></td>
            <td class='data'><?php echo $jumlahBarang ?></td>
        </tr>
        <tr>
            <?php
            if ($totalBayar > 300000) { //total harga dengan diskon 10%
                echo "<td>Diskon</td><td class='data'>" . rupiah($totalBayar * 0.1) . "</td>";        
                echo "<tr><td>Total</td><td class='data'>" . rupiah($totalBayar * 0.9) . "</td></tr>";
            } else if ($totalBayar > 200000) { //total harga dengan diskon 7%
                echo "<td>Diskon</td><td class='data'>" . rupiah($totalBayar * 0.07) . "</td>";     
                echo "<tr><td>Total</td><td class='data'>" . rupiah($totalBayar * 0.93) . "</td></tr>";  
            } else if ($totalBayar > 100000) { //total harga dengan diskon 5%
                echo "<td>Diskon</td><td class='data'>" . rupiah($totalBayar * 0.05) . "</td>"; 
                echo "<tr><td>Total</td><td class='data'>" . rupiah($totalBayar * 0.95) . "</td></tr>";   
            } else { //total harga tanpa diskon
                echo "<td>Diskon</td><td class='data'>Rp 0</td>";
                echo "<tr><td>Total</td class='data'><td class='data'>" . rupiah($totalBayar) . "</td></tr>";
            }
            ?>
        </tr>
    </table>
    <footer>
        <div>
            <h4>Rafael Deandra / 672021177</h4>
            <p>©2023</p>
        </div>
    </footer>
</body>

</html>