<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../css/colores.css">
		{literal}
			<script >
				function refrescar(){
				var p = window.parent;
				p.location.href='../';
				}
			</script>
		{/literal}
	</head>
	<body ONLOAD ="self.setTimeout('refrescar()',5000);">
		<center>
			<h1>{$mensage}</h1>
			<br>
			<h1>{$mensage1}</h1>
		</center>
	</body>
</html>
