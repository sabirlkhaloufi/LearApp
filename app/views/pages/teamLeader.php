<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">
    <header class="shadow-sm bg-body position-sticky top-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            <p class="text-center mt-3"><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></p>
            <div class="dropdown">
                <div class="dropdown-toggle d-flex gap-2 align-items-center" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img  src="<?php echo URLROOT; ?>/public/images/avatar.svg" alt="" width="50">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo URLROOT ?>/UserController/logout">Logout</a></li>
                </ul>
            </div>
            <a href="<?php echo URLROOT ?>/pages/updateTime" class="btn btn-primary">Update Time</a>
            <!-- <a href="<?php echo URLROOT ?>/UserController/logout" class="btn btn-danger">Logout</a> -->
            </div>
            
        </div>
    </header>

    <main class="vw-100">
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <h3 class="text-center">TeamLeader: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
        <div>
            <span class="btn border-danger">absence</span>
            <span class="btn border-success">present</span>
            <span class="btn btn-danger">rotart</span>
            <span class="btn btn-secondary">justify</span>
        </div>
    </div>
    <div class="d-flex gap-2 flex-wrap mt-5 justify-content-center align-items-center">

    <?php foreach ($data[1]["zones"] as $zone):?>
        
    <div class="card shadow-sm p-3 mb-5 bg-body rounded">
        <div class="card-body" style="width: 18rem;">
            <h4 class="card-title text-center mb-3 text-dark"><?php echo $zone->designation; ?></h4>
            <ul class="d-flex gap-2 flex-wrap justify-content-start">
            <?php
                $dateTime =  date("Y-m-d H:i:s");
                $dateTime = explode(" ", $dateTime);
                $date = $dateTime[0];
                $time = $dateTime[1];
            ?>
                <?php foreach ($data[1]["team"] as $team): ?>

                <?php 
                if($team->designation == $zone->designation){
                    if($team->date == $date){

                        if($team->time > $zone->time){
                            echo '<li class="btn btn-danger py-2 px-3 text-white">'. $team->nom .'</li>';
                        }
                        else{
                            echo '<li class="border border-success py-2 px-3 text-white">'. $team->nom .'</li>';
                        }
                        
                    }
                    else{
                        echo '<li class="border border-danger py-2 px-3 text-white">'. $team->nom .'</li>';
                    }    
                }
                 ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <?php endforeach; ?> 
    </div>


    </main>
</div>
<!-- <img class="vd" src="<?php echo URLROOT ?>/images/logo.png" alt=""> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
