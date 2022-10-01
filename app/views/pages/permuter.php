<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">
<header class="shadow-sm bg-body position-sticky top-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            
            <a href="<?php echo URLROOT ?>/pages/addjust" class="btn btn-primary">Add Justification</a>
            <a class="btn btn-primary" href="<?php echo URLROOT ?>/pages/operateurs">Operateurs</a>
            <p class="text-center mt-3"><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></p>
            <div class="dropdown">
                <div class="dropdown-toggle d-flex gap-2 align-items-center" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img  src="<?php echo URLROOT; ?>/public/images/avatar.svg" alt="" width="50">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo URLROOT ?>/UserController/logout">Logout</a></li>
                </ul>
            </div>
            <!-- <a href="<?php echo URLROOT ?>/UserController/logout" class="btn btn-danger">Logout</a> -->
            </div>
            
        </div>
    </header>

    <main class=" vw-100">
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <a href="<?php echo URLROOT ?>/pages/teamLeader" class="btn btn-primary">Retour</a>
        <h3 class="text-center">teamLeader: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
    </div>
    <div class="d-flex gap-2 flex-wrap mt-5 justify-content-center align-items-center">


    <div class="card shadow-sm p-3 mb-5 bg-body rounded w-50">
        <div class="card-body ">
        <form action="<?php echo URLROOT ?>/TeamLeaderController/permuterOper" method="POST">
            <div class="mb-3">
                <select name="oper1" class="form-control form-control-user w-100">
                    <?php foreach ($data[1]["operateurs"] as $op): ?>
                    <option value="<?php echo $op->id.",".$op->Poste ?>"><?php echo $op->nom." ".$op->prenom ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <textarea class="form-control form-control-user w-100 mt-2" name="justification" id="" cols="15" rows="4"></textarea> -->
            <!-- <input class="form-control form-control-user w-100 mt-2" type="time" id="exampleInputPassword" placeholder="Entrer votre code" name="time"> -->
        </div>

        <div class="mb-3">
                <select name="oper2" class="form-control form-control-user w-100">
                    <?php foreach ($data[1]["operateurs"] as $op): ?>
                    <option value="<?php echo $op->id.",".$op->Poste ?>"><?php echo $op->nom." ".$op->prenom ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <textarea class="form-control form-control-user w-100 mt-2" name="justification" id="" cols="15" rows="4"></textarea> -->
            <!-- <input class="form-control form-control-user w-100 mt-2" type="time" id="exampleInputPassword" placeholder="Entrer votre code" name="time"> -->
        </div>
            <button class="btn btn-danger d-block btn-user w-100" type="submit">save</button>
        </form>
        </div>
    </div>

    </div>


    </main>
</div>
<!-- <img class="vd" src="<?php echo URLROOT ?>/images/logo.png" alt=""> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
