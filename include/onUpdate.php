<?php

function xoops_module_update_tad_adm(&$module, $old_version)
{
    global $xoopsDB;

    if (chk_uid()) {
        go_update_uid();
    }

    return true;
}

//�ץ�uid���
function chk_uid()
{
    global $xoopsDB;
    $sql = "SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS
  WHERE table_name = '" . $xoopsDB->prefix("tad_adm") . "' AND COLUMN_NAME = 'uid'";
    $result     = $xoopsDB->query($sql);
    list($type) = $xoopsDB->fetchRow($result);
    if ($type == 'smallint') {
        return true;
    }

    return false;
}

//�����s
function go_update_uid()
{
    global $xoopsDB;
    $sql = "ALTER TABLE `" . $xoopsDB->prefix("tad_adm") . "` CHANGE `uid` `uid` mediumint(8) unsigned NOT NULL default 0";
    $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL, 3, mysql_error());
    return true;
}

//�إߥؿ�
function mk_dir($dir = "")
{
    //�Y�L�ؿ��W�٨q�Xĵ�i�T��
    if (empty($dir)) {
        return;
    }

    //�Y�ؿ����s�b���ܫإߥؿ�
    if (!is_dir($dir)) {
        umask(000);
        //�Y�إߥ��Ѩq�Xĵ�i�T��
        mkdir($dir, 0777);
    }
}

//�����ؿ�
function full_copy($source = "", $target = "")
{
    if (is_dir($source)) {
        @mkdir($target);
        $d = dir($source);
        while (false !== ($entry = $d->read())) {
            if ($entry == '.' || $entry == '..') {
                continue;
            }

            $Entry = $source . '/' . $entry;
            if (is_dir($Entry)) {
                full_copy($Entry, $target . '/' . $entry);
                continue;
            }
            copy($Entry, $target . '/' . $entry);
        }
        $d->close();
    } else {
        copy($source, $target);
    }
}

function rename_win($oldfile, $newfile)
{
    if (!rename($oldfile, $newfile)) {
        if (copy($oldfile, $newfile)) {
            unlink($oldfile);
            return true;
        }
        return false;
    }
    return true;
}

function delete_directory($dirname)
{
    if (is_dir($dirname)) {
        $dir_handle = opendir($dirname);
    }

    if (!$dir_handle) {
        return false;
    }

    while ($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname . "/" . $file)) {
                unlink($dirname . "/" . $file);
            } else {
                delete_directory($dirname . '/' . $file);
            }

        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}
