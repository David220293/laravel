<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
<div class="col-md-6 ">
	@include('layouts.nav')
	@include('partial.left')
</div>
<div class="col-md-6 ">
		@include('partial.right')

</div>
<div class="">
	<p class="lead text-center">Los layouts nos sirven para no tener que escribir y escribir el mismo código una y otra vez, de esta manera se puede incluir esa parte de codigo en donde sea necesario.</p>
	<p class="lead text-center">Los partials es fragmentar la página en distintas partes para despues al unir se haga una completa, esta nos ayuda a tener un codigo mas limpio y ordenado.</p>
	  <h3 class="lead text-center"><?php echo $fecha ?></h3>

</div>
<div>
	@include('layouts.footer')
</div>

</body>
</html>