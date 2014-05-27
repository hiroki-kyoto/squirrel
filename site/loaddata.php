<?php

// set the encoding type
header('Content-type: text/html;charset=UTF-8');
/***
用户名　 :  SAE_MYSQL_USER
密　　码 :  SAE_MYSQL_PASS
主库域名 :  SAE_MYSQL_HOST_M
从库域名 :  SAE_MYSQL_HOST_S
端　　口 :  SAE_MYSQL_PORT
数据库名 :  SAE_MYSQL_DB
***/
echo '用户名　 :  '.SAE_MYSQL_USER.'<br/>';
echo '密　　码 :  '.SAE_MYSQL_PASS.'<br/>';
echo '主库域名 :  '.SAE_MYSQL_HOST_M.'<br/>';
echo '从库域名 :  '.SAE_MYSQL_HOST_S.'<br/>';
echo '端　　口 :  '.SAE_MYSQL_PORT.'<br/>';
echo '数据库名 :  '.SAE_MYSQL_DB.'<br/>';

$con=mysqli_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO userinfo(username) VALUES('bruce');";
mysqli_query($con,$sql);

$sql="SELECT * FROM userinfo";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
  echo 'id:'.$row['id'] ." ======username: ".$row['username'];
  echo "<br>";
}

mysqli_close($con);


?>