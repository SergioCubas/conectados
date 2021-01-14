let btnSend = document.getElementById("btnSend"),
    btnLogin = document.getElementById("btnLogin"),

    form = document.getElementById("frmSend"),
    email = document.getElementById("email"),
    nombre = document.getElementById("nombre"),
    apellido = document.getElementById("apellido");

    const domainValid = "@enel";
    let error = document.getElementById("error");

const sendUser = () => {
    $.ajax({
        type:"POST",
        url:"https://eventosenel.pe/includes/validate.php",
        data:{email:email.value, nombre:nombre.value, apellido:apellido.value},
        beforeSend: function (result) {
            $(".loading-container").removeClass("d-none");
        },
        success:function(result){
           if(result == 1){
                $(".loading-container").addClass("d-none");
                console.log(result);
                errorMessage = "";
                error.textContent = errorMessage;

                $(".alert").addClass("fade"); 
           }else{
                $(".alert").addClass("fade"); 
                location.reload();

           }
        }
    
    });

}

btnLogin.addEventListener( 'click', (event)=> { 
    event.preventDefault();
    sendUser(email, nombre, apellido); 
} );

// btnSend.addEventListener('submit',(event)=>{
//     event.preventDefault();
// });


function isError(){

}

function redirect(){
    window.location.replace("https://eventosenel.pe/");
}

