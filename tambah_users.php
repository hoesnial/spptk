<?php
include "config.php";
if(isset($_POST['simpan'])){
    
    $username=$_POST['username'];
    $pass=md5($_POST['pass']);
    $role=$_POST['role'];

	
	//proses simpan
        $sql = "INSERT INTO users VALUES (Null,'$username','$pass','$role')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=users");
        } else {
            echo "Error: " . $conn->error;
        }
    
}
?>

<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="card border-dark">
                <div class="card">
                    <div class="card-header bg-primary text-white border-dark">
                        <strong>Tambah Data Users</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select class="form-control chosen" data-placeholder="Pilih Role" name="role">
                                <option value=""></option>
                                <option value="Pakar">Pakar</option>
                                <option value="Admin">Admin</option>
                                <option value="Pengguna">Pengguna</option>
                            </select>
                        </div>

                        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                        <a class="btn btn-danger" href="?page=users">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

