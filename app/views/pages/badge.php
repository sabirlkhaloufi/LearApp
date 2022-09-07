<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">

    <main class="d-flex flex-column justify-content-center align-items-center">

    <h2>POINTAGE</h2>
    
    <form action="<?php echo URLROOT ?>/UserController/badge" method="POST">
    <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Entrer votre code" name="code"></div>
                                       <button class="btn btn-danger d-block btn-user w-100" type="submit">Pointer</button>
</form>
<div class="text-center"><a class="small" href="<?php echo URLROOT ?>">Home</a></div>

    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
