<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<form class="form-horizontal" action="new-config.php" method="post">
<fieldset)>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="type">Type</label>
  <div class="col-md-4">
    <select id="type" name="type" class="form-control">
      <option value="extreme">Extreme</option>
      <option value="junipersw">Juniper Switch</option>
      <option value="juniperfw">Juniper Firewall</option>
      <option value="utronix">Utronix</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="config">Config</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="config" name="config"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Create</button>
  </div>
</div>

</fieldset>
</form>


<!-- Page Content end here -->
</body>
</html>
