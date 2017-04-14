<?php

class BiscuitLinkController extends Controller
{
	public static function displayIndex()
	{
		$tpl = Template::create('pages/web/index.tpl');
		$tpl->display();
	}

}