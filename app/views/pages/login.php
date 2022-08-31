<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="bg-secondary">
<main class="vw-100 vh-100">
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
                                        <div class="mb-3">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div> -->
                                        </div><button class="btn btn-danger d-block btn-user w-100" type="submit">Login</button>
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
    <video class="vd position-absolute top-0 start-0" id="f00fae18-ea11-e70a-d01e-5c4fc7425be9-video" autoplay="" loop="" style="background-image:url(&quot;https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover" __idm_id__="12713985"><source src="https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-transcode.mp4" data-wf-ignore="true"><source src="https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-transcode.webm" data-wf-ignore="true"></video>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
