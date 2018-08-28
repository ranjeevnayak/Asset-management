<html>
<head>
<title> Vacant Seats </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {
background-color: #F2f2f2;
margin: 0px;
padding: 0px;
width: 100%;
height: 100%;
}
label {
color: white;
margin-left: 400px;
font-size: 30px;
position: fixed;
margin-top: 30px;
font-family: "Times New Roman";
font-stretch: expanded;
}
.asset{
  margin-left: 250px;
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
table{
  border:3px solid black;
  margin-left: 110px;
  overflow-y:auto;
  height:550px;
  display:block;
    width:1100px;
}
th,td{
  width:1100px;
  text-align: center;

}

</style>

</head>

<body>
<div class='topnav'>
<a><img src="images/logo.jpg" margin="0" height="100px" width="200px"></a>
<label for="rwu">RELOCATE WITH US</label>
</div>

<!-- HEADING ON PAGE (Assets List) -->
<h1 style="margin-left: 600px; margin-top: 32px; font-size: 28px; position:fixed;">ASSETS LIST</h1>
<br><br>
<br><br>

		<?php
// Db Connection
	 $conn=mysql_connect("localhost","root","");
	 $db=mysql_select_db('vacant',$conn);

// SQL QUERY TO FETCH THE GIVEN RECORDS FROM filledseat table in Db
   $sql = 'SELECT Sapid,Assettype,Serviceno,Age,Ram,Loginid,Employee FROM filledseat';
     $retval = mysql_query( $sql, $conn );

    if(! $retval ) {
        die('Could not get data: ' . mysql_error());
     }
// DISPLAYING TABLE AND IMPORTING VALUES FROM EXCEL
     echo"<br>";
     echo"<br>";
     echo"<table border=5px solid black>";
     echo"<tr>";
     echo"<th> SAPID </th>";
     echo"<th> ASSET TYPE</th>";
     echo"<th> SERVICE TAG NO </th>";

     echo"<th> AGE(MONTHS) </th>";
     echo"<th> RAM(GB) </th>";
     echo"<th> LOGIN ID </th>";
     echo"<th> EMPLOYEE NAME </th>";

     echo"</tr>";

     while($row = mysql_fetch_array($retval)) {
// FETCHING VALUES FROM EXCEL
       echo"<tr>";
        echo "<td>{$row['Sapid']} </td>  ".
           " <td> {$row['Assettype']}</td>".
           "<td>{$row['Serviceno']}</td>".
           "<td>{$row['Age']}</td>".
           "<td>{$row['Ram']}</td>".
           "<td> {$row['Loginid']}</td>".
           "<td>{$row['Employee']}</td> ";
        echo"</tr>";

   }
     echo"</table>";

   clearstatcache();     // CLEAR OR FLUSH THE DATA ON REFRESHING
		?>

</body>
</html>






























</body>
</html>
