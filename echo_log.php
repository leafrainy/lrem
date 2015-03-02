<?php 
/**
 * 阅读文章页面
 * Template Name:LR_em v1.0
 * Description:移植修改自牧师Typecho.us
 * Author:叶雨梧桐
 * Author Url:http://blog.gt520.com
 * Sidebar Amount:1
 * update:20131217
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<p>
	<span class="author"><?php blog_author($author); ?> </span>
	<span class="cal"><?php echo gmdate('Y-n-j G:i l', $date); ?> </span>
	<span class="category"><?php blog_sort($logid); ?></span>
	<span class="tag"><?php blog_tag($logid); ?></span>
	<?php editflg($logid,$author); ?>
	</p>
	<div id="hrr"></div>
	<?php echo $log_content; ?>
	<p><br/>本文固定链接: <a title="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?></a></p>
	<div id="hrr"></div>
	<?php doAction('log_related', $logData); ?>
	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>