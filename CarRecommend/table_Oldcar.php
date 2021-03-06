<?php
require_once('connection.php');

$sql = "CREATE TABLE OldCar (
OldCarID INT UNSIGNED AUTO_INCREMENT, 
Brand VARCHAR(20) NOT NULL,
Model VARCHAR(20) NOT NULL,
Sub_Model VARCHAR(20) NOT NULL,
Color VARCHAR(20),
Price INT,
MemberID INT UNSIGNED,
CONSTRAINT OldCar_pkey PRIMARY KEY (OldCarID),
CONSTRAINT OldCar_fmemkey FOREIGN KEY (MemberID)
 REFERENCES Member(MemberID) MATCH SIMPLE
 ON UPDATE NO ACTION ON DELETE NO ACTION,
UNIQUE(MemberID) 
)";

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('CREATE TABLE SUCCESS');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}

?>