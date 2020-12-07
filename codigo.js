$('#formLogin').submit(function(e){                         
    e.preventDefault(); 
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    if(usuario.length == "" || password.length == ""){
        Swal.fire({
          type: 'warning',
          title: 'Ingrese Usuario y/o Password',                          
        }); 
        return false;
    }else{    
        $.ajax({
          url:"procesos/login.php",
          type:"POST",    
          datatype:"json",    
          data:  {usuario:usuario, password:password},    
          success: function(data) {
              //console.log(data);
              if(data == "null"){
                  Swal.fire({
                      type: 'error',
                      title: 'Usuario y/o Password incorrectas',                          
                    });                    
              }else{                  
                  Swal.fire({
                      type: 'success',                          
                      title: '¡Conexión exitosa!',                                                
                      confirmButtonColor: '#3085d6',                          
                      confirmButtonText: 'Ingresar'
                    }).then((result) => {
                      if (result.value) {
                          window.location.href = "inicio.php";                          
                      }
                    })                                                               
              }
           }
        });			            
    }
});
////////////////////////////////////////////////////////////////////////////////////////

$('#formLogin2').submit(function(e){                         
    e.preventDefault(); 
    var nombre = $.trim($("#nombre").val());
    var apellidoP = $.trim($("#apellidoP").val());
    var email = $.trim($("#email").val());
    
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    if(nombre.length=="" || apellidoP.length=="" || email.length=="" || usuario.length == "" || password.length == ""){
        Swal.fire({
          type: 'warning',
          title: 'Ingrese Todos los datos',                          
        }); 
        return false;
    }else{    
        $.ajax({
          url:"procesos/registro.php",
          type:"POST",    
          datatype:"json",    
          data:  {nombre:nombre,apellidoP:apellidoP,email:email,usuario:usuario, password:password},    
          success: function(data) {
              //console.log(data);
              if(data == "null"){
                  Swal.fire({
                      type: 'error',
                      title: 'Datos incorrectos',                          
                    });                    
              }else{                  
                  Swal.fire({
                      type: 'success',                          
                      title: '¡Agregado!',                                                
                      confirmButtonColor: '#3085d6',                          
                      confirmButtonText: 'Ingresar'
                    }).then((result) => {
                      if (result.value) {
                          window.location.href = "registro.php";                          
                      }
                    })                                                               
              }
           }
        });			            
    }
});



