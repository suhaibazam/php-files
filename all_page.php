<?php

include 'connection.php';

$pages = "SELECT * FROM pages";

$result = mysqli_query($connect, $pages);		   

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All Pages</title>
  </head>
  <body>
  
	<div class="container">
		<h1>All Pages</h1>
		
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Page Title</th>
				<th>Page Content</th>
				<th>Action</th>
			</tr>
			
			<?php
				if(mysqli_num_rows($result) > 0){
					
					while($row = mysqli_fetch_assoc($result)){
			
			?>
				<tr>
					<td><?php echo $row['page_id'] ; ?></td>
					<td><?php echo $row['page_title'] ; ?></td>
					<td><?php echo $row['page_des'] ; ?></td>
					<td>
						<a href="edit.php?page_id=<?php echo $row['page_id'] ; ?>" class="btn btn-dark">Edit</a>
						<a href="delete.php?page_id=<?php echo $row['page_id'] ; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php		
					}
		
				} else {
					echo 'No Record Found';
				}
			?>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		
		<div class="row">
			<div class="col"><a href="" class="btn btn-success">All Pages</a></div>
			<div class="col"><a href="create_page.php" class="btn btn-dark">Create New Page</a></div>
		</div>
	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>