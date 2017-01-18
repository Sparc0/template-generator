<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Select device form -->
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Select device</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="form"></label>
  <div class="col-md-4">
    <select id="form" name="form" class="form-control">
      <option value="" selected="selected"></option>
      <?php
      $result = db_query("SELECT * FROM `forms` ORDER BY id ASC");
        while ($row = $result->fetch_assoc()) {
        echo "<option value=" . $row['form-name'] .">" . $row['form-name'] ."</option>";
        }
      ?>
    </select>
  </div>
</div>

</fieldset>
</form>
<!-- End select device form -->

<?php
formStart("form_extreme");
textInput("SNMP_SYSNAME","Hostname","serointsw00007");
selectInput("SNMP_ROOM","Room","Room1","Room2");
textInput("SNMP_SYSLOC_ROW","Row","05");
textInput("SNMP_SYSLOC_POS","Pos","23");
textInput("SNMP_SYSLOC_SHELF","Shelf","42");
textInput("SNMP_SYSLOC_BAMS","Bams-ID","123456");
textInput("HOST_IPADDRESS","IP-Adress","10.68.222.30");
textInput("HOST_NETMASK","Netmask","255.255.254.0");
textInput("DEFGW_MGMT","Gateway","10.68.222.1");
formEnd()
?>


<!-- Utronix form start -->
<form class="form-horizontal" name="form_utronix" id="form_utronix" style="display:none" action="generate.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Utronix</legend>

<!-- Config input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CONFIG">Config</label>
  <div class="col-md-7">
  <select id="CONFIG" name="CONFIG" class="form-control">
  <?php
  $result = db_query("SELECT * FROM `template` WHERE `type` LIKE '%utronix%'");
  while ($row = $result->fetch_assoc()) {
  echo "<option value=" . $row['name'] .">" . $row['name'] ."</option>";
  }
  ?>
  </select>  
  </div>
</div>

<br>
<!-- Hostname input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SNMP_SYSNAME">Hostname</label>
  <div class="col-md-7">
  <input id="SNMP_SYSNAME" name="SNMP_SYSNAME" type="text" placeholder="rpc1" class="form-control input-md" required="">
  </div>
</div>

<!-- IP input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="HOST_IPADDRESS">IP-Adress</label>
  <div class="col-md-7">
  <input id="HOST_IPADDRESS" name="HOST_IPADDRESS" type="text" placeholder="192.168.1.1" class="form-control input-md" required="">

  </div>
</div>

<!-- Generate Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-danger">Generate</button>
  </div>
</div>


</fieldset>
</form>
<!-- End Utronix form -->

<script>
$("#form").on("change", function() {
    $("#" + $(this).val()).show().siblings().hide();
})
</script>
