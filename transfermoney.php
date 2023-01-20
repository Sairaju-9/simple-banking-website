<html>
<head>
<title>TransferMoney</title>
<link rel="stylesheet" type="text/css" href="bank.css">
<style>
h1{
    padding-left:180px;
    color:#ffcc99;
    }
h2{
text-align:center;
color:#ffcc99;
}
img{
padding-left:20px;
padding-top:20px;
background-color:white;
}
form{
text-align:center;
}
h1{
padding-left:180px;
}
table{
background-color:#D3D3D3;
margin: auto;
width: 1020px;
border: 2px black;
padding: 5px;
}
td{
    border: 2px solid black;
    height:50px;
    padding:10px; 
    text-align:center;

}
body{
background-image: url('bgocu2.jpg');
background-repeat: no-repeat;
background-size: 100% 100%;
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
<button ><a href="index.html" >Home</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="customerspage.php" >View All Customers</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="#" >Transfer Money</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button ><a href="transactionhistory.php" >Transaction History</a></button>
</div>
<img src="logo.jpg" width="100px" height="100px" alt="img">
<h1><b>The Sparks Foundation Bank</b></h1>

<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <h2>Transfer Money</h2>
        <br>
        <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
            
                    <table>
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">S.No.</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead><br>
                        <tbody>
                <?php 
                    $cnt=1;
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $cnt;; ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2">Rs. <?php echo $rows['balance']?> /-</td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #e6b31a;" style="border-radius:0%;">Proceed</button></a></td> 
                    </tr>
                <?php
                $cnt=$cnt+1;
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
   
        </div> 
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
<div class="footer"><p> Designed by mssvp </p></div>
</body>
</html>
         