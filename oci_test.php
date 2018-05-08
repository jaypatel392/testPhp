<?php
// Create connection to Oracle
//$conn = oci_connect("system", "Welcome1", "//54.158.13.94/XE");
//$s = oci_parse($conn, "select table_name, column_name FROM ALL_TAB_COLUMNS WHERE table_name = 'oracle_column_demo'");
//$s = oci_parse($conn, "SELECT * FROM PRICCHAADEMO.ORACLEDEMO WHERE ROWNUM = 1");
$db_name_oracle = 'XE';
$db_user_oracle = 'system';
$db_password_oracle = 'Welcome1';
$db_port_oracle = 1521;
$db_host_oracle = '54.158.13.94';

                                //decrypt password 
                               /* $aes = new AES($db_password_oracle , $this->encriptionKey, 128);
                                $db_password_oracle = $aes->decrypt();*/
//                                $db_password_oracle = AESSecurity::decrypt($db_password_oracl, $this->encriptionKey);

$conn = oci_connect($db_user_oracle, $db_password_oracle, "//$db_host_oracle/$db_name_oracle");
//$s = oci_parse($conn, "SELECT * FROM PRICCHAADEMO.ORACLEDEMO WHERE ROWNUM = 1");
$s = oci_parse($conn, "select OWNER from SYS.ALL_TABLES order by OWNER");
oci_execute($s);
oci_fetch_all($s, $res);
/*print_r($res);
die;*/


//oci_execute($s);
//oci_fetch_all($s, $res);
echo "<pre>\n";
var_dump($res);
echo "</pre>\n";

if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);

?>

