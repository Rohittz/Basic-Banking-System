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
    <title>All Transaction</title>
</head>
<body>

</head>
<body>
 

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
            <center><h1><b>Transaction Details</b></h1></center>
				<div class="table100">
					
                        <?php
                        
                        $errors=array();
                        $con=mysqli_connect("localhost","root","","test");
                        if($con->connect_error)
                        die("Connection failed :".$con->connect_error);

                        if(count($errors)==0){
                            
                            $result = mysqli_query($con,"SELECT * FROM `transfer`;");
                            if(mysqli_num_rows($result)>0){
                            echo "<table>
                            <thead>
                            <tr class='table100-head'>
								
								<th class='column1'>Date-Time</th>
                                <th class='column2'>Transfer Amount</th>
                                <th class='column3'>Sender Acc. No.</th>
                                <th class='column4'>Receiver Acc. No.</th>
                                <th class='column5'>Remark</th>
                                
							</tr>
						</thead>";
                        while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td class='column1'>   " . $row['date_time'] . "</td>";
                            echo "<td class='column2'>   " . $row['transfer_amount'] . " INR</td>";
                            echo "<td class='column3'>   " . $row['sender_account_number'] . "</td>";
                            echo "<td class='column4'>   " . $row['receiver_account_number'] . "</td>";
                            echo "<td class='column5'>   " . $row['remark'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            }
                            else{
                                array_push($errors,"No data found");
                            }
                            }
                            mysqli_close($con);
                            ?>
                            
                            
                            <?php  if (count($errors) > 0) : ?>
                            <div class="error">
                                <?php foreach ($errors as $error) : ?>
                                    <p><?php echo $error ?></p>
                                <?php endforeach ?>
                            </div>
                            <?php  endif ?>

							
						<tbody>
								
								
						</tbody>
					</table>
                    <form action="index.php" method="post"/>
<center><input class="button" type="submit" value="Home" /></center>
</form>
				</div>
			</div>
		</div>
	</div>

    <style>
        @media screen and (min-width: 992px){
        .column1 {
  width: 222px;
  padding-left: 40px;
  text-align: center;
}

.column2 {
  width: 300px;
  text-align: center;
}

.column3 {
  width: 300px;
  text-align: center;
}

.column4 {
  width: 300px;
  
  text-align: center;
}
.column4 {
  width: 187px;
  
  text-align: center;
}
.column5 {
  width: 182px;
  
  text-align: center;
}
h1{
                    color: white;
					font-size:30px;
                    padding-left: 26px;
                    padding-bottom: 26px;
					text-align:center;
					padding-top:30px;
                    background-color: rgba(0,0,0,0)
                }
                .button {
  background-color:lightsalmon; /* Green */
  border: none;
  color: black;
  padding: 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 15px 10px;
  cursor: pointer;
  border-radius:30%;
  font-weight:bold;
}}
@media screen and (max-width: 992px){
    table tbody tr td:nth-child(1):before {
    content: "Date-Time";
  }
  table tbody tr td:nth-child(2):before {
    content: "Transfer Amount";
  }
  table tbody tr td:nth-child(3):before {
    content: "Sender Acc. No";
  }
  table tbody tr td:nth-child(4):before {
    content: "Receiver Acc. No.";
  }
  table tbody tr td:nth-child(5):before {
    content: "Remark";
  }
h1{
                    color: white;
					font-size:30px;
                    padding-left: 26px;
                    padding-bottom: 26px;
					text-align:center;
					padding-top:30px;
                    background-color: rgba(0,0,0,0)
                }
                .button {
  background-color:lightsalmon; /* Green */
  border: none;
  color: black;
  padding: 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 15px 10px;
  cursor: pointer;
  border-radius:30%;
  font-weight:bold;
}
    </style>
    
    
</body>
</html>
</body>
</html>