<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">
<header class="shadow-sm bg-body position-sticky top-0">
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
            </div>
            
        </div>
    </header>

    <main class="vw-100">
    <div class="container">
    <h3 class="text-center pt-4">Senior: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>

<div>
    
<div class="card shadow-sm p-3 mb-5 bg-body rounded">
        <div class="card-body">
            <h4 class="card-title text-center mb-5 text-dark">TeamLeaders</h4>
            <ul class="d-flex gap-2 flex-wrap justify-content-start">
            <?php
                $dateTime =  date("Y-m-d H:i:s");
                $dateTime = explode(" ", $dateTime);
                $date = $dateTime[0];
                $time = $dateTime[1];
            ?>
                <?php foreach ($data[1]['team'] as $team): ?>
                
                    <?php  if($team->date == $date){  ?>
                        
                        <?php  
                        if($team->time > '09:00:00'){ 
                             ?>

                            <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn border btn-danger py-2 px-3 text-white"><?php echo $team->nom ?></a>

                        <?php 
                        }else{
                             ?>

                            <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn border border-success py-2 px-3 text-white"><?php echo $team->nom ?></a>
                        <?php
                     }; 
                     ?>


                        <?php }else{?>
                        <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn border border-danger py-2 px-3 text-white"><?php echo $team->nom ?></a>
                

                    
            
                <?php }; endforeach;?>
            </ul>
        </div>
    </div>
        <!-- <?php foreach ($data[1]['team'] as $team):?>
        <a class="btn btn-primary py-2 px-3" href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>"> <?php echo $team->nom ?> </a>

        <?php endforeach; ?> -->
   
</div>
    </div>
    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
