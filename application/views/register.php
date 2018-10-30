<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title> |  Login</title>
        <meta name="Dofody" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="#" name="description" />
        <meta content="Sigosoft" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <script type="text/javascript"><!--
      function checkPasswordMatch() {
    var password = $("#password1").val();
    var confirmPassword = $("#password2").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
//--></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index-2.html" class="text-success">
                                              <!--  <span><img src="assets/images/logo-blue.png" alt="" height="40"></span>-->
                                            </a>
                                        </h2>
                                        <h6 class="text-uppercase text-center font-bold mt-4">Register</h6>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="<?=site_url('Register/insert')?>" method="POST" enctype="multipart/form-data"  class="form-horizontal form-label-left"  >

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="username">Name</label>
                                                    <input class="form-control" type="text" id="username" name="username" required="" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="Email">Email</label>
                                                    <input class="form-control" type="email" id="email" name="email" required="" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="Phone">Phone</label>
                                                    <input class="form-control" type="text" id="phone" name="phone" required="" placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="Gender">Gender</label>
                                                   <input type="radio" name="gender"
                                                    <?php if (isset($gender) && $gender=="female") echo "checked";?>
                                                    value="female">Female
                                                    <input type="radio" name="gender"
                                                    <?php if (isset($gender) && $gender=="male") echo "checked";?>
                                                    value="male">Male
                                                    
                                                </div>
                                            </div>


                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="DOB">Date Of Birth</label>
                                                    <input class="form-control" type="date" id="DOB" name="DOB" required="" placeholder="DOB">
                                                </div>
                                            </div>

                                        <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image"> Image<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="image" class="form-control col-md-7 col-xs-12" name="image" placeholder=" Image" type="file"  ">
                    </div>
                   </div>


                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    
                                                    <label for="password">Create Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Password" name="password1">
                                                </div>
                                            </div>


                                              <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    
                                                    <label for="password"> Confirm Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Password" name="password2" onkeyup="checkPasswordMatch();">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                 <!--   <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Remember me
                                                        </label>
                                                    </div>-->

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Register</button>
                                                </div>
                                            </div>

                                        </form>

                                       

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>