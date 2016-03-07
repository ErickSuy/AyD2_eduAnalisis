$(function(){

    llenarcombo(0); //llena el combo de Roles

$("#iniciar").click(function(e){


        var name = $('#name').val();
        var pass = $('#pass').val();
        var rol = $('#rol').val();
        //verificamos si los valores estan vacios
        var vn = is_empty_l(name,'#l_name');
        var vd = is_empty_l(pass,'#l_pass');

        if(vn || vd )
        {
            alert("Existen campos vacios");
        }else if(rol==0){
        	$(rol).html("Seleccione un rol").show();
        	return true;
        	alert(label);
        }
        else
        {
            $.ajax({
                type: "POST",
                url: "./php/login.php",
                data: {"call":"login", "n":name, "p":pass,"r":rol},
                dataType: "JSON",
                beforeSend: function(){
                },
                error: function(error){
                    alert("error peticion ajax");
                },
                statusCode: {
                    404: function() {
                    alert( "page not found" );
                    }
                },
                success: function(data){
                    if(data.hasOwnProperty('error')==false)
                    {
                       alert(data.sucess);
                       location.href = "principal.php";
                    }
                    else
                    {
                        alert(data.error);
                    }
                }
            });
        }

});


function llenarcombo(valor)
{
	 $.ajax({
        type: "POST",
        url: "./php/login.php",
        data:{"call":"llenar"},
        dataType: "HTML",
        beforeSend: function(){
        },
        error: function(data){
            alert("error peticion ajax ");
        },
        success: function(data){
            if(data.hasOwnProperty('error')==false)
            {
                $('#rol').html(data);
                $('#rol').val(valor);
            }
            else
            {
                alert(data.error);
            }
        }
    });
}  

function sqlinyection($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = str_ireplace("&","&ampr",$data);
   $data = str_ireplace("\"","&quot",$data);
   $data = str_ireplace("\'","&#039",$data);
   $data = str_ireplace("<",'&lt',$data);
   $data = str_ireplace(">",'&gt',$data);
   return $data;
}

});