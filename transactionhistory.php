<html>
<head>
<title>Transcation History</title>
<link rel="stylesheet" type="text/css" href="bank.css">
<style>
 body{
background-image: url('bgocu2.jpg');
background-repeat: no-repeat;
background-size: 100% 100%;
}
h1{
padding-left:180px;
color:#ffcc99;
}
h2{
    text-align:center;
    color:#ffcc99;
}
.history{
background-color:#D3D3D3;
margin: auto;
border: 2px solid black;
padding: 10px;
width:1020px;
}
td,tr{
    width:50px;
    height:30px;
    border:2px solid black;
    text-align:center;
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
<button ><a href="customerspage.php">View All Customers</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="transfermoney.php" >Transfer Money</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="#" >Transaction History</a></button>
</div>
<img src="logo.jpg" style="background-color:white;"width="100px" height="100px" alt="img">
<h1><b>The Sparks Foundation Bank</b></h1><br>
<div class="container">
        <h2>Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="history" width="1020px">
        <thead style="color : black;" border="2px">
            <tr>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';

            $sql ="SELECT * FROM transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2">Rs. <?php echo $rows['balance']; ?> /-</td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td></tr>
            
        <?php
            }
    

        ?>
        </tbody>
    </table>
<div class="footer"><p> Designed by mssvp </p></div>
</body>
</html>