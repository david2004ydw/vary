<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″ />
    <title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php $this->header(); ?>
    <link href="<?php $this->options->themeUrl('style.css'); ?>"rel="stylesheet">
    </head>
<body>
<div class="m">
    <div class="top" role="banner">
        <div class="topcon">
            <div class="go topad">
                <form id="search" method="post" action="./" role="search"><input type="text" class="text" name="s" placeholder="搜索"></form>
            </div>
            <nav><img src="<?php if ($this->options->headLogo): ?><?php $this->options->headLogo(); ?><?php else: ?>data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=<?php endif; ?>"
 width="30" height="30" class="logo"/><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a><?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?>  &nbsp;<a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a><?php endwhile; ?></nav>
        </div>
      </div>
      <div class="con">
          <div class="ani in">
              <div class="intro">