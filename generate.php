<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<?php

$CONFIG = db_quote($_POST['CONFIG']);
$SNMP_SYSNAME = $_POST['SNMP_SYSNAME'];
$SNMP_SYSLOC_ROOM = $_POST['SNMP_SYSLOC_ROOM'];
$SNMP_SYSLOC_ROW = $_POST['SNMP_SYSLOC_ROW'];
$SNMP_SYSLOC_POS = $_POST['SNMP_SYSLOC_POS'];
$SNMP_SYSLOC_SHELF = $_POST['SNMP_SYSLOC_SHELF'];
$DEFGW_MGMT = $_POST['DEFGW_MGMT'];
$HOST_IPADDRESS = $_POST['HOST_IPADDRESS'];
$HOST_NETMASK = $_POST['HOST_NETMASK'];

$strParams = [
  "SNMP_SYSNAME" => $SNMP_SYSNAME,
  'SNMP_SYSLOC_ROOM' => $SNMP_SYSLOC_ROOM,
  'SNMP_SYSLOC_ROW' => $SNMP_SYSLOC_ROW,
  'SNMP_SYSLOC_POS' => $SNMP_SYSLOC_POS,
  'SNMP_SYSLOC_SHELF' => $SNMP_SYSLOC_SHELF,
  'DEFGW_MGMT' => $DEFGW_MGMT,
  'HOST_IPADDRESS' => $HOST_IPADDRESS,
  'HOST_NETMASK' => $HOST_NETMASK,
];



$result = db_query("SELECT * FROM `template` WHERE `name` LIKE $CONFIG");
  while($row = mysqli_fetch_assoc($result)){
  $source = $row['config'];
  	$text = strtr($source, $strParams);
}
echo nl2br ($text);
?>
<!-- Page Content end here -->
</body>
</html>
