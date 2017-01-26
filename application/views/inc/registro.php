<div class="col-xs-6">
        <form action="<?php echo base_url();?>index.php/Home/registrar" method="POST" name="f1" id="f1" role="form">

		    <div class="row">
		        <div class= "col-xs-5">
		        	<!--1 Nombre-->
		        	<div class="form-group">
		            <label class="form-label" for="nombre"> Su nombre: </label> 
		            <span class="obligatorio">(*)</span>
		            <input class="form-control" type="text" name="nombre" id="nombre" required size="25" maxlength="200" placeholder="Nombre" />
		            </div>
		        </div>

		        <div class= "col-xs-7">
		        	<!--2 Apellidos-->
		        	<div class="form-group">
		            <label class="form-label" for="Apellidos"> Apellidos: </label> 
		            <input class="form-control" type="text" name="Apellidos" id="Apellidos" size="25" maxlength="200" placeholder="Apellidos" />
		            </div>
		        </div>
		    </div>

        	<!--3 Usuario-->
        	<div class="row">
        		<div class="form-group col-xs-12">
		            <label class="form-label" for="Usuario"> Usuario: </label> 
		            <span class="obligatorio">(*)</span>
		            <input class="form-control" type="text" name="Usuario" id="Usuario" required size="25" maxlength="200" placeholder="Usuario" />
            	</div>        	
        	</div>

		    <div class="row">
		    	<div class= "col-xs-6">
		        	<!--4 email-->
		        	<div class="form-group">
		            <label class="form-label" for="Email"> Email: </label> 
		            <span class="obligatorio">(*)</span>
		            <input class="form-control" type="text" name="Email" id="Email" required size="25" maxlength="200" placeholder="Email" />
		            </div>
		        </div>
		        <div class= "col-xs-6">
		            <!--4 email-->
		        	<div class="form-group">
		            <label class="form-label" for="RepEmail">Repetir Email: </label> 
		            <span class="obligatorio">(*)</span>
		            <input class="form-control" type="text" name="RepEmail" id="RepEmail" required size="25" maxlength="200" placeholder="Repetir Email" />
		            </div>   
		        </div>
		    </div>              

		    <div class="row">
		    	<div class= "col-xs-6">
		        	<!--4 Contraseña-->
		        	<div class="form-group">
		            <label class="form-label" for="password"> Contraseña: </label> 
		            <span class="obligatorio">(*)</span>
		            <input class="form-control" type="password" name="password" id="password" required size="25" maxlength="200" placeholder="Contraseña" />
		            </div>
		        </div>
		        <div class= "col-xs-6">
		            <!--4 Contraseña-->
		        	<div class="form-group">
		            <label class="form-label" for="Reppassword">Rep. Contraseña: </label> 
		            <span class="obligatorio">(*)</span>
		            <input class="form-control" type="password" name="Reppassword" id="Reppassword" required size="25" maxlength="200" placeholder="Repetir Contraseña" />
		            </div>   
		        </div>
		    </div>   

		    <div class="row">
		    	<div class= "col-xs-3">
		    	    <!--5 Ciudad-->
		        	<div class="form-group">
		            <label class="form-label" for="Ciudad"> Ciudad: </label> 
		            <input class="form-control" type="text" name="Ciudad" id="Ciudad" size="25" maxlength="200" placeholder="Ciudad" />
		            </div>  
		        </div> 

		        <div class= "col-xs-5">
		        	<!--6 Calle-->
		        	<div class="form-group">
		            <label class="form-label" for="Calle"> Calle: </label> 
		            <input class="form-control" type="text" name="Calle" id="Calle" size="25" maxlength="200" placeholder="Calle" />
		            </div> 
		        </div>    

		        <div class= "col-xs-4">
		        	<!--7 Codigo postal-->
		        	<div class="form-group">
		            <label class="form-label" for="Calle"> Cód. Postal: </label> 
		            <input class="form-control" type="number" name="CodPos" id="CodPos" size="5" max="99999" placeholder="Código Postal" />
		            </div>  
		        </div>
		    </div>
   

        	<!--8 Genero-->
        	<div class="row">
        		<div class="form-group col-xs-12">
		        	<label class="form-label" for="sexo">Sexo: </label>
		            <input type="radio" name="sexo" id="sexo1" value="mujer" checked> Mujer
		            <input type="radio" name="sexo" id="sexo2" value="hombre"> Hombre
            	</div>
        	</div>


        	<!--9 fecha nacimiento-->
        	<div class="row">
	        	<div class="form-group col-xs-12">
	            	<label class="form-label" for="Fecha"> Fecha Nacimiento: </label> 
		            <input class="form-control" type="date" name="Fecha" id="Fecha"  placeholder="dd/mm/aaaa" />
	            </div>          		
        	</div>
     	

        	<!--10 Nacionalidad-->
        	<div class="row">
        		<div class="form-group col-xs-12">
		        	<label class="form-label" for="Nacionalidad">Nacionalidad </label>
		            <span class="obligatorio">(*)</span>
		            <select class="form-control" required name="Nacionalidad" id="Nacionalidad">
		                <option value="">Selecciona Nacionalidad</option>                
		                <option value="00">Española</option>
		                <option value="01">Europea</option>
		                <option value="02">Extra Comunitaria</option>
		                <option value="03">Estado Unidense</option>
		            </select>
            	</div>
        	</div>

        	
        	<!-- 12 acepto los terminos del registro -->
        	<div class="row">
        		<div class="form-group col-xs-12">
	        		<label class="form-label" for="acepto" id="aceptoText">Acepto los terminos del Registro </label>
	        		<input type="checkbox" required name="acepto" id="acepto">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-xs-2">
        			<input class="btn btn-primary" type="submit" value="Enviar" id="btnEnviar">
        		</div>
        		<div class="col-xs-4">
        			<?php echo(anchor('home/reccontrasena', 'Recuperar Contraseña', 'title="Recuperar Contraseña"')); ?>
        		</div>
        		<div class="col-xs-4">
        			<?php echo(anchor('home/index', 'Volver al Login', 'title="volver al Login"')); ?>
        		</div>
        	</div>

		</form>

		<div class="alert alert-success hide" id="mensaje">
			hola
		</div>
		</div>	