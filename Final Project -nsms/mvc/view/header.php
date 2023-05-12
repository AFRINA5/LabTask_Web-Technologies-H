<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
    

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
    
        .textWhite
        {
            color:white;text-shadow:
                -1px 0px 0px red,
                1px 0px 0px red,
                0px -1px 0px red,
                0px 1px 0px red;color: white
        }

.header {
  overflow: hidden;
  background-color: transparent;
  padding: 5px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <div class="header-left">
  <img src='../upload/LOGO.jpg' alt='Site Logo' class="center" width="200" height="100" align="center">
  <h1 style="text-align:left"> </h1>
  </div>
    <h1 class="textWhite" align = 'center'> Student Management &nbsp; </h1>
  <div class="header-right">
    <a href="../view/home.php" class="textWhite">Home</a>
    <a href="../view/login.php" class="textWhite"> Employee </a>

  </div>
</div>


</body>
</html>
