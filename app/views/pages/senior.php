<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">

    <header class="shadow-sm bg-body position-sticky top-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            
            <a href="<?php echo URLROOT ?>/pages/addjustTeam" class="btn btn-primary">Add Justification</a>
            <a href="<?php echo URLROOT ?>/pages/updateTimeSenior" class="btn btn-primary">Update Time</a>
            <a class="btn btn-primary" href="<?php echo URLROOT ?>/pages/TeamLeaders">TeamLeaders</a>
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
            <!-- <a href="<?php echo URLROOT ?>/UserController/logout" class="btn btn-danger">Logout</a> -->
            </div>
            
        </div>
    </header>

    <main class="vw-100">
    <div class="container">
    <!-- <h3 class="text-center pt-4">Senior: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3> -->

    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <h3 class="text-center">Senior: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
        <div>
        <span class="btn btn-danger">absence</span>
            <span class="btn btn-success">present</span>
            <span class="btn btn-warning">retard</span>
            <span class="btn btn-secondary">Sans poste</span>
            <!-- <span class="btn btn-secondary">justify</span> -->
        </div>
    </div>

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
                        if($team->time > $team->timeTeam){ 
                             ?>

                                <?php if($team->Poste == null){ ?>
                                <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn btn-secondary py-2 px-3 text-white"><?php echo $team->nom ?></a>
                                <?php }else{ ?>

                            <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn btn-warning py-2 px-3 text-white"><?php echo $team->nom ?></a>
                            <?php }?>

                        <?php 
                        }else{?>

                            <?php if($team->Poste == null){ ?>
                                <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn btn-secondary py-2 px-3 text-white"><?php echo $team->nom ?></a>
                            <?php }else{ ?>
                            
                                <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn btn-success py-2 px-3 text-white"><?php echo $team->nom ?></a>
                            <?php } ?>

                            
                        <?php
                     }; 
                     ?>


                        <?php }else{?>


                        <a href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>" class="btn btn-danger py-2 px-3 text-white"><?php echo $team->nom ?></a>
                

                    
            
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
