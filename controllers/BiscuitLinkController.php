<?php

class BiscuitLinkController extends Controller
{

	const DEFAULT_TITLE = 'Biscuit Link - The PHP Framework for Everyone';

	public static function displayIndex()
	{
		$tpl = Template::create('biscuit/pages/index.tpl');
		$tpl->assign('page_title', self::DEFAULT_TITLE);
		$tpl->display();
	}

}