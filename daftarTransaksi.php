<?php
include("header.php");
?>
<style>
    #main-content {
        margin-top: 40px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Kasir</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="pilihMenu.php" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="transaksi.php" class="nav-link">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-4" id="main-content">
        <a href="transaksi.php" class="btn btn-md btn-primary float-end">Tambah Transaksi</a>
        <div class="card mt-5">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Pemesanan</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include("conn/db_connect.php");

                            $sql = $koneksi->query("SELECT * FROM penjualan ORDER BY idPenjualan DESC LIMIT 1");
                            while ($data = $sql->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $data['idPenjualan']?></td>
                                    <td><?php echo $data['tanggal']?></td>
                                    <td>
                                        <?php
                                        $sql2 = $koneksi->query("SELECT * FROM pelanggan WHERE idPelanggan = '". $data['idPenjualan']."'");
                                        while ($data2 = $sql2->fetch_assoc() ){
                                            echo $data2['nama'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Produk</th>
                                                    <th class="col-1">Jumlah</th>
                                                    <th class="col-1">Harga</th>
                                                    <th class="col-1">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql3 = $koneksi->query("SELECT * FROM detail WHERE idDetail = '" . $data['idPenjualan'] . "' ");

                                                $totalharga = 0;
                                                while($data3 = $sql3->fetch_assoc()){
                                                   ?>
                                                   <tr>
                                                        <td>
                                                            <?php
                                                            $sql4 =$koneksi->query("SELECT * FROM produk WHERE idProduk = '" . $data3['idProduk'] . "' ");
                                                            while ($data4 = $sql4->fetch_assoc()){
                                                                echo $data4['nama'];
                                                            }
                                                            ?>
                                                        </td>
                                                            <td><?php echo $data3['jumlahProduk']?> Pcs</td>
                                                            <td>RP.<?php echo number_format($data3['total']) ?></td>
                                                            <td><?php echo"<a href='hapusMenu.php?id=$data3[idPenjualan]' class='btn btn-sm btn-danger'>Hapus</a>" ?></td>
                                                   </tr>
                                                   <?php
                                                        $totalproduk = $data3['jumlahProduk'] * $data3['total'];
                                                        $totalharga += $totalproduk;
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="2"><strong>Total Harga : </strong></td>
                                                    <td colspan="2"><strong>Rp. <?php echo number_format("$totalharga") ?> </strong></td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                        <a href="cetak.php" class="btn btn-md btn-success float-end">Cetak Transaksi</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>