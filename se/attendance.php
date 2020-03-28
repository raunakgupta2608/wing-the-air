<?php
include "connect.php";
/*if(isset($_POST['Date']) && ($_POST['Emp1Name']) && ($_POST['Status1']) && ($_POST['TodSal1']) && ($_POST['MonSal1']) && ($_POST['Out1']) && ($_POST['TotLoan1']) && ($_POST['PassMon1']) && ($_POST['DOI1']) && ($_POST['BusMon1']) && ($_POST['ConNo1']) && ($_POST['Add1']) && ($_POST['DOJ1']) && 
        ($_POST['Date']) && ($_POST['Emp2Name']) && ($_POST['Status2']) && ($_POST['TodSal2']) && ($_POST['MonSal2']) && ($_POST['Out2']) && ($_POST['TotLoan2']) && ($_POST['PassMon2']) && ($_POST['DOI2']) && ($_POST['BusMon2']) && ($_POST['ConNo2']) && ($_POST['Add2']) && ($_POST['DOJ2']) && 
		($_POST['Date']) && ($_POST['Emp3Name']) && ($_POST['Status2']) && ($_POST['TodSal3']) && ($_POST['MonSal3']) && ($_POST['Out3']) && ($_POST['TotLoan3']) && ($_POST['PassMon3']) && ($_POST['DOI3']) && ($_POST['BusMon3']) && ($_POST['ConNo3']) && ($_POST['Add3']) && ($_POST['DOJ3']) &&
		($_POST['Date']) && ($_POST['Emp4Name']) && ($_POST['Status2']) && ($_POST['TodSal4']) && ($_POST['MonSal4']) && ($_POST['Out4']) && ($_POST['TotLoan4']) && ($_POST['PassMon4']) && ($_POST['DOI4']) && ($_POST['BusMon4']) && ($_POST['ConNo4']) && ($_POST['Add4']) && ($_POST['DOJ4']) &&
		($_POST['Date']) && ($_POST['Tea'])      && ($_POST['DayExp'])  && ($_POST['InHanMon']))
{*/
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
 
 $Date=$_POST['Date'];
 $Emp2Name=$_POST['Emp2Name'];
 $Status2=$_POST['Status2'];
 $TodSal2=$_POST['TodSal2'];
 $MonSal2=$_POST['MonSal2'];
 $Out2=$_POST['Out2']; 
 $TotLoan2=$_POST['TotLoan2'];
 $PassMon2=$_POST['PassMon2'];
 $DOI2=$_POST['DOI2'];
 $BusMon2=$_POST['BusMon2'];
 $ConNo2=$_POST['ConNo2'];
 $Add2=$_POST['Add2'];
 $DOJ2=$_POST['DOJ2'];

 $Date=$_POST['Date'];
 $Emp3Name=$_POST['Emp3Name'];
 $Status3=$_POST['Status3'];
 $TodSal3=$_POST['TodSal3'];
 $MonSal3=$_POST['MonSal3'];
 $Out3=$_POST['Out3']; 
 $TotLoan3=$_POST['TotLoan3'];
 $PassMon3=$_POST['PassMon3'];
 $DOI3=$_POST['DOI3'];
 $BusMon3=$_POST['BusMon3'];
 $ConNo3=$_POST['ConNo3'];
 $Add3=$_POST['Add3'];
 $DOJ3=$_POST['DOJ3'];
 
 $Date=$_POST['Date'];
 $Emp4Name=$_POST['Emp4Name'];
 $Status4=$_POST['Status4'];
 $TodSal4=$_POST['TodSal4'];
 $MonSal4=$_POST['MonSal4'];
 $Out4=$_POST['Out4']; 
 $TotLoan4=$_POST['TotLoan4'];
 $PassMon4=$_POST['PassMon4'];
 $DOI4=$_POST['DOI4'];
 $BusMon4=$_POST['BusMon4'];
 $ConNo4=$_POST['ConNo4'];
 $Add4=$_POST['Add4'];
 $DOJ4=$_POST['DOJ4'];
 
 $Date=$_POST['Date'];
 $Tea=$_POST['Tea'];
 $DayExp=$_POST['DayExp'];
 $InHanMon=$_POST['InHanMon'];


/*include "connect.php";*/
 
$sql1="insert into emp1 values ('$Date', '$Emp1Name', '$Status1', '$TodSal1', '$MonSal1', '$Out1', '$TotLoan1', '$PassMon1', '$DOI1','$BusMon1', '$ConNo1', '$Add1' ,'$DOJ1')";
$sql2="insert into emp2 values ('$Date', '$Emp2Name', '$Status2', '$TodSal2', '$MonSal2', '$Out2', '$TotLoan2', '$PassMon2', '$DOI2','$BusMon2', '$ConNo2', '$Add2' ,'$DOJ2')";
$sql3="insert into emp3 values ('$Date', '$Emp3Name', '$Status3', '$TodSal3', '$MonSal3', '$Out3', '$TotLoan3', '$PassMon3', '$DOI3','$BusMon3', '$ConNo3', '$Add3' ,'$DOJ3')";
$sql4="insert into emp4 values ('$Date', '$Emp4Name', '$Status4', '$TodSal4', '$MonSal4', '$Out4' ,'$TotLoan4', '$PassMon4', '$DOI4','$BusMon4', '$ConNo4', '$Add4' ,'$DOJ4')";

$final="insert into expninhan values('$Date','$Tea','$DayExp','$InHanMon')";

$a = mysqli_query($con,$sql1);
$b = mysqli_query($con,$sql2);
$c = mysqli_query($con,$sql3);
$d = mysqli_query($con,$sql4);
$e = mysqli_query($con,$final);
echo "Submitted";

mysqli_select_db($con,"attendance");
$p="select * from emp1 ";
$q="select * from emp2 ";
$r="select * from emp3 ";
$s="select * from emp4 ";
$t="select * from expninhan ";

$res1 = mysqli_query($con, $p);
$res2 = mysqli_query($con, $q);
$res3 = mysqli_query($con, $r);
$res4 = mysqli_query($con, $s);
$res5 = mysqli_query($con, $t);

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
			<td><input type="text" name="Emp1Name" placeholder="Employee's First Name" value="Ram" ></input></td>
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




---------------------------------------------------------------------------------------------------------------------------------------




<fieldset>
	<legend>DETAILS</legend>
	<table align="center" >
		<tr>
			<th align="center">First Name</th>
			<th>:</th>
			<td><input type="text" name="Emp2Name" placeholder="Employee's First Name" value="Kishor" disabled></input></td>
		</tr>
		<tr>
			<th align="center">Status</th>
			<th>:</th>
			<td><input type="radio" name="Status2" value="1">Present<input type="radio" name="Status2" value="0">Absent</input></td>
		</tr>
		<tr>
			<th align="center">Today's Salary</th>
			<th>:</th>
			<td><input type="text" name="TodSal2" placeholder="Today's Salary"></input></td>
			<th align="center">Monthly Salary</th>
			<th>:</th>
			<td><input type="text" name="MonSal2" placeholder="Monthly Salary"></input></td>	
		</tr>
		<tr>
			<th align="center">Outstanding</th>
			<th>:</th>
			<td><input type="text" name="Out2" placeholder="Outstanding"></input></td>
			<th align="center">Total Loan</th>
			<th>:</th>
			<td><input type="text" name="TotLoan2" placeholder="Total Loan"></input></td>
		</tr>
		<tr>
			<th align="center">Pass Money</th>
			<th>:</th>
			<td><input type="text" name="PassMon2" placeholder="Pass Money"></input></td>
			<th align="center">Date of Issue</th>
			<th>:</th>
			<td><input type="date" name="DOI2" placeholder="Date of issue"></input></td>
		</tr>
		<tr>
			<th align="center">Bus Money</th>
			<th>:</th>
			<td><input type="text" name="BusMon2" placeholder="Bus Money"></input></td>
		</tr>
		
		<tr>
			<th align="center">Contact No</th>
			<th>:</th>
			<td><input type="number" name="ConNo2" placeholder="Your Contact No"></input></td>
		</tr>
		
		<tr>
			<th align="center">Address</th>
			<th>:</th>
			<td><textarea name="Add2" rows="3" cols="30" placeholder="Your Address"></textarea></td>
		</tr>
				
		<tr>
			<th align="center">Date of Joining</th>
			<th>:</th>
			<td><input type="date" name="DOJ2" placeholder="Date of Joining"></input></td>
		</tr>

	</table>

</fieldset>



----------------------------------------------------------------------------------------------------------------------------------------



<fieldset>
	<legend>DETAILS</legend>
	<table align="center" >
		<tr>
			<th align="center">First Name</th>
			<th>:</th>
			<td><input type="text" name="Emp3Name" placeholder="Employee's First Name" value="Pandit" disabled></input></td>
		</tr>
		<tr>
			<th align="center">Status</th>
			<th>:</th>
			<td><input type="radio" name="Status3" value="1">Present<input type="radio" name="Status3" value="0">Absent</input></td>
		</tr>
		<tr>
			<th align="center">Today's Salary</th>
			<th>:</th>
			<td><input type="text" name="TodSal3" placeholder="Today's Salary"></input></td>
			<th align="center">Monthly Salary</th>
			<th>:</th>
			<td><input type="text" name="MonSal3" placeholder="Monthly Salary"></input></td>	
		</tr>
		<tr>
			<th align="center">Outstanding</th>
			<th>:</th>
			<td><input type="text" name="Out3" placeholder="Outstanding"></input></td>
			<th align="center">Total Loan</th>
			<th>:</th>
			<td><input type="text" name="TotLoan3" placeholder="Total Loan"></input></td>
		</tr>
		<tr>
			<th align="center">Pass Money</th>
			<th>:</th>
			<td><input type="text" name="PassMon3" placeholder="Pass Money"></input></td>
			<th align="center">Date of Issue</th>
			<th>:</th>
			<td><input type="date" name="DOI3" placeholder="Date of issue"></input></td>
		</tr>
		<tr>
			<th align="center">Bus Money</th>
			<th>:</th>
			<td><input type="text" name="BusMon3" placeholder="Bus Money"></input></td>
		</tr>
		
		<tr>
			<th align="center">Contact No</th>
			<th>:</th>
			<td><input type="number" name="ConNo3" placeholder="Your Contact No"></input></td>
		</tr>
		
		<tr>
			<th align="center">Address</th>
			<th>:</th>
			<td><textarea name="Add3" rows="3" cols="30" placeholder="Your Address"></textarea></td>
		</tr>
				
		<tr>
			<th align="center">Date of Joining</th>
			<th>:</th>
			<td><input type="date" name="DOJ3" placeholder="Date of Joining"></input></td>
		</tr>

	</table>

</fieldset>



----------------------------------------------------------------------------------------------------------------------------------------



<fieldset>
	<legend>DETAILS</legend>
	<table align="center" >
		<tr>
			<th align="center">First Name</th>
			<th>:</th>
			<td><input type="text" name="Emp4Name" placeholder="Employee's First Name" value="Kalia" disabled></input></td>
		</tr>
		<tr>
			<th align="center">Status</th>
			<th>:</th>
			<td><input type="radio" name="Status4" value="1">Present<input type="radio" name="Status4" value="0">Absent</input></td>
		</tr>
		<tr>
			<th align="center">Today's Salary</th>
			<th>:</th>
			<td><input type="text" name="TotLoan4" placeholder="Today's Salary"></input></td>
			<th align="center">Monthly Salary</th>
			<th>:</th>
			<td><input type="text" name="MonSal4" placeholder="Monthly Salary"></input></td>	
		</tr>
		<tr>
			<th align="center">Outstanding</th>
			<th>:</th>
			<td><input type="text" name="Out4" placeholder="Outstanding"></input></td>
			<th align="center">Total Loan</th>
			<th>:</th>
			<td><input type="text" name="TotLoan4" placeholder="Total Loan"></input></td>
		</tr>
		<tr>
			<th align="center">Pass Money</th>
			<th>:</th>
			<td><input type="text" name="PassMon4" placeholder="Pass Money"></input></td>
			<th align="center">Date of Issue</th>
			<th>:</th>
			<td><input type="date" name=""DOI4 placeholder="Date of issue"></input></td>
		</tr>
		<tr>
			<th align="center">Bus Money</th>
			<th>:</th>
			<td><input type="text" name="BusMon4" placeholder="Bus Money"></input></td>
		</tr>
		
		<tr>
			<th align="center">Contact No</th>
			<th>:</th>
			<td><input type="number" name="ConNo4" placeholder="Your Contact No"></input></td>
		</tr>
		
		<tr>
			<th align="center">Address</th>
			<th>:</th>
			<td><textarea name="Add4" rows="3" cols="30" placeholder="Your Address"></textarea></td>
		</tr>
				
		<tr>
			<th align="center">Date of Joining</th>
			<th>:</th>
			<td><input type="date" name="DOJ4" placeholder="Date of Joining"></input></td>
		</tr>

	</table>

</fieldset>

<fieldset>
	<legend>DETAILS</legend>
	<table align="center">

	<tr>
			<th align="center">Tea</th>
			<th>:</th>
			<td><input type="text" name="Tea" placeholder="Tea's Expense"></input></td>
	</tr>
	
	<tr>
			<th align="center">Day's Expense</th>
			<th>:</th>
			<td><input type="text" name="DayExp" placeholder="Day's Expense"></input></td>
	</tr>
	
	<tr>
			<th align="center">In hand Money</th>
			<th>:</th>
			<td><input type="text" name="InHanMon" placeholder="In hand Money"></input></td>
	</tr>
	
	</table>
</fieldset>	

		<input type="checkbox" required>I accept by the term & condition</input><br></br>
		<center><button class="button button1" type="submit" align="center" name="submit">Submit</button></center>

</body>
</html>

<!--
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
/*
<?php
include "connect.php";
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

?>*/
