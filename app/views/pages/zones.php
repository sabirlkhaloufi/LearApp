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

    <main class="vw-100 vh-100">
        <div class="pt-4 d-flex justify-content-between px-5">
        <a href="<?php echo URLROOT ?>/pages/senior" class="btn btn-primary ms-5">Retour</a>
        </div>
    
    <div class="table-responsive container-fluid pt-5 w-75">
            <table class="table bg-white">
                <thead class="bg-table text-dark">
                    <tr>
                        <th></th>
                        <th></th>
                        <th>zones</th>
                        <th>teamleader</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php foreach ($data[1]["zones"] as $oper): ?>
                    <tr>
                        <!-- <td data-title="id">{{data.id}}</td> -->
                        <td></td>
                        <td></td>
                        <td><?php echo  $oper->designation ?></td>
                        <td><?php echo  $oper->Matricule ?></td>
                        <td>
                        <a href="<?php echo URLROOT ?>/SeniorController/updateZone/<?php echo $oper->id ?>"><i class="fa fa-edit fs-4 text-bleu"></i></a>
                        </td>

                    </tr>  

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>  
    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
