<?php
	// create and return a unique identifier
	function generateIdentifier(){
	  $key = '';
	  $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < 5; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}



?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
<link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
</HEAD>
<TITLE>HJC Depend</TITLE>
<BODY>
<div class="bigDaddy">
	<div class="allContentContainer">
	Your unique ID is<span style="color:red"> <?php echo generateIdentifier();?></span><br>
	<span class="generateIdInstructn">Please write it on the two sheets that say "Bug Report (Coding Exercise _)" in heading.<br>
	Also note it down somewhere as you will be identified by this ID for the next hour.</span><br><br>
	<span> <a href="https://docs.google.com/forms/d/1FeQ-rnHrZ1IPPogBO-LOSCBURcMtuO5Pi3XEW4UwoRg/viewform">Take Survey 1</a></span>
	</div>
</div>
</BODY>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</BODY>
</HTML>