<?php
include_once "../../mainfile.php";

$op=isset($_REQUEST['op'])?$_REQUEST['op']:"";

if($xoopsUser) {
  $_SESSION['isAdmin']=$xoopsUser->isAdmin(1);
}elseif($op=="helpme"){
  $modhandler = &xoops_gethandler('module');
  $xoopsModule = &$modhandler->getByDirname("tad_adm");
  $config_handler =& xoops_gethandler('config');
  $xoopsModuleConfig =& $config_handler->getConfigsByCat(0, $xoopsModule->getVar('mid'));
  $_SESSION['isAdmin']=($xoopsModuleConfig['login']!='' and $_POST['help_passwd']!='' and $xoopsModuleConfig['login']==$_POST['help_passwd'])?true:false;
}elseif($op=="send_passwd"){
  send_passwd();
  header("location: {$_SERVER['PHP_SELF']}");
}


if(!$_SESSION['isAdmin']){
  $sql="update ".$xoopsDB->prefix(config)." set `conf_value`='' where `conf_name`='login' and `conf_title`='_MI_TADADM_LOGIN'";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());

  if($op=="forgot"){
    $form='<form  class="well" action="'.$_SERVER['PHP_SELF'].'" method="post">
      <ol>
      <li>'._MD_TADADM_INPUT_PASSWD_DESC.'</li>
      <li>'._MD_TADADM_INPUT_PASSWD.'
      <input type="text" name="help_passwd" class="span3" placeholder=""></li>
      </ol>
      <input type="hidden" name="op" value="helpme">
      <button type="submit" class="btn btn-primary">'._MD_TADADM_LOGIN.'</button>
    </form>';
  }else{
    $form='<form action="'.XOOPS_URL.'/user.php" method="post">
      <fieldset>
      <legend>'._MD_TADADM_LOGIN.'</legend>
      '._MD_TADADM_USER_S_ID.'
      <input type="text" name="uname"  id="uname" placeholder="'._MD_TADADM_USER_ID.'"  class="input-small" />
      '._MD_TADADM_USER_S_PASS.'
      <input type="password" name="pass" id="pass" placeholder="'._MD_TADADM_USER_PASS.'" class="input-small" />
      <input type="hidden" name="xoops_redirect" value="'.$_SERVER['PHP_SELF'].'" />
      <input type="hidden" name="rememberme" value="On" />
      <input type="hidden" name="op" value="login" />
      <br />
      <a href="index.php?op=forgot" style="font-size:12px;color:gray;">'._MD_TADADM_FORGOT.'</a>
      <button type="submit" class="btn btn-primary">'._MD_TADADM_LOGIN.'</button>
      </fieldset>
    </form>';
  }

  die('
  <!DOCTYPE html>
  <html lang="'._LANGCODE.'">
    <head>
      <meta charset="'._CHARSET.'">
      <title>'._MD_TADADM_NAME.'</title>
      <!-- Bootstrap -->
      <link href="'.XOOPS_URL.'/modules/tadtools/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="'.XOOPS_URL.'/modules/tadtools/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    </head>
    <body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="page-header">
            <h1>'._MD_TADADM_NAME.'</h1>
          </div>
          <div class="row-fluid">
            <div class="span12">
            '.$form.'
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
  </html>
  ');
}

$logout=($xoopsUser)?XOOPS_URL."/user.php?op=logout":"index.php?op=logout";


$v=isset($_REQUEST['v'])?$_REQUEST['v']:"0";

switch($op){

  case "unable_blocks":
  unable_blocks();
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "unable_modules":
  unable_modules();
  header("location: {$_SERVER['PHP_SELF']}");
  break;


  case "enable_blocks":
  enable_blocks();
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "enable_modules":
  enable_modules();
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "reset_mem":
  reset_mem($_POST['uid'],$_POST['new_pass']);
  header("location: ".XOOPS_URL."/userinfo.php?uid={$_POST['uid']}");
  break;


  case "debug_mode":
  debug_mode($v);
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "clear_cache":
  clear_cache();
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "clear_session":
  clear_session();
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "theme_default":
  theme_default();
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "close_site":
  close_site($v);
  header("location: {$_SERVER['PHP_SELF']}");
  break;

  case "phpinfo":
  phpinfo();
  break;

  case "logout":
  $_SESSION['isAdmin']=false;
  header("location: {$_SERVER['PHP_SELF']}");
  break;

}

//關閉所有模組
function unable_modules(){
  global $xoopsDB;
  $sql="select mid from ".$xoopsDB->prefix("modules")." where `isactive`=1 and `dirname`!='system' and `dirname`!='tad_adm'";
  $result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
  while(list($mid)=$xoopsDB->fetchRow($result)){
    $mid_array[]=$mid;
  }

  $all_mid=implode(",", $mid_array);
  $sql="update ".$xoopsDB->prefix('config')." set `conf_value`='{$all_mid}' where `conf_name`='module_id_temp'";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());

  $sql="update ".$xoopsDB->prefix('modules')." set `isactive`='0' where `mid` in($all_mid)";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}


//還原所有模組
function enable_modules(){
  global $xoopsDB,$xoopsModuleConfig;
  $sql="update ".$xoopsDB->prefix('modules')." set `isactive`='1' where `mid` in({$xoopsModuleConfig['module_id_temp']})";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());

  $sql="update ".$xoopsDB->prefix('config')." set `conf_value`='' where `conf_name`='module_id_temp'";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}

//關閉所有區塊
function unable_blocks(){
  global $xoopsDB;
  $sql="select bid from ".$xoopsDB->prefix("newblocks")." where `visible`=1";
  $result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
  while(list($bid)=$xoopsDB->fetchRow($result)){
    $bid_array[]=$bid;
  }

  $all_bid=implode(",", $bid_array);
  $sql="update ".$xoopsDB->prefix('config')." set `conf_value`='{$all_bid}' where `conf_name`='block_id_temp'";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());

  $sql="update ".$xoopsDB->prefix('newblocks')." set `visible`='0' where `bid` in($all_bid)";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}

//還原所有區塊
function enable_blocks(){
  global $xoopsDB,$xoopsModuleConfig;
  $sql="update ".$xoopsDB->prefix('newblocks')." set `visible`='1' where `bid` in({$xoopsModuleConfig['block_id_temp']})";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());

  $sql="update ".$xoopsDB->prefix('config')." set `conf_value`='' where `conf_name`='block_id_temp'";
  $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}


//重設密碼
function reset_mem($uid="",$passwd=""){
  global $xoopsDB;
  $passwd=md5($passwd);
  $sql="update ".$xoopsDB->prefix('users')." set `pass`='{$passwd}' where `uid`='{$uid}'";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}

//寄發密碼
function send_passwd(){
  global $xoopsConfig,$xoopsDB;
  $passwd=GeraHash(30);
  $sql="update ".$xoopsDB->prefix('config')." set `conf_value`='{$passwd}' where `conf_name`='login' and `conf_title`='_MI_TADADM_LOGIN'";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());

  $content=sprintf(_MD_TADADM_MAIL_CONTENT,$passwd);
  if(send_now($xoopsConfig['adminmail'],_MD_TADADM_PASSWD,$content)){
    return sprintf(_MD_TADADM_MAIL_PASSWD_OK,$xoopsConfig['adminmail']);
  }else{
    return sprintf(_MD_TADADM_MAIL_PASSWD_FAIL,$xoopsConfig['adminmail']);
  }
}


//立即寄出
function send_now($email="",$title="",$content=""){
	global $xoopsConfig,$xoopsDB,$xoopsModuleConfig,$xoopsModule;

	$xoopsMailer =& getMailer();
	$xoopsMailer->multimailer->ContentType="text/html";
	$xoopsMailer->addHeaders("MIME-Version: 1.0");

	$msg.=($xoopsMailer->sendMail($email,$title, $content,$headers))?true:false;
	return $msg;
}


function GeraHash($qtd){
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;

$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }

return $Hash;
}


//目前硬碟空間
function get_free_space(){
    $bytes = disk_free_space(".");
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    $space= sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class];
    return $space;
}


//改回預設佈景
function theme_default(){
  global $xoopsDB;

	$sql="update ".$xoopsDB->prefix("config")." set conf_value='default' where conf_name='theme_set'";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}

//清除 session
function clear_session(){
  global $xoopsDB;
	$sql="TRUNCATE TABLE ".$xoopsDB->prefix("session")."";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}

//清除快取
function clear_cache(){
	$dirname=XOOPS_VAR_PATH."/caches/smarty_compile";
	if(is_dir($dirname)){
    delete_directory($dirname) ;
    $fp = fopen("{$dirname}/index.html", 'w');
    fwrite($fp, '<script>history.go(-1);</script>');
    fclose($fp);
  }
}

//刪除目錄檔案
function delete_directory($dirname) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname."/".$file))
                unlink($dirname."/".$file);
            else
                delete_directory($dirname.'/'.$file);
        }
    }
    closedir($dir_handle);
    //rmdir($dirname);
    return true;
}

//session 資料表容量
function session_size(){
  global $xoopsDB;
	$sql="show table status where name='".$xoopsDB->prefix("session")."'";
	$result=$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
  $row=$xoopsDB->fetchArray($result);

  $bytes = ($row['Data_length'] + $row['Index_length']);

  $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
  $base = 1024;
  $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
  $space= sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class];

  return sprintf(_MD_TADADM_BRACKETS,$space);
}


//取得目錄下的檔案數
function files_counter(){
	$dirname=XOOPS_VAR_PATH."/caches/smarty_compile/";
  if (glob($dirname . "*.php") != false){
   $filecount = count(glob($dirname . "*.php"));
   return sprintf(_MD_TADADM_FILES_COUNT,$filecount);;
  }
}


//修改關站狀態
function close_site($v=0){
  global $xoopsDB;

	$sql="update ".$xoopsDB->prefix("config")." set conf_value='$v' where conf_name='closesite'";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}


//修改除錯模式
function debug_mode($v=0){
  global $xoopsDB;

	$sql="update ".$xoopsDB->prefix("config")." set conf_value='$v' where conf_name='debug_mode'";
	$xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
}



function debug_mode_tool(){
  global $xoopsDB;

	$sql="select conf_value from ".$xoopsDB->prefix("config")." where conf_name='debug_mode'";
	$result = $xoopsDB->queryF($sql) or die($sql."<br>". mysql_error());
	list($debug)=$xoopsDB->fetchRow($result);
	if($debug==1){
    $debug_tool="
    <li><a href='index.php?op=debug_mode&v=0'><i class='icon-envelope'  title='".sprintf(_MD_TADADM_UNABLE_DEBUG,"PHP")."'></i>".sprintf(_MD_TADADM_UNABLE_DEBUG,"PHP")."</a></li>
    <li><a href='index.php?op=debug_mode&v=3'><i class='icon-envelope'  title='".sprintf(_MD_TADADM_ENABLE_DEBUG,"Smarty")."'></i>".sprintf(_MD_TADADM_ENABLE_DEBUG,"Smarty")."</a></li>";
  }elseif($debug==3){
    $debug_tool="
    <li><a href='index.php?op=debug_mode&v=1'><i class='icon-envelope'  title='".sprintf(_MD_TADADM_ENABLE_DEBUG,"PHP")."'></i>".sprintf(_MD_TADADM_ENABLE_DEBUG,"PHP")."</a></li>
    <li><a href='index.php?op=debug_mode&v=0'><i class='icon-envelope'  title='".sprintf(_MD_TADADM_UNABLE_DEBUG,"Smarty")."'></i>".sprintf(_MD_TADADM_UNABLE_DEBUG,"Smarty")."</a></li>";

  }else{
    $debug_tool="
    <li><a href='index.php?op=debug_mode&v=1'><i class='icon-envelope'  title='".sprintf(_MD_TADADM_ENABLE_DEBUG,"PHP")."'></i>".sprintf(_MD_TADADM_ENABLE_DEBUG,"PHP")."</a></li>
    <li><a href='index.php?op=debug_mode&v=3'><i class='icon-envelope'  title='".sprintf(_MD_TADADM_ENABLE_DEBUG,"Smarty")."'></i>".sprintf(_MD_TADADM_ENABLE_DEBUG,"Smarty")."</a></li>";
  }
  return $debug_tool;
}



//MySQL版本
ob_start();
phpinfo(INFO_MODULES);
$phpinfo = ob_get_contents();
ob_end_clean();
$info = stristr($phpinfo, 'Client API version');
preg_match('/[1-9].[0-9].[1-9][0-9]/', $info, $match);
$gd = $match[0];

//檢查連線
$mysql_connect=mysql_connect(XOOPS_DB_HOST, XOOPS_DB_USER, XOOPS_DB_PASS)?"OK":_MD_TADADM_CANT_CONNECT;

$other="";
if($mysql_connect=="OK"){

  //註冊人數
	$sql="select count(*) from ".$xoopsDB->prefix("users")."";
	$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
	list($all_user_count)=$xoopsDB->fetchRow($result);

  //從未登入人數
	$sql="select count(*) from ".$xoopsDB->prefix("users")." where last_login=0";
	$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
	list($never_login_user_count)=$xoopsDB->fetchRow($result);

  //未啟用人數
	$sql="select count(*) from ".$xoopsDB->prefix("users")." where user_regdate=0";
	$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
	list($never_start_user_count)=$xoopsDB->fetchRow($result);

  //正常會員人數
	$sql="select count(*) from ".$xoopsDB->prefix("users")." where user_regdate!=0 and last_login!=0";
	$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
	list($normal_user_count)=$xoopsDB->fetchRow($result);

  //各群組人數
	$sql="select a.`groupid`, a.`uid`, b.`name` from ".$xoopsDB->prefix("groups_users_link")." as a left join ".$xoopsDB->prefix("groups")." as b on a.`groupid` = b.`groupid` order by a.`groupid`";

	$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
  $groupid_count=$group_name=array();
	while(list($groupid ,$uid , $name)=$xoopsDB->fetchRow($result)){
    if(isset($groupid_count[$groupid])){
      $groupid_count[$groupid]++;
    }else{
      $groupid_count[$groupid]=1;
    }
    $group_name[$groupid]=$name;
  }

  $groupid_count_list="<li class=\"divider\"></li>";

  foreach($groupid_count as $groupid => $counter){
    if($groupid==0){
      $gname=_MD_TADADM_NO_GROUP;
    }elseif($groupid==3){
      $gname=_MD_TADADM_GUEST;
    }else{
      $gname=empty($group_name[$groupid])?_MD_TADADM_SOME_GROUP." {$groupid}":$group_name[$groupid];
    }
    $groupid_count_list.="<li><span class=\"label label-info\">{$groupid}</span>".sprintf(_MD_TADADM_GROUP_COUNTEER,$gname,$counter)."</li>";
  }


  $other="<li class=\"divider\"></li>
  <li><i class='icon-envelope'  title='XOOPS "._MD_TADADM_MEM_AMOUNT."'></i>XOOPS "._MD_TADADM_MEM_AMOUNT.": ".$all_user_count." "._MD_TADADM_PEOPLE."</li>
  <li><i class='icon-envelope'  title='XOOPS "._MD_TADADM_AVAILABLE_MEM_AMOUNT."'></i>XOOPS "._MD_TADADM_AVAILABLE_MEM_AMOUNT.": ".$normal_user_count." "._MD_TADADM_PEOPLE."</li>
  <li><i class='icon-envelope'  title='XOOPS "._MD_TADADM_UNAVAILABLE_MEM_AMOUNT."'></i>XOOPS "._MD_TADADM_UNAVAILABLE_MEM_AMOUNT." :".$never_start_user_count." "._MD_TADADM_PEOPLE."</li>
  <li><i class='icon-envelope'  title='XOOPS "._MD_TADADM_NEVER_LOGIN."'></i>XOOPS "._MD_TADADM_NEVER_LOGIN.": ".$never_login_user_count." "._MD_TADADM_PEOPLE."</li>
  $groupid_count_list
  ";
}

$main1="
<fieldset>
  <legend>"._MD_TADADM_SYSTEM_INFO."</legend>
  <ul class='nav nav-list'>
    <li><i class='icon-envelope'  title='XOOPS "._MD_TADADM_VERSION."'></i>XOOPS "._MD_TADADM_VERSION.": ".XOOPS_VERSION."</li>
    <li><i class='icon-envelope'  title='XOOPS "._MD_TADADM_LANGUAGE."'></i>XOOPS "._MD_TADADM_LANGUAGE.": ".$xoopsConfig['language']."</li>
    <li><i class='icon-envelope'  title='PHP "._MD_TADADM_VERSION."'></i>PHP "._MD_TADADM_VERSION.": ".phpversion()."</li>
    <li><i class='icon-envelope'  title='MySQL "._MD_TADADM_VERSION."'></i>MySQL "._MD_TADADM_VERSION.": ".$gd."</li>
    <li><i class='icon-envelope'  title='MySQL "._MD_TADADM_CONNECT."'></i>MySQL "._MD_TADADM_CONNECT.": ".$mysql_connect."</li>
    $other
    <li class=\"divider\"></li>
    <li><i class='icon-envelope'  title='"._MD_TADADM_AVAILABLE_SPACE."'></i>"._MD_TADADM_AVAILABLE_SPACE.": ".get_free_space()."</li>
    <li><a href='index.php?op=phpinfo'><i class='icon-envelope'  title='phpinfo'></i>phpinfo()</a></li>
  </ul>
</fieldset>";


$theme_set=($xoopsConfig['theme_set']=='default')?"":"<li><a href='index.php?op=theme_default'><i class='icon-envelope'  title='"._MD_TADADM_DEFAULT_THEME."'></i>".sprintf(_MD_TADADM_DEFAULT_THEME_DESC,$xoopsConfig['theme_set'])."</a></li>";

$main2="
<fieldset>
  <legend>"._MD_TADADM_AID."</legend>
  <ul class='nav nav-list'>
    ".debug_mode_tool()."
    <li><a href='index.php?op=clear_cache'><i class='icon-envelope'  title='"._MD_TADADM_CLEAR_CACHE."'></i>"._MD_TADADM_CLEAR_CACHE.files_counter()."</a></li>
    <li><a href='index.php?op=clear_session'><i class='icon-envelope'  title='"._MD_TADADM_CLEAR_SESSION."'></i>"._MD_TADADM_CLEAR_SESSION.session_size()."</a></li>
    $theme_set

  </ul>
</fieldset>";



$close_site=$xoopsConfig['closesite']=='1'?"<li><a href='index.php?op=close_site&v=0'><i class='icon-envelope'  title='"._MD_TADADM_ENABLE_WEB."'></i>"._MD_TADADM_ENABLE_WEB."</a></li>":"<li><a href='index.php?op=close_site&v=1'><i class='icon-envelope'  title='"._MD_TADADM_UNABLE_WEB."'></i>"._MD_TADADM_UNABLE_WEB."</a></li>";

$admin_options="";
$sql="select a.uid,b.uname from ".$xoopsDB->prefix("groups_users_link")." as a left join ".$xoopsDB->prefix("users")." as b on a.uid=b.uid where a.groupid=1";
$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
while(list($uid,$uname)=$xoopsDB->fetchRow($result)){
  $admin_options.="<option value='{$uid}'>{$uname}</option>";
}


$XoopsFormSelectUserOption="";
$sql="select a.uid,b.uname,b.name from ".$xoopsDB->prefix("groups_users_link")." as a left join ".$xoopsDB->prefix("users")." as b on a.uid=b.uid where a.groupid=2 order by b.uname";
$result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
while(list($uid,$uname,$name)=$xoopsDB->fetchRow($result)){
  if(empty($uname))continue;
  $showname=empty($name)?"":" ({$name})";
  $XoopsFormSelectUserOption.="<option value='{$uid}'>{$uname}{$showname}</option>";
}


if($xoopsModuleConfig['module_id_temp']!=""){
  $modules_amount=count(explode(",", $xoopsModuleConfig['module_id_temp']));
  $modules_tool="<a href='index.php?op=enable_modules'><i class='icon-envelope' title='".sprintf(_MD_TADADM_ENABLE_ALL_MODS , $modules_amount)."'></i>".sprintf(_MD_TADADM_ENABLE_ALL_MODS , $modules_amount)."</a>";
}else{
  //計算模組數量
  $sql="select count(*) from ".$xoopsDB->prefix("modules")." where `isactive`=1 and `dirname`!='system' and `dirname`!='tad_adm'";
  $result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
  list($modules_amount)=$xoopsDB->fetchRow($result);

  $modules_tool="<a href='index.php?op=unable_modules'><i class='icon-envelope' title='".sprintf(_MD_TADADM_UNABLE_ALL_MODS , $modules_amount)."'></i>".sprintf(_MD_TADADM_UNABLE_ALL_MODS , $modules_amount)."</a>";
}


if($xoopsModuleConfig['block_id_temp']!=""){
  $blocks_amount=count(explode(",", $xoopsModuleConfig['block_id_temp']));
  $blocks_tool="<a href='index.php?op=enable_blocks'><i class='icon-envelope' title='".sprintf(_MD_TADADM_ENABLE_ALL_BLOCKS , $blocks_amount)."'></i>".sprintf(_MD_TADADM_ENABLE_ALL_BLOCKS , $blocks_amount)."</a>";
}else{
  //計算區塊數量
  $sql="select count(*) from ".$xoopsDB->prefix("newblocks")." where `visible`=1";
  $result = $xoopsDB->query($sql) or die($sql."<br>". mysql_error());
  list($blocks_amount)=$xoopsDB->fetchRow($result);

  $blocks_tool="<a href='index.php?op=unable_blocks'><i class='icon-envelope' title='".sprintf(_MD_TADADM_UNABLE_ALL_BLOCKS , $blocks_amount)."'></i>".sprintf(_MD_TADADM_UNABLE_ALL_BLOCKS , $blocks_amount)."</a>";
}


$main3="
<fieldset>
  <legend>"._MD_TADADM_WEB_FUNCTION."</legend>
  <ul class='nav nav-list'>
    $close_site
    <li><i class='icon-envelope'  title='"._MD_TADADM_RESET_ADMIN_PASSWD."'></i>
    "._MD_TADADM_RESET_ADMIN_PASSWD."
    <form class='form' action='{$_SERVER['PHP_SELF']}' method='post'>
    <select name='uid'>
    {$admin_options}
    </select>
    <input type='text' name='new_pass' class='span8' placeholder='"._MD_TADADM_RESET_ADMIN_PASSWD."'>
    <input type='hidden' name='op' value='reset_mem'>
    <button type='submit' class='btn'>"._MD_TADADM_SET."</button>
    </form>
    </li>
    <li><i class='icon-envelope'  title='"._MD_TADADM_RESET_MEM_PASSWD."'></i>"._MD_TADADM_RESET_MEM_PASSWD."
    <form class='form' action='{$_SERVER['PHP_SELF']}' method='post'>
    <select name='uid'>
    {$XoopsFormSelectUserOption}
    </select>
    <input type='text' name='new_pass' class='span8' placeholder='"._MD_TADADM_RESET_ADMIN_PASSWD."'>
    <input type='hidden' name='op' value='reset_mem'>
    <button type='submit' class='btn'>"._MD_TADADM_SET."</button>
    </form>
    </li>
    <li>{$blocks_tool}</li>
    <li>{$modules_tool}</li>
  </ul>
</fieldset>";

$into_admin=($xoopsUser)?"<li><a href='".XOOPS_URL."/admin.php' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_ADMIN."'></i>"._MD_TADADM_ADMIN."</a></li>":"";
$into_setup=($xoopsUser)?"<li><a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences&op=show&confcat_id=1' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_PREFERENCES."'></i>"._MD_TADADM_PREFERENCES."</a></li>":"";
$into_module=($xoopsUser)?"<li><a href='".XOOPS_URL."/modules/system/admin.php?fct=modulesadmin' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_MODULES."'></i>"._MD_TADADM_MODULES."</a></li>":"";

$main4="
<fieldset>
  <legend>"._MD_TADADM_LINKS."</legend>
  <ul class='nav nav-list'>
    <li><a href='".XOOPS_URL."' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_LINK_TO." ".XOOPS_URL."'></i>"._MD_TADADM_LINK_TO." ".XOOPS_URL."</a></li>
    <li><a href='".XOOPS_URL."/user.php' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_LOGIN_PAGE."'></i>"._MD_TADADM_LOGIN_PAGE."</a></li>
    $into_admin
    $into_setup
    $into_module
    <li><a href='pma.php' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_DB."'></i>"._MD_TADADM_DB."</a></li>
    <li><a href='$logout' target='_blank'><i class='icon-envelope'  title='"._MD_TADADM_LOGOUT."'></i>"._MD_TADADM_LOGOUT."</a></li>

  </ul>
</fieldset>";


echo '
<!DOCTYPE html>
<html lang="'._LANGCODE.'">
  <head>
    <meta charset="'._CHARSET.'">
    <title>'._MD_TADADM_NAME.'</title>
    <!-- Bootstrap -->
    <link href="'.XOOPS_URL.'/modules/tadtools/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="'.XOOPS_URL.'/modules/tadtools/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  </head>
  <body>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="page-header">
          <h1>'._MD_TADADM_NAME.'</h1>
        </div>
        <div class="row-fluid">
          <div class="span3">'.$main1.'</div>
          <div class="span3">'.$main2.'</div>
          <div class="span3">'.$main3.'</div>
          <div class="span3">'.$main4.'</div>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>
';

?>

