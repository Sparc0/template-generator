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
      $result = db_query("SELECT * FROM `forms` ORDER BY `form-name` ASC");
        while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['formshort'] ."'>" . $row['form-name'] ."</option>";
        }
      ?>
    </select>
  </div>
</div>

</fieldset>
</form>
<!-- End select device form -->

<?php
$result = db_query("SELECT * FROM `forms`");
  while($row = mysqli_fetch_assoc($result)){
  $source = $row['form'];
  eval ($source);
}
?>

<script>
$("#form").on("change", function() {
    $("#" + $(this).val()).show().siblings().hide();
})
</script>
