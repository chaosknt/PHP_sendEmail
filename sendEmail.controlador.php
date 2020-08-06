<?php

//return to previos page
$windowLocation = "http://oxxon-cd.com/";

			   	$to = "email@dominio.com";
				$subject = "NO-REPLY @ Welcome: ". $_POST["nombre"];
				$message = "Datos: "."\n". 	
							"Nombre: "		.$_POST["nombre"]. "\n". 		
							"Cuit: "		.$_POST["dni"]. 	"\n". 		
							"Localidad: "	.$_POST["localidad"]. "\n". 		
							"Dirección: "	.$_POST["direccion"]. "\n". 		
							"telefono: "	.$_POST["telefono"]. "\n". 		
							"Email: "		.$_POST["email"]. 	"\n". 		
							"condición: "	.$_POST["condicion"];
 
				mail($to, $subject, $message);

			   	

					echo'<script>

					swal({
						  type: "success",
						  title: "Se ha dado de alta satisfactoriamente, si en 24hs no le llega su código por favor escriba a mariano@oxxon-cd.com",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "'.$windowLocation.'";

									}
								})

					</script>';