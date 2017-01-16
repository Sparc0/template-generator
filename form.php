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
      <option value="form_extreme">Extreme</option>
      <option value="form_junipersw">Juniper Switch</option>
      <option value="form_juniperfw">Juniper Firewall</option>
      <option value="form_utronix">Utronix</option>
    </select>
  </div>
</div>

</fieldset>
</form>
<!-- End select device form -->

<?php
formStart("form_extreme");
textInput("SNMP_SYSNAME","Hostname","serointsw00007");
selectInput("SNMP_ROOM","Room","Room1","Room2")
?>

<!-- Row input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SNMP_SYSLOC_ROW">Row</label>  
  <div class="col-md-7">
  <input id="SNMP_SYSLOC_ROW" name="SNMP_SYSLOC_ROW" type="text" placeholder="05" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Pos input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SNMP_SYSLOC_POS">Pos</label>  
  <div class="col-md-7">
  <input id="SNMP_SYSLOC_POS" name="SNMP_SYSLOC_POS" type="text" placeholder="23" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Shelf input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SNMP_SYSLOC_SHELF">Shelf</label>  
  <div class="col-md-7">
  <input id="SNMP_SYSLOC_SHELF" name="SNMP_SYSLOC_SHELF" type="text" placeholder="42" class="form-control input-md" required="">
    
  </div>
</div>

<!-- IP input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="HOST_IPADDRESS">IP-Adress</label>  
  <div class="col-md-7">
  <input id="HOST_IPADDRESS" name="HOST_IPADDRESS" type="text" placeholder="10.20.30.3" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Gateway input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DEFGW_MGMT">Gateway</label>  
  <div class="col-md-7">
  <input id="DEFGW_MGMT" name="DEFGW_MGMT" type="text" placeholder="10.20.30.1" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Netmask input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="HOST_NETMASK">Netmask</label>  
  <div class="col-md-7">
  <input id="HOST_NETMASK" name="HOST_NETMASK" type="text" placeholder="255.255.254.0" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Mgmt select -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MGMT_PORT">Mgmt port</label>
  <div class="col-md-7">
    <select id="MGMT_PORT" name="MGMT_PORT" class="form-control">
      <option value="VR-Mgmt">VR-Mgmt</option>
      <option value="VR-Default">VR-Default</option>
    </select>
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
<!-- End Extreme form -->


<form name="form_junipersw" id="form_junipersw" style="display:none">
Hostname:<input type="text" placeholder="Switch1">


</form>

<form name="form_juniperfw" id="form_juniperfw" style="display:none">
Hostname:<input type="text" placeholder="firewall1">
</form>

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
