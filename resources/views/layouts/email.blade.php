<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Petición via pagina web</h2>

		<div style="">
			<table>
				<tr>
					<td>Nombre:</td>
					<td>{{$name}}</td>
				</tr>
				<tr>
					<td>Dirección:</td>
					<td>{{$addres}}</td>
					
				</tr>
				<tr>
					<td>Correo electrónico:</td>
					<td>{{$email}}</td>
				</tr>
				<tr>
					<td>Cometarios:</td>
					<td>{{$description}}</td>
					
				</tr>
				<tr>
					<td>Fecha:</td>
					<td>{{date("d-m-Y")}}</td>
					
				</tr>
			</table>
		</div>
	</body>
</html>