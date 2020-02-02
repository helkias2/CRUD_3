<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url()?>games" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Games</h2>
	</div>

	<div class="table-responsive">
		<table id="tableList" class="table table-bordered table-hover">
			<thead>
			<?php 
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
				<td><input type="button" id="detalhes" value="<?=$games['id']?>" class="btn btn-primary" data-toggle="modal" data-target="#addBookDialog"></td>
			</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>


