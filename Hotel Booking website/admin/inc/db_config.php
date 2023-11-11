<?php 
  $name='localhost';
  $uname='root';
  $pass='';
  $db='pjwebsite';
  $conn=mysqli_connect($name,$uname,$pass,$db);
  if(!$conn){
    die("cannot connect to data base".mysqli_connect_error());
  }
  function filteration($data){
    foreach($data as $key => $value){
        $data[$key]=trim($value);
        $data[$key]=stripslashes($value);
        $data[$key]=htmlspecialchars($value);
        $data[$key]=strip_tags($value);
    }
    return $data;
  }
?>

<!--    trim()// remove extra spaces
        stripslashes()// remove backword slashes
        htmlspecialchars() // convert special charcter in to special entiti
        strip_tags() // remove html tags -->
