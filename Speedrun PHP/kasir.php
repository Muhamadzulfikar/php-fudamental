<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "koneksi.php"; 
        $tampil = mysqli_query($koneksi, "SELECT * FROM tampil");
        $total = 0;
        if(isset($_POST["submit"])){ 
            
            $idbarang = $_POST["idbarang"];

            $stockbarang = mysqli_query($koneksi, "SELECT * FROM stockbarang where idbarang = '$idbarang'");

            $rowstock = mysqli_fetch_assoc($stockbarang);
            $rowidbarang = $rowstock['idbarang'];
            $rownamabarang = $rowstock['namabarang'];
            $rowhargabarang = $rowstock['hargabarang'];
            $jumlah = $_POST["jumlahbarang"];
            $subtotal = $rowhargabarang * $jumlah;

            $inserttampil = "INSERT INTO tampil (idbarang, namabarang, hargabarang, jumlah, subtotal) values ('$rowidbarang', '$rownamabarang', '$rowhargabarang', '$jumlah', '$subtotal')";

            mysqli_query($koneksi, $inserttampil);
            header("location:kasir.php");
        }

        if(isset($_POST["bersihkan"])){
            mysqli_query($koneksi, "DELETE FROM tampil");
            header("location:kasir.php");
        }
    ?>

    <nav class="nav-container">
        <h1>Zulfikar Mart</h1>
    </nav>
    <main class="container">
        
        <form Method="POST">
            <input type="text" name="idbarang" id="" placeholder="Masukan ID Barang">
            <input type="text" name="jumlahbarang" placeholder="Masukan Jumlah Pembelian">
            
            <button type="submit" name="submit">Masukan ke keranjang</button>
            <button type="submit" name="bersihkan">Bersihkan keranjang</button>
        </form>

        <section class="header-item">
        <h1>ID BARANG</h1>
        <h1>NAMA BARANG</h1>
        <h1>HARGA BARANG</h1>
        <h1>JUMLAH BARANG</h1>
        <h1>SUB TOTAL</h1>
        </section>

        <section class="list-item">
            <?php while($rowtampil =  mysqli_fetch_assoc($tampil)): ?>
            <h2><?= $rowtampil["idbarang"] ?></h2>
            <h2><?= $rowtampil["namabarang"] ?></h2>
            <h2><?= $rowtampil["hargabarang"] ?></h2>
            <h2><?= $rowtampil["jumlah"] ?></h2>
            <h2><?= $rowtampil["subtotal"] ?></h2>
            <?php $total += $rowtampil["subtotal"] ?>
            <?php endwhile ?>
        </section>

        <?php
            $kembalian = 0;
            if(isset($_POST["bayar"])){
                $jumlahUang = $_POST["jumlahuang"];
                $kembalian = $total - $jumlahUang;
            }
        ?>

        <section class="total">
            <h1>Total Belanja</h1>
            <h1>Rp.<?= $total ?></h1>
        </section>

       <section class="bayar">
           <button class="btn-primary" onclick="showPopup()">
               Bayar
           </button>
       </section>
       
       <form class="popup" method="POST">
           <h1>Total</h1>
           <h1>Rp.<?= $total ?></h1>

           <h1>Jumlah Uang</h1>
           <input type="text" name="jumlahuang">

           <button type="submit" name="bayar" class="btn-primary dark-blue">Bayar</button>
        </form>
        <button class="close" onclick="closePopup()">x</button>

        <section class="kembalian">
            <h1>Total</h1>
            <h1>Rp.<?= $total ?></h1>
            <h1>Kembalian</h1>
            <h1>Rp.<?= $kembalian ?></h1>
            <h1 class="thanks">Terimakasih Sudah Berbelanja</h1>
            <button class="close2">x</button>
        </section>
    </main>

    @ohohopinfwef
    
    <script src="kasir.js"></script>
</body>
</html>