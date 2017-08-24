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
	<h2>Create a form</h2>
	<p>
	Start with add new form on the form page.<br>
	All forms need to start with <b>formStart("Formname");</b> in the beginning.
	<p>
	To create input fields just fill in the form field with one of the following.
	<br>
	<br>
	<h4><b>Text input:</b></h4> First argument is the variable that will be replaced in the template. Second argument is to know what to add. Third argument is a placeholder for a example how it should be. 
	<br>
	<b>textInput("SNMP_HOSTNAME","Hostname","www-server1");</b>
	<br>
	<br>
	<h4><b>Select input:</b></h4> Argument is the same as for a textInput but you can add how many RoomX you want to have more to choose from.
	<br>
	<b>selectInput("SNMP_SYSLOC_ROOM","Room","Room1","Room2");</b>
	<br>
	<br>
	<h4><b>End form:</b></h4> This need to be added in the end of the form else it wont work.
	<br>
	<b>formEnd();</b>
	<br>
	<br>
	<h4><b>Example form:</b></h4>
	formStart("Formname");<br>
	textInput("SNMP_HOSTNAME","Hostname","www-server1");<br>
	textInput("SNMP_HOSTNAME","IP-Address","192.168.1.200/24");<br>
	textInput("SNMP_HOSTNAME","Gateway","192.168.1.1");<br>
	selectInput("SNMP_SYSLOC_ROOM","Room","Room1","Room2");<br>
	formEnd();<br>
	<br>
	Will give you:<br>
	<form class="form-horizontal">
	<fieldset>
	<div class="form-group">
	<label class="col-md-2 control-label" for="textinput">Hostname</label>  
  	<div class="col-md-3">
  	<input id="textinput" name="textinput" type="text" placeholder="www-server1" class="form-control input-md">
  	</div>
        </div>
	<p>
	<div class="form-group">
	<label class="col-md-2 control-label" for="textinput">IP-Address</label>
        <div class="col-md-3">
        <input id="textinput" name="textinput" type="text" placeholder="192.168.1.200/24" class="form-control input-md">
        </div>
	</div>
	<p>
	<div class="form-group">
        <label class="col-md-2 control-label" for="textinput">Gateway</label>
        <div class="col-md-3">
        <input id="textinput" name="textinput" type="text" placeholder="192.168.1.1" class="form-control input-md">
        </div>
        </div>
	<p>
	<div class="form-group">
  	<label class="col-md-2 control-label" for="selectbasic">Select Basic</label>
  	<div class="col-md-3">
        <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="Room1">Room1</option>
        <option value="Room2">Room2</option>
        </select>
  	</div>
	</div>
	</fieldset>
	</form>

<!-- Page Content end here -->
</body>
</html>
