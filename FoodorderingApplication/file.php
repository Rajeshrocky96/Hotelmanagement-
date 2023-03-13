<html>

<body>
    <style>
        table,td{
            border: solid 4px ;
            padding:20px;
            margin:40px;
            text-align: center;
        
           
           
        }
        h3{
            font-size: 30px;
                display:flex;
           justify-content: center;
            }
        table{
            background-color:lightgreen;
           display:flex;
           justify-content: center;
            
        
        }
h1{
    text-align: center;
color:darkblue;
font-size: 40px;
}
        
        tr{
            background-color: gray;
        }
        </style>
</body>
    </html>

<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="food";


$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
echo "connection is error".mysqli_connect_error();
exit;}
$sql= "SELECT * from fooditems";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo "not connect".mysqli_error($conn);
    exit;
}


$t=array($_GET['v1'],$_GET['v2'],$_GET['v3'],$_GET['v4'],$_GET['v5'],$_GET['v6'],$_GET['u1'],$_GET['u2'],$_GET['u3'],$_GET['u4'],$_GET['u5'],$_GET['u6']);


 $i=0;
 $total=0;
 echo "<h1> Bill for Items</h1>";
 echo"<table ><tr><th><h3>ID</h3></th><th><h3>ItemName</h3></th><th><h3>Price</h3></th><th><h3>ItemPrice</h3></th></tr>";
while(($row = mysqli_fetch_assoc($result)) && ($i<12))
   {

    echo " <tr><td>".$row['ID']."</td> <td>".$row['ItemName']."</td><td>".$row['Price']."</td><td>".$t[$i]*$row['Price']."</td></tr>";
    $total=$total+$t[$i]*$row['Price'];
    $i++;
   
   }
  echo "</table>";
   echo "<h3>Total Price of the items are:.$total</h3>";

mysqli_close($conn);
?>


<!-- <table>
    <tr>
        <td><?echo $row['ID'];?></td>
        <td><?echo $row['ItemName'];?></td>
        <td><?echo $row['Price'];?></td>
</tr>
</table>

