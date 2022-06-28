<?php
 $con = mysqli_connect("localhost","root","","members");
 if(!$con){
     die("Connect to database Failed");
 }