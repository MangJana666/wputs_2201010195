<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">List User</h5>
                            <h2 class="card-title">Total Daftar Mahasiswa <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMHS");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area h-auto">
                        <div class="container konten">
                            <?php
                            $id_mhs = $_GET["p1"];
                            $sql = "SELECT * FROM tbMHS tu WHERE tu.id_mhs='$id_mhs';";
                            $hasil = mysqli_query($cnn, $sql);
                            if (mysqli_num_rows($hasil) > 0) {
                                $h = mysqli_fetch_assoc($hasil);
                            ?>
                                <h3>Ubah Data User <?= $h["nama"] ?></h3>
                                <form method="POST" action="./dtmhs.php">
                                    <input type="hidden" name="act" value="destroy">
                                    <input type="hidden" name="id_mhs" value="<?= $id_mhs ?>">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
                                        <label for="floatingInput">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="NIM" value="<?= $h["nim"] ?>">
                                        <label for="floatingInput">NIM</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Prodi" value="<?= $h["prodi"] ?>">
                                        <label for="floatingInput">Prodi</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" name="txTGL" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" value="<?= $h["tgl_lahir"] ?>">
                                        <label for="floatingInput">Tanggal Lahir</label>
                                    </div>
                                    <div class="form-check ms-4">
                                        <input class="form-check-input" type="radio" name="txJK" id="exampleRadios1" value="L" value="<?= $h["jk"] ?>" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Laki - Laki
                                        </label>
                                    </div>
                                    <div class="form-check  ms-4">
                                        <input class="form-check-input" type="radio" name="txJK" id="exampleRadios2" value="P" value="<?= $h["jk"] ?>">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        &nbsp;
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Hapus Data User </button>
                                    <a href="./dtmhs.php" class="btn btn-secondary"> Batal </a>
                                </form>

                        </div>
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                            } else {
                                echo "<script>window.location.href='./dtmhs.php';</script>";
                            }
?>