# Templates

Biscuit Link uses templates in order to create views.

The templating engine of choice is Smarty 3. Smarty 3 needs to be loaded in using Composer.

Templates are loaded through using the Controllers of your application and, even though you can create all your pages by simply printing using PHP, you are **strongly** advised in using the templating engine, as it provides many benefits.

## The `Template` class

Biscuit Link uses the `Template` class found in `classes/` in your root directory in order to manage the Smarty class. This implementation was designed to make it even easier for you to load the templates, all the default configuration has been set-up for you in this class.

### Template directory

All the templates should be placed in the `templates/` folder in your root directory. Templates are then compiled into the `/tmp/biscuit-link-templates` directory of your linux server.

### Loading a template

Inside your controller functions you can create a `Template` object using the `create()` static function, this function takes a path as parameter which indicates where within the `templates/` folder your template can be found:
```php
$template = Template::create($template_path);
```

You can create a `Template` object inside your Controller's functions and display it using the `display()` method of the `Template` object:
```php
public static function displayFunction()
{
    $template = Template::create('pages/index.tpl');
    $template->display();
}
```

You can assign variables to your templates in the same way you assign variables in Smarty:
```php
$template->assign($key, $value);
```

Sometimes you may wish to get the template's output in order to join templates together, use the `getSring()` method in order to achieve this:
```php
$template->getString();
```

### Add an Element

Elements are a big part of Biscuit Link, so adding an `Element` to a `Template` is supported from the core. Use the `addElement()` method to achieve this:
```php
$template->addElement('elementID', $my_element);
```

You can then call your newly added element using its given ID, in this case we called it `elementID`.


_To be continued..._