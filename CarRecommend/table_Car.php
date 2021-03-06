<?php
require_once('connection.php');

$sql = "CREATE TABLE Car (
CarID INT UNSIGNED AUTO_INCREMENT,
Brand VARCHAR(20) NOT NULL,
Model VARCHAR(20) NOT NULL,
Sub_Model VARCHAR(20) NOT NULL,
Price INT(9) NOT NULL,
Detail TEXT,
UNIQUE(Brand,Model,Sub_Model),
CONSTRAINT Car_pkey PRIMARY KEY (CarID),
CONSTRAINT Car_fkey FOREIGN KEY (Brand,Model)
REFERENCES CarModel(Brand,Model) MATCH SIMPLE
ON UPDATE NO ACTION ON DELETE NO ACTION
)";

$result = mysqli_query($conn,$sql);
if($result){
    print "<script language='javascript' type='text/javascript' > alert('CREATE TABLE SUCCESS');</script>";
}else{
    print ("Error description: " . mysqli_error($conn));
}

?>