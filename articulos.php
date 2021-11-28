<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Formulario registro de articulos</h1>
			</div>

			<div class="articulo">
			<article>
					<p><b><i>Articulos</i></b></p>
					<br/>
					<p> Tenemos como objetivo llevar a nuestros clientes la mejor calidad en productos es por ello 
						que para nosotros es muy importante nuestros proveedores de mercancía de los diferentes 
						departamentos que manejamos. Cada producto ingresado en sucursal debe pasar por rigurosas 
						pruebas de seguridad para cuidar de cada uno de nuestros clientes.  </p><br>
                        <img class="imgs" src="img/articulos.jpg" height=200px width=300px><br><br>
						Para ingresar la entrada de un productos llena el siguiente formulario.  
					<br/><br>
			</article>

			<article class="form-register">
					
					<h4>Formulario de Registro</h4>
					<input class="controls" type="text" name="codigo" id="codigo" placeholder="Ingrese el codigo">
					<input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre del articulo">
					<input class="controls" type="text" name="piezas" id="pezas" placeholder="Ingrese Numero de piezas ingresadas">
					<input class="controls" type="text" name="proveedor" id="proveedor" placeholder="Ingrese el proveedor">
					<input class="controls" type="text" name="precio" id="precioo" placeholder="Ingrese el precio">
					<input class="botons" type="submit" value="Registrar Articulo">
					<br>
					</article>
			</div>

			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>