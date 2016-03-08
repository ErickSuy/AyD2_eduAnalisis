
<?php
require('../header.php');
?>

<script src="../javascripts/maestrosjs.js"></script>

<div class="div_clear"></div>

<div id="div_cuerpo">

	<h1> Operaciones Sobre Maestros <i class="fa fa-user"></i></h1>

	<div class="div_input">
		ID Maestro - Nombre
		<select id="busqueda">
		</select><div id="lock" name="lock"></div>
	</div>

	<div class="div_clear"></div>

	<div class="div_formulario">
	<form autocomplete="off">
		<div class="div_input">
			Nombre 1 <span style="color:red;">*</span>
			<input class="register-input" type="text" id='nombre' name="nombre" value="" maxlength=45/>
			<label id="l_nombre" class="label_error" visible="false"></label>
		</div>
		<div class="div_input">
			Nombre 2
			<input class="register-input" type="text" id='nombre2' name="nombre2" value="" maxlength=45/>
			<label id="l_nombre2" class="label_error" visible="false"></label>
		</div>
		<div class="div_input">
			Nombre 3
			<input class="register-input" type="text" id='nombre3' name="nombre3" value="" maxlength=45/>
			<label id="l_nombre3" class="label_error" visible="false"></label>
		</div>
		<div class="div_input">
			Apellido <span style="color:red;">*</span>
			<input type="text" id='apellido' name="apellido" value="" maxlength=45/> <br>
			<label id="l_apellido" class="label_error" ></label>
		</div>
		<div class="div_input">
			Apellido 2
			<input type="text" id='apellido2' name="apellido2" value="" maxlength=45/> <br>
			<label id="l_apellido2" class="label_error" ></label>
		</div>
		<div class="div_input">
			Ciudad <span style="color:red;">*</span>
			<input type="text" id='ciudad' name="ciudad" value="" maxlength=45/> <br>
			<label id="l_ciudad" class="label_error" ></label>
		</div>
		<div class="div_input">
			Direccion <span style="color:red;">*</span>
			<input type="text" id='direccion' name="direccion" value="" maxlength=45/> <br>
			<label id="l_direccion" class="label_error" ></label>
		</div>
		<div class="div_input">
			Telefono 1 <span style="color:red;">*</span>
			<input type="text" id='telefono1' name="telefono1" value="" maxlength=8/> <br>
			<label id="l_telefono1" class="label_error" ></label>
		</div>
		<div class="div_input">
			Telefono 2
			<input type="text" id='telefono2' name="telefono2" value="" maxlength=8/> <br>
			<label id="l_telefono2" class="label_error" ></label>
		</div>
		<div class="div_input">
			Salario <span style="color:red;">*</span>
			<input type="text" id='salario' name="salario" value="" maxlength=45/> <br>
			<label id="l_salario" class="label_error" ></label>
		</div>
		<div class="div_input">
			DPI <span style="color:red;">*</span>
			<input type="text" id='dpi' name="dpi" value="" maxlength=15/> <br>
			<label id="l_dpi" class="label_error" ></label>
		</div>
		</form>
	</div>
	<div class="div_clear"></div>
		<input type="submit" id="crear" value="Crear"/>
		<input type="submit" id="modificar" value="Modificar"/>
		<input type="submit" id="eliminar" value="Eliminar"/>

</div>

</body>
</html>