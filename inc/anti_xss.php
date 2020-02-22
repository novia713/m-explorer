<?php

use voku\helper\AntiXSS;
$antiXss = new AntiXSS();

$_ = [];
foreach ($_REQUEST as $k => $v){
  $_[$k] = $antiXss->xss_clean($v);
}
$_REQUEST = $_;

$_ = [];
foreach ($_GET as $k => $v){
  $_[$k] = $antiXss->xss_clean($v);
}
$_GET = $_;

$_ = [];
foreach ($_POST as $k => $v){
  $_[$k] = $antiXss->xss_clean($v);
}
$_POST = $_;

$_ = [];
foreach ($_SERVER as $k => $v){
  $_[$k] = $antiXss->xss_clean($v);
}
$_SERVER = $_;
