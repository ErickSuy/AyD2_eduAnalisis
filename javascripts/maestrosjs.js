$(function(){

   $("#li_maestros").attr("class","active");
   $("#li_maestros_fe").attr("class","subactive");

    var consulta;

    //hacemos focus al campo de búsqueda
    $("#busqueda").focus();

    llenarcombo(0);


    //comprobamos si se pulsa una tecla
$("#busqueda").change(function(e){
    consulta = $("#busqueda").val();
    buscar(consulta);
});

function buscar(consulta){

      //obtenemos el texto introducido en el campo de búsqueda
      

        if(consulta!=0)
        {
        //hace la búsqueda
        $.ajax({
            type: "POST",
            url: "../php/maestro.php",
            data: {"call":"buscar", "b":consulta},
            dataType: "JSON",
            beforeSend: function(){
            },
            error: function(data){
                alert("error peticion ajax:"+data.error);
            },
            statusCode: {
                404: function() {
                alert( "page not found" );
                }
            },
            success: function(data){
                if(data.hasOwnProperty('error')==false)
                {
                    limpiar_labels();
                     $("#nombre").val(data['n1']);
                     $("#nombre2").val(data['n2']);
                     $("#nombre3").val(data['n3']);
                     $("#apellido").val(data['a1']);
                     $("#apellido2").val(data['a2']);
                     $("#direccion").val(data['d']);
                     $("#ciudad").val(data['c']);
                     $("#telefono1").val(data['t1']);
                     $("#telefono2").val(data['t2']);
                     $("#salario").val(data['s']);
                     $("#dpi").val(data['dpi']);
                     if(data['e']==1)
                     {
                         $( "#lock" ).html( "<i class=\"fa fa-unlock\"></i>" );
                     }else
                     {
                         $( "#lock" ).html( "<i class=\"fa fa-lock\"></i>" );
                     }
                }
                else
                {
                    alert(data.error);
                }
            }
        });
        }
        else //consulata 0
        {
            limpiar_labels();
            $("#nombre").val("");
            $("#nombre2").val("");
            $("#nombre3").val("");
            $("#apellido").val("");
            $("#apellido2").val("");
            $("#direccion").val("");
            $("#ciudad").val("");
            $("#telefono1").val("");
            $("#telefono2").val("");
            $("#salario").val("");
            $("#dpi").val("");
            //$("#estado").prop("checked",false);
        }
    }

//Funciones para verificacion

$("#nombre").keypress(function (e) {
    if (!key_is_letter(e)) {
        $("#l_nombre").html("Solo letras").show().fadeOut("slow");
        return false;
    }
});

$("#nombre2").keypress(function (e) {
    if (!key_is_letter(e)) {
        $("#l_nombre2").html("Solo letras").show().fadeOut("slow");
        return false;
    }
});

$("#nombre3").keypress(function (e) {
    if (!key_is_letter(e)) {
        $("#l_nombre3").html("Solo letras").show().fadeOut("slow");
        return false;
    }
});

$("#apellido").keypress(function (e) {
    if (!key_is_letter(e)) {
        $("#l_apellido").html("Solo letras").show().fadeOut("slow");
        return false;
    }
});
$("#apellido2").keypress(function (e) {
    if (!key_is_letter(e)) {
        $("#l_apellido2").html("Solo letras").show().fadeOut("slow");
        return false;
    }
});
$("#ciudad").keypress(function (e) {
    if (!key_is_letter(e)) {
        $("#l_ciudad").html("Solo letras").show().fadeOut("slow");
        return false;
    }
});


$("#telefono1").keypress(function (e) {
    if (!key_is_numeric(e)) {
        $("#l_telefono1").html("Solo numeros").show().fadeOut("slow");
        return false;
    }
});

$("#telefono2").keypress(function (e) {
    if (!key_is_numeric(e)) {
        $("#l_telefono2").html("Solo numeros").show().fadeOut("slow");
        return false;
    }
});

$("#salario").keypress( function(e){
   if (!key_is_double(e)) {
        $("#l_salario").html("Solo numeros").show().fadeOut("slow");
        return false;
    }
});
$("#dpi").keypress( function(e){
   if (!key_is_numeric(e)) {
        $("#l_dpi").html("Solo numeros").show().fadeOut("slow");
        return false;
    }
});



function limpiar_labels()
{
    $('#l_nombre').hide();
    $('#l_nombre1').hide();
    $('#l_nombre2').hide();
    $('#l_apellido').hide();
    $('#l_apellido2').hide();
    $('#l_direccion').hide();
    $('#l_ciudad').hide();
    $('#l_telefono1').hide();
    $('#l_telefono2').hide();
    $('#l_salario').hide();
    $('#l_dpi').hide();
}

//FUNCION PARA CREAR UNA NUEVA ENTRADA EN

$("#crear").click(function(e){
    consulta = $("#busqueda").val();
    limpiar_labels();
    if(consulta==0)
    {
        //obtenemos valores de la pagina
        var nombre = $('#nombre').val();
        var nombre2 = $('#nombre2').val();
        var nombre3 = $('#nombre3').val();
        var apellido = $('#apellido').val();
        var apellido2 = $('#apellido2').val();
        var direccion = $('#direccion').val();
        var ciudad = $('#ciudad').val();
        var telefono1 = $('#telefono1').val();
        var telefono2 = $('#telefono2').val();
        var salario = $('#salario').val();
        var dpi = $('#dpi').val();

        //verificamos si los valores estan vacios
        var vn1 = is_empty_l(nombre,'#l_nombre1');
        var va1 = is_empty_l(apellido,'#l_apellido');
        var vd = is_empty_l(direccion,'#l_direccion');
        var vc = is_empty_l(ciudad,'#l_ciudad');
        var vt1 = is_empty_l(telefono1,'#l_telefono1');
        var vs = is_empty_l(salario,'#l_salario');
        var vdpi = is_empty_l(dpi,'#l_dpi');

        if(vn1 || va1 || vd || vc || vs || vt1 || vdpi )
        {
            alert("Existen campos vacios");
        }
        else
        {
        $.ajax({
            type: "POST",
            url: "../php/maestro.php",
            data: {"call":"insertar", "n":nombre, "n2":nombre2, "n1":nombre3,"a1":apellido, "a2":apellido2,"d":direccion, "c":ciudad, "t1":telefono1, "t2":telefono2, "s":salario,"dpi":dpi},
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
                    location.reload();
                }
                else
                {
                    alert(data.error);
                }
            }
        });
        }
    }
    else
    {
        alert("Seleccione Nuevo");
    }
});


$("#modificar").click(function(e){
    consulta = $("#busqueda").val();
    limpiar_labels();
    if(consulta!=0)
    {
        //obtenemos valores de la pagina
        var nombre = $('#nombre').val();
        var nombre2 = $('#nombre2').val();
        var nombre3 = $('#nombre3').val();
        var apellido = $('#apellido').val();
        var apellido2 = $('#apellido2').val();
        var direccion = $('#direccion').val();
        var ciudad = $('#ciudad').val();
        var telefono1 = $('#telefono1').val();
        var telefono2 = $('#telefono2').val();
        var salario = $('#salario').val();
        var dpi = $('#dpi').val();

        //verificamos si los valores estan vacios
        var vn1 = is_empty_l(nombre,'#l_nombre1');
        var va1 = is_empty_l(apellido,'#l_apellido');
        var vd = is_empty_l(direccion,'#l_direccion');
        var vc = is_empty_l(ciudad,'#l_ciudad');
        var vt1 = is_empty_l(telefono1,'#l_telefono1');
        var vs = is_empty_l(salario,'#l_salario');
        var vdpi = is_empty_l(dpi,'#l_dpi');

        if(vn1 || va1 || vd || vc || vs || vt1 || vdpi )
        {
            alert("Existen campos vacios");
        }
        else
        {
        $.ajax({
            type: "POST",
            url: "../php/maestro.php",
            data: {"call":"modificar","id":consulta, "n":nombre, "n2":nombre2, "n1":nombre3,"a1":apellido, "a2":apellido2,"d":direccion, "c":ciudad, "t1":telefono1, "t2":telefono2, "s":salario,"dpi":dpi},
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
                    location.reload();
                }
                else
                {
                    alert(data.error);
                }
            }
        });
        }
    }
    else
    {
        alert("Seleccione un afiliado");
    }
});


$("#eliminar").click(function(e){
    consulta = $("#busqueda").val();
    limpiar_labels();
    if(consulta!=0)
    {
        $.ajax({
        type: "POST",
        url: "../php/maestro.php",
        data:{"call":"eliminar","id":consulta},
        dataType: "JSON",
        beforeSend: function(){
        },
        error: function(data){
            alert("error peticion ajax "+consulta);
        },
        success: function(data){
            if(data.hasOwnProperty('error')==false)
            {
                alert(data.sucess);
                llenarcombo(0);
                buscar(0);
            }
            else
            {
                alert(data.error);
            }
        }
        });
    }
    else
    {
        alert("Seleccione un afiliado");
    }
});

function llenarcombo(valor)
{
    $.ajax({
        type: "POST",
        url: "../php/maestro.php",
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
                $('#busqueda').html(data);
                $('#busqueda').val(valor);
            }
            else
            {
                alert(data.error);
            }
        }
    });
}

});
