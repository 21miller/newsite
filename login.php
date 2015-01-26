
<?php

define('IN_PHPBB', true);
$phpbb_root_path = 'forum/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(); ?>
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Login</title>

</head>

<body>
<?php

if($user->data['is_registered'])
{
echo("Hi " . $user->data['username'] . "!<br /><br /><a href=" . $phpbb_root_path . 'ucp.php?mode=logout&redirect=index.php' . '&sid=' . $user->data['session_id'] . ">Logout</a>");
}
else
{
echo('You are Not Logged In <br><form action="forum/ucp.php" method="post" enctype="multipart/form-data">
<label for="username">Username:</label><input type="text" name="username" /><br />
<label for="password">Password:</label><input type="password" name="password" /><br />
<input type="hidden" name="redirect" value="../index.php" />
<label for="username">Automatic login:</label><input type="checkbox" name="autologin" id="autologin" class="checkbox" />
<input type="submit" value="login" name="login" />
</form>');
} ?>

</body>

</html>