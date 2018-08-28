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

table{

     margin-top: 120px;
     overflow-y:auto;
     height:350px;
     width:790px;
     margin-left: 260px;
     display:block;
     counter-reset: tableCount;
}

/* .counterCell:before {
content: counter(tableCount);
counter-increment: tableCount;
} */
th,td{
  width:790px;
  text-align: center;

}
.xyz:before{
  content: counter(tableCount);
  counter-increment: tableCount;

}

.topnav {
    overflow: hidden;
    background-color:#20B2AA;
	height: 100px;
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

</style>

</head>

<body>
<div class='topnav'>
<a><img src="images/logo.jpg" margin="0" height="100px" width="200px"></a>
<label for="rwu">RELOCATE WITH US</label>
</div>
<h1 style="margin-left: 520px; margin-top:40px; font-size: 24px; position:fixed;">VACANT SEATS STATUS</h1>

<?php
// DATABASE CONNECTION
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('vacant',$conn);

$sql = 'SELECT *  from filled where NOT EXISTS (SELECT DISTINCT f_seat from filledseat  where filledseat.f_seat=filled.total1)';
//SQL QUERY IF FILLED SEAT MATCHES TOTAL SEATS THEN DON'T INCLUDE THOSE RECORDS

  $retval = mysql_query( $sql, $conn );

 if(! $retval ) {
     die('Could not get data: ' . mysql_error());
  }
// DISPLAYING FORMAT OF TABLE
  echo"<br>";
  echo"<br>";
  echo"<table border=5px solid black cellspacing=5 >";
  echo"<tr>";
  echo"<th style='width:7%' > S.NO.  </th>";
  echo"<th> TOWER </th>";
  echo"<th> FLOOR </th>";
  echo"<th> WING </th>";
  echo"<th> VACANT SEAT </th>";

  echo"</tr>";

  while($row = mysql_fetch_array($retval)) {
// FETCHING TOWER FLOOR AND WING FROM USER ENTRY
    echo"<tr>";
     echo "<td class='xyz'> </td> ".
     "<td>tower A</td>".
     "<td>floor A</td>".
     "<td>wing A </td>".
     "<td>{$row['total1']} </td>  ";

        // " <td> {$row['f_seat']}</td>  ".
        //  "<td> {$row['vacant1']}</td> ";
     echo"</tr>";

}
  echo"</table>";


?>



</body>
</html>
