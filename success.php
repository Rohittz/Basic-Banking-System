<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="images2/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
    
<?php
$errors=array();
$con=mysqli_connect("localhost","root","","test");
if($con->connect_error)
die("Connection failed :".$con->connect_error);

$sender=mysqli_real_escape_string($con,$_POST['sendacc']);
$reciever=mysqli_real_escape_string($con,$_POST['recacc']);
$transfer_amt=mysqli_real_escape_string($con,$_POST['transfer']);
$remark=mysqli_real_escape_string($con,$_POST['remark']);

if(count($errors)==0){
	echo "<center><h1><u>TRANSFER DETAILS</u></h1></center>";
	echo "<center><h2><u>Before Transfer</u></h2></center>";
	// echo "<center><h3><i><u>Sender Details</u></i></h3></center>";
	$sql=mysqli_query($con,"select * from accounts where C_no='$sender'");

	$sqlr=mysqli_query($con,"select * from accounts where C_no='$reciever'");

	if((mysqli_num_rows($sql)>0) and (mysqli_num_rows($sqlr)>0)){
echo "<table><thead>
<tr class='table100-head'>
                            
<th class='column1'>Account Number</th>
<th class='column2'>Name</th>
<th class='column3'>Email</th>
  <th class='column4'>Current Balance</th>
 <th class='column5'>Remark</th>
                            
</tr>
</thead>
<tbody>
";

while(($r = mysqli_fetch_array($sql)) and ($r1 = mysqli_fetch_array($sqlr)))
{
echo "<tr>";
echo "<td class='column1'>" . $r['C_no'] . "</td>";
echo "<td class='column2'>" . $r['C_name'] . "</td>";
echo "<td class='column3'>" . $r['C_mail'] . "</td>";
echo "<td class='column4'>" . $r['C_ballance'] . "</td>";
echo "<td class='column5'>" . $remark . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td class='column1'>" . $r1['C_no'] . "</td>";
echo "<td class='column2'>" . $r1['C_name'] . "</td>";
echo "<td class='column3'>" . $r1['C_mail'] . "</td>";
echo "<td class='column4'>" . $r1['C_ballance'] . "</td>";
echo "<td class='column5'>" . $remark . "</td>";
echo "</tr>";
echo "</tr>";

}
echo "</tbody></table></br></br></br>";
}
echo "<center><h2><u>After Transfer</u></h2></center>";

$send_cur=mysqli_query($con,"select C_ballance from accounts where C_no='$sender'");
$rec_cur=mysqli_query($con,"select C_ballance from accounts where C_no='$reciever'");
$row_send = mysqli_fetch_array($send_cur);
$row_rec=mysqli_fetch_array($rec_cur);
	if($row_send['C_ballance']>$transfer_amt){
		$diff=$row_send['C_ballance']-$transfer_amt;
		$add=$row_rec['C_ballance']+$transfer_amt;
		mysqli_query($con,"update accounts set C_ballance='$diff' where C_no='$sender'");
		mysqli_query($con,"update accounts set C_ballance='$add' where C_no='$reciever'");
	
		$date=date('Y-m-d H:i:s');
		echo "<script>
      console.log('Arijit')
    </script>";
		//"insert into users (email,username,password) values('$email','$username','$password')";
		// date_time ; remark ; transfer_amt ; sender_account_number; 
		mysqli_query($con,"insert into transfer (date_time,remark,transfer_amount,sender_account_number,receiver_account_number) values('$date','$remark','$transfer_amt','$sender','$reciever')");
	}
	
	//insert into transfer table : work pending
	
	$sql=mysqli_query($con,"select * from accounts where C_no='$sender'");
	$sqlr=mysqli_query($con,"select * from accounts where C_no='$reciever'");
	if((mysqli_num_rows($sql)>0) and (mysqli_num_rows($sqlr)>0)){
echo "<table><thead>
<tr class='table100-head'>
                            
<th class='column1'>Account Number</th>
<th class='column2'>Name</th>
<th class='column3'>Email</th>
  <th class='column4'>Current Balance</th>
 <th class='column5'>Remark</th>
                            
</tr>
</thead>
<tbody>";
while($r = mysqli_fetch_array($sql)  and ($r1 = mysqli_fetch_array($sqlr)))
{
echo "<tr>";
echo "<td class='column1'>" . $r['C_no'] . "</td>";
echo "<td class='column2'>" . $r['C_name'] . "</td>";
echo "<td class='column3'>" . $r['C_mail'] . "</td>";
echo "<td class='column4'>" . $r['C_ballance'] . "</td>";
echo "<td class='column5'>" . $remark . "</td>";
echo "</tr>";
echo "</tr>";

echo "<tr>";
echo "<td class='column1'>" . $r1['C_no'] . "</td>";
echo "<td class='column2'>" . $r1['C_name'] . "</td>";
echo "<td class='column3'>" . $r1['C_mail'] . "</td>";
echo "<td class='column4'>" . $r1['C_ballance'] . "</td>";
echo "<td class='column5''>" . $remark . "</td>";
echo "</tr>";
echo "</tr>";
}
echo "</tbody></table></br></br></br>";
}







}
else{
	array_push($errors,"No data found");
}
?>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<form action="index.php" method="post">
<center><input class="button" type="submit" value="Home"/></center>
</form>
<style>
@media screen and (max-width: 992px){
    table tbody tr td:nth-child(1):before {
    content: "Acc. No";
  }
  table tbody tr td:nth-child(2):before {
    content: "Name";
  }
  table tbody tr td:nth-child(3):before {
    content: "Email";
  }
  table tbody tr td:nth-child(4):before {
    content: "Current Ball.";
  }
  table tbody tr td:nth-child(5):before {
    content: "Remark";
  }}
    body{
        background: linear-gradient(45deg, #4158d0, #c850c0);
    }
    h1,h2{
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .button{
      margin-top: 20px;
      font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 20%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    }
</style>
</body>
</html>





