<form action="" id="seleccion_propiedad" method="post">
	<h2>Busqueda de propiedades</h2>
	<p>Seleccione la zona de la propiedad:<p>
	<select name="Zona">
		<option value="Pinamar">Pinamar</option>
		<option value="Mar del Plata">Mar del Plata</option>
		<option value="San Clemente del Tuyú">San Clemente del Tuyú</option>
		<option value="Las Toninas">Las Toninas</option>
		<option value="Santa Teresita">Santa Teresita</option>
		<option value="Mar del Tuyú">Mar del Tuyú</option>
		<option value="Costa del Este">Costa del Este</option>
		<option value="Aguas Verdes">Aguas Verdes</option>
		<option value="Lucila del Mar">Lucila del Mar</option>
		<option value="Costa Azul">Costa Azul</option>
		<option value="San Bernardo">San Bernardo</option>
		<option value="Mar de Ajó">Mar de Ajó</option>
		<option value="Nueva Atlantis">Nueva Atlantis</option>
		<option value="Pinar del Sol">Pinar del Sol</option>
		<option value="Costa Esmeralda">Costa Esmeralda</option>
		<option value="Cariló">Cariló</option>
		<option value="Villa Gesell">Villa Gesell</option>
		<option value="Mar de las Pampas">Mar de las Pampas</option>
		<option value="Miramar">Miramar</option>
		<option value="Necochea">Necochea</option>
	</select>
	
	<br />
	<p>Seleccione el tipo de propiedad:<p>
	<select name="Tipo">
		<option value="Casa">Casa</option>
		<option value="Duplex">Duplex</option>
		<option value="Departamento">Departamento</option>
		<option value="PH">PH</option>
	</select>
	<br />
	<p>Seleccione las comodidades que busca de la propiedad:<p>
	
	<input type="checkbox" id="parrilla" name="Comodidad[]"/>
	<label for="parrilla">Parrilla</label>
	<br />	
	<input type="checkbox" id="pileta" name="Comodidad[]"/>	
	<label for="pileta">Pileta</label>
	<br />	
	<input type="checkbox" id="cochera" name="Comodidad[]"/>
	<label for="cochera">Cochera</label>
	<br />	
	<input type="checkbox" id="wifi" name="Comodidad[]"/>
	<label for="wifi">WiFi</label>
	<br />	
	<input type="checkbox" id="satelital" name="Comodidad[]"/>
	<label for="satelital">Television Satelital</label>	
	<br />	
	<input type="checkbox" id="cable" name="Comodidad[]"/>
	<label for="cable">Television con Cable</label>
	<br />	
	<input type="checkbox" id="mucama" name="Comodidad[]"/>
	<label for="mucama">Servicio de Mucama</label>
	<br />	
	<input type="checkbox" id="blanquería" name="Comodidad[]"/>
	<label for="blanqueria">Servicio de Blanqueria</label>
	<br />	
	<input type="checkbox" id="desayuno" name="Comodidad[]"/>
	<label for="desayuno">Servicio de Desayuno</label>
	<br />
	<input type="checkbox" id="juegos" name="Comodidad[]"/>
	<label for="juegos">Sala de Juegos</label>
	<br />
	<input type="submit" value="Buscar" />
<form>