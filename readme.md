<h1> Cubbe Summation </h1>
<span>Laravel - Wordpress</span>

http://localhost/cube_summation/wordpress/

laravel 5.4

php 7.1

mysql  15.1

JS:
jQuery 1.11.3
Bootstrap ^3

CSS:
Bootstrap ^3

<h2>Laravel</h2>
<h3>- View resources/views/welcome(/) </h3>
vista donde mostramos un formulario para el input de datos.

<h3> - Controller app/Http/Controllers/CubeController </h3>
Se obtienen los datos del input y se separan en variables para su adecuado manejo, de esta manera podemos enviar los datos a ejecutar casos de pruebas. En esta misma capa devolvemos los resultados obtenidos a la vista.

<h3> - Model Cube.php </h3>
Modelo del Cubo.

<h3> - TestCase app/Classes </h3>
<h4>TestCase.php</h4> Recibimos ls datos a travez del Controller y optenemos lo elementos de la linea de comando recibida y segun las operacion ejecutamos el comando requerido.

<h4>UpdateCommand.php</h4> Validamos los datos recibidos para las coordenadas. Si son erroneos, devolvemos un mensaje. De lo contrario  cambiamos el valor en la coordenada recibida en el Cubo y devolvemos el resultado.

<h4>QueryCommand.php</h4> Validamos los datos recibidos para las coordenadas. Si son erroneos, devolvemos un mensaje. De lo contrario realizamos la suma de valores en el Cubo y devolvemos el resultado.

<h2>Wordpress</h2>
<h3> - Plantilla wordpress/wp-content/themes/integro</h3>
<ul>
	<li>/assets
		<ul>
			<li>/css</li>
			<li>/images</li>
			<li>/js</li>
		</ul>
	</li>
	<li>/template-parts
		<ul>
			<li>/header</li>
			<li>/navigation</li>
		</ul>
	</li>
</ul>