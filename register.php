<!doctype html>
<!--
Designed by: http://www.cssing.org
Released for free under a Creative Commons Attribution 3.0 License: http://creativecommons.org/licenses/by/3.0/
Name: Birchwood
Description:  A two-columns, responsive design template.
Template number: 19
Version: 1.0
Released: 4.3.13
-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Just a Backpack</title>
<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Stoke' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
	<header>
    	<h1><a href="">Just a Backpack</a></h1>
        <nav>
        	<ul>
            	<li id="active"><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="/forum/index.php">Forums</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
        <div class="clearfloat"></div>
        <hr>
        <div class="headerPicContainer">
            
            <div class="websiteDescription">
				


<h2>Registration Instructions</h2>

	<form action='' method='post'>

		<p><label>Username</label><br />
		<input type='text' name='username' value='<?php if(isset($error)){ echo $_POST['username'];}?>'></p>

		<p><label>Password</label><br />
		<input type='password' name='password' value='<?php if(isset($error)){ echo $_POST['password'];}?>'></p>

		<p><label>Confirm Password</label><br />
		<input type='password' name='passwordConfirm' value='<?php if(isset($error)){ echo $_POST['passwordConfirm'];}?>'></p>

		<p><label>Email</label><br />
		<input type='text' name='email' value='<?php if(isset($error)){ echo $_POST['email'];}?>'></p>
		
		<p><input type='submit' name='submit' value='Add User'></p>

	</form>

<?php


	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if($password ==''){
			$error[] = 'Please enter the password.';
		}

		if($passwordConfirm ==''){
			$error[] = 'Please confirm the password.';
		}

		if($password != $passwordConfirm){
			$error[] = 'Passwords do not match.';
		}

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			$hashedpassword = $user->create_hash($password);


define('IN_PHPBB', true);
$phpbb_root_path = 'forum/';

$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.php');
include($phpbb_root_path . 'includes/functions_user.php');
include($phpbb_root_path . 'includes/ucp/ucp_register.php');
	$sql_ary = array(
        'username'          => $username,
        'username_clean'    => $username_clean,
        'user_password'     => phpbb_hash($password),
        'user_email'        => $user_email,
        'user_email_hash'   => crc32(strtolower($user_email)) . strlen($user_email),
        'group_id'          => 2,
        'user_type'         => 0,
    );
user_add($sql_ary);
?>
                
            </div>
            <div class="clearfloat"></div>
        </div>
        <div class="clearfloat"></div>
    </header>

    <div class="clearfloat"></div>
    <footer>
        <ul>
            <li>
                <span>Your Company Name</span>
            </li>
            <li>
                Designed by <a href="http://www.cssing.org" title="Free Css Templates">Free Css Templates</a>
            </li>
            <li>
                Validation 
                <a class="footerLink" href="http://validator.w3.org/check/referer" title="This page validates as HTML5"><abbr title="HyperText Markup Language">HTML5</abbr></a>, 
                <a class="footerLink" href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS3</abbr></a>
            </li>
        </ul>
    </footer>
</div>
</body>
</html>
