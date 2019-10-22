<html>
    <head>
		<?php $this->load->view("partial/hchead.php") ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php $this->load->view("partial/hcheader.php") ?>

        <!-- end:header-top -->

        <br>
        
        <br>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset=md-1">
                <div class="row">
                    <div class="col-md-5 register-left">  
                        <h3>Join Us</h3>
                        <p>Belum Punya akun?</p>
                        <button type="button" class="btn btn-primary"> About Us</button>
                    </div>
                    <div class="col-md-7 register-right">                   		
                        <h2> Register Here </h2>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" class="form-control" 
                                placeholder="Name">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" 
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control" 
                                    placeholder="Password">
                            </div>
                            <button type="button" class="btn btn-primary">Log In</button>
                             
                            <br>
                            
                        </div>
                    </div>
                </div>
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
