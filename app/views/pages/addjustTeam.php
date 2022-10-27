<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">
<header class="shadow-sm bg-body position-sticky top-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            
            <a href="<?php echo URLROOT ?>/pages/addjustTeam" class="btn btn-primary">Add Justification</a>
            <a class="btn btn-primary" href="<?php echo URLROOT ?>/pages/TeamLeaders">TeamLeaders</a>
            <a class="btn btn-primary" href="<?php echo URLROOT ?>/pages/operateursSenior">Operateurs</a>
            <a class="btn btn-primary" href="<?php echo URLROOT ?>/pages/zones">zones</a>
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

    <?php
                $dateTime =  date("Y-m-d H:i:s");
                $dateTime = explode(" ", $dateTime);
                $date = $dateTime[0];
                $time = $dateTime[1];
            ?>

    <main class=" vw-100">
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <a href="<?php echo URLROOT ?>/pages/Senior" class="btn btn-primary">Retour</a>
        <h3 class="text-center">Senior: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
    </div>
    <div class="d-flex gap-2 flex-wrap mt-5 justify-content-center align-items-center">


    <div class="card shadow-sm p-3 mb-5 bg-body rounded w-50">
        <div class="card-body ">
        <form action="<?php echo URLROOT ?>/SeniorController/addJustification" method="POST">
            <div class="mb-3">
                <select name="id" class="form-control form-control-user w-100">
                    <?php foreach ($data[1]["TeamLeaders"] as $op): ?>
                        <?php if($op->date != $date){?>
                    <option value="<?php echo $op->id ?>"><?php echo $op->Matricule ?></option>
                    <?php } ?>
                    <?php endforeach; ?>
                </select>
                <select name="justification" id="" class="form-control form-control-user w-100 mt-3">
                    <?php foreach ($data[2]["just"] as $op): ?>
                    <option value="<?php echo $op->justification ?>"><?php echo $op->justification ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <textarea class="form-control form-control-user w-100 mt-2" name="justification" id="" cols="15" rows="4"></textarea> -->
            <!-- <input class="form-control form-control-user w-100 mt-2" type="time" id="exampleInputPassword" placeholder="Entrer votre code" name="time"> -->
        </div>
            <button class="btn btn-danger d-block btn-user w-100" type="submit">add</button>
        </form>
        </div>
    </div>

    </div>


    </main>
</div>
<!-- <img class="vd" src="<?php echo URLROOT ?>/images/logo.png" alt=""> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
