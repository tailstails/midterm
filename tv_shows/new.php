<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<header>
  <h1 class="display-1">Tv Shows</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/tv_shows/insert.php' method='post'>
	<div class='form-group'>
		<label>Title</label>
		<input class="form-control" type="text" name="title">
	</div>

	<div class='form-group'>
		<label>Description</label>
		<input class="form-control" type="text" name="description">
	</div>

	<div class='form-group'>
		<label>Rating</label>
		<input class="form-control" type="number" name="rating">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>