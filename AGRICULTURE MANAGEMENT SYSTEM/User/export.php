<?php
include 'connection.php';
$selectquery1 = "select * from cropdetails";
$query1 = mysqli_query($con,$selectquery1);
$html='<table>
<tr>
<td>ID</td>
<td>Farmername</td>
<td>Production</td>
<td>Cropname</td>
<td>FarmerRate</td>
<td>MarketRate</td>
<td>Provience</td>
</tr>';
while($res = mysqli_fetch_array($query1)){
    $html.='
<tr>
<td>'.$res['id'].'</td>
<td>'.$res['Farmername'].'</td>
<td>'.$res['Production'].'</td>
<td>'.$res['Cropname'].'</td>
<td>'.$res['Farmerrate'].'</td>
<td>'.$res['Marketrate'].'</td>
<td>'.$res['Provience'].'</td>
</tr>';

}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=cropdetail.xls');
echo $html;
?>

