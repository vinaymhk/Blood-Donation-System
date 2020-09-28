<?php
ob_start();
session_start();
require "DB_conn.php";

?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" href="/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/script.js"></script>



</head>
<body bgcolor="#9ACD32">

<div id="comname">
		<br><br>BLOOD <b>DONATION <b>SYSTEM</b>
	</div>
<div class="col-12" style="height: 650px">
	
	<div id="nav" class="col-12"> /* Navigation Bar */
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="register.php">Be A Donor</a></li>
		  <li><a href="change_details.php">Change Details</a></li>
		  <li><a href="find_blood.php">Find Donor</a></li>
		 
		</ul>
	</div>
	<span id="info1">Find A Blood Donor</span>
	<div id="info" class="col-12">
		<form>
				<select name="bloodgroup"  onchange="ha(this);">  /* Drop Down List */
						<option value="">Enter Blood Group</option>
						<option value="A pos">A+</option>
						<option value="A neg">A-</option>
						<option value="B pos">B+</option>
						<option value="B neg">B-</option>
						<option value="O pos">O+</option>
						<option value="O neg">O-</option>
						<option value="AB pos">AB+</option>
						<option value="AB neg">AB-</option>
				</select>
		</form>
	</div>


</div>

	<div style="margin: 0; padding: 5%; text-align: center;">
		<span style="font-size: 40px;color: white;font-weight: bold;">OUR VISIONS</span><br><br>
		<p style="text-align: left;"><p>To pave way for a safer and better tommorrow.</p>
		<p>Safer, by bringing blood donors and those in need to a common platform.</p>
		<p>To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors in New Jersey; thereby fulfilling every blood request in this city.</p>
		</p>
	</div>
	<div style="padding: 5%; text-align: center; overflow: auto;">
		<span class="col-4" style="float: left; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-bed" aria-hidden="true"></i><br><br><br><h3>Compassion</h3> Compassinate toward the betterment of the society
		</span>
		
		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-child" aria-hidden="true"></i><br><br><br><h3>Advancement</h3>Using technology for fulfilment of society need
		</span>

		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-building" aria-hidden="true"></i><br><br><br><h3>Network</h3> Connecting people to a common platform
		</span>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;"> /* Footer*/
	<?php include "footer.php"; ?>
</div>







<script>carousel();
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides col-12");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


</script>

</body>


</html>