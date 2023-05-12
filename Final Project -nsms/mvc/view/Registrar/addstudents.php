<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
    
    <style>
    
    
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    width: 50%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
}
        
        .header a.active {
  background-color: dodgerblue;
  color: white;
}

        .header a:hover {
  background-color: #ddd;
  color: black;
}

        
        
label {
    display: inline-block;
    width: 100px;
    font-weight: bold;
    margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 20px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 3px;
    cursor: pointer;
}
         .textWhite
        {
            color:white;text-shadow:
                -1px 0px 0px red,
                1px 0px 0px red,
                0px -1px 0px red,
                0px 1px 0px red;color: white
        }

input[type="submit"]:hover {
    background-color: #3e8e41;
}

#error-message {
    color: red;
    font-weight: bold;
    margin-bottom: 20px;
}
        
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color: cornflowerblue;
}
   

    
    </style>
</head>
<body>
    
    
    <div class="header-right" align="center">
        <img src='../../upload/LOGO.jpg' alt='Site Logo' class="center" width="200" height="100" align="center">
        <br>
    <a href="../home.php" class="btn btn-success ml-1">Home</a>
    <a href="../login.php" class="btn btn-success ml-1"> Employee </a>

  </div>
    
     
	<h1>Student Info</h1>
	<form id="student-form">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<br><br>
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
		<br><br>
        
        <label for="add">Address:</label>
		<input type="text" id="add" name="add">
		<br><br>
        
        
        <label for="add">DATE of Birth:</label>
		<input type="date" id="dob" name="dob">
		<br><br>
        
		<button type="submit">Submit</button>
	</form>
	<div id="response"></div>
	<script>
		$(document).ready(function() {
			$('#student-form').submit(function(event) {
				event.preventDefault();
				var name = $('#name').val();
				var email = $('#email').val();
				var phone = $('#phone').val();
				if (name.length < 3) {
					alert('Name should be at least 3 characters long');
					return false;
				}
				if (!email.includes('@')) {
					alert('Invalid email address');
					return false;
				}
				if (phone.length !== 10) {
					alert('Phone number should be 10 digits long');
					return false;
				}
				$.ajax({
					url: 'students.php',
					type: 'POST',
					data: { name: name, email: email, phone: phone },
					success: function(response) {
						$('#response').html(response);
					}
				});
			});
		});
	</script>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$add = $_POST['address'];
            
			$conn = mysqli_connect('localhost', 'root', '', 'mydb');
			if (!$conn) {
				die('Connection failed: ' . mysqli_connect_error());
			}
			$sql = "INSERT INTO students (name, email, phone,address) VALUES ('$name', '$email', '$phone','$add')";
			if (mysqli_query($conn, $sql)) {
				echo 'Student added successfully';
			} else {
				echo 'Error adding student: ' . mysqli_error($conn);
			}
			mysqli_close($conn);
		}
	?>
</body>
</html>
