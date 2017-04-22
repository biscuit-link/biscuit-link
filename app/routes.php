<?php
/*
 * Routing of your application's pages
 *
 * - Routing is done using AltoRouter (http://altorouter.com/usage/mapping-routes.html)
 */
$router = new AltoRouter();


/**
 * Application mappings
 */

// Index page mapping
$router->map('GET', '/', 'BiscuitLinkController::displayIndex');
// Docs
$router->map('GET', '/docs', 'BiscuitLinkController::displayDoc');
$router->map('GET', '/docs/[:docfile]', 'BiscuitLinkController::displayDoc');

// Hello World page
$router->map('GET', '/hello', 'DefaultController::hello');
$router->map('GET', '/hello/[a:name]', 'DefaultController::hello');
$router->map('GET', '/hello/[a:name]/[a:say]', 'DefaultController::hello');

$router->map('GET', '/markdown', 'DefaultController::markdown');

/**
 * Function that handles the AltoRouter object - must be present in order for your routes to work
 * @param AltoRouter $router
 */
function handleRouting(AltoRouter $router)
{
	$match = $router->match();
	if ($match && is_callable($match['target']))
	{
		call_user_func_array($match['target'], $match['params']);
	}
	else
	{
		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		$tpl = Template::create('biscuit/pages/404.tpl');
		$tpl->display();
	}
}
handleRouting($router);