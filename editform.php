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

<?php
$result = db_query("SELECT * FROM `forms` WHERE id={$_POST['id']} LIMIT 1");
while ($row = $result->fetch_assoc()) {
?>


<form class="form-horizontal" action="edit-form.php" method="post">
<fieldset)>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Name">Name</label>  
  <div class="col-md-10">
  <input id="name" name="name" type="text" value="<?php echo $row['form-name']; ?>" placeholder="" class="form-control input-md" required="">  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="form">Form</label>
  <div class="col-md-10">                     
    <textarea class="form-control" id="form" name="form" rows="20"><?php echo $row[form]; ?></textarea>
  </div>
</div>

<!-- Hidden ID input -->
<input type='hidden' name='id' value="<?php echo $row[id]; ?>">

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="submit"></label>
  <div class="col-md-10">
    <button id="submit" name="submit" class="btn btn-success">Update</button>
  </div>
</div>

</fieldset>
</form>
<?php
}
?>

      </div>
    </div>
  </div>
</div>
<!-- Page Content end here -->
</body>
</html>
