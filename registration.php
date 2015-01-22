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
                <li><a href="forums.php">Forums</a></li>
                <li><a href="register.php">Register</a></li>>
            </ul>
        </nav>
        <div class="clearfloat"></div>
        <hr>
        <div class="headerPicContainer">
            
            <div class="websiteDescription">
				
                <h2>Registration Instructions</h2>
				define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '/forum/';

$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('');

//Do something here to retrieve get/post variables 

// Validate input
$invalid_username = validate_username($username);
$invalid_email = validate_email($email);
$invalid_password = validate_password($password);
if($invalid_username || $invalid_password || $invalid_email){ //handle error
}

//Build user_row array
$user_row = array(
    'username'              => $username,
    'user_password'         => phpbb_hash($password),
    'user_email'            => $email,
    'group_id'              => 2,
    'user_lang'             => 'en_us',
    'user_type'             => USER_NORMAL,
    'user_ip'               => $user->ip,
    'user_regdate'          => time(),
);

//register and handle error
$user_id = user_add($user_row);
if ($user_id === false){
    //handle error
}    
                
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
