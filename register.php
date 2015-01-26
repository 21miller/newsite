<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';

$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

mysql_query("INSERT INTO phpbb_users (user_type, group_id, user_ip, user_regdate, username, username_clean, user_password, user_passchg, user_email, user_birthday, user_lang, user_dateformat, user_style) VALUES ('0', '2', '" . $RIP . "', '" . $RDate . "', '" . $RUsername . "', '" . $RUsername . "', '" . $RPassword . "', '" . $RDate . "', '"  . $REmail . "', '" . $RBDate . "', 'en', 'D M d, Y g:i a', '2')") or die(mysql_error()); 
https://www.phpbb.com/community/viewtopic.php?f=46&t=2282086
    ?>
