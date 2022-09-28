<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">
<header class="shadow-sm bg-body position-sticky top-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            
            <a href="<?php echo URLROOT ?>/pages/addjust" class="btn btn-primary">Add Justification</a>
            <a href="<?php echo URLROOT ?>/pages/updateTime" class="btn btn-primary">Update Time</a>
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

    <main class="vw-100 vh-100">
        <div class="pt-4 d-flex justify-content-between px-5">
        <button id="export_button" class="btn btn-primary ">Imprimer</button>
        <div>
        <a href="<?php echo URLROOT ?>/pages/permuter" class="btn btn-primary invisible-è">permuter</a>
        <!-- <a href="<?php echo URLROOT ?>/pages/AjouterOp" class="btn btn-primary invisible-è">Ajouter</a> -->
        

        </div>
        </div>

        <?php
                $dateTime =  date("Y-m-d H:i:s");
                $dateTime = explode(" ", $dateTime);
                $date = $dateTime[0];
                $time = $dateTime[1];
            ?>
    
    <div class="table-responsive container-fluid pt-5">
            <table class="table bg-white" id="data">
                <thead class="bg-table text-dark">
                    <tr>
                        <!-- <th>id</th> -->
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Poste</th>
                        <th>Matricule</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php foreach ($data[1]["operateurs"] as $oper): ?>
                    <tr>
                        <!-- <td data-title="id">{{data.id}}</td> -->
                        <td><?php echo  $oper->nom ?></td>
                        <td><?php echo  $oper->prenom ?></td>
                        <td><?php echo  $oper->Poste ?></td>
                        <td><?php echo  $oper->Matricule ?></td>
                        <td><a href="<?php echo URLROOT?>/TeamLeaderController/ecraser/<?php echo $oper->id ?>" class="btn btn-success btn-sm">Ecraser</a></td>
                        <td>
                        <?php if($oper->date == $date){ ?>

<?php if($oper->time > "06:15:00" && $oper->time < "13:45:00"
|| $oper->time > "14:15:00" && $oper->time < "21:45:00"
|| $oper->time > "22:15:00" && $oper->time < "05:45:00"){ ?>

    <li class="btn btn-warning py-2 px-3 text-white">Retard</li>

<?php }else{?>
    <?php if($oper->Poste == null){ ?>

        <li class="btn btn-secondary py-2 px-3 text-white">sans poste</li>

    <?php }else{ ?>

        <li class="btn btn-success py-2 px-3 text-white">present</li>

    <?php } ?>
<?php } ?>

<?php }


else{ ?>
<?php if($oper->date_jus == $date){ ?>
    <li class="btn btn-danger py-2 px-3 text-white" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $oper->id ?>">Absent</li>
    
    <div class="modal fade mt-7" id="Modal<?php echo $oper->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Justification</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-dark h5">
            <?php echo $oper->justification ?>
            <p class="mt-2">Poste : <?php echo $oper->Poste ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<?php }else{ ?>
    <li class="btn btn-danger py-2 px-3 text-white" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $oper->id ?>">Absent</li>
    
    <div class="modal fade mt-7" id="Modal<?php echo $oper->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Justification</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-dark h5">
            Non justifier
            <p class="mt-2">Poste : <?php echo $oper->Poste ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
<?php } ?> 
                        </td>
                        <td>
                        <!-- <a href="<?php echo URLROOT ?>/op$operLeaderController/updateOp/<?php echo $oper->id ?>"><i class="fa fa-edit fs-4 text-bleu"></i></a>
                        <a href="<?php echo URLROOT ?>/op$operLeaderController/deleteOp/<?php echo $oper->id ?>"><i class="fas fa-trash fs-4 text-bleu"></i></a> -->
                        </td>

                    </tr>  

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>  
    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
