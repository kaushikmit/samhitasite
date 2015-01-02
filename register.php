<?php
 /*
$email = Trim(stripslashes($_GET['email'])); 
$phone = Trim(stripslashes($_GET['phone'])); 
$name = Trim(stripslashes($_GET['name'])); 
$college = Trim(stripslashes($_GET['college']));
mysql_connect("mysql.samhita.org.in","samhitaitadbuser","SIGSEGV_samhitadb");
mysql_select_db("samhitaitadb");
//$ip=$_SERVER['REMOTE_ADDR'];
//$ts=
mysql_query("insert into students values (null,'$name','$email','$phone','$college')");
echo "ok";*/
 
$email = Trim(stripslashes($_GET['email'])); 
$phone = Trim(stripslashes($_GET['phone'])); 
$name = Trim(stripslashes($_GET['name'])); 
$college = Trim(stripslashes($_GET['college']));
mysql_connect("mysql.samhita.org.in","samhitaitadbuser","SIGSEGV_samhitadb");
mysql_select_db("samhitaitadb");
$ip=$_SERVER['REMOTE_ADDR'];
$ts=time();
/*echo $ts;
echo "<br>";*/
$res=mysql_query("select * from students where ip='$ip' order by ts desc");
$val=mysql_fetch_array($res);
$count=mysql_num_rows($res);
$old_ts=$val['ts'];
$diff=$ts-$old_ts;
/*
echo $diff;
echo "<br>";
echo $count;
*/
if ($diff>60 && $count<10) {
mysql_query("insert into students values (null,'$name','$email','$phone','$college','$ip','$ts')");
echo "ok";
}



?>