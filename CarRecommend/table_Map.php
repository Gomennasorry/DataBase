<?php
require_once('connection.php');

$sql = "CREATE TABLE Map (
MapID INT UNSIGNED AUTO_INCREMENT,
PlaceName VARCHAR(50) NOT NULL,
Location TEXT NOT NULL,
Brand VARCHAR(20) NOT NULL,
CONSTRAINT Map_pkey PRIMARY KEY (MapID),
CONSTRAINT Map_fbrandkey FOREIGN KEY (Brand)
 REFERENCES CarModel(Brand) MATCH SIMPLE
 ON UPDATE NO ACTION ON DELETE NO ACTION
)";

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('CREATE TABLE SUCCESS');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}

?>