
<?php 

$idusers=$_GET['id'];

    if(isset($_POST['update'])){
        $pass=$_POST['pass'];


        

        // proses update
        $sql = "UPDATE users SET pass='$pass' WHERE idusers='$idusers'";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=users");
        }
    }

    

    $sql = "SELECT * FROM users WHERE idusers='$idusers'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="card border-dark">
                <div class="card">
                    <div class="card-header bg-primary text-white border-dark">
                        <strong>Update Data Users</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>" maxlength="30" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass" value="<?php echo $row['pass'] ?>" maxlength="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <input type="text" class="form-control" name="role" value="<?php echo $row['role'] ?>" readonly>
                        </div>

                        <input class="btn btn-primary" type="submit" name="update" value="update">
                        <a class="btn btn-danger" href="?page=users">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>