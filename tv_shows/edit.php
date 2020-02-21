<?php require_once('../_config.php'); 
include_once('_partials/_header.php'); 
include_once('_utilities/_connect.php');
$conn = connect();
$result = mysqli_query($conn, "SELECT * FROM tv_shows"); 

$row = mysqli_fetch_assoc($result);
var_dump($row);


?>

<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Select the row using the provided ID.
    3: Add the missing hidden field.
    4: Pre-populate the form with the values from the selected row.
    5: Ensure you're sending the form data to the update.php page.
-->

<header>
  <h1 class="display-1">Edit Tv Shows</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/tv_shows/update.php' method='post'>
	<input type = "hidden" name ="id" value="<?php echo $row['id']?>">
	<div class='form-group'>
		<label>Title</label>
		<input class="form-control" type="text" name="title" value="<?php echo $row['title']?>">
	</div>

	<div class='form-group'>
		<label>Description</label>
		<input class="form-control" type="text" name="description" value="<?php echo $row['description']?>">
	</div>

	<div class='form-group'>
		<label>Rating</label>
		<input class="form-control" type="number" name="rating" value="<?php echo $row['rating']?>">
	</div>

	<button class="btn btn-primary" type="submit">Update</button>
</form>

<?php include_once('_partials/_footer.php'); ?>