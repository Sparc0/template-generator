<?php

function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
	$config = parse_ini_file('config.ini');
        $connection = mysqli_connect($config['hostname'],$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection;
}

function db_query($query) {
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    return $result;
}

function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}

function db_quote($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

function getAlltemplates() {
    $result = db_query("SELECT * FROM `template` WHERE `type` LIKE '%extreme%'");
}	    

function textInput($variable,$label,$placeholder) {
    echo <<<EOF
<div class="form-group">
  <label class="col-md-4 control-label" for="$variable">$label</label>
  
  <div class="col-md-7">
  <input id="$variable" name="$variable" type="text" placeholder="$placeholder" class="form-control input-md" required="">

  </div>
</div>
EOF;
}

function selectInput($variable,$label) {
	    $numargs = func_num_args();
            $arg_list = func_get_args();


	            echo <<<EOF
<div class="form-group">
  <label class="col-md-4 control-label" for="$variable">$label</label>
  <div class="col-md-7">
    <select id="$variable" name="$variable" class="form-control">\n
EOF;
	        for ($i = 2; $i < $numargs; $i++) {
			            echo "<option value=". $arg_list[$i] .">". $arg_list[$i] ."</option>\n";
				        }
	                  echo <<<EOF2
    </select>
  </div>
</div>
EOF2;
}

function formStart($formname) {
	echo <<<EOF
<form class="form-horizontal" name="$formname" id="$formname" style="display:none" action="generate.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>$formname</legend>

<br>
EOF;
}

function formEnd() {
	echo <<<EOF
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-danger">Generate</button>
  </div>
</div>
</fieldset>
</form>
EOF;
}

?>
