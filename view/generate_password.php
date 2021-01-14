<?php
include_once '../includes/user.php';
$objUser = new User();

?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="../assets/main.css">

    <title>Enel</title>
  </head>
  <body class="page-password">
    <div class="container-fluid">
        <div class="row container-center">
            <?php
            if($objUser->tokenExists($_GET["token"]) == "true"){
            ?>
            <div class="col-md-4 form-login">
                <svg width="150" height="71" viewBox="0 0 198 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M46.1521 39.1786H54.5226C53.5126 33.4713 50.697 28.3696 46.6877 24.479L40.9492 30.2619C43.4435 32.6538 45.2798 35.727 46.1521 39.1786Z" fill="white"/>
                  <path d="M27.4382 24.812C32.7482 24.812 37.5685 26.9314 41.0728 30.3679L46.8572 24.6455C41.8838 19.7406 35.013 16.7129 27.4382 16.7129C27.3617 16.7129 27.2852 16.7129 27.1934 16.7129L27.2699 24.812C27.3311 24.812 27.377 24.812 27.4382 24.812Z" fill="white"/>
                  <path d="M27.4372 24.812V16.7129C19.7706 16.7129 12.8386 19.8163 7.86523 24.8272L13.7108 30.5042C17.1998 26.992 22.066 24.812 27.4372 24.812Z" fill="white"/>
                  <path d="M8.18688 43.8564C8.18688 38.6033 10.3445 33.8346 13.8182 30.3982L8.03385 24.6758C3.07582 29.5655 0 36.3628 0 43.8564C0 43.9321 0 44.0078 0 44.0986L8.18688 44.0229C8.18688 43.9623 8.18688 43.9018 8.18688 43.8564Z" fill="white"/>
                  <path d="M8.18688 43.8564H0C0 51.4409 3.13703 58.2987 8.20218 63.2187L13.9406 57.4358C10.3904 53.9842 8.18688 49.1701 8.18688 43.8564Z" fill="white"/>
                  <path d="M27.4372 62.9008C22.1272 62.9008 17.3069 60.7663 13.8332 57.3298L8.04883 63.0522C13.0069 67.9571 19.8777 71 27.4525 71C27.529 71 27.6055 71 27.6973 71L27.6208 62.9008C27.5443 62.9008 27.4984 62.9008 27.4372 62.9008Z" fill="white"/>
                  <path d="M42.7095 55.4526C39.1899 59.9791 33.6656 62.9008 27.4375 62.9008V71C36.313 71 44.1938 66.8368 49.2131 60.3878L42.7095 55.4526Z" fill="url(#paint0_linear)"/>
                  <path d="M165.758 39.1786H174.128C173.118 33.4713 170.302 28.3696 166.293 24.479L160.555 30.2619C163.034 32.6538 164.87 35.727 165.758 39.1786Z" fill="white"/>
                  <path d="M147.042 24.812C152.352 24.812 157.172 26.9314 160.676 30.3679L166.461 24.6455C161.487 19.7406 154.616 16.7129 147.042 16.7129C146.965 16.7129 146.889 16.7129 146.797 16.7129L146.873 24.812C146.919 24.812 146.981 24.812 147.042 24.812Z" fill="white"/>
                  <path d="M147.043 24.812V16.7129C139.376 16.7129 132.444 19.8163 127.471 24.8272L133.316 30.5042C136.805 26.992 141.656 24.812 147.043 24.812Z" fill="white"/>
                  <path d="M127.792 43.8564C127.792 38.6033 129.95 33.8346 133.424 30.3982L127.639 24.6758C122.666 29.5807 119.605 36.3779 119.605 43.8715C119.605 43.9472 119.605 44.0229 119.605 44.1137L127.792 44.038C127.792 43.9623 127.792 43.9018 127.792 43.8564Z" fill="white"/>
                  <path d="M127.792 43.8564H119.605C119.605 51.4409 122.742 58.2987 127.808 63.2187L133.546 57.4358C129.996 53.9842 127.792 49.1701 127.792 43.8564Z" fill="white"/>
                  <path d="M147.043 62.9008C141.733 62.9008 136.912 60.7663 133.439 57.3298L127.654 63.0522C132.612 67.9571 139.483 71 147.058 71C147.134 71 147.211 71 147.303 71L147.226 62.9008C147.15 62.9008 147.089 62.9008 147.043 62.9008Z" fill="white"/>
                  <path d="M162.315 55.4526C158.795 59.9791 153.271 62.9008 147.043 62.9008V71C155.918 71 163.799 66.8368 168.819 60.3878L162.315 55.4526Z" fill="url(#paint1_linear)"/>
                  <path d="M190.501 28.3545H182.314V52.8487H190.501V28.3545Z" fill="white"/>
                  <path d="M190.501 52.7126C190.501 58.5561 193.225 61.0843 197.999 64.3088L193.317 70.9547C186.323 66.4131 182.299 61.266 182.299 52.7126H190.501V52.7126Z" fill="url(#paint2_linear)"/>
                  <path d="M89.1372 16.7129C82.0062 16.7129 75.5944 19.5287 70.8965 24.1157V40.5713C72.136 34.0617 77.951 24.8272 89.1219 24.8272C89.3208 24.8272 89.535 24.8272 89.734 24.8423V16.7432C89.535 16.7129 89.3361 16.7129 89.1372 16.7129Z" fill="white"/>
                  <path d="M111.893 41.8127H103.706V39.1483C103.706 31.14 97.2636 24.9331 89.3828 24.812V16.7129C101.808 16.834 111.908 26.7044 111.908 39.1483V41.8127H111.893Z" fill="url(#paint3_linear)"/>
                  <path d="M70.8959 18.9233H62.709V47.2779H70.8959V18.9233Z" fill="white"/>
                  <path d="M190.501 0H182.314V28.3546H190.501V0Z" fill="white"/>
                  <path d="M111.892 41.8127H103.705V70.1673H111.892V41.8127Z" fill="white"/>
                  <path d="M54.5231 39.1787H25.8613V47.2779H54.5231V39.1787Z" fill="white"/>
                  <path d="M174.129 39.1787H145.467V47.2779H174.129V39.1787Z" fill="white"/>
                  <defs>
                  <linearGradient id="paint0_linear" x1="27.4386" y1="63.2213" x2="49.2076" y2="63.2213" gradientUnits="userSpaceOnUse">
                  <stop offset="0.27" stop-color="white"/>
                  <stop offset="1" stop-color="white" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear" x1="147.021" y1="73.5884" x2="162.956" y2="55.8381" gradientUnits="userSpaceOnUse">
                  <stop offset="0.27" stop-color="white"/>
                  <stop offset="1" stop-color="white" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear" x1="189.478" y1="60.0072" x2="196.911" y2="66.2025" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white"/>
                  <stop offset="1" stop-color="white" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear" x1="100.633" y1="26.512" x2="100.633" y2="40.8508" gradientUnits="userSpaceOnUse">
                  <stop offset="0.021" stop-color="white"/>
                  <stop offset="1" stop-color="white" stop-opacity="0"/>
                  </linearGradient>
                  </defs>
                </svg>
                <p>La contraseña debe tener por lo menos 08 caractéres, una letra mayúscula y un número.</p>

                <form  method="post">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php  print_r($objUser->getEmail($_GET["token"]));?>" style="display:none;">
                    
                    <input type="password" minlength="6" class="form-control" name="password" id="password" placeholder="**************" required>
                    <!-- <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button> -->
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>

                    <div class="form-group">
                    <label for="exampleInputPassword1">Repetir Contraseña</label>
                    <input type="password" minlength="6" class="form-control" name="repassword" id="repassword" placeholder="**************" required>
                    </div>
                    <p id="message"></p>
                    <button type="submit" id="btnGeneratePassword" class="btn btn-primary" disabled>Siguiente</button>

                </form>
            </div>
            <?php 
            $objUser->tokenDelete($_GET["token"]);
            }else { ?>
            <div class="col-md-4 form-login">
                <div class="message-token">
                  <svg width="150" height="71" viewBox="0 0 198 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M46.1521 39.1786H54.5226C53.5126 33.4713 50.697 28.3696 46.6877 24.479L40.9492 30.2619C43.4435 32.6538 45.2798 35.727 46.1521 39.1786Z" fill="white"/>
                    <path d="M27.4382 24.812C32.7482 24.812 37.5685 26.9314 41.0728 30.3679L46.8572 24.6455C41.8838 19.7406 35.013 16.7129 27.4382 16.7129C27.3617 16.7129 27.2852 16.7129 27.1934 16.7129L27.2699 24.812C27.3311 24.812 27.377 24.812 27.4382 24.812Z" fill="white"/>
                    <path d="M27.4372 24.812V16.7129C19.7706 16.7129 12.8386 19.8163 7.86523 24.8272L13.7108 30.5042C17.1998 26.992 22.066 24.812 27.4372 24.812Z" fill="white"/>
                    <path d="M8.18688 43.8564C8.18688 38.6033 10.3445 33.8346 13.8182 30.3982L8.03385 24.6758C3.07582 29.5655 0 36.3628 0 43.8564C0 43.9321 0 44.0078 0 44.0986L8.18688 44.0229C8.18688 43.9623 8.18688 43.9018 8.18688 43.8564Z" fill="white"/>
                    <path d="M8.18688 43.8564H0C0 51.4409 3.13703 58.2987 8.20218 63.2187L13.9406 57.4358C10.3904 53.9842 8.18688 49.1701 8.18688 43.8564Z" fill="white"/>
                    <path d="M27.4372 62.9008C22.1272 62.9008 17.3069 60.7663 13.8332 57.3298L8.04883 63.0522C13.0069 67.9571 19.8777 71 27.4525 71C27.529 71 27.6055 71 27.6973 71L27.6208 62.9008C27.5443 62.9008 27.4984 62.9008 27.4372 62.9008Z" fill="white"/>
                    <path d="M42.7095 55.4526C39.1899 59.9791 33.6656 62.9008 27.4375 62.9008V71C36.313 71 44.1938 66.8368 49.2131 60.3878L42.7095 55.4526Z" fill="url(#paint0_linear)"/>
                    <path d="M165.758 39.1786H174.128C173.118 33.4713 170.302 28.3696 166.293 24.479L160.555 30.2619C163.034 32.6538 164.87 35.727 165.758 39.1786Z" fill="white"/>
                    <path d="M147.042 24.812C152.352 24.812 157.172 26.9314 160.676 30.3679L166.461 24.6455C161.487 19.7406 154.616 16.7129 147.042 16.7129C146.965 16.7129 146.889 16.7129 146.797 16.7129L146.873 24.812C146.919 24.812 146.981 24.812 147.042 24.812Z" fill="white"/>
                    <path d="M147.043 24.812V16.7129C139.376 16.7129 132.444 19.8163 127.471 24.8272L133.316 30.5042C136.805 26.992 141.656 24.812 147.043 24.812Z" fill="white"/>
                    <path d="M127.792 43.8564C127.792 38.6033 129.95 33.8346 133.424 30.3982L127.639 24.6758C122.666 29.5807 119.605 36.3779 119.605 43.8715C119.605 43.9472 119.605 44.0229 119.605 44.1137L127.792 44.038C127.792 43.9623 127.792 43.9018 127.792 43.8564Z" fill="white"/>
                    <path d="M127.792 43.8564H119.605C119.605 51.4409 122.742 58.2987 127.808 63.2187L133.546 57.4358C129.996 53.9842 127.792 49.1701 127.792 43.8564Z" fill="white"/>
                    <path d="M147.043 62.9008C141.733 62.9008 136.912 60.7663 133.439 57.3298L127.654 63.0522C132.612 67.9571 139.483 71 147.058 71C147.134 71 147.211 71 147.303 71L147.226 62.9008C147.15 62.9008 147.089 62.9008 147.043 62.9008Z" fill="white"/>
                    <path d="M162.315 55.4526C158.795 59.9791 153.271 62.9008 147.043 62.9008V71C155.918 71 163.799 66.8368 168.819 60.3878L162.315 55.4526Z" fill="url(#paint1_linear)"/>
                    <path d="M190.501 28.3545H182.314V52.8487H190.501V28.3545Z" fill="white"/>
                    <path d="M190.501 52.7126C190.501 58.5561 193.225 61.0843 197.999 64.3088L193.317 70.9547C186.323 66.4131 182.299 61.266 182.299 52.7126H190.501V52.7126Z" fill="url(#paint2_linear)"/>
                    <path d="M89.1372 16.7129C82.0062 16.7129 75.5944 19.5287 70.8965 24.1157V40.5713C72.136 34.0617 77.951 24.8272 89.1219 24.8272C89.3208 24.8272 89.535 24.8272 89.734 24.8423V16.7432C89.535 16.7129 89.3361 16.7129 89.1372 16.7129Z" fill="white"/>
                    <path d="M111.893 41.8127H103.706V39.1483C103.706 31.14 97.2636 24.9331 89.3828 24.812V16.7129C101.808 16.834 111.908 26.7044 111.908 39.1483V41.8127H111.893Z" fill="url(#paint3_linear)"/>
                    <path d="M70.8959 18.9233H62.709V47.2779H70.8959V18.9233Z" fill="white"/>
                    <path d="M190.501 0H182.314V28.3546H190.501V0Z" fill="white"/>
                    <path d="M111.892 41.8127H103.705V70.1673H111.892V41.8127Z" fill="white"/>
                    <path d="M54.5231 39.1787H25.8613V47.2779H54.5231V39.1787Z" fill="white"/>
                    <path d="M174.129 39.1787H145.467V47.2779H174.129V39.1787Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear" x1="27.4386" y1="63.2213" x2="49.2076" y2="63.2213" gradientUnits="userSpaceOnUse">
                    <stop offset="0.27" stop-color="white"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="147.021" y1="73.5884" x2="162.956" y2="55.8381" gradientUnits="userSpaceOnUse">
                    <stop offset="0.27" stop-color="white"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="189.478" y1="60.0072" x2="196.911" y2="66.2025" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="100.633" y1="26.512" x2="100.633" y2="40.8508" gradientUnits="userSpaceOnUse">
                    <stop offset="0.021" stop-color="white"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    </defs>
                  </svg>
                  <h3>Este token ya expiro!</h3>
                </div>
            </div>


            <?php } ?>
            <div class="col-md-8">
              <img src="../assets/img/manos.png" class="img-fluid img-home" alt="Manos">
            </div>
        </div>
    </div>

    <button id="btnModal" type="submit" class="btn btn-primary fade" data-toggle="modal" data-target="#exampleModal"></button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
            <svg width="65" height="49" viewBox="0 0 65 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M62.2009 2.80231L18.7281 25.7396M2.56257 12.6564L62.2009 2.80231L20.4027 46.4686L18.7281 25.7396L2.56257 12.6564Z" stroke="#0555FA" stroke-width="3.86182" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3><strong>Confirmación de registro</strong></h3>
            <p>Recibirá un correo con los siguientes pasos a la brevedad.</p>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button id="btnChange" type="button" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

     

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script src="https://eventosenel.pe/view/assets/app.js"></script>

  </body>
</html>