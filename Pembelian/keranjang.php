<?php
    $pageactive = "service";
    session_start();

    include_once("../connectdb.php");

    include_once("navbar.php");

    if(empty($_SESSION["Keranjang"]) OR !isset($_SESSION["Keranjang"])){

        echo "<script> alert('Keranjang Masih Kosong !!!'); </script>";
        echo "<script> location='service.php'; </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service - SISTEM ADMINISTRASI APOTEK</title> 
    <link rel="stylesheet" href="../css/style_tab.css" />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="wrap-tab">
        <div class="tab">
            <h1>Keranjang Belanja</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                        <td>Total</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                <?php $nomer = 1 ?>
                    <?php foreach($_SESSION['Keranjang'] as $id_produk => $jumlah): ?>
                    <?php 
                        $ambil = $koneksi -> query("SELECT * FROM barang WHERE ID_Barang = '$id_produk'");
                        $pecah = $ambil -> fetch_assoc();
                        $total = $pecah['harga_jual'] * $jumlah; 
                    ?>
                    <tr>
                        <td><?php echo $nomer ?></td>
                        <td><?php echo $pecah["nama_barang"]; ?></td>
                        <td> Rp. <?php echo number_format($pecah["harga_jual"]) ?></td>
                        <td><?php echo $jumlah ?></td>
                        <td> Rp. <?php echo number_format($total) ?></td>
                        <td>
                            <center>
                                 <a class="btn btn-danger" href="hapusbelanja.php?id=<?=$id_produk ?>"><i class="bi bi-trash"></i></a>
                            </center>
                        <td>
                    </tr>
                    <?php $nomer++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="service.php" class="btn btn-primary">&laquo; Previous</a>
            <a href="checkout.php" class="bi bi-basket btn btn-primary"> Checkout</a>
    </div>
</body>
</html>