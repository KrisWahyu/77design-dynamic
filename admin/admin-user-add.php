<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4">
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Tambah User </h3>
        <div class="col">
            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <tr>
                        <td>
                            <form action="controller/controller-admin-add-user.php" method="post" class="form-body ">
                                <label class="form-label">Username</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text fas fa-user"></span>
                                    <input type="text" class="form-control" name="txtUsername">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="txtNama">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="txtEmail">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="txtPassword">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Repeat Password</label>
                                    <input type="password" class="form-control" name="txtRetypepass">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="admin-user.php" class="btn btn-danger fw-bold">Cancel</a>
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
</div>
</div>

<!--toggle&footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
</body>

</html>