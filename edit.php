<?php

include 'connection.php';

$id = $_REQUEST['page_id'] ;

$edit = "SELECT * FROM pages WHERE page_id = $id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

	$pagetitle = $_POST['pagetitle'];
	$pagedes = $_POST['pagecontent'];

	$update = "UPDATE pages SET page_title = '$pagetitle', page_des = '$pagedes' WHERE page_id = $id";

	if(mysqli_query($connect, $update)){
		echo "<script>alert('Record Updated')</script>";
	} else {
		echo '<script></script>';
	}

} 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Create Page</title>
  </head>
  <body>
  
	<div class="container">
		<h1>New Page</h1>
	  <form method="post" action="">
		  <div class="form-group">
			<label for="exampleFormControlInput1">Page Title</label>
			<input type="text" name="pagetitle" class="form-control" id="exampleFormControlInput1" placeholder="Page Title" Value="<?php echo $row['page_title'] ; ?>">
		  </div>
		  
		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Page Content</label>
			<textarea class="form-control" name="pagecontent" id="exampleFormControlTextarea1" rows="3" Value="<?php echo $row['page_title'] ; ?>"></textarea>
		  </div>
		  <div class="form-group">
			<button class="btn btn-danger" name="update" type="submit">Save</button>
		  </div>
		</form>
	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>