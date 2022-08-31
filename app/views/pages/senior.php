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
    <div class="container">
    <h3 class="text-center pt-4">Senior: <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>

<div>
    
        <?php foreach ($data[1]['team'] as $team):?>
        <a class="btn btn-primary py-2 px-3" href="<?php echo URLROOT."/TeamLeaderController/TeamBySenior/".$team->id ?>"> <?php echo $team->nom ?> </a>

        <?php endforeach; ?>
   
</div>
    </div>
    </main>
</div>
<video class="vd position-fixed top-0 start-0" id="f00fae18-ea11-e70a-d01e-5c4fc7425be9-video" autoplay="" loop="" style="background-image:url(&quot;https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover" __idm_id__="12713985"><source src="https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-transcode.mp4" data-wf-ignore="true"><source src="https://assets-global.website-files.com/6019e43dcfad3c059841794a/62d6dcdd3f4da163a2d0e04d_hype shortened for web (1)-transcode.webm" data-wf-ignore="true"></video>

    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
