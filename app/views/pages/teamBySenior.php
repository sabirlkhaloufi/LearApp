<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="">
    <header class="shadow-sm bg-body position-sticky top-0">
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

    <main class="vh-100 vw-100">
    <h3 class="text-center pt-4">TeamLeader: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
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
            ?>
                <?php foreach ($data[1]["team"] as $team): ?>

                <?php 
                if($team->designation == $zone->designation){
                    if($team->date == $date){
                        echo '<li class="border border-success py-2 px-3 text-white">'. $team->nom .'</li>';
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
<video class="vd position-fixed top-0 start-0" id="f00fae18-ea11-e70a-d01e-5c4fc7425be9-video" autoplay="" loop="" style="background-image:url(&quot;https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover" __idm_id__="12713985"><source src="https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-transcode.mp4" data-wf-ignore="true"><source src="https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-transcode.webm" data-wf-ignore="true"></video>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
