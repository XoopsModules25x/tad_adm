<?php
$ini['child_terminate'] = "PHP�}���b�ШD������O�_���\�ϥ�apache_child_terminate()��Ʋפ�l�i�{�C
<br> �ӫ��O�ȦbUNIX���x�W�NPHP�w�ˬ�Apache1.3���Ҳծɥi�ΡC��L���p�U�Ҥ��s�b�C";

$ini['engine'] = "�O�_�ҥ�PHP�ѪR�����C
<br> ���ܡG�i�H�bhttpd.conf�����ؿ��Ϊ̵����D���ӥ��}�Ϊ�����PHP�ѪR�����C";

$ini['last_modified'] = "�O�_�bLast-Modified�����Y����m��PHP�}�����̫�ק�ɶ��C";
$ini['xbithack'] = "�O�_�����ɮ׵����O����A���@��PHP�i�����ըӸѪR�C";
$ini['date.default_latitude'] = "�w�]�n��";
$ini['date.default_longitude'] = "�w�]�g��";
$ini['date.sunrise_zenith'] = "�w�]��X�ѳ�";
$ini['date.sunset_zenith'] = "�w�]�鸨�ѳ�";
$ini['date.timezone'] = "���]�wTZ�����ܼƮɥΩ�Ҧ�����M�ɶ���ƪ��w�]�ɰϡC
<br> ���ήɰϪ��u�����Ǭ��G
<br> 1. ��date_default_timezone_set()��Ƴ]�w���ɰ�(�p�G�]�w�F����)
<br> 2. TZ �����ܼ�(�p�G�D�Ū���)
<br> 3. �ӫ��O����(�p�G�]�w�F����)
<br> 4. PHP�ۤv����(�p�G�ާ@�t�Τ��)
<br> 5. �p�G�H�W�������\�A�h�ϥ� UTC";
$ini['assert.active'] = "�O�_�ҥ�assert()�_������";
$ini['assert.bail'] = "�O�_�b�o�ͥ����_���ɤ���}��������";
$ini['assert.callback'] = "�o�ͥ����_���ɰ��檺�^�ը��";
$ini['assert.quiet_eval'] = "�O�_�ϥΦw�R����(����ܥ�����~�H���A�۷�� error_reporting=0)�C
<br> �Y�����h�b�����_����F�����ɭԨϥη�e�� error_reporting ���O�ȡC";
$ini['assert.warning'] = "�O�_��C�ӥ����_�����o�Xĵ�i";

$ini['safe_mode'] = "�O�_�ҥΦw���Ҧ��C
<br> ���}�ɡAPHP�N�ˬd��e�}�����֦��̬O�_�M�Q�ާ@���ɮת��֦��̬ۦP�A
<br> �ۦP�h���\�ާ@�A���P�h�ڵ��ާ@�C";

$ini['safe_mode_gid '] = "�b�w���Ҧ��U�A�w�]�b�X���ɮ׮ɷ|�� UID ����ˬd�C
<br> �����Ǳ��p�U�Y�檺UID�ˬd�ϦӬO���A�X���A�e�P��GID�ˬd�w�g�����C
<br> �p�G�A�Q�N���e��Ȱ�GID����A�i�H���}�o�ӰѼơC";

$ini['safe_mode_allowed_env_vars'] = "�b�w���Ҧ��U�A�Τ�ȥi�H��諸�����ܼƪ��e��C��(�r�����j)�C
<br> ���\�Τ�]�m�Y�������ܼơA�i��|�ɭP��b���w���|�}�C
<br> �`�N: �p�G�o�@�ѼƭȬ��šAPHP�N���\�Τ�����N�����ܼơI";

$ini['safe_mode_protected_env_vars'] = "�b�w���Ҧ��U�A�Τᤣ���諸�����ܼƦC��(�r�����j)�C
<br> �o���ܼƧY�Ϧbsafe_mode_allowed_env_vars���O�]�m�����\�����p�U�]�|�o��O�@�C";

$ini['safe_mode_exec_dir'] = "�b�w���Ҧ��U�A�u���ӥؿ��U���i����{�Ǥ~���\�Q����t�ε{�Ǫ���ư���C
<br> �o�Ǩ�ƬO�Gsystem, escapeshellarg, escapeshellcmd, exec, passthru,
<br> proc_close, proc_get_status, proc_nice, proc_open, proc_terminate, shell_exec";

$ini['safe_mode_include_dir'] = "�b�w���Ҧ��U�A�Ӳեؿ��M��l�ؿ��U���ɮ׳Q�]�t�ɡA�N���LUID/GID�ˬd�C
<br> ���y�ܻ��A�p�G���B���Ȭ��šA����UID/GID���ŦX���ɮ׳������\�Q�]�t�C
<br> �o�̳]�m���ؿ������w�g�s�b��include_path���O���Ϊ̥Χ�����|�ӥ]�t�C
<br> �h�ӥؿ������Ϋ_��(Win�U������)�j�}�C
<br> ���w�������ڤW�O�@�ӫe��A�ӫD�@�ӥؿ��W�A
<br> �]�N�O���u/dir/incl�v�N���\�X�ݡu/dir/include�v�M�u/dir/incls�v
<br> �p�G�z�Ʊ�N�X�ݱ���b�@�ӫ��w���ؿ��A����Цb�����[�W�׽u�C";

$ini['allow_url_fopen'] = "�O�_���\���}�����ɮ�";

$ini['allow_url_include'] = "�O�_���\include/require�����ɮסC";

$ini['disable_classes'] = "�ӫ��O�����@�ӥγr�����j�����W�C��A�H�T�ίS�w�����C";

$ini['disable_function'] = "�ӫ��O�����@�ӥγr�����j����ƦW�C��A�H�T�ίS�w����ơC";

$ini['enable_dl'] = "�O�_���\�ϥ�dl()��ơCdl()��ƶȦb�NPHP�@��apache�Ҳզw�ˮɤ~���ġC
<br> �T��dl()��ƥD�n�O�X��w���Ҽ{�A�]�����i�H¶�Lopen_basedir���O������C
<br> �b�w���Ҧ��U�l�׸T��dl()��ơA�Ӥ��ަ��B�p��]�m�C
<br> PHP6���R���F�ӫ��O�A�۷��]��Off�C";

$ini['expose_php'] = "�O�_���SPHP�Q�w�˦b���A���W���ƹ�(�bhttp�Y���[�W��ñ�W)�C
<br> �����|���w���W�������¯١A�����ϱo�Ȥ�ݪ��D���A���W�w�ˤFPHP�C";

$ini['open_basedir'] = "�NPHP���\�ާ@���Ҧ��ɮ�(�]�A�ɮצۨ�)������b���եؿ��C��U�C
<br> ��@�Ӹ}���չϥ��}�@�ӫ��w�ؿ��𤧥~���ɮ׮ɡA�N�D��ڵ��C
<br> �Ҧ����Ÿ��s�����|�Q�ѪR�A�ҥH���i��q�L�Ÿ��s�����׶}������C
<br> �S���'.'���w�F�s��Ӹ}�����ؿ��N�Q����ǥؿ��A
<br> ���o���ǦM�I�A�]���}�����u�@�ؿ��i�H�����Qchdir()���ܡC
<br> ���@�ɦ��A���A�bhttpd.conf���w�藍�P�������D���Υؿ��F���]�m�ӫ��O�N�ܱo�D�`���ΡC
<br> �bWindows���Τ������j�ؿ��AUNIX�t�Τ��Ϋ_�����j�ؿ��C
<br> �@��Apache�ҲծɡA���ؿ�����open_basedir���|�N�۰ʳQ�~�ӡC
<br> ���w�������ڤW�O�@�ӫe��A�ӫD�@�ӥؿ��W�A
<br> �]�N�O���u/dir/incl�v�N���\�X�ݡu/dir/include�v�M�u/dir/incls�v�A
<br> �p�G�z�Ʊ�N�X�ݱ���b�@�ӫ��w���ؿ��A����Цb�����[�W�@�ӱ׽u�C
<br> �w�]�O���\���}�Ҧ��ɮסC";

$ini['sql.safe_mode '] = "�O�_�ϥ�SQL�w���Ҧ��C
<br> �p�G���}�A���w�w�]�Ȫ���Ʈw�s����ƱN�|�ϥγo�ǹw�]�ȥN��������ѼơC
<br> ���C�Ӥ��P��Ʈw���s����ơA��w�]�ȽаѦҬ�������U�����C";

$ini['error_reporting'] = "���~���i�ŧO�O��r�q���|�[�A���˨ϥ� E_ALL | E_STRICT
<br>    1  E_ERROR             �P�R���B��ɿ��~
<br>    2  E_WARNING           �B���ĵ�i(�D�P�R�ʿ��~)
<br>    4  E_PARSE             �sĶ�ɸѪR���~
<br>    8  E_NOTICE            �B��ɴ���(�g�`�Obug�A�]�i��O���N��)
<br>   16  E_CORE_ERROR        PHP�Ұʮɪ�l�ƹL�{�����P�R���~
<br>   32  E_CORE_WARNING      PHP�Ұʮɪ�l�ƹL�{����ĵ�i(�D�P�R�ʿ�)
<br>   64  E_COMPILE_ERROR     �sĶ�ɭP�R�ʿ�
<br>  128  E_COMPILE_WARNING   �sĶ��ĵ�i(�D�P�R�ʿ�)
<br>  256  E_USER_ERROR        �Τ�۩w�q���P�R���~
<br>  512  E_USER_WARNING      �Τ�۩w�q��ĵ�i(�D�P�R�ʿ��~)
<br> 1024  E_USER_NOTICE       �Τ�۩w�q������(�g�`�Obug�A�]�i��O���N��)
<br> 2048  E_STRICT            �s�X�зǤ�ĵ�i(��ĳ�p��ק�H�V�e�ݮe)
<br> 4096  E_RECOVERABLE_ERROR ����P�R���B��ɿ��~�A�Y���Q����h���PE_ERROR
<br> 6143  E_ALL               ��E_STRICT�~���Ҧ����~(PHP6����8191,�Y�]�t�Ҧ�)
<br> �]�i�H��2147483647(�Ҧ��G�i������1)���}�{�b�αN�ӥi��X�{���U�ؿ��~";

$ini['track_errors'] = "�O�_�b�ܼ� \$php_errormsg���O�s�̪�@�ӿ��~��ĵ�i�����C";

$ini['display_errors'] = "�O�_�N���~�H���@����X���@������ܡC
<br> �b�̲׵o�G��web���I�W�A�j�P��ĳ�A�����o�ӯS�ʡA�èϥο��~��x�N��(�ѬݤU��)�C
<br> �b�̲׵o�G��web���I���}�o�ӯS�ʥi����S�@�Ǧw���H���A
<br> �Ҧp�A��web�A�ȤW���ɮ׸��|�B��Ʈw�W���ΧO���H���C";

$ini['display_startup_errors'] = "�O�_���PHP�Ұʮɪ����~�C
<br> �Y��display_errors���O�Q���}�A�������ѼƤ]�N�����PHP�Ұʮɪ����~�C
<br> ��ĳ�A�����o�ӯS�ʡA���D�A�����n�Ω�ոդ��C";

$ini['report_memleaks'] = "�O�_���i���s���|�C�o�ӰѼƥu�b�H�ոդ覡�sĶ��PHP���_�@�ΡA
<br> �åB�����berror_reporting���O���]�t E_WARNING";

$ini['report_zend_debug'] = "�|�L��������";

$ini['html_errors'] = "�O�_�b�X���H�����ϥ�HTML�аO�C
<br> �`�N: ���n�b�o�G�����I�W�ϥγo�ӯS�ʡI";

$ini['docref_root'] = "";
$ini['docref_ext'] = "�p�G���}�Fhtml_errors���O�APHP�N�|�b�X���H���W��ܶW�s���A
<br> �����챵��@�ӻ����o�ӿ��~�Ϊ̾ɭP�o�ӿ��~����ƪ������C
<br> �A�i�H�q[url]http://www.php.net/docs.php[/url]�U��php��U�A
<br> �ñNdocref_root���O���V�A���a����U�Ҧb��URL�ؿ��C
<br> �A�٥����]�mdocref_ext���O�ӫ��w�ɮת��X�i�W(�����t��'.')�C
<br> �`�N: ���n�b�o�G�����I�W�ϥγo�ӯS�ʡC";

$ini['error_prepend_string'] = "�Ω���~�H���e��X���r�Ŧ�";
$ini['error_append_string'] = "�Ω���~�H�����X���r�Ŧ�";
$ini['xmlrpc_errors'] = "";
$ini['xmlrpc_error_number'] = "�|�L����";

$ini['define_syslog_variables'] = "�O�_�w�q�U�بt�Τ�x�ܼơA�p�G\$LOG_PID, \$LOG_CRON �����C
<br> �������H�����Ĳv���n�D�N�C
<br> �A�i�H�b�B��ɽե�define_syslog_variables()��ƨөw�q�o���ܼơC";

$ini['error_log'] = "�N���~��x�O��������ɮפ��C���ɮץ�����Web���A���Τ�i�g�C
<br> syslog ��ܰO����t�Τ�x��(NT�U���ƥ��x, Unix�U��syslog(3))
<br> �p�G���B���]�m����ȡA�h���~�N�Q�O����Web���A�������~��x���C";

$ini['log_errors'] = "�O�_�b��x�ɮ׸̰O�����~�A����b���̰O�����M��error_log���O�C
<br> �j�P��ĳ�A�b�̲׵o�G��web���I�ɨϥΤ�x�O�����~�Ӥ��O������X�A
<br> �o�˥i�H���A�J���D���̥X�F���D�A�S���|���S�ӷP�H���C";

$ini['log_errors_max_len'] = "�]�m���~��x�����[���P���~�H�������p�����~�����̤j���סC
<br> �o�̳]�m���ȹ���ܪ��M�O�������~�H��\$php_errormsg�����ġC
<br> �]�� 0 �i�H���\�L�����סC";

$ini['ignore_repeated_errors'] = "�O�����~��x�ɬO�_�������ƪ����~�H���C
<br> ���~�H�������X�{�b�P�@�ɮת��P�@��~�Q�Q�������ơC";

$ini['ignore_repeated_source'] = "�O�_�b�������ƪ����~�H���ɩ������ƪ����~���C";

$ini['SMTP'] = "mail()��Ƥ��Ψӵo�e�l��SMTP���A�����D���W�٩Ϊ�IP�a�}�C�ȥΩ�win32�C";

$ini['smtp_port'] = "SMTP���A�����ݤf���C�ȥΩ�win32�C";

$ini['sendmail_from'] = "�o�e�l��ɨϥΪ�\"From:\"�Y�����l��a�}�C�ȥΩ�win32
<br> �ӿﶵ�٦P�ɳ]�m�F\"Return-Path:\"�Y�C";

$ini['sendmail_path'] = "�ȥΩ�unix�A�]�i����Ѽ�(�w�]���O'sendmail -t -i')
<br> sendmail�{�Ǫ����|�A�q�`���u/usr/sbin/sendmail��/usr/lib/sendmail�v�C
<br> configure�}���|���է��ӵ{�Ǩó]�w���w�]�ȡA���O�p�G���Ѫ��ܡA�i�H�b�o�̳]�w�C
<br> ���ϥ�sendmail���t�����N�����O�]�w��sendmail���N�{��(�p�G������)�C
<br> �Ҧp�AQmail�Τ�q�`�i�H�]���u/var/qmail/bin/sendmail�v�Ρu/var/qmail/bin/qmail-inject�v�C
<br> qmail-inject ���ݭn����ﶵ�N�ॿ�T�B�z�l��C";

$ini['mail.force_extra_parameters'] = "�@���B�~���Ѽƶǻ���sendmail�w���j����w���Ѽƪ��[�ȡC
<br> �o�ǰѼ��`�O�|������mail()����5�ӰѼơA�Y�Ϧb�w���Ҧ��U�]�O�p���C";

$ini['default_socket_timeout'] = "�w�]socket�W��(��)";

$ini['max_execution_time'] = "�C�Ӹ}���̤j���\����ɶ�(��)�A0 ��ܨS������C
<br> �o�ӰѼƦ��U�����H��}���L�����Φ��A���귽�C
<br> �ӫ��O�ȼv�T�}���������B��ɶ��A����䥦��O�b�}���B�椧�~���ɶ��A
<br> �p��system()/sleep()��ƪ��ϥΡB��Ʈw�d�ߡB�ɮפW�ǵ��A�����]�A�b���C
<br> �b�w���Ҧ��U�A�A�����ini_set()�b�B��ɧ��ܳo�ӳ]�m�C";

$ini['memory_limit'] = "�@�Ӹ}���ү���ӽШ쪺�̤j���s�r�`��(�i�H�ϥ�K�MM�@�����)�C
<br> �o���U�󨾤�H��}�����ӧ����A���W���Ҧ����s�C
<br> �n����ϥθӫ��O�����b�sĶ�ɨϥΡu--enable-memory-limit�v�t�m�ﶵ�C
<br> �p�G�n�������s����A�h�����N��]�� -1 �C
<br> �]�m�F�ӫ��O��Amemory_get_usage()��ƱN�ܬ��i�ΡC";

$ini['max_input_time'] = "�C�Ӹ}���ѪR��J�ƾ�(POST, GET, upload)���̤j���\�ɶ�(��)�C
<br> -1 ��ܤ�����C";

$ini['max_input_nesting_level'] = "��J�ܼƪ��̤j�O�M�`��(�|�L��h��������)";

$ini['post_max_size'] = "���\��POST�ƾڳ̤j�r�`���סC���]�w�]�v�T���ɮפW�ǡC
<br> �p�GPOST�ƾڶW�X����A����\$_POST�M\$_FILES�N�|���šC
<br> �n�W�Ǥj�ɮסA�ӭȥ����j��upload_max_filesize���O���ȡC
<br> �p�G�ҥΤF���s����A����ӭ�����p��memory_limit���O���ȡC";

$ini['realpath_cache_size'] = "���wPHP�ϥΪ�realpath(�W�d�ƪ�������|�W)�w�İϤj�p�C
<br> �bPHP���}�j�q�ɮת��t�ΤW����W�j�ӭȥH�����ʯ�C";

$ini['realpath_cache_ttl'] = "realpath�w�İϤ��H�������Ĵ�(��)�C
<br> ���ɮ׫ܤ��ܰʪ��t�ΡA�i�H�W�j�ӭȥH�����ʯ�C";

$ini['file_uploads'] = "�O�_���\HTTP�ɮפW�ǡC
<br> �Ѩ�upload_max_filesize, upload_tmp_dir, post_max_size���O";

$ini['upload_max_filesize'] = "���\�W�Ǫ��ɮת��̤j�ؤo�C";

$ini['upload_tmp_dir'] = "�ɮפW�Ǯɦs���ɮת��{�ɥؿ�(�����OPHP�i�{�Τ�i�g���ؿ�)�C
<br> �p�G�����w�hPHP�ϥΨt�ιw�]���{�ɥؿ��C";

$ini['magic_quotes_gpc'] = "�O�_���J��GET/POST/Cookie�ƾڨϥΦ۰ʦr�Ŧ���q( '  \"  \  NULL )�C
<br> �o�̪��]�m�N�۰ʼv�T \$_GEST \$_POST \$_COOKIE �Ʋժ��ȡC
<br> �Y�N�����O�Pmagic_quotes_sybase���O�P�ɥ��}�A�h�ȱN��޸�(')��q��('')�A
<br> �䥦�S��r�űN���Q��q�A�Y( \"  \  NULL )�N�O����ˡI�I
<br> ��ĳ�������S�ʡA�èϥΦ۩w�q���L�o��ơC";

$ini['magic_quotes_runtime'] = "�O�_��B��ɱq�~���귽���ͪ��ƾڨϥΦ۰ʦr�Ŧ���q( '  \"  \  NULL )�C
<br> �Y���}�����O�A�h�j�h�ƨ�Ʊq�~���귽(��Ʈw,�奻�ɮ׵�)��^�ƾڳ��N�Q��q�C
<br> �Ҧp�G��SQL�d�߱o�쪺�ƾڡA��exec()��Ʊo�쪺�ƾڡA����
<br> �Y�N�����O�Pmagic_quotes_sybase���O�P�ɥ��}�A�h�ȱN��޸�(')��q��('')�A
<br> �䥦�S��r�űN���Q��q�A�Y( \"  \  NULL )�N�O����ˡI�I
<br> ��ĳ�������S�ʡA�õ����鱡�p�ϥΦ۩w�q���L�o��ơC";

$ini['magic_quotes_sybase'] = "�O�_�ĥ�Sybase�Φ����۰ʦr�Ŧ���q(�� '' ��� ')";

$ini['short_open_tag'] = "�O�_���\�ϥΡu&lt;? ?&gt;�v�u���ѡC�_�h�����ϥΡu&lt;?php ?&gt;�v�����ѡC
<br> ���D�A��php�{�ǶȦb�������ҤU�B��A�B�u�Ѧۤv�ϥΡA�_�h�Ф��n�ϥεu�аO�C
<br> �p�G�n�MXML���X�ϥ�PHP�A�i�H����������ﶵ�H��K�����O�J�u&lt;?xml ... ?&gt;�v�A
<br> ���M�A������PHP�ӿ�X�G&lt;? echo '&lt;?xml version=\"1.0\"'; ?&gt;
<br> �����O�]�|�v�T���Y�g�Φ��u&lt;?=�v�A���M�u&lt;? echo�v�����A�n�ϥΥ��]�������}�u�аO�C";

$ini['asp_tags'] = "�O�_���\ASP���檺�аO�u&lt;% %&gt;�v�A�o�]�|�v�T���Y�g�Φ��u&lt;%=�v�C
<br> PHP6���N�R�������O";

$ini['arg_separator.output'] = "PHP�Ҳ��ͪ�URL���ΨӤ��j�Ѽƪ����j�šC
<br> �t�~�٥i�H�Ρu&amp;�v�Ρu,�v�����C";

$ini['arg_separator.input'] = "PHP�ѪRURL�����ܼƮɨϥΪ����j�ŦC��C
<br> �r�Ŧꤤ���C�@�Ӧr�ų��|�Q��@���βšC
<br> �t�~�٥i�H�Ρu,&�v�����C";

$ini['allow_call_time_pass_reference'] = "�O�_�j���b��ƽեήɫ��ޥζǻ��Ѽ�(�C���ϥΦ��S�ʳ��|����@��ĵ�i)�C
<br> php�Ϲ�o�ذ��k�A�æbPHP6���R���F�ӫ��O(�۷��]��Off)�A�]�����v�T��F�N�X�����C
<br> ���y����k�O�b����n���̩��T���w���ǰѼƫ��ޥζǻ��C
<br> �ڭ̹��y�A�����o�@�ﶵ�A�H�O�ҧA���}���b�N�Ӫ������y���̤��ॿ�`�u�@�C";

$ini['auto_globals_jit'] = "�O�_�Ȧb�ϥΨ�\$_SERVER�M\$_ENV�ܼƮɤ~�Ы�(�Ӥ��O�b�}���@�ҰʮɴN�۰ʳЫ�)�C
<br> �p�G�å��b�}�����ϥγo��ӼƲաA���}�ӫ��O�N�|��o�ʯ�W�����ɡC
<br> �n�Q�ӫ��O�ͮġA��������register_globals�Mregister_long_arrays���O�C";

$ini['auto_prepend_file'] = "���w�b�D�ɮפ��e/��۰ʸѪR���ɮצW�C���Ū�ܸT�θӯS�ʡC
<br> ���ɮ״N���եΤFinclude()��ƳQ�]�t�i�Ӥ@�ˡA�]���|�ϥ�include_path���O���ȡC
<br> �`�N�G�p�G�}���q�Lexit()�פ�A����۰ʫ��N���|�o�͡C";

$ini['auto_append_file'] = "���w�b�D�ɮפ��e/��۰ʸѪR���ɮצW�C���Ū�ܸT�θӯS�ʡC
<br> ���ɮ״N���եΤFinclude()��ƳQ�]�t�i�Ӥ@�ˡA�]���|�ϥ�include_path���O���ȡC
<br> �`�N�G�p�G�}���q�Lexit()�פ�A����۰ʫ��N���|�o�͡C";

$ini['variables_order'] = "PHP���U Environment, GET, POST, Cookie, Server �ܼƪ����ǡC
<br> ���O�� E, G, P, C, S ��ܡA���q����k���U�A�s���л\�­ȡC
<br> �|�һ��A�]���uGP�v�N�|�ɭP��POST�ܼ��л\�P�W��GET�ܼơA
<br> �ç������� Environment, Cookie, Server �ܼơC
<br> ���˨ϥΡuGPC�v�ΡuGPCS�v�A�èϥ�getenv()��ƳX�������ܼơC";

$ini['register_globals'] = "�O�_�N E, G, P, C, S �ܼƵ��U�������ܼơC
<br> ���}�ӫ��O�i��|�ɭP�Y�����w�����D�A���D�A���}���g�L�D�`�J�Ӫ��ˬd�C
<br> ���˨ϥιw�w�q���W�����ܼơG\$_ENV, \$_GET, \$_POST, \$_COOKIE, \$_SERVER
<br> �ӫ��O��variables_order���O���v�T�C
<br> PHP6���w�g�R�������O�C";

$ini['register_argc_argv'] = "�O�_�n��\$argv�M\$argc�����ܼ�(�]�t��GET��k���H��)�C
<br> ��ĳ���n�ϥγo����ܼơA�������ӫ��O�H�����ʯ�C";

$ini['register_long_arrays'] = "�O�_�ҥ��¦��������Ʋ�(HTTP_*_VARS)�C
<br> ���y�ϥεu�����w�w�q�W�����ƲաA�������ӯS�ʥH��o��n���ʯ�C
<br> PHP6���w�g�R�������O�C";

$ini['always_populate_raw_post_data'] = "�O�_�`�O�ͦ�\$HTTP_RAW_POST_DATA�ܼ�(��lPOST�ƾ�)�C
<br> �_�h�A���ܼƶȦb�J�줣���ѧO��MIME�������ƾڮɤ~���͡C
<br> ���L�A�X�ݭ�lPOST�ƾڪ���n��k�O php://input �C
<br> \$HTTP_RAW_POST_DATA���enctype=\"multipart/form-data\"�����ƾڤ��i�ΡC";

$ini['unserialize_callback_func'] = "�p�G�ѧǦC�ƳB�z���ݭn��ҤƤ@�ӥ��w�q�����A
<br> �o�̫��w���^�ը�ƱN�H�ӥ��w�q�����W�r�@���ѼƳQunserialize()�եΡA
<br> �H�K�o�줣���㪺�u__PHP_Incomplete_Class�v��H�C
<br> �p�G�o�̨S�����w��ơA�Ϋ��w����Ƥ��]�t(�ι�{)���ӥ��w�q�����A�N�|���ĵ�i�H���C
<br> �ҥH�Ȧb�T��ݭn��{�o�˪��^�ը�Ʈɤ~�]�m�ӫ��O�C
<br> �Y�n�T��o�ӯS�ʡA�u�ݸm�ŧY�i�C";

$ini['y2k_compliance'] = "�O�_�j��}2000�~�A��(�i��b�DY2K�A�����s�������ɭP���D)�C";

$ini['zend.ze1_compatibility_mode'] = "�O�_�ϥέݮeZend����I(PHP 4.x)���Ҧ��CPHP6���N�R���ӫ��O(�۷��Off)�C
<br> �o�N�v�T��H���ƻs�B�c�y(�L�ݩʪ���H�|����FALSE��0)�B����C
<br> �ݮe�Ҧ��U�A�ﹳ�N���ȶǻ��A�Ӥ��O�w�]�����ޥζǻ��C";

$ini['precision'] = "�B�I���ƾ���ܪ����Ħ�ơC";

$ini['serialize_precision'] = "�N�B�I���M����׫��ƾڧǦC�Ʀs�x�ɪ����(���Ħ��)�C
<br> �w�]�ȯ���T�O�B�I���ƾڳQ�ѧǦC�Ƶ{�ǸѽX�ɤ��|�ᥢ�ƾڡC";

$ini['implicit_flush'] = "�O�_�n�DPHP��X�h�b�C�ӿ�X������۰ʨ�s�ƾڡC
<br> �o���ĩ�b�C�� print()�Becho()�BHTML�� ����۰ʽե�flush()��ơC
<br> ���}�o�ӿﶵ��{�ǰ��檺�ʯ঳�Y�����v�T�A�q�`�u���˦b�ոծɨϥΡC
<br> �bCLI SAPI������Ҧ��U�A�ӫ��O�w�]�� On �C";

$ini['output_buffering'] = "��X�w�İϤj�p(�r�`)�C��ĳ�Ȭ�4096~8192�C
<br> ��X�w�Ĥ��\�A�Ʀܦb��X���夺�e����A�o�eHTTP�Y(�]�Acookies)�C
<br> ��N���O��X�h��C�@�I�I�t�סC
<br> �]�m��X�w�ĥi�H��ּg�J�A�����ٯ��ֺ����ƾڥ]���o�e�C
<br> �o�ӰѼƪ���ڦ��q�ܤj�{�פW���M��A�ϥΪ��O����Web���A���H�Τ���˪��}���C";

$ini['output_handler'] = "�N�Ҧ��}������X���w�V��@�ӿ�X�B�z��ơC
<br> ��p�A���w�V��mb_output_handler()��ƮɡA�r�Žs�X�N�Q�z���a�ഫ�����w���s�X�C
<br> �@���A�b�o�̫��w�F��X�B�z�{�ǡA��X�w�ıN�Q�۰ʥ��}(output_buffering=4096)�C
<br> �`�N0: ���B�ȯ�ϥ�PHP���m����ơA�۩w�q������b�}�����ϥ�ob_start()���w�C
<br> �`�N1: �i���Ӹ}������̿�ӫ��O�A�����ϥ�ob_start()��Ʃ��T���w��X�B�z��ơC
<br>        �ϥγo�ӫ��O�i��|�ɭP�Y�ǧA�����x���}���X���C
<br> �`�N2: �A����P�ɨϥΡumb_output_handler�v�M�uob_iconv_handler�v��ӿ�X�B�z��ơC
<br>        �A�]����P�ɨϥΡuob_gzhandler�v��X�B�z��ƩMzlib.output_compression���O�C
<br> �`�N3: �p�G�ϥ�zlib.output_handler���O�}��zlib��X���Y�A�ӫ��O�������šC";

$ini['include_path'] = "���w�@�եؿ��Ω�require(), include(), fopen_with_path()��ƴM���ɮסC
<br> �榡�M�t�Ϊ�PATH�����ܼ�����(UNIX�U�Ϋ_�����j�AWindows�U�Τ������j)�G
<br> UNIX: �u/path1:/path2�v
<br> Windows: �u\path1;\path2�v
<br> �b�]�t���|���ϥ�'.'�i�H���\�۹���|�A���N���e�ؿ��C";

$ini['user_dir'] = "�i�Dphp�b�ϥ� /~username ���}�}���ɨ���ӥؿ��U�h��A�Ȧb�D�Ůɦ��ġC
<br> �]�N�O�b�Τ�ؿ����U�ϥ�PHP�ɮת��򥻥ؿ��W�A�Ҧp�G�upublic_html�v";

$ini['extension_dir'] = "�s���X�i�w(�Ҳ�)���ؿ��A�]�N�OPHP�ΨӴM��ʺA�X�i�Ҳժ��ؿ��C
<br> Windows�U�w�]���uC:/php5�v";

$ini['default_mimetype'] = "";

$ini['default_charset'] = "PHP�w�]�|�۰ʿ�X�uContent-Type: text/html�v HTTP�Y�C
<br> �p�G�Ndefault_charset���O�]���ugb2312�v�A
<br> ����N�|�۰ʿ�X�uContent-Type: text/html; charset=gb2312�v�C
<br> PHP6�Ϲ�ϥ�default_charset���O�A�ӱ��˨ϥ�unicode.output_encoding���O�C";

$ini['detect_unicode'] = "����Zend�����O�_�q�L�ˬd�}����BOM(�r�`���ǼаO)���˴��}���O�_�]�t�h�r�`�r�šC
<br> ��ĳ�����CPHP6�w�g�����F�����O�ӥ�unicode.script_encoding���O�ӥN����\��C";

$ini['unicode.semantics'] = "�O�_�ҥ�Unicode����C
<br> �p�G���}�����O�A����PHP�N�ܦ��@�ӧ�����Unicode���ҡA��p�G
<br> �Ҧ��r�Ŧ�M�qHTTP�������ܼƳ��N�ܦ�Unicode�A�Ҧ�PHP���ѲŤ]���i�H�ϥ�Unicode�r�šC
<br> �ӥB�APHP�����N�ϥ�Unicode�r�Ŧ�ít�d��~��DUnicode�r�Ŷi��۰��ഫ�A
<br> ��p�GHTTP��J��X�B�y�B�ɮרt�ξާ@�����A�Ʀܳsphp.ini�ۨ����N����UTF-8�s�X�ӸѪR�C
<br> �}�ҳo�ӫ��O��A�A�������T���w�G�i��r�Ŧ�CPHP�N����G�i��r�Ŧꪺ���e�����󰲩w�A
<br> �]���A���{�ǥ����O�ү������B�z�G�i��r�Ŧ�C
<br> �p�G�����o�ӫ��O�APHP���欰�N�M�H�e���欰�����ۦP�G
<br> �r�Ŧꤣ�|�ܦ�Unicode�A�ɮשM�G�i��r�Ŧ�]�N�V��ݮe�Aphp.ini�]�N���ӡuas-is�v����ѪR�C
<br> ���ެO�_���}�����O�A�Ҧ�����ƩM�ާ@�ų��z�������Unicode�r�Ŧ�C";

$ini['unicode.fallback_encoding'] = "����L�Ҧ�unicode.*_encoding���O�]�m�w�]�ȡC
<br> �]�N�O���p�G�Y��unicode.*_encoding���O�����T�]�m���ܡA�N�ϥΦ��B�]�m���ȡC";

$ini['unicode.runtime_encoding'] = "�B��ɽs�X���w�FPHP���������ഫ�G�i��r�Ŧ�ɨϥΪ��s�X�C
<br> ���B���]�m���I/O�����ާ@(��p�G�g�J�зǿ�X/Ū���ɮרt��/�ѽXHTTP��J�ܼ�)�S���v�T�C
<br> PHP�]���\�A���T����r�Ŧ�i���ഫ�G
<br> (binary)\$str  -- ��Ƭ��G�i��r�Ŧ�
<br> (unicode)\$str -- ��Ƭ�Unicode�r�Ŧ�
<br> (string)\$str  -- �p�Gunicode.semantics��On�h��Ƭ�Unicode�r�Ŧ�A�_�h��Ƭ��G�i��r�Ŧ�
<br> �Ҧp�A�p�G�ӫ��O���Ȭ�iso-8859-1�åB\$uni�O�@��Unicode�r�Ŧ�A����
<br> \$str = (binary)\$uni
<br> �N����@�Өϥ�iso-8859-1�s�X���G�i��r�Ŧ�C
<br> �b�s���B����B�ǻ��ѼƵ��ާ@���ePHP�|�N�����r�Ŧ����t�ഫ��Unicode�A�M��A�i��ާ@�C
<br> ��p�b�N�G�i��r�Ŧ�PUnicode�i��s�����ɭԡA
<br> PHP�N�|�ϥγo�̪��]�m�N�G�i��r�Ŧ��ഫ��Unicode�r�Ŧ�A�M��A�i��ާ@�C";

$ini['unicode.output_encoding'] = "PHP��X�D�G�i��r�Ŧ�ϥΪ��s�X�C
<br> �۰ʱN'print'�M'echo'��������X���e�ഫ�����B�]�w���s�X(�ä���G�i��r�Ŧ�i���ഫ)�C
<br> ��V�ɮפ������~���귽�g�J�ƾڪ��ɭԡA
<br> �A�����̿��y�s�X�S�ʩΪ̨ϥ�Unicode�X�i����Ƥ�ʪ���ƾڶi��s�X�C
<br> �bPHP6���Ϲ�ϥΥ��e��default_charset���O�A�ӱ��˨ϥθӫ��O�C
<br> ���e��default_charset���O�u�O���w�FContent-Type�Y�����r�Ŷ��A�Өä����ڪ���X�������ഫ�C
<br> �ӦbPHP6���Adefault_charset���O�Ȧbunicode.semantics��off���ɭԤ~���ġC
<br> �]�m�F�ӫ��O��N�bContent-Type��X�Y��'charset'������W�ӫ��O���ȡA
<br> �Ӥ���default_charset���O�p��]�m�C";

$ini['unicode.http_input_encoding'] = "�q�LHTTP������ܼ�(��p\$_GET�M\$_POST)���e���s�X�C
<br> ����2007�~4�릹�\��|�b�}�o��....";

$ini['unicode.filesystem_encoding'] = "�ɮרt�Ϊ��ؿ��W�M�ɮצW���s�X�C
<br> �ɮרt�ά��������(��popendir())�N�ϥγo�ӽs�X�����M��^�ɮצW�M�ؿ��W�C
<br> ���B���]�m�����P�ɮרt�ι�ڨϥΪ��s�X�����@�P�C";

$ini['unicode.script_encoding'] = "PHP�}���ۨ����w�]�s�X�C
<br> �A�i�H�ϥΥ���ICU������s�X�ӼgPHP�}���C
<br> �p�G�A�Q�w���W���}���ɮ׳]�w��s�X�A�i�H�b�Ӹ}�����}�Y�ϥ�
<br>   &lt;?php declare(encoding = 'Shift-JIS');?&gt;
<br> �ӫ��w�C�`�N�G�����O�Ĥ@��}�Y�A�������n������r��(�]�A�ť�)�C
<br> �Ӥ�k�u��v�T��Ҧb���}���A���|�v�T����Q�]�t����L�}���C";

$ini['unicode.stream_encoding'] = "";

$ini['unicode.from_error_mode'] = "";

$ini['unicode.from_error_subst_char'] = "";

$ini['auto_detect_line_endings'] = "�O�_��PHP�۰ʰ����浲����(EOL)�C
<br> �p�G���A�}�������B�zMacintosh�ɮסA
<br> �Ϊ̧A�B��bMacintosh�W�A�P�ɤS�n�B�zunix��win32�ɮסA
<br> ���}�o�ӫ��O�i�H��PHP�۰ʰ���EOL�A�H�Kfgets()�Mfile()��ƥi�H���`�u�@�C
<br> ���P�ɤ]�|�ɭP�bUnix�t�ΤU�ϥΦ^����(CR)�@�����ؤ��j�Ū��H�D�J���ݮe�欰�C
<br> �t�~�A�b�˴��Ĥ@�檺EOL�ߺD�ɷ|���ܤp���ʯ�l���C";

$ini['browscap'] = "�u��PWS�MIIS�ݭn�o�ӳ]�m
<br> �A�i�H�q[url]http://www.garykeith.com/browsers/downloads.asp[/url]
<br> �o��@��browscap.ini�ɮסC";

$ini['ignore_user_abort'] = "�O�_�Y�Ϧb�Τᤤ��ШD��]���������ӽШD�C
<br> �b����@�Ӫ��ШD���ɭ�����Ҽ{���}�ӥ��A
<br> �]�����ШD�i��|�ɭP�Τᤤ�~������s�����W�ɡC";

$ini['user_agent'] = "�w�q�uUser-Agent�v�r�Ŧ�";

$ini['url_rewriter.tags'] = "���M�����O�ݩ�PHP�֤߳����A���O�o�Ω�Session�Ҳժ��t�m";

$ini['extension'] = "�bPHP�Ұʮɥ[���ʺA�X�i�C�Ҧp�Gextension=mysqli.so
<br> \"=\"����u��ϥμҲ��ɮת��W�r�A�Ӥ���t�����|�H���C
<br> ���|�H������u��extension_dir���O���ѡC
<br> �D�N�A�bwindows�W�A�U�C�X�i�w�g���m�G
;  bcmath ;  calendar ;  com_dotnet ;  ctype ;  session ;  filter ;  ftp ;  hash
;  iconv ;  json ;  odbc ;  pcre ;  Reflection ;  date ;  libxml ;  standard
;  tokenizer ;  zlib ;  SimpleXML ;  dom ;  SPL ;  wddx ;  xml ;  xmlreader ;  xmlwriter";

$ini['doc_root'] = "PHP���uCGI�ڥؿ��v�C�Ȧb�D�Ůɦ��ġC
<br> �bweb���A�����D���ɥؿ�(��p\"htdocs\")����m�i����{��/�}���Q�{���O���w�����A
<br> ��p�]���t�m���~�ӱN�}���@�����q��html��ܡC
<br> �]���ܦh�t�κ޲z�����|�b�D���ɥؿ����~�M���]�m�@�ӥu��q�LCGI�ӳX�ݪ��ؿ��A
<br> �ӥؿ��������e�u�|�Q�ѪR�Ӥ��|�����ܥX�ӡC
<br> �p�G�]�m�F�Ӷ��A����PHP�N�u�|����doc_root�ؿ��U���ɮסA
<br> �ýT�O�ؿ��~���}�������|�QPHP����������(user_dir���~)�C
<br> �p�G�sĶPHP�ɨS�����wFORCE_REDIRECT�A�åB�b�DIIS���A���W�HCGI�覡�B��A
<br> �h�����]�m�����O(�Ѩ���U�����w������)�C
<br> ���N��׬O�ϥΪ�cgi.force_redirect���O�C";

$ini['cgi.discard_path'] = "�|�L����(PHP6�s�W���O)";

$ini['cgi.fix_pathinfo'] = "�O�_��CGI���ѯu���� PATH_INFO/PATH_TRANSLATED ���(��ucgi�W�d)�C
<br> ���e���欰�O�NPATH_TRANSLATED�]��SCRIPT_FILENAME�A�Ӥ���PATH_INFO�O����C
<br> ���}���ﶵ�N��PHP�ץ�����|�H��uCGI�W�d�A�_�h���N�ϥ��¦������X�W�d���欰�C
<br> ���y�A���}�����O�A�íץ��}���H�ϥ� SCRIPT_FILENAME �N�� PATH_TRANSLATED �C
<br> ����PATH_INFO����h�H���аѨ�cgi�W�d�C";

$ini['cgi.force_redirect'] = "�O�_���}cgi�j��w�V�C�j�P��ĳ���}���H��CGI�覡�B�檺php���Ѧw���O�@�C
<br> �A�Y�ۤv�����F���A�Цۤv�t�d��G�C
<br> �`�N�G�bIIS/OmniHTTPD/Xitami�W�h�����������I";

$ini['cgi.redirect_status_env'] = "�p�Gcgi.force_redirect=On�A�åB�bApache�PNetscape���~�����A���U�B��PHP�A
<br> �i��ݭn�]�w�@��cgi���w�V�����ܼƦW�APHP�N�h�M�䥦�Ӫ��D�O�_�i�H�~�����U�h�C
<br> �]�m�o���ܼƷ|�ɭP�w���|�}�A�аȥ��b�]�m�e�d�M���ۤv�b������C";

$ini['cgi.rfc2616_headers'] = "���wPHP�b�o�eHTTP�T���N�X�ɨϥΦ�س��Y�C
<br> 0 ��ܵo�e�@�ӡuStatus: �v���Y�AApache�M�䥦web���A��������C
<br> �Y�]��1�A�hPHP�ϥ�RFC2616�зǪ��Y�C
<br> ���D�A���D�ۤv�b������A�_�h�O����w�]�� 0";

$ini['cgi.nph'] = "�bCGI�Ҧ��U�O�_�j���Ҧ��ШD���o�e\"Status: 200\"���A�X�C";

$ini['cgi.check_shebang_line'] = "CGI PHP�O�_�ˬd�}�������H #! �}�l����C
<br> �p�G�}���Q�n�J�����W�B��S����bPHP CGI�Ҧ��U�B��A����o�Ӱ_�l��N�O�������C
<br> �p�G���}�ӫ��O�A����CGI�Ҧ���PHP�N���L�o�@��C";

$ini['fastcgi.impersonate'] = "IIS����FastCGI����ҥ�Ȥ�ݦw���O�P����O�C
<br> �o�ϱoIIS����w�q�B��ɩҰ�󪺽ШD���w���W�U��C
<br> Apache����mod_fastcgi��������S��(03/17/2002)
<br> �p�G�bIIS���B��h�]��On�A�w�]��Off�C";

$ini['fastcgi.logging'] = "�O�_�O���q�LFastCGI�i�檺�s���C";

$ini['async_send'] = "�O�_���B�o�e�C";

$ini['from'] = "�w�q�ΦWftp���K�X(�@��email�a�})";

$ini['pcre.backtrack_limit'] = "PCRE���̤j�^��(backtracking)�B�ơC";

$ini['pcre.recursion_limit'] = "PCRE���̤j���k(recursion)�`�סC
<br> �p�G�A�N�ӭȳ]���D�`���A�N�i��Ӻɶi�{���̪Ŷ��A�ɭPPHP�Y��C";

$ini['session.save_handler'] = "�s�x�M�˯��P�|�����p���ƾڪ��B�z���W�r�C�w�]���ɮ�(\"files\")�C
<br> �p�G�Q�n�ϥΦ۩w�q���B�z��(�p����Ʈw���B�z��)�A�i��\"user\"�C
<br> �]��\"memcache\"�h�i�H�ϥ�memcache�@���|�ܳB�z��(�ݭn���w\"--enable-memcache-session\"�sĶ�ﶵ)�C
<br> �٦��@�Өϥ�PostgreSQL���B�z���G[url]http://sourceforge.net/projects/phpform-ext/[/url]
";

$ini['session.save_path'] = "�ǻ����s�x�B�z�����ѼơC���files�B�z���A���ȬO�Ыط|�ܼƾ��ɮת����|�C
<br> Windows�U�w�]���{���ɮק����|�C
<br> �A�i�H�ϥ�\"N;[MODE;]/path\"�o�˼Ҧ��w�q�Ӹ��|(N�O�@�Ӿ��)�C
<br> N��ܨϥ�N�h�`�ת��l�ؿ��A�Ӥ��O�N�Ҧ��ƾ��ɮ׳��O�s�b�@�ӥؿ��U�C
<br> [MODE;]�i��A�����ϥ�8�i��ơA�w�]\"600\"�A����ɮת��X���v���C
<br> �o�O�@�Ӵ����j�q�|�ܩʯ઺�n�D�N�C
<br> �`�N0: \"N;[MODE;]/path\"���䪺���޸�����ٲ��C
<br> �`�N1: [MODE;]�ä��|��g�i�{��umask�C
<br> �`�N2: php���|�۰ʳЫسo���ɮק����c�C�Шϥ�ext/session�ؿ��U��mod_files.sh�}���ЫءC
<br> �`�N3: �p�G���ɮק��i�H�Q���w�����Τ�X��(��p�w�]��\"/tmp\")�A����N�|�a�Ӧw���|�}�C
<br> �`�N4: ��N>0�ɦ۰ʩU���^���N�|���ġA����Ѩ��U�������U���j���������C
<br> [�w������]��ĳ�w��C�Ӥ��P�������D�����O�]�m�U�ۤ��P���ؿ��C
<br> ���\"memcache\"�B�z���A�ݭn�w�q�@�ӳr�����j�����A��URL�ΨӦs�x�|�ܼƾڡC
<br> ��p�G\"tcp://host1:11211, tcp://host2:11211\"
<br> �C��URL���i�H�]�t�ǻ������Ӧ��A�����ѼơA�i�Ϊ��ѼƻP Memcache::addServer() ��k�ۦP�C
<br> �Ҧp�G\"tcp://host1:11211?persistent=1&weight=1&timeout=1&retry_interval=15\"";

$ini['session.name'] = "�Φbcookie�̪��|��ID���ѦW�A�u��]�t�r���M�Ʀr�C";

$ini['session.auto_start'] = "�b�Ȥ�X�ݥ��󭶭��ɳ��۰ʪ�l�Ʒ|�ܡA�w�]�T��C
<br> �]�����w�q�����b�|�ܱҰʤ��e�Q���J�A�ҥH�Y���}�o�ӿﶵ�A�A�N����b�|�ܤ��s���H�C";

$ini['session.serialize_handler'] = "�ΨӧǦC��/�ѧǦC�Ƽƾڪ��B�z���Aphp�O�зǧǦC��/�ѧǦC�ƳB�z���C
<br> �t�~�٥i�H�ϥ�\"php_binary\"�C��ҥΤFWDDX����H��A�N�u��ϥ�\"wddx\"�C";

$ini['session.gc_probability'] = "";

$ini['session.gc_divisor'] = "�w�q�b�C����l�Ʒ|�ܮɡA�ҰʩU���^���{�Ǫ����v�C
<br> �o�Ӧ������v�p�⤽���p�U�Gsession.gc_probability/session.gc_divisor
<br> ��|�ܭ����X�ݶV�W�c�A���v�N����V�p�C��ĳ�Ȭ�1/1000~5000�C";

$ini['session.gc_maxlifetime'] = "�W�L���ѼƩҫ�����ƫ�A�O�s���ƾڱN�Q����'�U��'�åѩU���^���{�ǲM�z�C
<br> �P�_�зǬO�̫�X�ݼƾڪ��ɶ�(���FAT�ɮרt�άO�̫��s�ƾڪ��ɶ�)�C
<br> �p�G�h�Ӹ}���@�ɦP�@��session.save_path�ؿ���session.gc_maxlifetime���P�A
<br> ����N�H�Ҧ�session.gc_maxlifetime���O�����̤p�Ȭ��ǡC
<br> �p�G�ϥΦh�h�l�ؿ��Ӧs�x�ƾ��ɮסA�U���^���{�Ǥ��|�۰ʱҰʡC
<br> �A�����ϥΤ@�ӧA�ۤv�s�g��shell�}���Bcron���Ϊ̨�L��k�Ӱ���U���j���C
<br> ��p�A�U�����}���۷��]�m�F\"session.gc_maxlifetime=1440\" (24����)�G
<br> cd /path/to/sessions; find -cmin +24 | xargs rm";

$ini['session.referer_check'] = "�p�G�ШD�Y����\"Referer\"�r�q���]�t���B���w���r�Ŧ�h�|��ID�N�Q�����L�ġC
<br> �`�N�G�p�G�ШD�Y���ڥ����s�b\"Referer\"�r�q���ܡA�|��ID�N���N�Q�������ġC
<br> �w�]���šA�Y�����ˬd(������������)�C";

$ini['session.entropy_file'] = "���[���Ω�Ыط|��ID���~�����i�ȸ귽(�ɮ�)�A
<br> �ҦpUNIX�t�ΤW��\"/dev/random\"��\"/dev/urandom\"";

$ini['session.entropy_length'] = "�q���i�ȸ귽��Ū�����r�`��(��ĳ�ȡG16)�C";

$ini['session.use_cookies'] = "�O�_�ϥ�cookie�b�Ȥ�ݫO�s�|��ID";

$ini['session.use_only_cookies'] = "�O�_�ȶȨϥ�cookie�b�Ȥ�ݫO�s�|��ID�CPHP6���w�]�Ȭ�On�C
<br> ���}�o�ӿﶵ�i�H�קK�ϥ�URL�ǻ��|�ܱa�Ӫ��w�����D�C
<br> ���O�T��Cookie���Ȥ�ݱN�Ϸ|�ܵL�k�u�@�C";

$ini['session.cookie_lifetime'] = "�ǻ��|��ID��Cookie���Ĵ�(��)�A0 ��ܶȦb�s�������}�������ġC
<br> [����]�p�G�A����O�Ҧ��A���ɶ��M�Ȥ�ݮɶ��Y��@�P�Ф��n���ܦ��w�]�ȡI";

$ini['session.cookie_path'] = "�ǻ��|��ID��Cookie�@�θ��|�C";

$ini['session.cookie_domain'] = "�ǻ��|��ID��Cookie�@�ΰ�C
<br> �w�]���Ū�ܪ�ܮھ�cookie�W�d�ͦ����D���W�C";

$ini['session.cookie_secure'] = "�O�_�ȶȳq�L�w���s��(https)�o�ecookie�C";

$ini['session.cookie_httponly'] = "�O�_�bcookie���K�[httpOnly�лx(�Ȥ��\HTTP��ĳ�X��)�A
<br> �o�N�ɭP�Ȥ�ݸ}��(JavaScript��)�L�k�X�ݸ�cookie�C
<br> ���}�ӫ��O�i�H���Ĺw���q�LXSS�����T���|��ID�C";

$ini['session.cache_limiter'] = "�]��{nocache|private|public}�H���w�|�ܭ������w�s����Ҧ��A
<br> �Ϊ̳]���ťH����bhttp�����Y���o�e�T�νw�s���R�O�C";

$ini['session.cache_expire'] = "���w�|�ܭ����b�Ȥ��cache�������Ĵ���(����)
<br> session.cache_limiter=nocache�ɡA���B�]�m�L�ġC";

$ini['session.use_trans_sid'] = "�O�_�ϥΩ��X�bURL�����SID(�|��ID)�C
<br> �w�]�O�T��A�]�����|���A���Τ�a�Ӧw���M�I�G
<br> 1- �Τ�i��N�]�t����sid��URL�q�Lemail/irc/QQ/MSN...�~�|�i�D����L�H�C
<br> 2- �]�t����sid��URL�i��|�Q�O�s�b���ιq���W�C
<br> 3- �Τ�i��O�s�a���T�w����sid��URL�b�L�̪����ç��Ϊ��s�����v�����̭��C
<br> ���URL���|�ܺ޲z�`�O����Cookie���|�ܺ޲z����h�����I�A�ҥH����T�ΡC";

$ini['session.bug_compat_42'] = "";

$ini['session.bug_compat_warn'] = "PHP4.2���e���������@�ӥ�������\"BUG\"�G
<br> �Y�Ϧbregister_globals=Off�����p�U�]���\��l�ƥ���session�ܼơA
<br> �p�G�A�bPHP4.3���᪺�������ϥγo�ӯS�ʡA�|��ܤ@��ĵ�i�C
<br> ��ĳ������\"BUG\"�����ĵ�i�CPHP6�R���F�o��ӫ��O�A�۷������]��Off�C";

$ini['session.hash_function'] = "�ͦ�SID�����C��k�CSHA-1���w���ʧ󰪤@��
<br> 0: MD5   (128 bits)
<br> 1: SHA-1 (160 bits)
<br> ��ĳ�ϥ�SHA-1�C";

$ini['session.hash_bits_per_character'] = "���w�bSID�r�Ŧꤤ���C�Ӧr�Ť��O�s�h��bit�A
<br> �o�ǤG�i��ƬOhash��ƪ��B�⵲�G�C
<br> 4: 0-9, a-f
<br> 5: 0-9, a-v
<br> 6: 0-9, a-z, A-Z, \"-\", \",\"
<br> ��ĳ�Ȭ� 5";

$ini['url_rewriter.tags'] = "�����O�ݩ�PHP�֤߳����A�ä��ݩ�Session�ҲաC
<br> ���w���g����HTML���Ҩӥ]�tSID(�ȷ�session.use_trans_sid=On�ɦ���)
<br> form�Mfieldset����S��G
<br> �p�G�A�]�t�L�̡AURL���g���N�K�[�@�����ê�\"&lt;input&gt;\"�A���]�t�F�������B�~�l�[��URL�W���H���C
<br> �p�G�n�ŦXXHTML�зǡA�Хh��form���æb���r�q�e��[�W&lt;fieldset&gt;�аO�C
<br> �`�N�G�Ҧ��X�k�������ݭn�@�ӵ���(�Y�ϫ᭱�S����)�C
<br> ���˭Ȭ�\"a=href,area=href,frame=src,input=src,form=fakeentry\"�C";

$ini['session.encode_sources'] = "PHP6������ĳ�����O�A�|���M�w�O�_�ĥθӫ��O�C�]�|�L�������ɡC";

$ini['apc.enabled'] = "�O�_�ҥ�APC�A�p�GAPC�Q�R�A�sĶ�iPHP�S�Q�T�Υ��A�o�O�ߤ@����k�C";

$ini['apc.enable_cli'] = "�O�_��CLI�����ҥ�APC�\��A�ȥΩ���թM�ոեت��~���}�����O�C";

$ini['apc.cache_by_default'] = "�O�_�w�]��Ҧ��ɮױҥνw�ġC
<br> �Y�]��Off�ûP�H�[���}�Y��apc.filters���O�@�_�ΡA�h�ɮ׶Ȧb�ǰt�L�o���ɤ~�Q�w�s�C";

$ini['apc.file_update_protection'] = "��A�b�@�ӹB�椤�����A���W�ק��ɮ׮ɡA�A��������l�ާ@�C
<br> �]�N�O���g�i�@���{���ɮסA�M��N���ɮ׭��R�W(mv)��̲ת��W�r�C
<br> �奻�s�边�H�� cp, tar ���{�ǫo�ä��O�o�˾ާ@���A�q�ӾɭP���i��w�ĤF�ݯʪ��ɮסC
<br> �w�]�� 2 ��ܦb�X���ɮ׮ɦp�G�o�{�ק�ɶ��Z���X�ݮɶ��p�� 2 ��h�����w�ġC
<br> ���Ӥ������X�ݪ̥i��o��ݯʪ����e�A���O�o���a�v�T�o���|�q�L�w�s�X�j�ơC
<br> �p�G�A��T�O�Ҧ�����s�ާ@���O��l�ާ@�A����i�H�� 0 �������S�ʡC
<br> �p�G�A���t�Υѩ�j�q��IO�ާ@�ɭP��s�w�C�A�A�N�ݭn�W�j���ȡC";

$ini['apc.filters'] = "�@�ӥH�r�����j��POSIX�X�i���h��F���C��C
<br> �p�G���ɮצW�P���N�@�ӼҦ��ǰt�A�h���ɮפ��Q�w�s�C
<br> �`�N�A�ΨӤǰt���ɮצW�O�ǻ���include/require���ɮצW�A�Ӥ��O������|�C
<br> �p�G���h��F�����Ĥ@�Ӧr�ŬO"+"�h�N���ۥ���ǰt��F�����ɮ׷|�Q�w�s�A
<br> �p�G�Ĥ@�Ӧr�ŬO"-"�h����ǰt�������|�Q�w�s�C"-"�O�w�]�ȡA�i�H�ٲ����C";

$ini['apc.ttl'] = "�w�s���ئb�w�İϤ����\�r�d����ơC0 ��ܥä��W�ɡC��ĳ�Ȭ�7200~86400�C
<br> �]�� 0 �N���۽w�İϦ��i��Q�ª��w�s���ض񺡡A�q�ӾɭP�L�k�w�s�s���ءC";

$ini['apc.user_ttl'] = "������apc.ttl�A�u�O�w��C�ӥΤ�Ө��A��ĳ�Ȭ�7200~86400�C
<br> �]�� 0 �N���۽w�İϦ��i��Q�ª��w�s���ض񺡡A�q�ӾɭP�L�k�w�s�s���ءC";

$ini['apc.gc_ttl'] = "�w�s���ئb�U���^��������s�b����ơC
<br> ���ȴ��ѤF�@�Ӧw�����I�A�Y�Ϥ@�Ӧ��A���i�{�b����w�s�����ɮ׮ɱY��A
<br> �ӥB�ӷ��ɮפw�g�Q�ק�A���ª������t�����s�]���|�Q�^���A����F�즹TTL�Ȭ���C
<br> �]���s�N�T�Φ��S�ʡC";

$ini['apc.include_once_override'] = "�u��include_once()�Mrequire_once()��ƥH�קK�����B�~���t�νեΡC";

$ini['apc.max_file_size'] = "�T��j�󦹤ؤo���ɮ׳Q�w�s�C";

$ini['apc.mmap_file_mask'] = "�p�G�ϥ�--enable-mmap(�w�]�ҥ�)��APC�sĶ�FMMAP����A
<br> �o�̪��ȴN�O�ǻ���mmap�Ҳժ�mktemp���檺�ɮױ��X(��ĳ�Ȭ�\"/tmp/apc.XXXXXX\")�C
<br> �ӱ��X�Ω�M�w���s�M�g�ϰ�O�_�n�Qfile-backed�Ϊ�shared memory backed�C
<br> ��󪽱���file-backed���s�M�g�A�n�]�m��\"/tmp/apc.XXXXXX\"���ˤl(��n6��X)�C
<br> �n�ϥ�POSIX���檺shm_open/mmap�N�ݭn�]�m��\"/apc.shm.XXXXXX\"���ˤl�C
<br> �A�٥i�H�]��\"/dev/zero\"�Ӭ��ΦW�M�g�����s�ϥΤ��֪�\"/dev/zero\"���f�C
<br> ���w�q�����O�h��ܱj��ϥΰΦW�M�g�C";

$ini['apc.num_files_hint'] = "Web���A���W�i��Q�]�t�γQ�ШD�����P�}�����N�X�ɮת��j�P�ƶq(��ĳ�Ȭ�1024~4096)�C
<br> �p�G�A����T�w�A�h�]�� 0 �F���]�w�D�n�Ω�֦��Ƥd�ӷ��ɮת����I�C";

$ini['apc.optimization'] = "�u�ƯŧO(��ĳ�Ȭ� 0 ) �C�Ϲ�ϥθӫ��O�C�N�ӥi��|�Q�R���C
<br> ����ƭȪ�ܱҥ��u�ƾ��A�ȶV���h�ϥζV�E�i���u�ơC
<br> �󰪪��ȥi�঳�D�`�������t�״��ɡA���ثe�|�b���礤�C";

$ini['apc.report_autofilter'] = "�O�_�O���Ҧ��ѩ�early/late binding��]�Ӧ۰ʥ��Q�w�s���}���C";

$ini['apc.shm_segments'] = "���sĶ���w�İϤ��t���@�ɤ��s���ƶq(��ĳ�Ȭ�1)�C
<br> �p�GAPC�ӺɤF�@�ɤ��s�A�åB�w�Napc.shm_size���O�]���t�Τ��\���̤j�ȡA�i�H���ռW�j���ȡC
<br> �bmmap�Ҧ��U�]�m�� 1 ���~���䥦�ȬO�L�Ī��A�]���g�Lmmap���@�ɤ��s�q���j�p�O�S������C";

$ini['apc.shm_size'] = "�C�Ӧ@�ɤ��s�����j�p(�HMB�����A��ĳ�Ȭ�128~256)�C
<br> ���Ǩt��(�]�A�j�h��BSD�ܺ�)�w�]���@�ɤ��s���ؤo�ܤp�C";

$ini['apc.slam_defense'] = "�b�D�`�c�������A���W�A�L�׬O�ҰʪA���٬O�ק��ɮסA
<br> ���i��ѩ�h�Ӷi�{���ϦP�ɽw�s�@���ɮצӾɭP�v������C
<br> �o�ӫ��O�Ω�]�m�i�{�b�B�z���Q�w�s���ɮ׮ɸ��L�w�s�B�J���ʤ��v�C
<br> ��p�]��75��ܦb�J�쥼�Q�w�s���ɮ׮ɦ�75%�����v���i��w�s�A�q�Ӵ�ָI���X�v�C
<br> �Ϲ�ϥθӫ��O�A���y�]�� 0 �ӸT�γo�ӯS�ʡC��ĳ�ӥ�apc.write_lock���O�C";

$ini['apc.stat'] = "�O�_�ҥθ}����s�ˬd�C
<br> ���ܳo�ӫ��O�ȭn�D�`�p�ߡC
<br> �w�]�� On ���APC�b�C���ШD�}���ɳ��ˬd�}���O�_�Q��s�A
<br> �p�G�Q��s�h�۰ʭ��s�sĶ�M�w�s�sĶ�᪺���e�C���o�˰���ʯ঳���Q�v�T�C
<br> �p�G�]�� Off �h��ܤ��i���ˬd�A�q�Өϩʯ�o��j�T�����C
<br> ���O���F�ϧ�s�����e�ͮġA�A��������Web���A���C
<br> �o�ӫ��O���include/require���ɮצP�˦��ġC���O�ݭn�`�N���O�A
<br> �p�G�A�ϥΪ��O�۹���|�AAPC�N�����b�C�@��include/require�ɳ��i���ˬd�H�w���ɮסC
<br> �Өϥε�����|�h�i�H���L�ˬd�A�ҥH���y�A�ϥε�����|�i��include/require�ާ@�C";

$ini['apc.user_entries_hint'] = "������num_files_hint���O�A�u�O�w��C�Ӥ��P�Τ�Ө��C
<br> �p�G�A����T�w�A�h�]�� 0 �C";

$ini['apc.write_lock'] = "�O�_�ҥμg�J��C
<br> �b�D�`�c�������A���W�A�L�׬O�ҰʪA���٬O�ק��ɮסA
<br> ���i��ѩ�h�Ӷi�{���ϦP�ɽw�s�@���ɮצӾɭP�v������C
<br> �ҥθӫ��O�i�H�קK�v�����󪺥X�{�C";

$ini['apc.rfc1867'] = "���}�ӫ��O��A���C�ӫ�n�bfile�r�q���e�t��APC_UPLOAD_PROGRESS�r�q���W���ɮסA
<br> APC���N�۰ʳЫؤ@��upload_&lt;key&gt;���Τ�w�s����(&lt;key&gt;�N�OAPC_UPLOAD_PROGRESS�r�q��)�C
<br> �ݭn�`�N���O�A�ɮפW�Ǹ��ܦb�o�̨ä��O�u�{�w�����A
<br> �ҥH�p�G���ɮש|���W�������B�s�ɮפw�g�}�l�W���A����N�ᥢ����ɮת����ܡC";

$ini['apc.rfc1867_prefix'] = "�Ω�rfc1867�W���ɮת��w�Ķ����ئW�٫e��";

$ini['apc.rfc1867_name'] = "�ݭn��APC�B�z���W���ɮת�rfc1867���t��涵�W��";

$ini['apc.rfc1867_freq'] = "�Τ�rfc1867�W���ɮ׽w�s������s�W�v�C
<br> ���ȥi�H�O�`�ɮפj�p���ʤ���A�Ϊ̥H'K','M','G'����������ؤo�C
<br> 0 ��ܺɥi��֪���s�A���L�o�˥i��|�ɭP�B��t�פU���C";

$ini['apc.localcache'] = "�O�_�ϥΫD��w���a�i�{shadow-cache �A���i�H��֤F�V�w�İϼg�J���ꤧ�����v���C";

$ini['apc.localcache.size'] = "���a�i�{��shadow-cache�A����]���@�Ө����j���ȡA�j���۷��num_files_hint���@�b�C";

$ini['apc.stat_ctime'] = "�|�L����";

$ini['bcmath.scale'] = "�Ω�Ҧ�bcmath��ƪ�10�Q�i��ƪ��Ӽ�";

$ini['gd.jpeg_ignore_warning'] = "�O�_����jpeg�ѽX����ĵ�i�H��(��p�L�k�ѧO�Ϥ��榡)�C
<br> ��image/jpeg�Pimage/pjpeg���MIME�����AGD�w�u���ѧO�e�@�ضǲή榡�C
<br> �Ѩ��G[url]http://twpug.net/modules/newbb/v[/url] ... d=1867&forum=14
<br> [url]http://bugs.php.net/bug.php?id=29878[/url]
<br> [url]http://www.faqs.org/faqs/jpeg-faq/part1/section-11.html[/url]";

$ini['filter.default'] = "�ϥΫ��w���L�o���L�o\$_GET,\$_POST,\$_COOKIE,\$_REQUEST�ƾڡA
<br> ��l�ƾڥi�H�q�Linput_get()��ƳX�ݡC
<br> \"unsafe_raw\"��ܤ�������L�o�C";

$ini['filter.default_flags'] = "filter_data()��ƪ��w�]�лx�C";

$ini['mbstring.language'] = "�w�]��NLS(���a�y���]�m)�A�i�]�m�Ȧp�U�G
<br> �w�]��\"neutral\"��ܤ��ߡA�۷�󥼪��C
<br> \"zh-cn\"��\"Simplified Chinese\"���²�餤��
<br> \"zh-tw\"��\"Traditional Chinese\"����c�餤��
<br> \"uni\"��\"universal\"���Unicode
<br> �ӫ��O�۰ʩw�q�F�H�᪺mbstring.internal_encoding���O�w�]�ȡA
<br> �åBmbstring.internal_encoding���O������m�b�ӫ��O����C";

$ini['mbstring.internal_encoding'] = "�����O������m�bmbstring.language���O����C
<br> �w�]�������s�X�A���]�m�ɨ��M��mbstring.language���O���ȡG
<br> \"neutral\" ���� \"ISO-8859-1\"
<br> \"zh-cn\"   ���� \"EUC-CN\" (������\"GB2312\")
<br> \"zh-tw\"   ���� \"EUC-TW\" (������\"BIG5\")
<br> \"uni\"     ���� \"UTF-8\"
<br> �����G���²�餤���٥i�H�j��]�m��\"CP936\" (������\"GBK\")
<br> �`�N�G�i�� SJIS, BIG5, GBK ���A�X�@�������s�X�A���L\"GB2312\"�֩w�S���D�C
<br> ��ĳ��ʱj����w";

$ini['mbstring.encoding_translation'] = "�O�_��i�J��HTTP�ШD����mbstring.internal_encoding���O�i��z�����s�X�ഫ�A
<br> �]�N�O�۰��˴���J�r�Ū��s�X�ñN��z������Ƭ������s�X�C
<br> �i���Ӫ��w�Ϊ̵{�Ǥd�U���n�̿��۰ʽs�X�ഫ�C";

$ini['mbstring.http_input'] = "�w�]��HTTP��J�s�X�A\"pass\"��ܸ��L(�����ഫ)
<br> \"aotu\"���t�q�Pmbstring.detect_order���O���������@�ˡC
<br> �i�H�]�m���@�ӳ�W���ȡA�]�i�H�]�m���@�ӳr�����j���C��C";

$ini['mbstring.http_output'] = "�w�]��HTTP��X�s�X�A\"pass\"��ܸ��L(�����ഫ)
<br> \"aotu\"���t�q�Pmbstring.detect_order���O���������@�ˡC
<br> �i�H�]�m���@�ӳ�W���ȡA�]�i�H�]�m���@�ӳr�����j���C��C
<br> �����Noutput_handler���O�]�m��\"mb_output_handler\"�~�i�H�C";

$ini['mbstring.detect_order'] = "�w�]���s�X�˴����ǡA\"pass\"��ܸ��L(�����ഫ)�C
<br> �w�]��(\"auto\")�Hmbstring.language���O�����P���ܤơG
<br> \"neutral\"�M\"universal\" ���� \"ASCII, UTF-8\"
<br> \"Simplified Chinese\"   ���� \"ASCII, UTF-8, EUC-CN, CP936\"
<br> \"Traditional Chinese\"  ���� \"ASCII, UTF-8, EUC-TW, BIG-5\"
<br> ��ĳ�b�i�����ҤU��ʱj����w�@�ӳ�@��";

$ini['mbstring.func_overload'] = "�۰ʨϥ� mb_* ��ƭ�����������r�`�r�Ŧ��ơC
<br> ��p�Gmail(), ereg() �N�Q�۰ʴ�����mb_send_mail(), mb_ereg()
<br> �i�� 0,1,2,4 �i���զX�C��p7��ܴ����Ҧ��C������������p�U�G
<br> 0: �L����
<br> 1: mail() �� mb_send_mail()
<br> 2: strlen() �� mb_strlen() <br> substr() �� mb_substr()
<br>    strpos() �� mb_strpos() <br> strrpos() �� mb_strrpos()
<br>    strtolower() �� mb_strtolower() <br> strtoupper() �� mb_strtoupper()
<br>    substr_count() �� mb_substr_count()
<br> 4: ereg() �� mb_ereg() <br> eregi() �� mb_eregi()
<br>    ereg_replace() �� mb_ereg_replace() <br> eregi_replace() �� mb_eregi_replace()
<br>    split() �� mb_split()";

$ini['mbstring.script_encoding'] = "�}���ҨϥΪ��s�X";

$ini['mbstring.strict_detection'] = "�O�_�ϥ��Y�Ԫ��s�X�˴�";

$ini['mbstring.substitute_character'] = "��Y�Ӧr�ŵL�k�ѽX�ɡA�N�O�γo�Ӧr�Ŵ��N�C
<br> �Y�]���@�Ӿ�ƫh��ܹ�����Unicode�ȡA���]�m����Ȫ�ܤ���ܳo�ӿ��~�r�šC
<br> ��ĳ�]��\"��\"";

$ini['mcrypt.algorithms_dir'] = "�w�]���[�K��k�ҲթҦb�ؿ��C�q�`�O\"/usr/local/lib/libmcrypt\"�C
<br> �ثe�|�L�Բӻ������ɡA���B�������i��O���~���C";

$ini['mcrypt.modes_dir'] = "�w�]���[�K�Ҧ��ҲթҦb�ؿ��C�q�`�O\"/usr/local/lib/libmcrypt\"�C
<br> �ثe�|�L�������ɡA���B�������i��O���~���C";

$ini['memcache.allow_failover'] = "�O�_�b�J����~�ɳz���a�V��L���A���i��G���ಾ�C";

$ini['memcache.chunk_size'] = "�ƾڱN���Ӧ��ȳ]�w�����j�p�i���ಾ�C���ȶV�p�һݪ��B�~�����ǿ�V�h�C
<br> �p�G�o�{�L�k�������t�׭��C�A�i�H���ձN���ȼW�[��32768�C";

$ini['memcache.default_port'] = "�s����memcached���A���ɨϥΪ��w�]TCP�ݤf�C";

$ini['memcache.max_failover_attempts'] = "�����M�o�e�ƾڮɳ̦h���զh�֭Ӧ��A���A�i�b���}memcache.allow_failover�ɦ��ġC";

$ini['memcache.hash_strategy'] = "����Nkey�M�g��server�������C�w�]��\"standard\"��ܨϥΥ��e��������hash�����C
<br> �]��\"consistent\"�i�H���\�b�s�������K�[/�R�����A���ɤ������s�p��key�Pserver�������M�g���Y�C";

$ini['memcache.hash_function'] = "����Nkey�M�g��server�����C��ơC�w�]��\"crc32\"�ϥ�CRC32��k�A��\"fnv\"�h��ܨϥ�FNV-1a��k�C
<br> FNV-1a��CRC32�t�׵y�C�A���O���C�ĪG��n�C";

$ini['zlib.output_compression'] = "�O�_�ϥ�zlib�w�z���a���Y�}����X���G�C
<br> �ӫ��O���ȥi�H�]�m���GOff�BOn�B�r�`��(���Y�w�İϤj�p�A�w�]��4096)�C
<br> �p�G���}�ӫ��O�A���s�����o�e\"Accept-Encoding: gzip(deflate)\"�Y�ɡA
<br> \"Content-Encoding: gzip(deflate)\"�M\"Vary: Accept-Encoding\"�Y�N�[�J�������Y���C
<br> �A�i�H�b�����Y��X���e��ini_set()��Ʀb�}�����ҥΩθT��o�ӯS�ʡC
<br> �p�G��X�@��\"Content-Type: image/??\"�o�˪������Y�A���Y�N���|�ҥ�(���F����Netscape��bug)�C
<br> �A�i�H�b��X\"Content-Type: image/??\"����ϥ�\"ini_set('zlib.output_compression', 'On')\"���s���}�o�ӯS�ʡC
<br> �`�N1: ���Y�v�|�����Y�w�İϤj�p���v�T�A�p�G�A�Q�o���n�����Y��q�A�Ы��w�@�Ӹ��j�����Y�w�İϡC
<br> �`�N2: �p�G�ҥΤFzlib��X���Y�Aoutput_handler���O�������šA�P�ɥ����]�mzlib.output_handler���O���ȡC";

$ini['zlib.output_compression_level'] = "���Y�ŧO�A�i�έȬ� 0~9 �A0��ܤ����Y�C�ȶV���ĪG�V�n�A��CPU���ζV�h�A��ĳ�Ȭ�1~5�C
<br> �w�]�� -1 ��ܨϥ�zlib�������w�]��(6)�C";

$ini['zlib.output_handler'] = "�b���}zlib.output_compression���O�����p�U�A�A�u��b�o�̫��w��X�B�z���C
<br> �i�H�ϥΪ��B�z����\"zlib.inflate\"(����)��\"zlib.deflate\"(���Y)�C
<br> �p�G�ҥθӫ��O�h�����Noutput_handler���O�]���šC";

$ini['dbx.colnames_case'] = "�r�q�W�i�H����\"unchanged\"��\"uppercase\",\"lowercase\"�覡��^�C";

$ini['mysqli.max_links'] = "�C�Ӷi�{�����\���̤j�s����(���[�M�D���[)�C-1 �N��L����";

$ini['mysqli.default_port'] = "mysqli_connect()�s����MySQL��Ʈw�ɨϥΪ��w�]TCP�ݤf�C
<br> �p�G�S���b�o�̫��w�w�]�ȡA�N���p�U���ǴM��G
<br> (1)\$MYSQL_TCP_PORT�����ܼ�
<br> (2)/etc/services�ɮפ���mysql-tcp��(unix)
<br> (3)�sĶ�ɫ��w��MYSQL_PORT�`�q
<br> �`�N�GWin32�U�A�u�ϥ�MYSQL_PORT�`�q�C";

$ini['mysqli.default_socket'] = "mysqli_connect()�s���쥻��MySQL���A���ɩҨϥΪ��w�]�M���r�W�C
<br> �Y�����w�h�ϥΤ��m��MqSQL�w�]�ȡC";

$ini['mysqli.default_host'] = "mysqli_connect()�s����MySQL��Ʈw�ɨϥΪ��w�]�D���C�w���Ҧ��U�L�ġC";

$ini['mysqli.default_user'] = "mysqli_connect()�s����MySQL��Ʈw�ɨϥΪ��w�]�Τ�W�C�w���Ҧ��U�L�ġC";

$ini['mysqli.default_pw'] = "mysqli_connect()�s����MySQL��Ʈw�ɨϥΪ��w�]�K�X�C�w���Ҧ��U�L�ġC
<br> �b�t�m�ɮפ��O�s�K�X�O���a�D�N�A����ϥ�PHP�v�����Τ᳣�i�H�B��
<br> 'echo cfg_get_var(\"mysql.default_password\")'����ܱK�X!
<br> �ӥB�����Ӱt�m�ɮצ�Ū�v�����Τ�]��ݨ�K�X�C";

$ini['mysqli.reconnect'] = "�O�_���\���s�s��";

$ini['pgsql.allow_persistent'] = "�O�_���\���[�s��";

$ini['pgsql.max_persistent'] = "�C�Ӷi�{�����\���̤j���[�s���ơC-1 �N��L����C";

$ini['pgsql.max_links'] = "�C�Ӷi�{�����\���̤j�s����(���[�M�D���[)�C-1 �N��L����C";

$ini['pgsql.auto_reset_persistent'] = "�۰ʴ_��bpg_pconnect()�W���_�F�����[�s���A�˴��ݭn�@���B�~�}�P�C";

$ini['pgsql.ignore_notice'] = "�O�_����PostgreSQL��ݪ����������C
<br> �O����ݪ����������ݭn�@�ǫܤp���B�~�}�P�C";

$ini['pgsql.log_notice'] = "�O�_�b��x���O��PostgreSQL��ݪ����������C
<br> �Ȧbpgsql.ignore_notice=Off�ɡA�~�i�H�O���C";

?>