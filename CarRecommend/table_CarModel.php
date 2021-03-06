<?php
require_once('connection.php');

$sql = "CREATE TABLE CarModel (
CarModelID INT UNSIGNED AUTO_INCREMENT,
Brand VARCHAR(20) NOT NULL,
Model VARCHAR(20) NOT NULL,
Body VARCHAR(20) NOT NULL,
Color TEXT NOT NULL,
Gear VARCHAR(20) NOT NULL,
Fuel VARCHAR(20) NOT NULL,
Date TIMESTAMP,
CONSTRAINT Car_pkey PRIMARY KEY (CarModelID),
UNIQUE(Brand,Model)
)";

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('CREATE TABLE SUCCESS');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}

?>