<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';

$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

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

    ?>
