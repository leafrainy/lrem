<?php 
/**
 * 首页文章列表部分
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
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
	<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<p>
		<span class="author"><?php blog_author($value['author']); ?></span>
		<span class="cal"><?php echo gmdate('Y-n-j G:i l', $value['date']); ?></span> 
		<span class="category"><?php blog_sort($value['logid']); ?> </span>
		<?php editflg($value['logid'],$value['author']); ?>
		<span class="tag"><?php blog_tag($value['logid']); ?></span>
		<div id="hrr"></div>
	</p>
	<?php echo subString(strip_tags($value['content']),0,250); ?>
	
	<p class="count">
	<a href="<?php echo $value['log_url']; ?>#comments">评论(<?php echo $value['comnum']; ?>)</a>
	<a href="<?php echo $value['log_url']; ?>">浏览(<?php echo $value['views']; ?>)</a>
	</p>
	<div style="clear:both;"></div>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>

</div><!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>