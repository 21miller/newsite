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
$cp = new custom_profile();
$error = $cp_data = $cp_error = array();
        
// validate and register the custom profile fields
$cp->submit_cp_field('register', $user->get_iso_lang_id(), $cp_data, $error);

// create an inactive user key to send to them...
$user_actkey = gen_rand_string(10);
$key_len = 54 - (strlen($server_url));
$key_len = ($key_len < 6) ? 6 : $key_len;
$user_actkey = substr($user_actkey, 0, $key_len);

// set the user to inactive and the reason to "newly registered"
$user_type = USER_INACTIVE;
$user_inactive_reason = INACTIVE_REGISTER;
$user_inactive_time = time();

// setup the user array for the new user
$user_row = array(
    'username'              => $data['username'],
    'user_password'         => phpbb_hash($data['password']),
    'user_email'            => $data['email'],
    'group_id'              => (int) $group_id,
    'user_timezone'         => (float) $data['tz'],
    'user_dst'              => $is_dst,
    'user_lang'             => $data['lang'],
    'user_type'             => $user_type,
    'user_actkey'           => $user_actkey,
    'user_ip'               => $user->ip,
    'user_regdate'          => time(),
    'user_inactive_reason'  => $user_inactive_reason,
    'user_inactive_time'    => $user_inactive_time,
);

// Register user...
$user_id = user_add($user_row, $cp_data);

// If creating the user failed, display an error
if ($user_id === false)
{
    trigger_error('NO_USER', E_USER_ERROR);
}
                
$template->assign_vars(array(
    // If there were any errors, display them, one on each newline.
    'ERROR'             => (sizeof($error)) ? implode('<br />', $error) : '',
));
                
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
