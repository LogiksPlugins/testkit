<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$appPath = ROOT.APPS_FOLDER.CMS_SITENAME."/";

if(isset($_REQUEST['path']) && strlen($_REQUEST['path'])>0) {
    if($_REQUEST['path']=="/") $_REQUEST['path']="";
    
    $appPath.=$_REQUEST['path'];
    $appPath = str_replace("//","/",$repoPath);
}

loadModuleLib("logiksShell","api");

$appPath = ROOT;

switch ($_REQUEST['action']) {
    case "runtest":
        $ans = logiksRunCmd('phpunit -v -c .phpunit.xml',$appPath);
        //printServiceMsg($ans);
        echo "<pre>";
        echo $ans;
        echo "</pre>";
        break;
}
?>