<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4">
    <!-- NOTIF SUKSES -->
    <?php
    if (isset($_SESSION['Flash_data'])) : ?>
        <div class="flash-data" data-flashdata="<? $_SESSION['Flash_data'] ?>"> </div>

    <?php endif;
    unset($_SESSION['Flash_data']);
    ?>
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Daftar Team </h3>
        <div class="col">
            <table class="table bg-white rounded shadow-lg">
                <thead class="thead-dark">
                    <tr>
                        <h3 class="fs-4 mb-3">Section 1</h3>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Job</th>
                        <th>Images</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../config.php");
                    $num = 0;
                    $sql = "SELECT * FROM `team-img`";
                    $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");

                    while ($data = mysqli_fetch_assoc($hasil)) {
                        $num++;
                    ?>
                        <tr>
                            <td><?php echo $num ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['job']; ?></td>
                            <td><img width="20%" class="row my-5 rounded-circle z-depth-2" src="../assets/images/<?php echo $data['file']; ?>" alt=" ">
                                <figcaption class="figure-caption "><?php echo $data['file']; ?></figcaption>
                            </td>
                            <td>
                                <a class="btn btn-danger fw-bold btn-del" href="controller/controller-team-img-del.php?file=<?php echo $data['file']; ?>">Hapus</a>
        </div>
        </td>
        </tr>
    <?php
                    }
    ?>
    </tbody>
    </table>

    <!-- ABOUT IMG INS -->
    <table class="table bg-white rounded shadow-lg ">
        <tbody>
            <tr>
                <td>
                    <form action="controller/controller-team-img-add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label">Pilih Gambar</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama </label>
                                <input class="form-control" type="text" name="txtNama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job </label>
                                <input class="form-control" type="text" name="txtJob">
                            </div>
                            <div class="mb-3">
                                <input class="btn btn-primary" type="submit" value="Kirim Gambar" name="submit">
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table bg-white rounded shadow-lg ">
        <tbody>
            <?php
            include '../config.php';
            $sqlS2 = "SELECT judul,deskripsi FROM team where section=2";
            $hasilS2 = mysqli_query($conn, $sqlS2) or exit("Error query: <b>" . $sqlS2 . "</b>.");
            $dataS2 = mysqli_fetch_assoc($hasilS2);
            ?>
            <tr>
                <td>
                    <form action="controller/controller-team-edit-s2.php" method="POST" class="form-body">
                        <h3 class="fs-4 mb-3">Section 2</h3>
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="txtJudulS2" value="<?php echo $dataS2['judul']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="txtDesS2" rows="3"><?php echo $dataS2['deskripsi']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    </div>
</div>

</div>
</div>
</div>
</div>

<!--toggle&footer -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };

    $(document).ready(function() {
        $('.btn-del').click(function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                })
                .then((result) => {
                    if (result.value) {
                        document.location.href = href;
                    }
                })
        })

    })

    const flashdata = $('.flash-data').data('flashdata')
    if (flashdata) {
        swal.fire({
            icon: 'success',
            title: 'Success',
            showCancelButton: false,
            showConfirmButton: false,
            timer: 1900,
            timerProgressBar: true,
        })
    }
</script>
</body>

</html>