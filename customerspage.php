<html>
<head>
<title>Customers page</title>
<link rel="stylesheet" type="text/css" href="bank.css">
<style>

body{
background-image: url('bgocu2.jpg');
background-repeat: no-repeat;
background-size: 100% 100%;
}
table{
background-color:#D3D3D3;
margin: auto;
width: 1020px;
border: 2px solid black;
padding: 5px;
}
td{
text-align:center;
}
h1{
padding-left:180px;
color:#ffcc99;
}
table{
    background-color:white;
}
td{
    height:50px;
}
.footer{
    position:bottom;
    text-align:center;
    color:#ffcc99;
}
</style>
</head>
<body>
<div class="navbar" >
<button ><a href="index.html">Home</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="#">View All Customers</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="transfermoney.php" >Transfer Money</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="transactionhistory.php" >Transaction History</a></button>
</div>
<img src="logo.jpg" style="background-color:white;"width="100px" height="100px" alt="img">
<h1><b>The Sparks Foundation Bank</b></h1><br><br>
<?php
include 'config.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    ?><table border="2" width="1020px"><tr><th>Account No.</th><th>Customer Name</th><th>Email Id</th><th>Gender</th><th>Balance</th></tr><?php
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td> " . $row["email"]. "</td><td>" . $row["gender"] ."<td>" . $row["balance"] . "</td></tr>";
    }
  } else {
    echo "0 results";
  }
  ?></table>
  <div class="footer"><p> Designed by mssvp </p></div>
</body>
</html>

