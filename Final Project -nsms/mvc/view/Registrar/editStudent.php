<!DOCTYPE html>
<html>
  <head>
    <title>Student List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      function editStudent(id) {
        $.ajax({
          url: "addStudents.php",
          method: "GET",
          data: {id: id},
          success: function(response) {
            var data = JSON.parse(response);
            $("#edit-id").val(data.id);
            $("#edit-name").val(data.name);
            $("#edit-age").val(data.age);
            $("#edit-gender").val(data.gender);

            $("#edit-form").show();
          },
          error: function() {
            alert("Failed to get student data");
          }
        });
      }

      function deleteStudent(id) {
        if (confirm("Are you sure you want to delete this student?")) {
          $.ajax({
            url: "deleteStudent.php",
            method: "POST",
            data: {id: id},
            success: function() {
              location.reload();
            },
            error: function() {
              alert("Failed to delete student");
            }
          });
        }
      }
    </script>
  </head>
  <body>
    <h1>Student List</h1>
    <table>
      <thead>
        <tr>
          <th>Student ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $host = "localhost";
          $username = "root";
          $password = "";
          $database = "mydb";
          $connection = mysqli_connect($host, $username, $password, $database);

          if (mysqli_connect_errno()) {
            die("Failed to connect to database: " . mysqli_connect_error());
          }

          $query = "SELECT * FROM students";
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo '<td><button onclick="editStudent(' . $row["id"] . ')">Edit</button> / <button onclick="deleteStudent(' . $row["id"] . ')">Delete</button></td>';
            echo "</tr>";
          }

          mysqli_close($connection);
        ?>
      </tbody>
    </table>