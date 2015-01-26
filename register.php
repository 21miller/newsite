<?php
define('IN_PHPBB', true);

        $username = $_POST[username];
        $password = $_POST[password];
        $email_address = $_POST[email];


    include('forums/common.php');
    require('forums/includes/functions_user.php');

    // Start session management
    $user->session_begin();
    $auth->acl($user->data);
    $user->setup('viewtopic');

        global $config, $db, $user, $auth, $template, $phpbb_root_path, $phpEx;

        $user_row = array(
            'username'                => $username,                //REQUIRED IN FORM
            'user_password'            => md5($password),            //REQUIRED IN FORM
            'user_email'            => $email_address,            //REQUIRED IN FORM
            'group_id'                =>    0,//(int) $group_id,
            'user_timezone'            => $timezone = date(Z) / 3600,//(float) $data[tz],
            'user_dst'                => date(I),//$is_dst,
            'user_lang'                => $user->lang_name,//$data[lang],
            'user_type'                => USER_NORMAL,//$user_type,
            'user_actkey'            => '',//$user_actkey,
            'user_ip'                => $user->ip,
            'user_regdate'            => time(),
            'user_inactive_reason'    => 0,//$user_inactive_reason,
            'user_inactive_time'    => 0,//$user_inactive_time,
        );


    // Register user...
        $user_id = user_add($user_row);

    ?>