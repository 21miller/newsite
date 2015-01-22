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
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
        <div class="clearfloat"></div>
        <hr>
        <div class="headerPicContainer">
            
            <div class="websiteDescription">
				
                <h2>Registration Instructions</h2>
<?php
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

$user_row = array(
        'username'                      => "his username",
        'user_password'                 => phpbb_hash("new_password"),
        'user_email'                    => "mail@ofuser.com",
        'group_id'                      => 2,
        'user_timezone'                 => 1,
        'user_dst'                      => 1,
        'user_lang'                     => "en",
        'user_type'                     => 0,
        'user_actkey'                   => "",
        'user_ip'                       => "",
        'user_regdate'                  => time(),
        'user_inactive_reason'          => 0,
        'user_inactive_time'            => 0,
);
user_add($user_row, $cp_data); ?>
                
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
