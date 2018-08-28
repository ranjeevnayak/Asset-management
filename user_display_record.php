<?php
$connect = mysqli_connect("localhost", "root", "", "userfile");
// SQL QUERY TO SEND SELECTED RECORDS

$sql = 'SELECT userid,department,displayname,costLocation,telephoneNumber,e_seat,towr,flr,wng,towr1,flr1,wng1,n_seat,Sapid,Serviceno from array_table,filledseat where array_table.e_seat=filledseat.f_seat  ';

$result = mysqli_query($connect, $sql);
?>
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
    <h2 align="center">USER SHIFTING DETAILS </h2><br />
    <table class="table table-bordered">
     <tr>
       <!-- Providing headings for the table -->
       <th> User's Existing Department Name </th>
       <th> User's Existing Cost Center </th>
       <th>UserId</th>
       <th> User Name </th>
       <th> Extension No </th>
       <th> Existing Machine S/no. </th>
       <th>Existing Seat No</th>
       <th> New Machine S/no. </th>
       <th>New Seat no</th>
   </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
       //displaying user entry on another page
        echo '
        <tr>
          <td>'.$row["department"].'</td>
          <td>'.$row["costLocation"].'</td>
          <td>'.$row["userid"].'</td>
          <td>'.$row["displayname"].'</td>
          <td>'.$row["telephoneNumber"].'</td>
          <td>'.$row["Serviceno"].'</td>
          <td>'.$row["e_seat"].'</td>
          <td>'.$row["Serviceno"].'</td>
          <td>'.$row["n_seat"].'</td>
        </tr>
        ';


     }
     ?>
    </table>
    <br />
    <form method="post" action="user_excel_export.php">
      <!-- EXPORT BUTTON  -->
     <input type="submit" name="export" onclick="myfxn()" class="btn btn-success" value="Submit" />
    </form>
   </div>
  </div>
 </body>
</html>
