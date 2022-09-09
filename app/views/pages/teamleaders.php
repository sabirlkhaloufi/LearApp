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

    <main class="vw-100 vh-100">
        <div class="pt-4 d-flex justify-content-between px-5">
        <a href="<?php echo URLROOT ?>/pages/senior" class="btn btn-primary ">Retour</a>
        <a href="<?php echo URLROOT ?>/pages/AjouterTeam" class="btn btn-primary ">Ajouter</a>
        </div>
    
    <div class="table-responsive container-fluid pt-5">
            <table class="table bg-white">
                <thead class="bg-table text-dark">
                    <tr>
                        <!-- <th>id</th> -->
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Poste</th>
                        <th>Matricule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php foreach ($data[1]["TeamLeader"] as $team): ?>
                    <tr>
                        <!-- <td data-title="id">{{data.id}}</td> -->
                        <td><?php echo  $team->nom ?></td>
                        <td><?php echo  $team->prenom ?></td>
                        <td><?php echo  $team->Poste ?></td>
                        <td><?php echo  $team->Matricule ?></td>
                        <td>
                        <a href="<?php echo URLROOT ?>/SeniorController/updateTeam/<?php echo $team->id ?>"><i class="fa fa-edit fs-4 text-bleu"></i></a>
                        <a href="<?php echo URLROOT ?>/SeniorController/deleteTeam/<?php echo $team->id ?>"><i class="fas fa-trash fs-4 text-bleu"></i></a>
                        </td>

                    </tr>  

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>  
    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
