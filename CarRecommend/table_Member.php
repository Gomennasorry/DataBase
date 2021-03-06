<?php
require_once('connection.php');

$sql = "CREATE TABLE Member (
MemberID INT UNSIGNED AUTO_INCREMENT,
Email VARCHAR(50) NOT NULL,
UserName VARCHAR(30) NOT NULL,
Password VARCHAR(255) NOT NULL,
CONSTRAINT Member_pkey PRIMARY KEY (MemberID),
UNIQUE(Email),
UNIQUE(UserName)
)";

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('CREATE TABLE SUCCESS');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}

?>