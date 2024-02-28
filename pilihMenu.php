<?php
include("conn/db_connect.php");
include("header.php");

?>
<body>
    <style>
        .main-content{
            margin-top: 60px;
        }
        .card-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card{
            margin-bottom: 20px;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Pelanggan</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="pilihMenu.php" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="transaksi.php" class="nav-link">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <div class="card-container">
            <?php 
            $sql = $koneksi->query("SELECT * FROM produk");
            while($data=$sql->fetch_assoc()){
                ?>
                <div class="card" style="width: 18rem; margin: 10px;">
                    <?php
                    echo "<img class='card-img-top' src='foto/" . $data['foto'] . "' width= '230' height='250'>"
                    ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama']?></h5>
                        <p class="card-text">Harga : RP.<?php echo number_format($data['harga'])?></p>
                        <p class="card-text">Stok :<?php echo($data['stok'])?></p>
                        <a href="transaksi.php" class="btn btn-md btn-primary float-end">Beli</a>
                    </div>
                </div>
            <?php    
            }
            ?>
        </div>
    </div>
</body>