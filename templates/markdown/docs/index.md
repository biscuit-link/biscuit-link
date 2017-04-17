# Getting Started with Biscuit Link

A PHP framework that was written from the ground up to get you up and running **ASAP**!

### Let's get a few things cleared out before you continue

* Biscuit Link is a PHP framework with routing and templating engines.
* Biscuit Link is **NOT** a Content Management System (CMS). However, you can build a CMS using this framework.
* Biscuit Link is primarily developed for static websites with no internal database systems. It is **easy** to implement a database system to run alongside Biscuit Link. (This may become a main feature in future releases)
* Composer is required to run Biscuit Link.
* The framework is developed on top of an Nginx server, which makes it the main targetted Web Server technology, however can easily be implemented to run with Apache.

## Develop and Deploy

Although Biscuit Link is a relatively new framework, it is production ready. However, beware somethings still may not work as expected. [Contribution to the project is more than welcomed](https://github.com/cajogos/biscuit-link).

### Development Environment

The development of Biscuit Link can be done using any Web Server running PHP 5.5 or greater. For the easiest way to get started you can use the pre-configured Vagrant box which is developed alongside the latest version of the framework.

### Production Environment

Once you are ready to start submitting your new web project to the world, you can simply set-up a server with similar configuration as your Vagrant box and it is just a matter of using a remote Git repository and pull any new changes.

## Technology Stack

The framework is aimed at relatively new developers, on the other hand, any experienced developer can easily get a new website up and running in a matter of minutes.

A few technologies and dependencies make this framework possible:

### Composer Dependencies

In order to run Biscuit Link you need to use [Composer, a dependency manager for PHP](https://getcomposer.org/).

We use a few dependencies out of the box, and [you are encouraged to check out any others you may need](https://packagist.org/).

* **Smarty 3** - [Documentation](http://www.smarty.net/docs/en/)
  * Biscuit Link comes with a Template class which wraps around Smarty.
  * Smarty brings many advantages to your templates such as built-in functionality for displaying dates, formatted data, etc.
* **Guzzle** - [Documentation](http://docs.guzzlephp.org/en/latest/)
* **AltoRouter** - [Documentation](http://altorouter.com/usage/mapping-routes.html)
  * The Routing system of Biscuit Link is done via the `routes.php` file using AltoRouter.
  * AltoRouter provides a simplistic, yet powerful routing mechanism.
* **PHP TempCache** - [GitHub](https://github.com/cajogos/php-temp-cache)
  * Biscuit Link comes with a simple caching library by the same creator ([Carlos Ferreira](https://carlos.fyi)).
  * This is mainly for caching API requests or other complex requests.
* **Parsedown** - [GitHub](https://github.com/erusev/parsedown)
  * Markdown is nowadays one of the most used languages for writing documentation and blog posts.
  * Biscuit Link comes built-in with a `MarkdownElement` which uses Parsedown to render `.md` files in your page.
  * This page was generated using Parsedown.


_To be continued..._