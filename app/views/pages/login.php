<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">
<main class="vw-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-5 col-xl-5 mt-5 h-75">
                <div class="card shadow-lg o-hidden border-0 my-5 login">
                    <div class="card-body p-0">
                                <div class="px-5 py-4">
                                
                                    <div class="text-center">
                                        
                                        <!-- <h4 class="text-dark">Login</h4> -->
                                        <img src="<?php echo URLROOT ?>/images/logo.png" alt="" width="220">
                                        <?php if(isset($data[1]["error"])){?>
                                        <div class="text-danger text-center py-1 mb-2"><?php echo $data[1]["error"] ?></div>
                                    <?php } ?>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo URLROOT ?>/UserController/login">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrer votre email" name="email"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Entrer votre mot de passe" name="password"></div>
                                       <button class="btn btn-danger d-block btn-user w-100" type="submit">Login</button>
                                        <div class="d-flex flex-column flex-lg-row">
                                        </div>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="https://www.lear.com/">www.lear.com</a></div>
                                    <!-- <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div> -->
                                </div>
                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
