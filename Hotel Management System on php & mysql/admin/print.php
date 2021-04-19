
<html>
<head>

<link rel="stylesheet" type="text/css" href="css\print.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });

		</script>
</head>
<body>

<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['pid'];
	
	
	
	$sql ="select * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$troom = $row['troom'];
		$bed = $row['tbed'];
		$nroom = $row['nroom'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		$meal = $row['meal'];
		$ttot = $row['ttot'];
		$mepr = $row['mepr'];
		$btot = $row['btot'];
		$fintot = $row['fintot'];
		$days = $row['noofdays'];
		
		
		
	
	}
	
									$type_of_room = 0;       
									if($troom=="Superior Room")
									{
										$type_of_room = 320;
									
									}
									else if($troom=="Deluxe Room")
									{
										$type_of_room = 220;
									}
									else if($troom=="Guest House")
									{
										$type_of_room = 180;
									}
									else if($troom=="Single Room")
									{
										$type_of_room = 150;
									}
									
									if($bed=="Single")
									{
										$type_of_bed = $type_of_room * 1/100;
									}
									else if($bed=="Double")
									{
										$type_of_bed = $type_of_room * 2/100;
									}
									else if($bed=="Triple")
									{
										$type_of_bed = $type_of_room * 3/100;
									}
									else if($bed=="Quad")
									{
										$type_of_bed = $type_of_room * 4/100;
									}
									else if($bed=="None")
									{
										$type_of_bed = $type_of_room * 0/100;
									}
									
									if($meal=="Room only")
									{
										$type_of_meal=$type_of_bed * 0;
									}
									else if($meal=="Breakfast")
									{
										$type_of_meal=$type_of_bed * 2;
									}else if($meal=="Half Board")
									{
										$type_of_meal=$type_of_bed * 3;
									
									}else if($meal=="Full Board")
									{
										$type_of_meal=$type_of_bed * 4;
									}
	
	?>

<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

   
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            Day & Night Hotel
                            </a>
                        </h2>
                        <div>Shahrah-e-Faisal,Karachi</div>
                        <div>0336-246-3846</div>
                        <div>Day&NightHotel@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><p><?php echo $title.$fname." ".$lname ?> </p></h2>
                        
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3</h1>
                        <div class="date">Date of Invoice: <input type='date' id='hasta' value='<?php echo date('Y-m-d');?>'></div>
                        
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="text-left">Item</th>
                            <th class="text-left">No of Days</th>
                            <th class="text-right">Rate</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no"><span ><?php echo $troom; ?></span></td>
						<td class="text-left"><span ><?php echo $days; ?> </span></td>
						<td class="unit"><span data-prefix>$</span><span ><?php  echo $type_of_room;?></span></td>
						<td class="qty"><span ><?php echo $nroom;?> </span></td>
						<td class="total"><span data-prefix>$</span><span><?php echo $ttot; ?></span></td>
                        </tr>
                        <tr>
                            <td class="no"><span ><?php echo $bed; ?>  Bed </span></td>
						<td class="text-left"><span ><?php echo $days; ?></span></td>
						<td class="unit"><span data-prefix>$</span><span ><?php  echo $type_of_bed;?></span></td>
						<td class="qty"><span ><?php echo $nroom;?> </span></td>
						<td class="total"><span data-prefix>$</span><span><?php echo $btot; ?></span></td>
                        </tr>
                        <tr>
                       		<td class="no"><span ><?php echo $meal; ?>  </span></td>
						<td class="text-left"><span ><?php echo $days; ?></span></td>
						<td class="unit"><span data-prefix>$</span><span ><?php  echo $type_of_meal?></span></td>
						<td class="qty"><span ><?php echo $nroom;?> </span></td>
						<td class="total"><span data-prefix>$</span><span><?php echo $mepr; ?></span></td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TOTAL</td>
                            <td><?php echo $fintot; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Ammount Paid</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Balance Due</td>
                            <td><?php echo $fintot; ?></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>Day & Night Hotel</div>
                    <div class="notice">Will be pleasure to serve you again</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</body>
</html>
<?php
$free="Free";
$nul = null;
$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";
if(mysqli_query($con,$rpsql))
{
	$delsql= "DELETE FROM `roombook` WHERE id='$id' ";
	
	if(mysqli_query($con,$delsql))
	{
	
	}
}
?>
<?php 

ob_end_flush();

?>