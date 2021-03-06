<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
 require_once ABSPATH.'controle/eventos.php';
 require_once ABSPATH.'opcoes/Evento/gridEventos.php';

?>
<h1 class="text-center" style="padding-top: 40px; padding-bottom: 30px">Eventos</h1>

<div class="text-right h2"  style="padding-bottom: 30px; padding-left: 20px;padding-right: 20px">
				<a class="btn btn-primary" href="?page=evento_add"><i class="fa fa-plus"></i> Novo Evento</a>
				<a class="btn btn-default" href="?page=eventos"><i class="fa fa-refresh"></i> Atualizar</a>
			</div>
<div class="row border border-white rounded" style="padding-bottom: 30px; padding-left: 20px;padding-right: 20px">

<table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Ano</th>
				<th>Data Início</th>
				<th>Data Final</th>
				<th>Opções</th>
			</tr>
		</thead>
		<tbody>
<?php
	$eventos = allEventos();
	echo generateGrid($eventos);

?>

</div>
