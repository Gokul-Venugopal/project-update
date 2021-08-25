<h1 style="color: darkred;">Online Appointment Booking</h1>
 <h2 style="color: darkred;">Update</h2>
 <link rel="stylesheet" href="style.css">
</head>
<a href="https://projectinsert.herokuapp.com/">
    <button>Home</button>
    </a>
    
	<a href="https://projectvieww.herokuapp.com/">
    <button>Retrieve</button>
    </a>

	<a href="https://projectupdates.herokuapp.com/">
    <button>Update</button>
    </a>
	<a href="https://projectdelete.herokuapp.com/">
    <button>Delete</button>
    </a>
    <br><br>

    <style>
   body {
            background-image: url('https://www.maketecheasier.com/assets/uploads/2016/09/settings-app-not-working-featured.jpg');
			position: center;
        }
     </style>

<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE record set Adhaar_Number='" . $_POST['Adhaar_Number'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', Age='" . $_POST['Age'] . "' ,Previous_Health_Condition='" . $_POST['Previous_Health_Condition'] . "' ,Present_Health_Condition='" . $_POST['Present_Health_Condition'] . "' ,phonenumber='" . $_POST['phonenumber'] . "'  ,specs='" . $_POST['specs'] . "'  ,Date_of_Appointment='" . $_POST['Date_of_Appointment'] . "'  ,Time_Slot='" . $_POST['Time_Slot'] . "' WHERE Adhaar_Number='" . $_POST['Adhaar_Number'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM record WHERE Adhaar_Number='" . $_GET['Adhaar_Number'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update  Data</title>

</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php"> List</a>
</div>
First name: <br>
<input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>">
<br>
Last name: <br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br>
Age: <br>
<input type="text" name="Age" class="txtField" value="<?php echo $row['Age']; ?>">
<br>
Aadhar_Number: <br>
<input type="hidden" name="Adhaar_Number" class="txtField" value="<?php echo $row['Adhaar_Number']; ?>">
<input type="text" name="Adhaar_Number"  value="<?php echo $row['Adhaar_Number']; ?>">
<br>
Previous Health Condition: <br>
<input type="text" name="Previous_Health_Condition" class="txtField" value="<?php echo $row['Previous_Health_Condition']; ?>">
<br>
Present Health Condition: <br>
<input type="text" name="Present_Health_Condition" class="txtField" value="<?php echo $row['Present_Health_Condition']; ?>">
<br>
phonenumber: <br>
<input type="text" name="phonenumber" class="txtField" value="<?php echo $row['phonenumber']; ?>">
<br>
Doctor Specialization: <br>
<input type="text" name="specs" class="txtField" value="<?php echo $row['specs']; ?>">
<br>
Date of Appointment: <br>
<input type="text" name="Date_of_Appointment" class="txtField" value="<?php echo $row['Date_of_Appointment']; ?>">
<br>
Time Slot: <br>
<input type="text" name="Time_Slot" class="txtField" value="<?php echo $row['Time_Slot']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>
