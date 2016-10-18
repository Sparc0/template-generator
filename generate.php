<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<?php

$CONFIG = db_quote($_POST['CONFIG']);
$SNMP_SYSNAME = db_quote($_POST['SNMP_SYSNAME']);
$SNMP_SYSLOC_ROOM = db_quote($_POST['SNMP_SYSLOC_ROOM']);
$SNMP_SYSLOC_ROW = db_quote($_POST['SNMP_SYSLOC_ROW']);
$SNMP_SYSLOC_POS = db_quote($_POST['SNMP_SYSLOC_POS']);
$SNMP_SYSLOC_SHELF = db_quote($_POST['SNMP_SYSLOC_SHELF']);
$SNMP_SYSLOC_BAMS = db_quote($_POST['SNMP_SYSLOC_BAMS']);
$DEFGW_MGMT = db_quote($_POST['DEFGW_MGMT']);
$HOST_IPADDRESS = db_quote($_POST['HOST_IPADDRESS']);
$HOST_NETMASK = db_quote($_POST['HOST_NETMASK']);

$result = db_query("SELECT * FROM `template` WHERE `name` LIKE '$CONFIG'");
foreach ($result as $row) {
    echo nl2br ($row['config']);
}

?>
<!-- Page Content end here -->
</body>
</html>
