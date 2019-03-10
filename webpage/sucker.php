<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet">
	<head>

	<body data-gr-c-s-loaded="true">
		<?php if($_SERVER["REQUEST_METHOD"]=="POST") { ?>
			
		<?php if($_POST["name"]!="" && $_POST["section"]!="" && $_POST["credit"]!="") {?>
			
			<h1>Thanks, sucker!</h1>
			<p>Your information has been recorded.</p>

			<dl>
				<dt>Name</dt>
				<dd><?=$_POST["name"]?></dd>

				<dt>Section</dt>
				<dd><?=$_POST["section"]?></dd>

				<dt>Credit Card</dt>
				<dd><?=$_POST["credit"]." (". $_POST["cc"].")"?></dd>
				<?php $information = $_POST["name"].";".$_POST["section"].";".$_POST["credit"].";".$_POST["cc"]."\n";
					file_put_contents("sucker.txt", $information, FILE_APPEND);
					$allinformations = file_get_contents("sucker.txt"); ?>
					
					<p>Here are all the suckers who have submitted here</p>
					<pre><?=$allinformations?></pre>
			
				<?php } else { ?>
						<h1 style="text-align: center;">Sorry</h1>
						<p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
				<?php }?>
		</dl>
		<?php } else{?>
			<h1 style="text-align: center;">Sorry</h1>
			<p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
		<?php }?>
  </body>
  </html>