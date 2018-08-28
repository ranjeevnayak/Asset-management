<html>
 <head>
   <style>

   table{
      overflow-y:auto;
      height:600px;
      display:block;
   }


   </style>
  <title>Export MySQL data to Excel in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" >

  </script>
 </head>
 <body>
  <div class="container">
   <br />
   <br />
   <br />
   <div class="table-responsive">
    <h2 align="center">MACHINE  SHIFTING DETAILS</h2><br />
    <table class="table table-bordered">
     <tr>
       <th> User's Department Name </th>
       <th> User's Existing Cost Center </th>
       <th> SAP Asset ID </th>
       <th> User ID </th>
       <th> User Name </th>
       <th> Extension No </th>
       <th> Existing Machine S/no. </th>
       <th> Existing Seat No with Wing and Floor</th>
       <th> New seat No. with Wing & Floor :</th>

                    </tr>
     <?php
     $connect = mysqli_connect("localhost", "root", "", "userfile");

      $sql = 'SELECT userid,department,displayname,costLocation,telephoneNumber,Sapid,Serviceno,e_seat,towr,flr,wng,towr1,flr1,wng1,n_seat FROM array_table,filledseat where array_table.e_seat=filledseat.f_seat';

     $result = mysqli_query($connect, $sql);

     while($row = mysqli_fetch_array($result))
     {
     echo"<tr>";

      echo "<td>{$row['department']}</td>".
	      "<td> {$row['costLocation']} </td>".
          "<td>{$row['Sapid']} </td>".
          "<td> {$row['userid']}</td>  ".
	    	  "<td> {$row['displayname']} </td>".
		      "<td> {$row['telephoneNumber']}</td>".
		      "<td> {$row['Serviceno']}</td>".
          "<td>{$row['towr']} . {$row['flr']} . {$row['wng']}. {$row['e_seat']}</td>".
     		 "<td>{$row['towr1']}.{$row['flr1']}.{$row['wng1']}.{$row['n_seat']} </td>";

      echo"</tr>";
     }
     ?>

    </table>
    <br />
    <form method="post" action="machine_excel_export.php">
     <input type="submit" name="export" onclick="myfxn()" class="btn btn-success" value="Export" />
    </form>
   </div>
  </div>
 </body>
</html>
