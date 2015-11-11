<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Script Injection</title>
</head>

<body>
<h2>Trust No One!</h2>
<p>
	Never, ever, ever trust anything anyone ever enters into 
	your web page. To do so is disaster!
</p>

<hr />
<form id="someName" action="<?php echo($_SERVER['PHP_SELF']); ?>"  method="POST">
	Your Name:<input type="text" style="width:600px;" name="firstName" />
 	<input type="submit" value="Send Values" />
</form>

<?php
// Our PHP Form is posting to itself.. so see if we have
// values, if not it's the first time they've been here.
	echo("This shows what PHP_SELF contains:" . $_SERVER['PHP_SELF']);
	echo('<br /><br /><br />');
	
	// Check to see if the variable has been set.
	// If not
	if (isset($_POST['firstName']) )
    {
        $firstName = htmlspecialchars($_POST['firstName']);
        echo("Hello there " . $firstName);
    }else{
        echo('Welcome! Please enter your name above');
    }

?>

</body>
</html>
