<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Games</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
			<?php 
			// echo "<pre>";
			// print_r($litas_de_games); 
			
			// echo "</pre>";
			?>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Price</th>
					<th>Category</th>
					<th>Developer</th>
					<th>Actions</th>
				</tr>
			
			</thead>
			<tbody>
			<?php foreach($litas_de_games as $games):?>
			<tr>
				<td><?=$games['id']?></td>
				<td><?=$games['name']?></td>
				<td><?=$games['price']?></td>
				<td><?=$games['developer']?></td>
				<td><?=$games['release_date']?></td>
				<td><a href="#" class="btn btn-primary">Detalhes</a></td>
			</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Users</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Country</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</main>


