<?php include("admin-header.php"); ?>

<!-- Page Content -->

<div class="container-fluid px-4">
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Edit User </h3>
        <div class="col">
            <table class="table bg-white rounded shadow-lg ">
                <tbody>
                    <tr>
                        <td>
                            <form action="controller/controller-admin-edit-user.php" method="post" class="form-body ">
                                <?php
                                include("../config.php");
                                $username = $_GET['username'];
                                $sql = "SELECT * FROM user where username='$username'";
                                $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");
                                while ($data = mysqli_fetch_assoc($hasil)) {
                                ?>
                                    <label class="form-label">Username</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text fas fa-user"></span>
                                        <input type="text" class="form-control" name="txtUsername" value="<?php echo $data['username']; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="txtNama" value="<?php echo $data['nama']; ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="txtEmail" value="<?php echo $data['email']; ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="psw" name="txtPassword" value="<?php echo $data['password']; ?>">
                                        <input type="checkbox" onclick="myFunction()">Show Password
                                        <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>

                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="admin-user.php" class="btn btn-danger fw-bold">Cancel</a>
                                    </div>
                                <?php
                                }
                                ?>
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

    function myFunction() {
        var x = document.getElementById("psw");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>

</html>