<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);


if (!$user->data['is_registered'])
{
    if ($user->data['is_bot'])
    {
        // the user is a bot, send them back to home plate...
        redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
    }
    // the user is not logged in, give them a chance to login here...
    login_box('', 'LOGIN');
} 
?>
