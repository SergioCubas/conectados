<?php
date_default_timezone_set("America/Lima"); 

if(!isset($_SESSION["user"])){
  include_once '../includes/user.php';
  include '../includes/user_session.php';
  $objUser = new User();
  $objSession = new UserSession();
  $objSession->setCurrentUser($_GET["mail"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/main.css">
    <link href="//db.onlinewebfonts.com/c/87eafe89491e52dabd5e9a0ecda6c811?family=DIN+Next+CYR" rel="stylesheet" type="text/css"/>
</head>

<body class="page-home">
    <div class="container-gluid">
        <div class="row" style="height: 100%;width:100%;margin: 0;">
            <div class="col-xl-12 col-md-12">
                <div id="menu">
                    <div class="logo">
                        <img src="./assets/img/logo-color.png" alt="Enel-logo">
                    </div>
                    <div class="logout">
                        <a href="#" id="btnLogout">Cerrar sesión</a>
                    </div>
                </div>
                <button id="btnModal" type="submit" class="btn btn-primary fade" data-toggle="modal" data-target="#exampleModal"></button>

                <section>
                    
                    <div class="video">

                        <iframe id="video-bingo" src="https://vimeo.com/event/559343/embed/b377fce9fb" frameborder="0" allow="autoplay; fullscreen" allowfullscreen  width="640" height="360" frameborder="0" ></iframe>
                        <p></p>
                        <iframe src="https://vimeo.com/event/559343/chat/b377fce9fb" frameborder="0" width="100%"></iframe>
                    </div>   

                </section>
                
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.6013 0.412345C17.475 0.285778 17.325 0.185364 17.1598 0.116852C16.9946 0.0483401 16.8176 0.0130744 16.6388 0.0130744C16.46 0.0130744 16.2829 0.0483401 16.1178 0.116852C15.9526 0.185364 15.8026 0.285778 15.6763 0.412345L9 7.07495L2.32375 0.398692C2.19735 0.272291 2.04729 0.172024 1.88214 0.103616C1.71698 0.0352086 1.53998 1.33185e-09 1.36122 0C1.18246 -1.33185e-09 1.00545 0.0352086 0.840303 0.103616C0.675152 0.172024 0.525092 0.272291 0.398692 0.398692C0.272291 0.525092 0.172024 0.675152 0.103616 0.840303C0.0352086 1.00545 -1.33185e-09 1.18246 0 1.36122C1.33185e-09 1.53998 0.0352086 1.71698 0.103616 1.88214C0.172024 2.04729 0.272291 2.19735 0.398692 2.32375L7.07495 9L0.398692 15.6763C0.272291 15.8027 0.172024 15.9527 0.103616 16.1179C0.0352086 16.283 0 16.46 0 16.6388C0 16.8175 0.0352086 16.9945 0.103616 17.1597C0.172024 17.3248 0.272291 17.4749 0.398692 17.6013C0.525092 17.7277 0.675152 17.828 0.840303 17.8964C1.00545 17.9648 1.18246 18 1.36122 18C1.53998 18 1.71698 17.9648 1.88214 17.8964C2.04729 17.828 2.19735 17.7277 2.32375 17.6013L9 10.9251L15.6763 17.6013C15.8027 17.7277 15.9527 17.828 16.1179 17.8964C16.283 17.9648 16.46 18 16.6388 18C16.8175 18 16.9945 17.9648 17.1597 17.8964C17.3248 17.828 17.4749 17.7277 17.6013 17.6013C17.7277 17.4749 17.828 17.3248 17.8964 17.1597C17.9648 16.9945 18 16.8175 18 16.6388C18 16.46 17.9648 16.283 17.8964 16.1179C17.828 15.9527 17.7277 15.8027 17.6013 15.6763L10.9251 9L17.6013 2.32375C18.1201 1.80494 18.1201 0.931154 17.6013 0.412345Z" fill="#E2E7EE"/>
                    </svg>
                </span>
            </button>

            <h3 class="modal-title" id="exampleModalLabel">Cerrar sesión</h3>
            <p>¿Está seguro que deseas cerrar sesión?</p>
            <div class="container-buttoms">
              <a href="./includes/logout.php?email=<?php echo $user->getNombre();  ?>" id="btnLogout">Sí, cerrar sesión</a>
              <button id="btnMessage" type="button" class="btn btn-primary"  data-dismiss="modal" aria-label="Close">No, mantenerme aquí</button>
            </div>
          </div>

        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://eventosenel.pe/view/assets/app.js"></script>
 
    
    <script>
      let btnLogout = document.getElementById("btnLogout");
      let btnModal = document.getElementById("btnModal");
      btnLogout.addEventListener("click",function(){
        btnModal.click();
        // alert("daaa");
      });

    </script>
</body>
</html>