<div class="row well">
    <div class="col-md-4">
        <div class="card well">
            <div class="card-header">
                <form action="" class="form-signin" method="post"> 
                <h3 class="">Daftar Akun</h3>
                   <div class="card-body">
                    
                        <form action="" method="post">
                            <!-- <div class="mb-3 mt-3">
                                <label for="" class="form-label">ID</label>
                                <input type="number" name="id" class="form-control" require readonly>
                            </div> -->
                            <div class="mb-3 mt-3">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="username" class="form-control" require autofocus>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" require autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level <span style="color: red;">*</span></label>
                                <select name="level" id="level" class="form-control">
                                    <?php if($data['level']=="Admin"){
                                        ?>
                                        <option value="">Pilih Level</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Petugas">Petugas</option>
                                    <?php 
                                    } else {
                                        ?>
                                        <option value="">Pilih Level</option>  
                                        <option value="Petugas">Petugas</option>
                                        <option value="Admin">Admin</option>
                                    <?php }?>
                                </select>
                            </div>
                            <br>
                            <button name="daftar" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
                include '../conn/db_connect.php';
                    if(isset($_POST['daftar'])){
                        $password = md5($_POST['password']);
                        $query = mysqli_query($koneksi, "INSERT INTO user VALUES ('".$_POST['id']."','".$_POST['username']."','".$password."','".$_POST['level']."')");
                        
                        if($query){
                            echo "<script>alert('Berhasil Mendaftar Akun')</script>";
                            header("location: index.php?page=user");
                        }
                    }
                ?>