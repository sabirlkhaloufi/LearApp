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

    <main class=" vw-100">
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <a href="<?php echo URLROOT ?>/pages/teamLeader" class="btn btn-primary">Retour</a>
        <h3 class="text-center">TeamLeader: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
    </div>
    <div class="d-flex gap-2 flex-wrap mt-5 justify-content-center align-items-center">


    <div class="card shadow-sm p-3 mb-5 bg-body rounded w-50">
        <div class="card-body ">
        <form action="<?php echo URLROOT ?>/SeniorController/updateOperateur/<?php echo $data[1]["op"]->id ?>" method="POST">
            <div class=" d-flex gap-3">
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">zone</label>
                    <select name="zone" id="" class="form-control form-control-user w-100">
                        
                        <?php foreach ($data[2]["zones"] as $zone): ?>
                            <?php if($data[1]["op"]->designation == $zone->designation ):?>
                                <option value="<?php echo $zone->id ?>" selected><?php echo $zone->designation ?></option>
                            <?php endif; ?>
                        <option value="<?php echo $zone->id ?>"><?php echo $zone->designation ?></option>
                        <?php endforeach; ?>
                    </select>            
                </div>

                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data[1]["op"]->nom ?>" name="nom">          
                </div>
            </div>
            <div class=" d-flex gap-3">
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">prenom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data[1]["op"]->prenom ?>" name="prenom">                      
                </div>

                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">poste</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data[1]["op"]->Poste ?>" name="Poste">          
                </div>
            </div>
            <div class=" d-flex gap-3">
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Matricule</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data[1]["op"]->Matricule ?>" name="Matricule">                 
                </div>

                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Equipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data[1]["op"]->Equipe ?>" name="Equipe">          
                </div>
            </div>

            <button class="btn btn-danger d-block btn-user w-100" type="submit">update</button>
        </form>
        </div>
    </div>

    </div>


    </main>
</div>
<!-- <img class="vd" src="<?php echo URLROOT ?>/images/logo.png" alt=""> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
