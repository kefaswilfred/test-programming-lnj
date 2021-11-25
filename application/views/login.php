<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Test Programming LNJ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('template/css_login'); ?>
    <style type="text/css">
      .swal2-popup {
        font-size: 1.6rem !important;
      }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <?php $this->load->view('template/header_plain');  ?>
    <!-- Header top area end-->
    <!-- login Start-->
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <form id="form_login" class="adminpro-form">
                    <div class="col-lg-6">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href="#"><img style="height: 30%; width: 30%;" src="<?= base_url() ?>assets/img/logo/transparent.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <div class="login-title">
                                        <h1>Login</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>E-mail</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="email" name="email" id="email" />
                                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Password</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="password" id="password" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                    <p>email : admin@admin.com</p>
                                    <p>pass  : admin</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button type="submit" class="login-button login-button-lg">Log in</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- login End-->
    <!-- Footer Start-->
    <?php  $this->load->view('template/footer'); ?>
    <!-- Footer End-->
    <?php $this->load->view('template/js_login'); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $("#form_login").on('submit', function(e){
                e.preventDefault();
                e.stopPropagation();
                var email = $('#email').val();
                var password = $('#password').val();
                // console.log(password.value);
                // return false;
                if(email == '' || password == ''){
                    Swal.fire({
                        title: 'Username dan Password tidak boleh kosong',
                        text: 'cek kembali Username dan password anda',
                        type: 'warning',
                    });
                    // return false;
                }
                else{
                    $.ajax({
                        url: "<?php echo base_url(); ?>index.php/Login/cek",
                        type: "POST",
                        data: {
                            email: email,
                            password : password
                        },
                        success: function(data){
                            var obj = JSON.parse(data);
                            console.log(obj.is_true);
                            if(obj.is_true == 0){
                                Swal.fire({
                                    title: 'Email atau Password salah',
                                    text: 'cek kembali Email dan password anda',
                                    type: 'error',
                                });
                            }
                            else
                            {
                                window.location.href = "<?php echo site_url('Data'); ?>";
                            } 
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>