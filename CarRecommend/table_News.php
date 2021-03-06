<?php
require_once('connection.php');

$sql = "CREATE TABLE News (
NewsID INT UNSIGNED AUTO_INCREMENT,
Title TEXT NOT NULL,
Detail TEXT NOT NULL,
Date TIMESTAMP,
Brand VARCHAR(20) NOT NULL,
Model VARCHAR(20) NOT NULL,
CONSTRAINT News_pkey PRIMARY KEY (NewsID),
CONSTRAINT News_fbrandkey FOREIGN KEY (Brand,Model)
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