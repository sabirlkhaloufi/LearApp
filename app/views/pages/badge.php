<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="">

    <main class="container vh-100 d-flex flex-column justify-content-center align-items-center">

    <h2>welcome</h2>
    
    <form action="<?php echo URLROOT ?>/UserController/badge" method="POST">
  <div class="mb-3">
    <input type="text" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" name="code">
  </div>

  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </main>
</div>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
