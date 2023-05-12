<!DOCTYPE html>
<html>
<body>
    
<?php include ("header.php"); ?>

<?php
session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
    
    
    <style>
        
        .textWhite
        {
            color:white;text-shadow:
                -1px 0px 0px red,
                1px 0px 0px red,
                0px -1px 0px red,
                0px 1px 0px red;color: white
        }
        
    </style>
        
<h1 class = "textWhite" style="font-family: Arial, Helvetica, sans-serif;
  font-size: 20px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!!</h1>
<div style="text-align : center;">
<h2 align='right' class = "textWhite" >Start Typing Features</h2>

<h3 align='right'>Suggestions: <span id="txtHint"></span><h3/>
<h3 align='right'class = "textWhite" >Features Name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></h3>

</div>
    

<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "gethint.php?q="+str);
  xhttp.send();   
}
</script>

</body>
</html>





<?php  
require_once '../controller/eventInfo.php';

$events = fetchAllEvent();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif;
        background-image: url('../upload/Library.jpg'); }
        .wrapper{ width: 100px; padding: 20px; }
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;

  
    </style>
</head>
<body>
    
    <p align='center'>
        <a href="../View/Registrar/addstudents.php" class="btn btn-success ml-1">ADD Student</a>
        <a href="../View/Registrar/students.php" class="btn btn-success ml-1">Show Student</a>
        <a href="../view/Registrar/ardm.php" class="btn btn-success ml-1">Academic Management</a>
        
        <a href="../controller/logout.php" class="btn btn-danger ml-1">Sign Out of Your Account</a>
    <p style="color:white;text-align:center; border: 10px dotted black;
  padding: 15px;
  background: green;
  background-clip: padding-box;">
        Active Events
    </p>
    <table id="customers">
       
    <thead>
         
        <tr>
            <th>Name</th>
             <th>Event</th>
            <th>Approval Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($events as $i => $event): ?>
            <tr>
                <td><?php echo $event['client_name'] ?></td>
                <td><?php echo $event['event_name'] ?></td>
                <td><?php echo $event['price'] ?></td>
                <td><?php if ($event['approval_status'] == 0) {
                 echo "Not Approved"; 
                }
                else {
                echo "Approved";
                } ?></td>
                <td><a href="editEvent.php?id=<?php echo $event['id'] ?>">Edit</a>&nbsp<a href="../controller/deleteEvent.php?id=<?php echo $event['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
    

</table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      
    </p>
</body>
</html>



<?php
include ("../view/footer.php");
?>

