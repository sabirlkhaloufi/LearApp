<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body class="" style="background-image:url('<?php echo URLROOT ?>/images/Automotive_Kroschu-fc7f0c2f.jpg');">

<header class="shadow-sm bg-body position-sticky top-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="" width="150"></a>
            </div>
            <div class="d-flex gap-2 align-items-center">
            <a href="<?php echo URLROOT ?>/pages/justifications" class="btn btn-primary">justifications</a>

            <p class="text-center mt-3"><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></p>
            
            <div class="dropdown">
                <div class="dropdown-toggle d-flex gap-2 align-items-center" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img  src="<?php echo URLROOT; ?>/public/images/avatar.svg" alt="" width="50">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo URLROOT ?>/UserController/logout">Logout</a></li>
                </ul>
            </div>
            </div>
            
        </div>
    </header>

    <main class="vw-100 vh-100">
        <div class="pt-4 d-flex justify-content-between px-5">
        <a href="<?php echo URLROOT ?>/pages/admin" class="btn btn-primary ">Retour</a>

        <a href="<?php echo URLROOT ?>/pages/ajouterJust" class="btn btn-primary ">Ajouter</a>
        </div>

    
    <div class="table-responsive container-fluid pt-5">
            <table class="table bg-white">
                <thead class="bg-table text-dark">
                    <tr>
                        <!-- <th>id</th> -->
                        <th>ID</th>
                        <th>Justification</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php foreach ($data[1]["just"] as $team): ?>
                    <tr>
                        <!-- <td data-title="id">{{data.id}}</td> -->
                        <td><?php echo  $team->id ?></td>
                        <td><?php echo  $team->justification ?></td>
                        <td>
                        <a href="<?php echo URLROOT ?>/SeniorController/updateJust/<?php echo $team->id ?>"><i class="fa fa-edit fs-4 text-bleu"></i></a>
                        <a href="<?php echo URLROOT ?>/SeniorController/deleteJust/<?php echo $team->id ?>"><i class="fas fa-trash fs-4 text-bleu"></i></a>
                        </td>

                    </tr>  

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>  
    </main>
</div>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
