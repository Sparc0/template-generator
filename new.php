<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="well">

<form class="form-horizontal" action="new-config.php" method="post">
<fieldset)>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Name">Name</label>  
  <div class="col-md-10">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-2 control-label" for="type">Type</label>
  <div class="col-md-10">
    <select id="type" name="type" class="form-control">
    <?php
      $result = db_query("SELECT * FROM `forms` ORDER BY id ASC");
      while ($row = $result->fetch_assoc()) {
      echo "<option value=" . $row['form-name'] .">" . $row['form-name'] ."</option>";
      }
    ?>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="config">Config</label>
  <div class="col-md-10">                     
    <textarea class="form-control" id="config" name="config" rows="20"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="submit"></label>
  <div class="col-md-10">
    <button id="submit" name="submit" class="btn btn-success">Create</button>
  </div>
</div>

</fieldset>
</form>
      </div>
    </div>
  </div>
</div>

<!-- Page Content end here -->
</body>
</html>
