<?php
require_once('connection.php');

$sql = "INSERT INTO CarModel (Brand, Model, Body, Color, Gear, Fuel) 
VALUES ('Honda','City','Sedan','.Ignite Red Metallic (R-575M) .Platinum White Pearl (NH-883P) .Crystal Black Pearl (NH-731P)
.Lunar Silver Metallic (NH-830M) .Modern Steel Metallic (NH-797M) .Taffeta White (NH-578)','ออโต้','เบนซิน')";

/*Honda City มี 6 สี 
1.Ignite Red Metallic (R-575M) 2.Platinum White Pearl (NH-883P) 3.Crystal Black Pearl (NH-731P)
4.Lunar Silver Metallic (NH-830M) 5.Modern Steel Metallic (NH-797M) 6.Taffeta White (NH-578)
*/
/*Gear = ออโต้ Fuel = เบนซิน*/

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('เพิ่ม CarModel สำเร็จ');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}
?>


