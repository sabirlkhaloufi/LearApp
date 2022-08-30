<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="bg-secondary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-5 col-xl-5 mt-5">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Login</h4>
                                        <?php if(isset($data[1]["error"])){?>
                                        <div class="text-danger text-center py-1 mb-2"><?php echo $data[1]["error"] ?></div>
                                    <?php } ?>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo URLROOT ?>/UserController/login">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrer votre email" name="email"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Entrer votre mot de passe" name="password"></div>
                                        <div class="mb-3">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div> -->
                                        </div><button class="btn btn-danger d-block btn-user w-100" type="submit">Login</button>
                                        <div class="d-flex flex-column flex-lg-row">
                                        </div>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="<?php echo URLROOT ?>/pages/register">Create an Account!</a></div>
                                    <!-- <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div> -->
                                </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
