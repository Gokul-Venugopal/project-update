
<h1 style="color: darkred;">Online Appointment Booking</h1>
 <h2 style="color: darkred;">Update</h2>
<br><br>

<a href="http://localhost/project/index.php">
    <button>Home</button>
    </a>
    
	<a href="http://localhost/project/retrieve.php">
    <button>Retrieve</button>
    </a>

	<a href="http://localhost/project/update.php">
    <button>Update</button>
    </a>
	<a href="http://localhost/project/delete.php">
    <button>Delete</button>
</a>
<br><br>



<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM record");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
   
 </head>
<body>

<style>
   body {
            background-image: url('https://www.maketecheasier.com/assets/uploads/2016/09/settings-app-not-working-featured.jpg');
			position: center;
        }
     </style>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
<tr>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b> Age </b></td>
    <td><b>AdhaarNumber </td>
    <td> <b>Previous Health Condition</b></td>
    <td><b> Present Health Condition </b></td>
    <td><b>phonenumber</b></td>
    <td><b>Doctor Specialization</b></td>
    <td><b>DateofAppointment</b></td>
    <td><b>TimeSlot</b></td>
  </tr>
  		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	 <tr>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["Age"]; ?></td>
    <td><?php echo $row["Adhaar_Number"]; ?></td>
    <td><?php echo $row["Previous_Health_Condition"]; ?></td>
    <td><?php echo $row["Present_Health_Condition"]; ?></td>
    <td><?php echo $row["phonenumber"]; ?></td>
    <td><?php echo $row["specs"]; ?></td>
    <td><?php echo $row["Date_of_Appointment"]; ?></td>
    <td><?php echo $row["Time_Slot"]; ?></td>
    <td><a href="update-process.php?Adhaar_Number=<?php echo $row["Adhaar_Number"]; ?>">Update</a></td>
</tr>

			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>