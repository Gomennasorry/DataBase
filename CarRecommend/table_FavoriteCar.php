<?php
require_once('connection.php');

$sql = "CREATE TABLE FavoriteCar (
FC_ID INT UNSIGNED AUTO_INCREMENT,
MemberID INT UNSIGNED,
CarID INT UNSIGNED,
CONSTRAINT FC_pkey PRIMARY KEY (FC_ID),
CONSTRAINT FC_fmemkey FOREIGN KEY (MemberID)
 REFERENCES Member(MemberID) MATCH SIMPLE
 ON UPDATE NO ACTION ON DELETE NO ACTION,
CONSTRAINT FC_fcarkey FOREIGN KEY (CarID)
 REFERENCES CarModel(CarModelID) MATCH SIMPLE
 ON UPDATE NO ACTION ON DELETE NO ACTION,
UNIQUE(MemberID,CarID)
)";

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('CREATE TABLE SUCCESS');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}

?>