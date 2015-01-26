<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';

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

    ?>
