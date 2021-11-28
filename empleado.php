<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Formulario del Empleado</h1>
			</div>

			<div class="articulo">
			<article>
					<p><b><i>Empleados</i></b></p>
					<br/>
					<p> Nustra mision es ser fuente de empleo, generando oportunidades de desarrollo y carrera al sector productivo, 
						contribuyendo con ello a elevar la calidad de vida de la comunidad.La experiencia que hemos 
						adquirido en el mercado nos facilita entender las necesidades de nuestros clientes y nos 
						compromete a proveerles las soluciones más adecuadas y la asesoría necesaria para su implementación. </p><br>
                        <img class="imgs" src="img/empleados.jpg" height=200px width=350px><br><br>
						Si deseas pertenecer a alguna de nuestras sucursales favor de llenar el siguiente formulario. 
					<br/><br>
			</article>
				<article class="form-register">
					
				<h4>Formulario de Registro</h4>
				<input class="controls" type="text" name="ciudad" id="ciudad" placeholder="Ingrese su ciudad">
                <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
                <input class="botons" type="submit" value="Registrar">
                <p><a href="#">¿Ya tengo Cuenta?</a></p>
                <br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>