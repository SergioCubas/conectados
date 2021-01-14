let password = document.getElementById("password"),
    rePassword = document.getElementById("repassword"),
    email = document.getElementById("email"),
    btnGeneratePassword = document.getElementById("btnGeneratePassword"),
    btnChange = document.getElementById("btnChange"),
    message = document.getElementById("message");

    // btnGeneratePassword.addEventListener("click",()=>{
    //     btnModal.click();
    // });

    rePassword.addEventListener("keyup",()=>{
        if(rePassword.value == password.value ){
            message.textContent = "";
            if(password.value.length > 7 && rePassword.value.length > 7){
                btnGeneratePassword.removeAttribute("disabled");
            }else{
                message.textContent = "La contraseña es corta";
            }
        }else{
            message.textContent = "Las contraseñas no coinciden";
            btnGeneratePassword.setAttribute("disabled",true);
        }
    });



    password.addEventListener("keyup",()=>{
        if(password.value == rePassword.value ){
            message.textContent = "";
            if(password.value.length > 7 && rePassword.value.length > 7){
                btnGeneratePassword.removeAttribute("disabled");
            }else{
                message.textContent = "La contraseña es corta";
            }
        }else{
            message.textContent = "Las contraseñas no coinciden";
            btnGeneratePassword.setAttribute("disabled",true);
        }
    });
    
    btnGeneratePassword.addEventListener("click",(event)=>{
        event.preventDefault();
        btnModal.click();
        $.ajax({
            type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
            url:"https://eventosenel.pe/includes/service/generatePassword.php", //url guarda la ruta hacia donde se hace la peticion
            data:{email:email.value, password:password.value}, // data recive un objeto con la informacion que se enviara al servidor
            success:function(result){ //success es una funcion que se utiliza si el servidor retorna informacion
            setTimeout(redirect,5000);
            },
            // dataType: dataType // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
        });
    });

    btnChange.addEventListener("click",()=>{
        window.location.replace("https://eventosenel.pe/");
    });

    function redirect(){
        window.location.replace("https://eventosenel.pe/");
    }
