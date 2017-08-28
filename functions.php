<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {


    $welcome = new Typecho_Widget_Helper_Form_Element_Text('welcome', NULL, NULL, _t('首页大字'), _t('插入首页大字、欢迎语。'));
    $form->addInput($welcome);

    $indexNotice = new Typecho_Widget_Helper_Form_Element_Text('indexNotice', NULL, NULL, _t('首页小字'), _t('在首页内插入一句话。（需要先设置首页大字）'));
    $form->addInput($indexNotice);

    $headLogo = new Typecho_Widget_Helper_Form_Element_Text('indexImage', NULL, NULL, _t('首页图片'), _t('首页右侧图片（手机端不显示）（需要先设置首页大字）。'));
    $form->addInput($headLogo);

    $headLogo = new Typecho_Widget_Helper_Form_Element_Text('headLogo', NULL, NULL, _t('顶栏Logo'), _t('在header上插入一个Logo。'));
    $form->addInput($headLogo);

    $donateImage = new Typecho_Widget_Helper_Form_Element_Text('donateImage', NULL, NULL, _t('打赏二维码'), _t('在文章、页面后插入一个二维码（正方形）。'));
    $form->addInput($donateImage);
}