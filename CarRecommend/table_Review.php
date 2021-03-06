<?php
require_once('connection.php');

$sql = "CREATE TABLE Review (
Review_ID INT UNSIGNED AUTO_INCREMENT, 
Brand VARCHAR(20) NOT NULL,
Model VARCHAR(20) NOT NULL,
MemberID INT UNSIGNED,
Detail TEXT NOT NULL,
Date TIMESTAMP,
External INT(1) NOT NULL,
Inside INT(1) NOT NULL,
Driving INT(1) NOT NULL,
Feeling INT(1) NOT NULL,
Oil_Consumption INT(1) NOT NULL,
CONSTRAINT Review_pkey PRIMARY KEY (Review_ID),
CONSTRAINT Review_fmemkey FOREIGN KEY (MemberID)
 REFERENCES Member(MemberID) MATCH SIMPLE
 ON UPDATE NO ACTION ON DELETE NO ACTION,
CONSTRAINT Review_fcarkey FOREIGN KEY (Brand,Model)
 REFERENCES CarModel(Brand,Model) MATCH SIMPLE
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