<?php
include "connect.php";
/*if(isset($_POST['Date']) && ($_POST['Emp1Name']) && ($_POST['Status1']) && ($_POST['TodSal1']) && ($_POST['MonSal1']) && ($_POST['Out1']) && ($_POST['TotLoan1']) && ($_POST['PassMon1']) && ($_POST['DOI1']) && ($_POST['BusMon1']) && ($_POST['ConNo1']) && ($_POST['Add1']) && ($_POST['DOJ1']))
{*/
	echo $_SERVER['PHP_SELF'];
 $Date=$_POST['Date'];
 $Emp1Name=$_POST['Emp1Name'];
 $Status1=$_POST['Status1'];
 $TodSal1=$_POST['TodSal1'];
 $MonSal1=$_POST['MonSal1'];
 $Out1=$_POST['Out1']; 
 $TotLoan1=$_POST['TotLoan1'];
 $PassMon1=$_POST['PassMon1'];
 $DOI1=$_POST['DOI1'];
 $BusMon1=$_POST['BusMon1'];
 $ConNo1=$_POST['ConNo1'];
 $Add1=$_POST['Add1'];
 $DOJ1=$_POST['DOJ1'];

 
/*include ("se/connect.php");*/
 
$sql1="insert into emp1 values ('$Date', '$Emp1Name', '$Status1', '$TodSal1', '$MonSal1', '$Out1', '$TotLoan1', '$PassMon1', '$DOI1','$BusMon1', '$ConNo1', '$Add1' ,'$DOJ1')";

$a = mysqli_query($con,$sql1);
echo "Submitted";

mysqli_select_db($con,"attendance");
$p="select * from emp1 ";

$res1 = mysqli_query($con, $p);

mysqli_close($con);
/*}*/
?>


<!DOCTYPE>
<html>
<head>

<style>
div
{
	background-color:powderblue;
}

fieldset
{
	background-color:beige;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: lightgreen;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {
    background-color: lightgreen; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover 
{
    background-color: #4CAF50;
    color: white;
}
</style>

</head>
<body>
<!-- <button type="button"
style="background-color:yellow;margin-left:50px;margin-right:200px;display:block;margin-top:50%;margin-bottom:0%">
mybuttonname</button> -->

<form name="attendance" id="" action="" method="POST" >
<div align="center" width="100" height="50">
	<h1 align="center">ATTENDANCE</h1>
	<b>Today's Date : </b> <input type="date" name="Date" placeholder="Today's Date"
	                              style="margin-left:0%;margin-right:0px;display:block;margin-top:0%;margin-bottom:0%">
	<button class="" type="submit" name="logout" 
            style="margin-left:95%;margin-right:0px;display:block;margin-top:0%;margin-bottom:0%">LogOut</button>
</div> 

<fieldset>
	<legend>DETAILS</legend>
	<table align="center" >
		<tr>
			<th align="center">First Name</th>
			<th>:</th>
			<td><input type="text" name="Emp1Name" placeholder="Employee's First Name"></input></td>
		</tr>
		<tr>
			<th align="center">Status</th>
			<th>:</th>
			<td><input type="radio" name="Status1" value="1">Present<input type="radio" name="Status1" value="0">Absent</input></td>
		</tr>
		<tr>
			<th align="center">Today's Salary</th>
			<th>:</th>
			<td><input type="text" name="TodSal1" placeholder="Today's Salary"></input></td>
			<th align="center">Monthly Salary</th>
			<th>:</th>
			<td><input type="text" name="MonSal1" placeholder="Monthly Salary"></input></td>	
		</tr>
		<tr>
			<th align="center">Outstanding</th>
			<th>:</th>
			<td><input type="text" name="Out1" placeholder="Outstanding"></input></td>
			<th align="center">Total Loan</th>
			<th>:</th>
			<td><input type="text" name="TotLoan1" placeholder="Total Loan"></input></td>
		</tr>
		<tr>
			<th align="center">Pass Money</th>
			<th>:</th>
			<td><input type="text" name="PassMon1" placeholder="Pass Money"></input></td>
			<th align="center">Date of Issue</th>
			<th>:</th>
			<td><input type="date" name="DOI1" placeholder="Date of issue"></input></td>
		</tr>
		<tr>
			<th align="center">Bus Money</th>
			<th>:</th>
			<td><input type="text" name="BusMon1" placeholder="Bus Money"></input></td>
		</tr>
		
		<tr>
			<th align="center">Contact No</th>
			<th>:</th>
			<td><input type="number" name="ConNo1" placeholder="Your Contact No"></input></td>
		</tr>
		
		<tr>
			<th align="center">Address</th>
			<th>:</th>
			<td><textarea name="Add1" rows="3" cols="30" placeholder="Your Address"></textarea></td>
		</tr>
				
		<tr>
			<th align="center">Date of Joining</th>
			<th>:</th>
			<td><input type="date" name="DOJ1" placeholder="Date of Joining"></input></td>
		</tr>

	</table>
	
</fieldset>

		<input type="checkbox" required>I accept by the term & condition</input><br></br>
		<center><button class="button button1" type="submit" align="center" name="submit">Submit</button></center>

<div align="center">
<table align="center" border="2">
<tr>
	<td>Date</td>
	<td>Emp1Name</td>
	<td>Status1</td>
	<td>TodSal1</td>
	<td>MonSal1</td>
	<td>Out1</td>
	<td>TotLoan1</td>
	<td>PassMon1</td>
	<td>DOI1</td>
	<td>BusMon1</td>
	<td>ConNo1</td>
	<td>Add1</td>
	<td>DOJ1</td>
</tr>

</table>
</div>

</body>
</html>


<!--
include ("se/connect.php");
$p="select * from emp1 ";
if($res1 = mysqli_query($con, $p))
{
$num = mysqli_num_rows($res1);
}
while($row=mysqli_fetch_array($res1,MYSQLI_NUM))
{
	$Date=$row[0];
	$Emp1Name=$row[1];
	$Status1=$row[2];
	$TodSal1=$row[3];
	$MonSal1=$row[4];
	$Out1=$row[5];
	$TotLoan1=$row[6];
	$PassMon1=$row[7];
	$DOI1=$row[8];
	$BusMon1=$row[9];
	$ConNo1=$row[10];
	$Add1=$row[11];
	$DOJ1=$row[12];	
		
		
	echo "<tr>
		<td>$Date</td>
		<td>$Emp1Name</td>
		<td>$Status1</td>
		<td>$TodSal1</td>
		<td>$MonSal1</td>
		<td>$Out1</td>
		<td>$TotLoan1</td>
		<td>$PassMon1</td>
		<td>$DOI1</td>
		<td>$BusMon1</td>
		<td>$ConNo1</td>
		<td>$Add1</td>
		<td>$DOJ1</td>
		</tr>";

}
mysqli_close($con);

?>
->
