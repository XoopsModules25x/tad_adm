<?php
xoops_loadLanguage('admin_common', 'tadtools');
//phpini.php
define('_MA_TADADM_PHPINI_ITEM', 'Setting item');
define('_MA_TADADM_PHPINI_ITEM_VAL', 'Settings');
define('_MA_TADADM_PHPINI_ADV', 'Suggested Values');
define('_MA_TADADM_PHPINI_ITEM_DESC', 'Description');

//main.php
define('_MA_TADADM_1', "<i class='icon-ok'></i>");
define('_MA_TADADM_0', '');
define('_MA_TADADM_MOD_UPDATE_MODULE', 'Upgrade now to');
define('_MA_TADADM_MOD_INSTALL_MODULE', 'Install now');
define('_MA_TADADM_MOD_UPDATE_THEME', 'Upgrade Theme to');
define('_MA_TADADM_MOD_INSTALL_THEME', 'Install Theme');
define('_MA_TADADM_MOD_LATEST', 'Is up to date');
define('_MA_TADADM_NO_MODS', 'No module');
define('_MA_TADADM_MOD_NAME', 'Module name');
define('_MA_TADADM_MOD_VERSION', 'Current version');
define('_MA_TADADM_MOD_NEW_VERSION', 'Latest version');
define('_MA_TADADM_MOD_LAST_UPDATE', 'Last update');
define('_MA_TADADM_MOD_NEW_LAST_UPDATE', 'Release date');
define('_MA_TADADM_MOD_DIRNAME', 'Directory name');
define('_MA_TADADM_MOD_UNINSTALL', 'Not Installed');
define('_MA_TADADM_MOD_UPDATE_DESC', 'A new version of that');
define('_MA_TADADM_MOD_ABOUT_MOD', 'Module Information');
define('_MA_TADADM_LOGIN', 'Login');
define('_MA_TADADM_SSH', 'SSH Login');
define('_MA_TADADM_SSH_HOST', 'Please enter the SSH login host');
define('_MA_TADADM_SSH_ID', 'Please enter the SSH login Username');
define('_MA_TADADM_SSH_PASS', 'Please enter the SSH login password');
define('_MA_TADADM_FTP', 'FTP login');
define('_MA_TADADM_FTP_HOST', 'Please enter FTP login host');
define('_MA_TADADM_FTP_ID', 'Please enter FTP login Username');
define('_MA_TADADM_FTP_PASS', 'Enter the FTP login password');
define('_MA_TADADM_DL_FAIL', '%s download failed!');
define('_MA_TADADM_MV_FAIL', '%s move to the next modules failed!');
define('_MA_TADADM_SSH_LOGIN_FAIL', '%s to SSH login %s failed!');
define('_MA_TADADM_FTP_LOGIN_FAIL', '%s to FTP login %s failed!');
define('_MA_TADADM_FTP_FAIL', 'FTP connection failed (not possible to start the FTP service or FTP service with this server)!');
define('_MA_TADADM_KIND', 'Kind');
define('_MA_TADADM_MODULE', 'Module');
define('_MA_TADADM_THEME', 'Theme');
define('_MA_TADADM_FIX', 'Patch');
define('_MA_TADADM_THEME_UPDATE_OK', 'Theme has been updated!');
define('_MA_TADADM_THEME_INSTALL_OK', "%s Theme installed! available to <a href='" . XOOPS_URL . "/modules/system/admin.php?fct=preferences&op=show&confcat_id=1'>Preferences </a>is set to the default setting, or apply it to the foreground Theme block");
define('_MA_TADADM_FTP_NOTE', 'FTP is only available with the installation of new modules, because the relationship between authority, FTP mode does not overwrite the original folder, it does not apply to updating modules.');

//spam.php
define('_MA_TADADM_NEVERLOGIN', 'Not logged off');
define('_MA_TADADM_CKECKOK', 'Inventory check is completed or no data');
define('_MA_TADADM_WORKTIME', 'Execution time:%s seconds');
define('_MA_TADADM_AUTO_CHECK', 'Automatic inventory mode ');
define('_MA_TADADM_AUTO_CHECK_DESC', '(to use once, the first time to check all the accounts This feature automatically checks all accounts and automatically feed due to exchange followed by a 20-page limit, so if more than %s account, Finally, the screen may go blank because of a forced outage at this time, please right-click on the address bar, and press Enter, so that you can continue to check until the inspection is completed so far)');
define('_MA_TADADM_AUTO_CHECK_DESC1', "will not even check to <a href='http://www.stopforumspam.com' target='_blank'>http://www.stopforumspam.com</a> to check the account Email whether it is registered with the garbage account, so for the first time may be slow.");
define('_MA_TADADM_AUTO_CHECK_DESC2', 'will result after checking into the database, so the account will become second faster browsing.');
define('_MA_TADADM_AUTO_CHECK_DESC3', "<span style='color:red'>red means it is registered with the 'junk account'</span>；<span style='color:#CC6600'>orange means 'from signature judged eight is rubbish to account' </span>；<span style='color:#505050'>black representatives should be generally account</span>，<span style='color:blue'>blue is articles published over the account</span>");
define('_MA_TADADM_AUTO_CHECK_DESC4', "<a href='spam.php?op=all&mode=force'> forced to re-check!</a>The Email will be checked before the note is already checked, it will not be checked again until the stopforumspam email is spam but to accelerate the speed check was only after some email stopforumspam as spam, so every once in a while, you can take advantage of this feature, re-check whether they have been classified as email spam");
define('_MA_TADADM_AUTO_CHECK_DESC5', "<a href='spam.php?op=spam'>spam lists only check list</a>(execute 'forced re-check' after, you can use this feature to watch have to find out What are spam and delete it). ");
define('_MA_TADADM_UNAME', 'Account');
define('_MA_TADADM_COUNT', 'Posts');
define('_MA_TADADM_EMAIL', 'Email');
define('_MA_TADADM_SPAM', 'Spam');
define('_MA_TADADM_REGIST', 'Registered');
define('_MA_TADADM_LASTLOGIN', 'Last login (days ago)');
define('_MA_TADADM_SIGN', 'Signature');
define('_MA_TADADM_DONT_DEL_ROOT', 'Can not delete an Administrator');
define('_MA_TADADM_DEL_FAIL', 'User Delete failed!');
define('_MA_TADADM_DEL_OK', 'Delete finished!');
define('_MA_TADADM_NEXT_PAGE', 'Switch to the next page');
define('_MA_TADADM_TOTAL', 'of %s documents');
define('_MA_TADADM_NEVERSTART_DAY', 'Never activated, and registration older than %s days');
define('_MA_TADADM_NEVERLOGIN_DAY', 'Never logged and registration older than %s days');
define('_MA_TADADM_BY_EMAIL', 'Email (domain) information is %s ');

define('_MA_TADADM_SELECT_ALL', 'Select All');
define('_MA_TADADM_MOD_FUNCTION', 'Function');
define('_MA_TADADM_MOD_BLOCK', 'Block');
define('_MA_TADADM_MOD_ADMIN', 'Module Admin');

define('_MA_TADADM_MODULES_UPDATING', 'Updating');
define('_MA_TADADM_MODULES_INSTALLING', 'Installing');
define('_MA_TADADM_MODULES_PHP_INI_PATH', 'Important Values');
define('_MA_TADADM_FREE_SPACE', 'HD free space:');
define('_MA_TADADM_DOWNLOAD_ZIP', 'Download backup zip');

define('_MA_TADADM_CHMOD_FAILED', '<ul><li>Could not set read/write permissions for %s to %s, possibly because the file directory owner is not correct.</li></ul>');
define('_MA_TADADM_OWNER', 'Owner:Group');
define('_MA_TADADM_PERMS', 'Permissions');

define('_MA_TADADM_ADMTPL', 'Cpanel');
define('_MA_TADADM_MOD_UPDATE_ADMTPL', 'Update Cpanel');
define('_MA_TADADM_MOD_INSTALL_ADMTPL', 'Install Cpanel');
define('_MA_TADADM_ADM_TPL_LATEST', 'Is up to date');
define('_MA_TADADM_ADM_TPL_INSTALL_OK', 'Cpanel  %s  install success!');
define('_MA_TADADM_ADM_TPL_UPDATE_OK', 'Cpanel upgrade success!');

define('_MA_TADADM_MOD_CLOSED', 'Module closed');
define('_MA_TADADM_CLEAN', 'Delete all custom templates');
define('_MA_TADADM_CLEANED', 'There is currently no custom template');

define('_MA_TADADM_MOD_PREF', 'Preferences');
define('_MA_TADADM_CAN_UPDATE_TO', 'can be upgraded to ');
define('_MA_TADADM_ENABLE_MOD', 'Enable module');
define('_MA_TADADM_INSTALLED_MODS', 'Installed module');
define('_MA_TADADM_INSTALLED_UNABLE_MODS', 'nstalled but closed modules');
define('_MA_TADADM_REMOVE', 'Remove');
define('_MA_TADADM_DEFAULT_THEME', 'Currently default theme');
define('_MA_TADADM_UPDATE_TO_ALLOWED', 'Changed to useable');
define('_MA_TADADM_UPDATE_TO_NOT_ALLOWED', 'Changed to unusable');
define('_MA_TADADM_WRITABLE', 'Writable');
define('_MA_TADADM_ALLOWED_THEMES', 'Useable themes');
define('_MA_TADADM_NOT_ALLOWED_THEMES', 'Unusable themes');
define('_MA_TADADM_SPECIAL_THEMES', 'Special themes');
define('_MA_TADADM_THEME_DELETE_OK', 'Theme removed successfully!');

define('_MA_TADADM_FAILED_TO_GET_JSON', 'Failed to get file list');

define('_MA_TADADM_ALLOWED_ENABLE_THEMES', 'Installable Website themes');
define('_MA_TADADM_SPECIAL_ENABLE_THEMES', 'Installable special themes');
define('_MA_TADADM_SPECIAL_THEMES_CANT_DEFAULT', 'Special themes cannot be set as default themes');
define('_MA_TADADM_SPECIAL_THEMES_CANT_USEABLE', 'Special themes should not be used by users');

define('_MA_TADADM_ENABLE_MODS', 'Installable Module');
define('_MA_TADADM_INSTALLED_ADM', 'Installed admin panel');
define('_MA_TADADM_ENABLE_ADM', 'Installable admin panel');
define('_MA_TADADM_INSTALLED_THEME', 'Installed themes');
define('_MA_TADADM_ENABLE_THEME', 'Installable themes');
define('_MA_TADADM_INSTALLED_BLOCK', 'Installed blocks');
define('_MA_TADADM_ENABLE_BLOCK', 'Installable blocks');
define('_MA_TADADM_UNABLE_BLOCKS', 'Unable blocks');
define('_MA_TADADM_MOD_UPDATE_BLOCK', 'Update blocks');
define('_MA_TADADM_UPGRADE_XOOPS', 'Upgrade to ');
define('_MA_TADADM_PATCH_XOOPS', 'Patch to ');
define('_MA_TADADM_PATCH_OK', 'Patch successed!');
define('_MA_TADADM_UPGRADE_OK', 'Upgrade successed!');
define('_MA_TADADM_UPGRADE_FROM_URL', 'Then please manually upgrade the program');
