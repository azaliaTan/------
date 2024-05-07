<?php 

$host='localhost';
$db_name='botanica';

$db_user='root';
$db_pass='root';

   


try{
$link=new PDO("mysql: host=$host; dbname=$db_name",$db_user,$db_pass);


}catch(PDOException $e){
 echo '$e';

}

?>