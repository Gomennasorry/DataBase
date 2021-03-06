<?php
require_once('connection.php');

$sql = "CREATE TABLE Desired_Feature (
Df_ID INT UNSIGNED AUTO_INCREMENT, 
External INT(1) NOT NULL,
Inside INT(1) NOT NULL,
Driving INT(1) NOT NULL,
Feeling INT(1) NOT NULL,
Oil_Consumption INT(1) NOT NULL,
MemberID INT UNSIGNED,
CONSTRAINT Df_pkey PRIMARY KEY (Df_ID),
CONSTRAINT Df_fmemkey FOREIGN KEY (MemberID)
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