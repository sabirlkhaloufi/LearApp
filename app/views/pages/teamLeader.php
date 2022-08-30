<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="">
    <header class="shadow-sm mb-3 bg-body rounded">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            <p class="text-center mt-3">Welcome <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></p>
            <div class="dropdown">
                <div class="dropdown-toggle d-flex gap-2 align-items-center" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img  src="<?php echo URLROOT; ?>/public/images/avatar.svg" alt="" width="50">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo URLROOT ?>/UserController/logout">Logout</a></li>
                </ul>
            </div>
            </div>
            
        </div>
    </header>

    <main class="container">
    <h3 class="text-center">TeamLeader: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
    <div>

    <?php foreach ($data[1]["zones"] as $zone):?>

        <div class="team d-flex mt-5 gap-5">
            <span class="btn btn-primary h-100"><?php echo $zone->designation; ?></span>
            <ul class="d-flex gap-2 flex-wrap">
            <?php
                $dateTime =  date("Y-m-d H:i:s");
                $dateTime = explode(" ", $dateTime);
                $date = $dateTime[0];
            ?>
                <?php foreach ($data[1]["team"] as $team): ?>

                <?php 
                if($team->designation == $zone->designation){
                    if($team->date == $date){
                        echo '<li class="btn btn-success text-white ">'. $team->nom .'</li>';
                    }
                    else{
                        echo '<li class="btn btn-danger text-white ">'. $team->nom .'</li>';
                    }    
                }
                 ?>
                <?php endforeach; ?>

            </ul>
        </div>

    <?php endforeach; ?> 
    </div>
    </main>
</div>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
