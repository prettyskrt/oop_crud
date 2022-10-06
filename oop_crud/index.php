<?php
include "db/dbconfig.php";

$data = new myDB();
$data->select('tbl_students','*');
$results = $data->res;

?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP CRUD</title>
</head>
<body>
	<form method="post" action="add.php">
		<input type="text" name="name" placeholder="Full Name" required>
		<input type="'email" name="email" placeholder="Email" required>
		<input type="text" name="course_year_section" placeholder="Course Year & Section">
		<input type="submit" name="add" value="ADD">

	</form>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Course Year & Section</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_assoc($results)): ?>
				<tr>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['course_year_section']; ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>