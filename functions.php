<?php

function themeConfig($form) {

    

	$file = new Typecho_Widget_Helper_Form_Element_Text('file', NULL, NULL, _t('归档地址'));
    $form->addInput($file);
    	//网站统计	
	$tCount = new Typecho_Widget_Helper_Form_Element_Textarea('tCount', NULL, NULL, _t('统计代码'), _t('这里填写你的统计代码，不想显示请留空'));
    $form->addInput($tCount);	
	

		//翻页类型
    $PageType = new Typecho_Widget_Helper_Form_Element_Radio('PageType', array('0' => _t('常规'), '1'=> _t('AJAX翻页')), '0', _t('翻页类型'),
    _t('如果你用了优化网址的插件，请使用常规翻页……否则会捕捉不到页码而无法读取……'));
    $form->addInput($PageType);
}
