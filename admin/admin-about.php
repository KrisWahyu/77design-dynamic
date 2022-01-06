<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4">
    <div class="row my-5">
        <!-- NOTIF SUKSES -->
        <?php
        if (isset($_SESSION['Flash_data'])) : ?>
            <div class="flash-data" data-flashdata="<? $_SESSION['Flash_data'] ?>"> </div>

        <?php endif;
        unset($_SESSION['Flash_data']);
        ?>
        <h2 class=" mb-3">About </h2>
        <div class="col">
            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <?php
                    include '../config.php';
                    $sqlS1 = "SELECT judul,deskripsi FROM about where section=1";
                    $hasilS1 = mysqli_query($conn, $sqlS1) or exit("Error query: <b>" . $sqlS1 . "</b>.");
                    $dataS1 = mysqli_fetch_assoc($hasilS1);

                    ?>
                    <tr>
                        <td>
                            <form action="controller/controller-about-edit-s1.php" method="POST" class="form-body">
                                <h3 class="fs-4 mb-3">Section 1</h3>
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="txtJudulS1" value="<?php echo $dataS1['judul']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="txtDesS1" rows="3"><?php echo $dataS1['deskripsi']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- ABOUT SECTION 2 -->

            <table class="table bg-white rounded shadow-lg">
                <thead class="thead-dark">
                    <tr>
                        <h3 class="fs-4 mb-3">Section 2</h3>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Images</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../config.php");
                    $num = 0;
                    $sql = "SELECT * FROM `about-img`";
                    $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");

                    while ($data = mysqli_fetch_assoc($hasil)) {
                        $num++;
                    ?>
                        <tr>
                            <td><?php echo $num ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><img width="20%" src="../assets/images/<?php echo $data['file']; ?>" alt=" ">
                                <figcaption class="figure-caption "><?php echo $data['file']; ?></figcaption>
                            </td>
                            <td>
                                <a class="btn btn-danger fw-bold btn-del" href="controller/controller-about-img-del.php?file=<?php echo $data['file']; ?>">Hapus</a>
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
                    <form action="controller/controller-about-img-add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label">Pilih Gambar</label>
                                <input class="form-control" type="file" name="file" class="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Gambar</label>
                                <input class="form-control" type="text" name="txtNama">
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