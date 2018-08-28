
<html>
<head>
<title>
Relocate With Us.....
</title>
<style>
body {
background-color: #F2f2f2;
margin: 0;
}
h1{
margin-left:520px;
position:fixed;
}
.container2 {
background-color: #3f3f3f;
width: 980px;
height: 450px;
margin-top: 140px;
margin-left: 220px;
 background: linear-gradient(to right,lightgrey, white);
}
b{
  color:black;
}
.topnav {
    overflow: hidden;
    background-color: #20B2AA;
	height: 100px;
}
.topnav a {
     float: left;
     color: #f2f2f2;
     text-align: center;

     text-decoration: none;
     font-size: 50px;

}
label {
color: white;
margin-left: 400px;
font-size: 30px;
margin-top: 30px;
position:fixed;

}
.Tow{
  margin-left: 88px;
}
.Tow1{
  margin-left: 134px;
}
table{
   overflow-y:auto;
   height:180px;
   display:block;
}
form {
position: inline;
margin-right: 60px;
margin-left: 200px;
font-size: 30px;
color: white;
}
</style>
<script type="text/javascript" >
function afxn(){
  document.getElementById("g1").style.display = "block";
  document.getElementById("g2").style.display = "block";
  document.getElementById("g3").style.display = "block";
  document.getElementById("g4").style.display = "block";
  document.getElementById("g5").style.display = "none";
  document.getElementById("g6").style.display = "none";
  document.getElementById("g7").style.display = "none";
  document.getElementById("g8").style.display = "none";
}

function bfxn(){
  document.getElementById("g1").style.display = "none";
  document.getElementById("g2").style.display = "none";
  document.getElementById("g3").style.display = "none";
  document.getElementById("g4").style.display = "none";
  document.getElementById("g5").style.display = "block";
  document.getElementById("g6").style.display = "block";
  document.getElementById("g7").style.display = "block";
  document.getElementById("g8").style.display = "block";
}
function cfxn(){
  document.getElementById("f1").style.display = "block";
  document.getElementById("f2").style.display = "block";
  document.getElementById("f3").style.display = "block";
  document.getElementById("f4").style.display = "block";
  document.getElementById("f5").style.display = "none";
  document.getElementById("f6").style.display = "none";
  document.getElementById("f7").style.display = "none";
  document.getElementById("f8").style.display = "none";
}

function dfxn(){
  document.getElementById("f1").style.display = "none";
  document.getElementById("f2").style.display = "none";
  document.getElementById("f3").style.display = "none";
  document.getElementById("f4").style.display = "none";
  document.getElementById("f5").style.display = "block";
  document.getElementById("f6").style.display = "block";
  document.getElementById("f7").style.display = "block";
  document.getElementById("f8").style.display = "block";
}


function myFunction() {
    var x;

    // Get the value of the input field with id="numb"
    x = document.getElementById("ext_seat").value;
    var s=x.toString();
       // document.getElementById("demo").innerHTML = s;

    // If x is Not a Number or less than one or greater than 10
    if ( s < 'D041' && s > 'D001'|| s < 'C041' && s > 'C001' || s < 'M041' && s > 'M001' || s < 'E041' && s > 'E001') {

    }

    else {
        alert("Invalid Input")
    }

}

function myfxn() {
    var x;

    // Get the value of the input field with id="numb"
    x = document.getElementById("new_seat").value;
    var s=x.toString();
       // document.getElementById("demo").innerHTML = s;

    // If x is Not a Number or less than one or greater than 10
    if ( s < 'D050' && s > 'D001'|| s < 'C050' && s > 'C001' || s < 'M050' && s > 'M001' || s < 'E050' && s > 'E001') {

    } else {
        alert("Invalid Input")
    }

}
</script>
</head>

<body>
<div class='topnav'>
<a><img src="images/logo.jpg" margin="0" height="100px" width="200px"></a>
 <label for="rwu">RELOCATE WITH US</label>
</div>
  <h1> MACHINE SHIFTING FORM </h1>
<div class="container2">
<form align="left" method="post" name="form1" action="http://localhost/cgi-bin/asset/finalcaller.pl">
<br><br>
<b>User-Id:</b>
	 <input type="text" name="username" placeholder="User id" style="margin-left: 202px;  width: 200px; height: 28px; " require/>

<br><br>

 <b> Existing Seat No:</b>
 <select class="Tow" name="tower" >
  <option value="" disabled  selected hidden>Tower</option>
  <option value="Tower A" onclick="afxn()">Tower A</option>
  <option value="Tower B" onclick="bfxn()">Tower B</option>
</select>


  <select name="floor" >
    <option value="" disabled  selected hidden>Floor</option>
    <option value="Ground Floor(A) " id="g1">Ground Floor(A)</option>
    <option value="First Floor(A)" id="g2">First Floor(A)</option>
    <option value="Second Floor(A)" id="g3">Second Floor(A)</option>
    <option value="Third Floor(A)" id="g4">Third Floor(A)</option>
    <option value="Ground Floor" id="g5">Ground Floor(B)</option>
    <option value="First Floor" id="g6">First Floor(B)</option>
    <option value="Second Floor" id="g7">Second Floor(B)</option>
    <option value="Third Floor" id="g8">Third Floor(B)</option>
  </select>


<select name="wing">
  <option value="" disabled  selected hidden>Wing</option>
  <option value="Wing A">Wing A</option>
  <option value="Wing B">Wing B</option>
  <option value="Wing C">Wing C</option>
  <option value="Wing D">Wing D</option>
  <option value="Wing E">Wing E</option>
</select>




   <input type="text" name="extseat" id="ext_seat" placeholder="Seat no."  style="margin-left: 3px;  width: 100px; height: 20px; "/>

<br>
 <br>

<b> New Seat No:</b>
 <select class="Tow1" name="tower1">
  <option value="" disabled  selected hidden>Tower</option>
  <option value="Tower A" onclick="cfxn()">Tower A</option>
  <option value="Tower B" onclick="dfxn()">Tower B</option>
</select>


  <select name="floor1">
    <option value="" disabled  selected hidden>Floor</option>
    <option value="Ground Floor(A) " id="f1">Ground Floor(A)</option>
    <option value="First Floor(A)" id="f2">First Floor(A)</option>
    <option value="Second Floor(A)" id="f3">Second Floor(A)</option>
    <option value="Third Floor(A)" id="f4">Third Floor(A)</option>
    <option value="Ground Floor" id="f5">Ground Floor(B)</option>
    <option value="First Floor" id="f6">First Floor(B)</option>
    <option value="Second Floor" id="f7">Second Floor(B)</option>
    <option value="Third Floor" id="f8">Third Floor(B)</option>
  </select>


<select name="wing1">
  <option value="" disabled  selected hidden>Wing</option>
  <option value="Wing A">Wing A</option>
  <option value="Wing B">Wing B</option>
  <option value="Wing C">Wing C</option>
  <option value="Wing D">Wing D</option>
  <option value="Wing E">Wing E</option>
</select>




  <input type="text" name="newseat" id="new_seat" placeholder="New seat no" style="margin-left: 3px;  width: 100px; height: 20px;"/>

 <br>
<br>


  <input type="submit" value="ADD MORE" name="submit" onclick="myFunction(),myfxn()" style="margin-left: 120px;  font-size: 20px; height: 40px; width: 150px;">

 <input type="button" value="PROCEED" name="submit1" onclick="window.location.href='machine_display_record.php'" style="margin-left: 320px;font-size: 20px; margin-top:-50px; height: 40px; width: 150px;">

<br>
  </form>
</div>
  </body>
 </html>


 <?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('userfile',$conn);

/*
if(isset($_POST['submit']))
{
	// we can check by using echo before
	// veriable wether it print or not
	$Name=$_POST['username'];
    $Tower=$_POST['tower'];
    $Wing=$_POST['wing'];
    $Floor=$_POST['floor'];
	$eseat=$_POST['extseat'];  // EXISTING SEAT NO.
    $Tower1=$_POST['tower1'];
    $Wing1=$_POST['wing1'];
    $Floor1=$_POST['floor1'];
	  $nseat=$_POST['newseat']; // NEW SEAT NO.
	if($Name=='')
	{echo
		"<script>
		window.open('machineshifting.php?nname=','_self')
		</script>";
		exit();

	}
  if($Tower=='')
	{echo
		"<script>
		window.open('machineshifting.php?towerr=','_self')
		</script>";
		exit();

	}

	if($Wing=='')
	{
		echo
		"<script>
		window.open('machineshifting.php?wingg=','_self')
		</script>";
		exit();
	}

	if($Floor=='')
	{
		echo
		"<script>
		window.open('machineshifting.php?floorr=','_self')
		</script>";
		exit();
	}


	if($eseat=='')
	{
		echo
		"<script>
		window.open('machineshifting.php?eextseat=','_self')
		</script>";
		exit();
	}
  if($Floor1=='')
  {echo
    "<script>
    window.open('machineshifting.php?towerr1=','_self')
    </script>";

    exit();

  }

  if($Wing1=='')
  {
    echo
    "<script>
    window.open('machineshifting.php?wingg1=','_self')
    </script>";
    exit();
  }

  if($Floor1=='')
  {
    echo
    "<script>
    window.open('machineshifting.php?floorr1=','_self')
    </script>";
    exit();
  }

	if($nseat=='')
	{
		echo
		"<script>
		window.open('machineshifting.php?pnseat=','_self')
		</script>";
		exit();
	}

	 <?php echo @$_GET['pnseat']; ?>
	 <?php echo @$_GET['wingg1']; ?>
	 <?php echo @$_GET['floorr1']; ?>
	 <?php echo @$_GET['towerr1']; ?>
	 <?php echo @$_GET['eextseat']; ?>
	 <?php echo @$_GET['wingg']; ?>
	 <?php echo @$_GET['floorr']; ?>
	 <?php echo @$_GET['towerr']; ?>
	 <?php echo @$_GET['nname']; ?>

*/

//$query="insert into data(u_idd,tower,wing,floorw,e_seat,tower1,wing1,floor1,n_seat) values
//('$Name','$Tower','$Wing','$Floor','$eseat','$Tower1','$Wing1','$Floor1', '$nseat')";

// $sql = "SELECT u_idd,tower,wing,floorw,e_seat,tower1,wing1,floor1,n_seat FROM data";

// $sql = "SELECT u_idd,tower,floorw,wing,e_seat,tower1,wing1,floor1,n_seat,Sapid,Serviceno,Employee from data,filledseat where data.e_seat=filledseat.f_seat";

$sql = 'SELECT userid,department,displayname,costLocation,telephoneNumber,Sapid,Serviceno,e_seat,towr,flr,wng,towr1,flr1,wng1,n_seat FROM array_table,filledseat where array_table.e_seat=filledseat.f_seat';

   $retval = mysql_query( $sql, $conn );

  if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   echo"<br>";
   echo"<br>";
   echo"<table border=5px solid black>";
   echo"<tr>";
   echo"<th> User's Department Name </th>";
   echo"<th> User's Existing Cost Center </th>";
   echo"<th> SAP Asset ID </th>";
   echo"<th> User ID </th>";
   echo"<th> User Name </th>";
   echo"<th> Extension No </th>";
   echo"<th> Existing Machine S/no. </th>";
   echo"<th> Existing Seat No with Wing and Floor</th>";
   echo"<th> New seat No. with Wing & Floor :</th>";

   echo"</tr>";

/*
 echo"<br>";
   echo"<br>";
   echo"<table border=5px solid black>";
   echo"<tr>";
   echo"<th> DEPARTMENT </th>";
   echo"<th> USER NAME</th>";
   echo"<th> USER'S EXISTING COSTCENTER</th>";
   echo"<th> EXTENSION NO. </th>";

   echo"</tr>";
*/
   while($row = mysql_fetch_array($retval)) {

     echo"<tr>";
  //    echo "<td> </td>".
     //    "<td>{$row['Sapid']} </td>".
     //    "<td> {$row['u_idd']} </td>  "."<td> {$row['Employee']} </td>". "<td> </td>"."<td> {$row['Serviceno']}</td>".
     //    " <td> {$row['tower']}.{$row['floorw']}.{$row['wing']}.{$row['e_seat']}</td>  ".
     //    "<td> {$row['tower1']}.{$row['floor1']}.{$row['wing1']}.{$row['n_seat']} </td> ";
    //  echo"</tr>";


    echo "<td>{$row['department']} </td>  ".
	     "<td>{$row['costLocation']}</td>".
	     "<td>{$row['Sapid']} </td>".
		 "<td>{$row['userid']}</td>".
      " <td> {$row['displayname']}</td>".
     "<td>{$row['telephoneNumber']}</td>".
		 "<td> {$row['Serviceno']}</td>".
		 "<td>{$row['towr']} . {$row['flr']} . {$row['wng']}. {$row['e_seat']}</td>".
		 "<td>{$row['towr1']}.{$row['flr1']}.{$row['wng1']}.{$row['n_seat']} </td>";

      echo"</tr>";

 }
   echo"</table>";

/*
if(mysql_query($query)) //query will execute
{

  echo "<table align='center' border='6'>
	<tr>
		<td>$Name</td>
		<td>$eseat</td>
		<td>$nseat</td>
	</tr>
		 </table>";
  }

*/

clearstatcache();
?>
