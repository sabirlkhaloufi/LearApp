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

    <main class=" vw-100">
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 align-items-center pt-5">
        <a href="<?php echo URLROOT ?>/pages/admin" class="btn btn-primary">Retour</a>
        <h3 class="text-center">admin: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
    </div>
    <div class="d-flex gap-2 flex-wrap mt-5 justify-content-center align-items-center">


    <div class="card shadow-sm p-3 mb-5 bg-body rounded w-50">
        <div class="card-body ">
        <form action="<?php echo URLROOT ?>/SeniorController/AjouterSenior" method="POST">
        <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  name="email">          
                </div>
        <div class=" d-flex gap-3">
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="nom">          
                </div>
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">prenom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="prenom">                      
                </div>
            </div>
            <div class=" d-flex gap-3">
            <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Equipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Equipe">          
                </div>
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Matricule</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Matricule">                 
                </div>
            </div>

            <div class=" d-flex gap-3">
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">mots de passe</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="password">                 
                </div>

                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">confirmer mots de passe</label>
                    <input type="cPassword" class="form-control" id="exampleInputEmail1" name="cPassword">          
                </div>
            </div>

            <button class="btn btn-danger d-block btn-user w-100" type="submit">Ajouter</button>
        </form>
        </div>
    </div>

    </div>


    </main>
</div>
<!-- <img class="vd" src="<?php echo URLROOT ?>/images/logo.png" alt=""> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
