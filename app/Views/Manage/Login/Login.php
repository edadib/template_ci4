
<?php 
    // print_r("<pre>");
    // print_r($_SESSION); 
    // print_r("</pre>");
?>
    <div class="login-box">
        <div class="card">
            <div class="card-header text-center">
                <h3><i><b>Template CI4</b></i></h3>
            </div>
            <div class="card-body">

                <form action="<?php echo base_url('Access/Login_Auth'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="USM ID" name="id" id="id">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-at"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div >
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    