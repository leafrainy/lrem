<?php
/*
* Template Name:LR_em v1.0
 * Description:移植修改自牧师Typecho.us
 * Author:叶雨梧桐
 * Author Url:http://blog.gt520.com
 * Sidebar Amount:1
 * update:20131217
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
 <script src="<?php echo BLOG_URL; ?>include/lib/js/jquery/jquery-1.7.1.js" type="text/javascript"></script> 
 <script src="<?php echo BLOG_URL; ?>content\templates\default1\myjs.js" type="text/javascript"></script>
<?php doAction('index_head'); ?>
</head>
<body>
<div id="wrap">
  <div class="left" id="header">
    <h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
  </div>
  <div class="right" id="nav"><?php blog_navi();?></div>