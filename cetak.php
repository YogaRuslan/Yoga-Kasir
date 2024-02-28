<?php
include("header.php");
?>

<body>
        <div class="p-4 main-content">
          
          <div class="card col-6">
            <div class="card-body">
              <p style="text-align: center">Saoeng Kito</p>
            ============================
        <?php
            include("conn/db_connect.php");

            $sql = $koneksi->query("SELECT * FROM penjualan ORDER BY idPenjualan DESC LIMIT 1");
            while ($data= $sql->fetch_assoc()) {
        ?>
               <p>ID Transaksi : <?php echo $data['idPenjualan']?></p>
                <p>Tanggal Transaksi : <?php echo $data['tanggal']?></p>
                
                <?php
                    $sql2 = $koneksi->query("SELECT * FROM pelanggan WHERE idPelanggan = '".$data['idPenjualan']."'");
                    while ($data2= $sql2->fetch_assoc()) { ?>
                      <p>Nama Pemesan : <?php echo $data2['nama'];?></p>
                      <P>No Meja : <?php echo $data2['noMeja'];?></p>
                    <?php } ?>
                    <tr>
                      ============================
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th class="col-1">Jumlah</th>
                                <th class="col-1">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          // Fetch details for the current Penjualan
                          $sql3 = $koneksi->query("SELECT * FROM detail WHERE idDetail = '" . $data['idPenjualan'] . "'");
                            
                          $totalharga = 0;

                          while ($data3= $sql3->fetch_assoc()) {
                        ?>
                            <tr>
                              <td>
                              <?php
                                $sql4 = $koneksi->query("SELECT * FROM produk WHERE idProduk= '" . $data3['idProduk'] . "' ");
                                while ($data4= $sql4->fetch_assoc()) {
                                    echo $data4['nama'];
                                }
                              ?>
                              </td>
                              <td><?php echo $data3['jumlahProduk']?> Pcs</td>
                              <td>RP.<?php echo number_format($data3['total']) ?></td>
                             
                            </tr>

                            <?php
                              $total_produk = $data3['jumlahProduk'] * $data3['total'];
                              $totalharga += $total_produk;
                            }
                            ?>

                            <tr>
                            <td colspan='2'><strong>Total Harga :</strong></td>
                            <td colspan='2'><strong>RP.<?php echo number_format("$totalharga") ?></strong></td>
                            </tr>
                            

                        </tbody>
                    </table>
                    <?php } ?>
            ============================
            <p style="text-align: center"><?php  echo date('d-m-Y H:i:s'); ?></p>
            ============================
            <p style="text-align: center">Kritik & Saran Whatsapp : 0821-1337-0428</p>
            </div>
          </div>
        </div>
      <script>
        window.print()
      </script>
        
</body>






