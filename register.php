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
<script type="text/javascript">
// <![CDATA[
	/**
	* Change language
	*/
	function change_language(lang_iso)
	{
		document.cookie = '{COOKIE_NAME}_lang=' + lang_iso + '; path={COOKIE_PATH}';
		document.forms['register'].change_lang.value = lang_iso;
		document.forms['register'].submit.click();
	}
// ]]>
</script>

<form method="post" action="{S_UCP_ACTION}" id="register">

<div class="panel">
	<div class="inner">

	<h2>{SITENAME} - {L_REGISTRATION}</h2>

	<fieldset class="fields2">
	<!-- IF ERROR --><dl><dd class="error">{ERROR}</dd></dl><!-- ENDIF -->
	<!-- IF L_REG_COND -->
		<dl><dd><strong>{L_REG_COND}</strong></dd></dl>
	<!-- ENDIF -->
	<!-- EVENT ucp_register_credentials_before -->
	<dl>
		<dt><label for="username">{L_USERNAME}{L_COLON}</label><br /><span>{L_USERNAME_EXPLAIN}</span></dt>
		<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="inputbox autowidth" title="{L_USERNAME}" /></dd>
	</dl>
	<dl>
		<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label></dt>
		<dd><input type="email" tabindex="2" name="email" id="email" size="25" maxlength="100" value="{EMAIL}" class="inputbox autowidth" title="{L_EMAIL_ADDRESS}" /></dd>
	</dl>
	<dl>
		<dt><label for="new_password">{L_PASSWORD}{L_COLON}</label><br /><span>{L_PASSWORD_EXPLAIN}</span></dt>
		<dd><input type="password" tabindex="4" name="new_password" id="new_password" size="25" value="{PASSWORD}" class="inputbox autowidth" title="{L_NEW_PASSWORD}" /></dd>
	</dl>
	<dl>
		<dt><label for="password_confirm">{L_CONFIRM_PASSWORD}{L_COLON}</label></dt>
		<dd><input type="password"  tabindex="5" name="password_confirm" id="password_confirm" size="25" value="{PASSWORD_CONFIRM}" class="inputbox autowidth" title="{L_CONFIRM_PASSWORD}" /></dd>
	</dl>

	<!-- EVENT ucp_register_credentials_after -->
	<hr />

	<!-- EVENT ucp_register_options_before -->
	<dl>
		<dt><label for="lang">{L_LANGUAGE}{L_COLON}</label></dt>
		<dd><select name="lang" id="lang" onchange="change_language(this.value); return false;" tabindex="6" title="{L_LANGUAGE}">{S_LANG_OPTIONS}</select></dd>
	</dl>

	<!-- INCLUDE timezone_option.html -->

	<!-- EVENT ucp_register_profile_fields_before -->
	<!-- IF .profile_fields -->
		<dl><dd><strong>{L_ITEMS_REQUIRED}</strong></dd></dl>

	<!-- BEGIN profile_fields -->
		<dl>
			<dt><label<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}{L_COLON}<!-- IF profile_fields.S_REQUIRED --> *<!-- ENDIF --></label>
			<!-- IF profile_fields.LANG_EXPLAIN --><br /><span>{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->
			<!-- IF profile_fields.ERROR --><br /><span class="error">{profile_fields.ERROR}</span><!-- ENDIF --></dt>
			<dd>{profile_fields.FIELD}</dd>
		</dl>
	<!-- END profile_fields -->
	<!-- ENDIF -->

	<!-- EVENT ucp_register_profile_fields_after -->
	</fieldset>
	</div>
</div>
<!-- IF CAPTCHA_TEMPLATE -->
	<!-- DEFINE $CAPTCHA_TAB_INDEX = 8 -->
	<!-- INCLUDE {CAPTCHA_TEMPLATE} -->
<!-- ENDIF -->

<!-- IF S_COPPA -->


<div class="panel">
	<div class="inner">

	<h4>{L_COPPA_COMPLIANCE}</h4>

	<p>{L_COPPA_EXPLAIN}</p>
	</div>
</div>
<!-- ENDIF -->

<div class="panel">
	<div class="inner">

	<fieldset class="submit-buttons">
		{S_HIDDEN_FIELDS}
		<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;
		<input type="submit" tabindex="9" name="submit" id="submit" value="{L_SUBMIT}" class="button1 default-submit-action" />
		{S_FORM_TOKEN}
	</fieldset>

	</div>
</div>
</form>
                
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
