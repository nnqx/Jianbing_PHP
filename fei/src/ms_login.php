<?php  
//从test数据库中提取数据  
  
function collect_data($name){  
require_once ("oracle_con.php");  
$sql = "select * from  test.user_db where name='$name' ";  
$abc = mysql_query($sql);  
  
$colum= mysql_fetch_array($abc);  
  
return $colum;  
}  
  
?> 