<?php
$conn = mysqli_connect("localhost", "root","", "userfile");

$output = '';
//CHECKING WHEN EXPORT BUTTON WILL BE CLICKEN , an excel would be created.
if(isset($_POST["export"]))
{
  $query  = 'SELECT userid,department,displayname,costLocation,telephoneNumber,e_seat,towr,flr,wng,towr1,flr1,wng1,n_seat,Sapid,Serviceno from array_table,filledseat where array_table.e_seat=filledseat.f_seat  ';
// fetching query to execute.
 $retval = mysqli_query($conn,$query);
if(mysqli_num_rows($retval) > 0)
 {
  $output .= '
   <table class="table" bordered="1">
   <tr>
     <th> Users Existing Department Name </th>
     <th> Users Existing Cost Center </th>
     <th>UserId</th>
     <th> User Name </th>
     <th> Extension No </th>
     <th> Existing Machine S/no. </th>
     <th>Existing Seat No</th>
     <th> New Machine S/no. </th>
     <th>New Seat no</th>
 </tr>
  ';
  while($row = mysqli_fetch_array($retval))
  {
    //fetching employeee details and displaying corresponding attribute and values in EXCEL
   $output .= '
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
  // Creating excel file in a TABLE Format , by default an Excel file will BE CREATED
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=shifting_list.xls');
  echo $output;
}
}

// Calling Powershell file which contains the EMAIL Code
shell_exec('powershell.exe -command C:\wamp\www\mail\sendmail.ps1');


 ?>
