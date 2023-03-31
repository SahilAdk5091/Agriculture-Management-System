<?php
include 'connection.php';
$selectquery1 = "select * from user";
$query1 = mysqli_query($con,$selectquery1);
$html='<table>
<tr>
<td>ID</td>
<td>Full name</td>
<td>Contactno</td>
<td>Provience</td>
<td>wardormuni</td>
<td>No</td>
<td>Email</td>
<td>Password</td>
</tr>';
while($res = mysqli_fetch_array($query1)){
    $html.='
<tr>
<td>'.$res['id'].'</td>
<td>'.$res['fullname'].'</td>
<td>'.$res['contactno'].'</td>
<td>'.$res['provienceno'].'</td>
<td>'.$res['wardormuni'].'</td>
<td>'.$res['wardmunino'].'</td>
<td>'.$res['email'].'</td>
<td>'.$res['password'].'</td>
</tr>';

}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Userdetail.xls');
echo $html;
?>

