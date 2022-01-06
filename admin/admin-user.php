<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4">

    <div class="row my-5">

        <?php
        if (isset($_SESSION['Flash_data'])) : ?>
            <div class="flash-data" data-flashdata="<? $_SESSION['Flash_data'] ?>"> </div>

        <?php endif;
        unset($_SESSION['Flash_data']);
        ?>

        <div class="card-content">
            <div class="col-lg ">
                <a href="admin-user-add.php" class="btn btn-success float-end fw-bold">Tambah Data</a>
            </div>

        </div>
        <div class="table">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>NO</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../config.php");
                    $num = 0;
                    $sql = "SELECT username,nama,email FROM user";
                    $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");

                    while ($data = mysqli_fetch_assoc($hasil)) {
                        $num++;
                    ?>
                        <tr>
                            <td><?php echo $num ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="admin-user-edit.php?username=<?php echo $data['username']; ?>">Edit</a>
                                        <a class="dropdown-item btn-del" href="controller/controller-admin-delete-user.php?username=<?php echo $data['username']; ?>">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
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