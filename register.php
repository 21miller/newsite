<?php 
   //phpbb3 login, user session management
   $phpbb_root_path = './vernon_forum/';
   $returnAddress ='../index.php';
   //including phpBB3 stuff   
   define('IN_PHPBB', true);
   $phpEx = substr(strrchr(__FILE__, '.'), 1);
   include($phpbb_root_path . 'common.' . $phpEx);
   include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

   // Start phpbb3 session management
   $user->session_begin();
   $auth->acl($user->data);
   $user->setup('viewforum');
?>