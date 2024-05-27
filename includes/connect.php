<?php 

$host='localhost';
$db_name='botanica';
//$db_name='x640';

$db_user='root';
$db_pass='root';

//$db_user='x640';
//$db_pass='JR5jK7E62Z82YJ48';


try{
$link=new PDO("mysql: host=$host; dbname=$db_name",$db_user,$db_pass);


}catch(PDOException $e){
 

}

?>