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
            ?>

    <main class="vw-100 vh-100">
    <!-- <h3 class="text-center pt-4">TeamLeader: <?php echo $data[1]['nom']->nom." ".$data[1]['nom']->prenom ?></h3> -->

    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <h3 class="text-center">TeamLeader: <?php echo $data[1]['nom']->nom." ".$data[1]['nom']->prenom ?>
      
        </h3>
        <div>
            <span class="btn btn-danger">absence</span>
            <span class="btn btn-success">present</span>
            <span class="btn btn-warning">retard</span>
            <span class="btn btn-secondary">Sans poste</span>
            <!-- <span class="btn btn-secondary">justify</span> -->
        </div>

        
        
    </div>

    <?php if($data[1]['nom']->date != $date){ ?>
      <div class="card shadow-sm p-3 mt-2 mb-2 bg-body rounded container-fluid w-50">
        <h4>Justification :  
        <?php if($data[1]['nom']->date_just == $date){ ?>
          <?php echo $data[1]['nom']->justification  ?>
          <?php }else{ ?>
            <?php echo 'Non justifier'; ?>
            <?php  } ?>
            </h4>
        </div>

    <?php } ?>
    

    
    <div class="d-flex gap-2 flex-wrap mt-5 justify-content-center align-items-center">

    <?php foreach ($data[1]["zones"] as $zone):?>

    <div class="card shadow-sm p-3 mb-5 bg-body rounded">
        <div class="card-body" style="width: 18rem;">
            <h4 class="card-title text-center mb-3 text-dark"><?php echo $zone->designation; ?></h4>
            <ul class="d-flex gap-2 flex-wrap justify-content-start">
            
                <?php foreach ($data[1]["team"] as $team): ?>

                    <?php if($team->designation == $zone->designation){ ?>
                    <?php if($team->date == $date){ ?>

                        <?php if($team->time > $zone->time){ ?>
                            <li class="btn btn-warning py-2 px-3 text-white"><?php echo $team->Matricule ?></li>
                        <?php }else{?>
                            <?php if($team->Poste == null){ ?>
                                <li class="btn btn-secondary py-2 px-3 text-white"><?php echo $team->Matricule ?></li>
                            <?php }else{ ?>
                            
                                <li class="btn btn-success py-2 px-3 text-white"><?php echo $team->Matricule ?></li>
                            <?php } ?>
                        <?php } ?>
                        
                    <?php }else{ ?>
                        <?php if($team->date_jus == $date){ ?>
                            <li class="btn btn-danger py-2 px-3 text-white" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $team->id ?>"><?php echo $team->Matricule ?></li>
                            
                            <div class="modal fade mt-7" id="Modal<?php echo $team->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Justification</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body text-dark h5">
                                    <?php echo $team->justification ?>
                                    <p class="mt-2">Poste : <?php echo $team->Poste ?></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php }else{ ?>
                            <li class="btn btn-danger py-2 px-3 text-white" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $team->id ?>"><?php echo $team->Matricule ?></li>
                            
                            <div class="modal fade mt-7" id="Modal<?php echo $team->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Justification</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body text-dark h5">
                                    Non justifier
                                    <p class="mt-2">Poste : <?php echo $team->Poste ?></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>
                    <?php } ?>   
                <?php } ?>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>

    <?php endforeach; ?> 
    </div>


    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
