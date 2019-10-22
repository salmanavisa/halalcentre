<?php 
require_once("config.php");
if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );
    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: home.php");
        }
    }
}
?>


<!DOCTYPE html>


<html lang="en">

<head>
		<?php $this->load->view("partial/hchead.php") ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php $this->load->view("partial/hcheader.php") ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="home.php">Home</a>

        <h4>Masuk ke Pesbuk</h4>
        <p>Belum punya akun? <a href="hcregister.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

            </div>
        </div>
        
        <?php $this->load->view("partial/hcfooter.php") ?>

        </div>
        <!-- END fh5co-page -->

        </div>
        <!-- END fh5co-wrapper -->

        <!-- jQuery -->

        <?php $this->load->view("partial/hcjs.php") ?>

</body>
</html>