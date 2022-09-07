<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body id="welcome"> 
    <div class="container-fluid">
    <header class="mt-4">
        <div class="logo animate__animated animate__zoomIn"><img src="<?php echo URLROOT ?>/images/logow.png" alt="logo de lear" width="200" height="50"></div>
    </header>
    <div class="mt-7">
        <div class="wel  animate__animated animate__zoomIn">
            <h1 class="">
                    <span></span> <br> EMPLOYEE <br> MANAGEMENT SYSTEM
            </h1>
            <div class="buttons mt-4 d-flex gap-3">
                <a class="btn btn-danger btn-lg" href="<?php echo URLROOT ?>/pages/login">LOGIN &RightArrow;</a>
                <a class="btn btn-danger btn-lg" href="<?php echo URLROOT ?>/pages/badge">POINTAGE</a>
            </div>
        </div>
        <div>
            <img class="position-absolute end-0 h-100 top-0 imgWelcome" src="<?php echo URLROOT ?>/images/o.png" alt="">
        </div>
        
    </div>
    </div>
<?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
