<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
	<style>
         body{ font: 14px sans-serif;
        background-color: #19A7CE}

		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		form {
			display: inline-block;
			margin-right: 10px;
		}
        
          .textWhite
        {
            color:white;text-shadow:
                -1px 0px 0px red,
                1px 0px 0px red,
                0px -1px 0px red,
                0px 1px 0px red;color: white
        }
		form button {
			background-color: #f44336;
			color: white;
			padding: 8px 16px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		form button:hover {
			background-color: #d32f2f;
		}
	</style>
</head>
<body>
	<h1 class="textWhite" align = 'center'>Student List</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			if (isset($_POST["delete"])) {
				$id = $_POST["id"];

				$sql = "DELETE FROM students WHERE id='$id'";
				if ($conn->query($sql) === TRUE) {
					echo "<p>Student deleted successfully.</p>";
				} else {
					echo "Error deleting student: " . $conn->error;
				}
			}

			$sql = "SELECT * FROM students";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["id"] . "</td>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["email"] . "</td>";
					echo "<td>" . $row["age"] . "</td>";
					echo "<td>" . $row["gender"] . "</td>";
					echo "<td>" . $row["address"] . "</td>";
					echo "<td>";
					echo "<form action='editStudent.php' method='POST'>";
					echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
					echo "<button type='submit'>Edit</button>";
					echo "</form>";
					echo "<form action='students.php' method='POST'>";
					echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
					echo "<input type='hidden' name='delete' value='true'>";
					echo "<button type='submit'>Delete</button>";
					echo "</form>";
					echo "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='4'>No students found</td></tr>";
			}

            $conn->close();
            ?>
			
</tbody>
	</table>
</body>
</html>