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
        <h2 class=" mb-3">Home </h2>
        <div class="col">
            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <?php
                    include '../config.php';
                    $sqlS1 = "SELECT judul,deskripsi FROM home where section=1";
                    $hasilS1 = mysqli_query($conn, $sqlS1) or exit("Error query: <b>" . $sqlS1 . "</b>.");
                    $dataS1 = mysqli_fetch_assoc($hasilS1);

                    ?>
                    <tr>
                        <td>
                            <form action="controller/controller-home-edit-s1.php" method="POST" class="form-body">
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

            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <?php
                    include '../config.php';
                    $sqlS2 = "SELECT judul,deskripsi FROM home where section=2";
                    $hasilS2 = mysqli_query($conn, $sqlS2) or exit("Error query: <b>" . $sqlS2 . "</b>.");
                    $dataS2 = mysqli_fetch_assoc($hasilS2);
                    ?>
                    <tr>
                        <td>
                            <form action="controller/controller-home-edit-s2.php" method="POST" class="form-body">
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