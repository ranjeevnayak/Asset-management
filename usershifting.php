
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
  document.getElementById("g4").style.display = "block";       // Enabling and disabling towerA and towerB
  document.getElementById("g5").style.display = "none";
  document.getElementById("g6").style.display = "none";
  document.getElementById("g7").style.display = "none";
  document.getElementById("g8").style.display = "none";
}

function bfxn(){
  document.getElementById("g1").style.display = "none";
  document.getElementById("g2").style.display = "none";
  document.getElementById("g3").style.display = "none";
  document.getElementById("g4").style.display = "none";        // Enabling and disabling towerA and towerB
  document.getElementById("g5").style.display = "block";
  document.getElementById("g6").style.display = "block";
  document.getElementById("g7").style.display = "block";
  document.getElementById("g8").style.display = "block";
}
function cfxn(){
  document.getElementById("f1").style.display = "block";
  document.getElementById("f2").style.display = "block";
  document.getElementById("f3").style.display = "block";
  document.getElementById("f4").style.display = "block";             // Enabling and disabling towerA and towerB
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
  document.getElementById("f5").style.display = "block";             // Enabling and disabling towerA and towerB
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

    // CHECKING IF s RANGES WITHIN THE GIVEN SEAT FORMAT
    if ( s < 'D099' && s > 'D001'|| s < 'C099' && s > 'C001' || s < 'M099' && s > 'M001' || s < 'E099' && s > 'E001') {

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

   // CHECKING IF s RANGES WITHIN THE GIVEN SEAT FORMAT
    if ( s < 'D099' && s > 'D001'|| s < 'C099' && s > 'C001' || s < 'M099' && s > 'M001' || s < 'E099' && s > 'E001') {

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
 <!-- TOP NAVIGATION BAR (SIEMENS LOGO) -->
</div>
  <h1> USER SHIFTING FORM </h1>
<div class="container2">
<form align="left" method="post" action="http://localhost/cgi-bin/asset/finaluser.pl">
<br><br>
<b>User-Id:</b>
	 <input type="text" name="username" placeholder="User id" style="margin-left: 202px;  width: 200px; height: 28px; " />

<br><br>

 <b> Existing Seat No:</b>
 <select class="Tow" name="tower" >
   <!-- //TOWER dropdown menu -->
  <option value="" disabled  selected hidden>Tower</option>
  <option value="Tower A" onclick="afxn()">Tower A</option>
  <option value="Tower B" onclick="bfxn()">Tower B</option>
</select>


  <select name="floor" >
    <!-- FLOOR dropdown Menu -->
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

    <!-- INPUT fLOOR -->

<select name="wing">
  <!-- WING dropdown Menu -->
  <option value="" disabled  selected hidden>Wing</option>
  <option value="Wing A">Wing A</option>
  <option value="Wing B">Wing B</option>
  <option value="Wing C">Wing C</option>
  <option value="Wing D">Wing D</option>
  <option value="Wing E">Wing E</option>
</select>


   <!-- input WING -->

   <input type="text" name="extseat" id="ext_seat" placeholder="Seat no."  style="margin-left: 3px;  width: 100px; height: 20px; "/>

<br>
 <br>

<b> New Seat No:</b>
<!-- TOWER dropdown menu -->
 <select class="Tow1" name="tower1">
  <option value="" disabled  selected hidden>Tower</option>
  <option value="Tower A" onclick="cfxn()">Tower A</option>
  <option value="Tower B" onclick="dfxn()">Tower B</option>
</select>


  <select name="floor1">
    <!-- FLOOR dropdown Menu -->
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
  <!-- WING dropdown Menu -->
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
 <!-- SUBMIT AND PROCESS Buttons -->
 <input type="button" value="PROCEED" name="submit1" onclick="window.location.href='user_display_record.php'" style="margin-left: 320px;font-size: 20px; margin-top:-50px; height: 40px; width: 150px;">

<br>
  </form>
</div>
  </body>
 </html>


 <?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('userfile',$conn);

/*

<?php echo @$_GET['nname']; ?>
<?php echo @$_GET['towerr']; ?>
<?php echo @$_GET['floorr']; ?>
<?php echo @$_GET['wingg']; ?>
 <?php echo @$_GET['eextseat']; ?>
<?php echo @$_GET['towerr1']; ?>
<?php echo @$_GET['floorr1']; ?>
<?php echo @$_GET['wingg1']; ?>
<?php echo @$_GET['ppassword']; ?>

if(isset($_POST['submit']))
{
	// we can check by using echo before
	// variable whether it will print or not
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
		window.open('usershifting.php?nname=','_self')
		</script>";
		exit();
                                      // CHECKING IF FIELD IS BLANK BE ON THE SAME PAGE
	}
  if($Tower=='')
	{echo
		"<script>
		window.open('usershifting.php?towerr=','_self')
		</script>";
		exit();

	}

	if($Wing=='')
	{
		echo
		"<script>
		window.open('usershifting.php?wingg=','_self')
		</script>";
		exit();
	}

	if($Floor=='')
	{
		echo
		"<script>
		window.open('usershifting.php?floorr=','_self')
		</script>";
		exit();
	}


	if($eseat=='')
	{
		echo
		"<script>
		window.open('usershifting.php?eextseat=','_self')
		</script>";
		exit();
	}
  if($Floor1=='')
  {echo
    "<script>
    window.open('usershifting.php?towerr1=','_self')
    </script>";
    exit();

  }

  if($Wing1=='')
  {
    echo
    "<script>
    window.open('usershifting.php?wingg1=','_self')
    </script>";
    exit();
  }

  if($Floor1=='')
  {
    echo
    "<script>
    window.open('usershifting.php?floorr1=','_self')
    </script>";
    exit();
  }

	if($nseat=='')
	{
		echo
		"<script>
		window.open('usershifting.php?ppassword=','_self')
		</script>";
		exit();
	}


$query="insert into data(u_idd,tower,wing,floorw,e_seat,tower1,wing1,floor1,n_seat) values
('$Name','$Tower','$Wing','$Floor','$eseat','$Tower1','$Wing1','$Floor1', '$nseat')";
//INSERTING DATA
 // $sql = 'SELECT u_idd,tower,wing,floorw,e_seat,tower1,wing1,floor1,n_seat FROM data';

*/
// AND array_table.n_seat=filledseat.f_seat
//$sql = 'SELECT userid,department,displayname,costLocation,telephoneNumber,e_seat,towr,flr,wng,towr1,flr1,wng1,n_seat,Sapid,Serviceno from array_table,filledseat where array_table.e_seat=filledseat.f_seat ';

//AND array_table.n_seat=filledseat.f_seat

$sql = 'SELECT userid,department,displayname,costLocation,telephoneNumber,Sapid,Serviceno,e_seat,towr,flr,wng,towr1,flr1,wng1,n_seat FROM array_table,filledseat where array_table.e_seat=filledseat.f_seat ';



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
   echo"<th> User ID </th>";                              // DISPLAYING TABLE ON THE SAME PAGE
   echo"<th> Username </th>";
   echo"<th> Extension No </th>";
   echo"<th> Existing Machine S/no. </th>";
   echo"<th> Existing Seat No with Wing and Floor</th>";
   echo"<th> New Machine S/no. </th>";
   echo"<th> New seat No. with Wing & Floor :</th>";

   echo"</tr>";

   while($row = mysql_fetch_array($retval)) {
// FETCHING RECORDS OR ENTRIES
     echo"<tr>";
     echo "<td> {$row['department']}</td>".
        "<td>{$row['costLocation']} </td> ".
        "<td>{$row['userid']} </td> ".
        "<td> {$row['displayname']}</td>".
        "<td>{$row['telephoneNumber']} </td>".
        "<td> {$row['Serviceno']}</td>".
        "<td>{$row['towr']} . {$row['flr']} . {$row['wng']}. {$row['e_seat']}</td>".
        "<td> {$row['Serviceno']}</td>".
   		  "<td>{$row['towr1']}.{$row['flr1']}.{$row['wng1']}.{$row['n_seat']} </td>";
     echo"</tr>";
 }
   echo"</table>";

/*
if(mysql_query($query)) //query will execute
{

  }
*/
clearstatcache();       // TO FLUSH THE PAGE AFTER REFRESH
?>
