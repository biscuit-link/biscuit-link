# Elements

Elements in Biscuit Link are essentially what we call smart Templates. They are usually small parts of your pages which need a bit more logic.

Elements can be added to your templates using the `addElement()` function of the `Template` class.

You are advised to keep your created elements inside the `elements/` folder in your root directory. To keep your application organised.

## Creating an Element

Elements should extend the `abstract` class `Element`. Elements require to have the `getString()` function.

```php
class MyElement extends Element
{
    private $data = null;
    
    public function setData($data)
    {
        $this->data = $data;
    }
    
    public function getString()
    {
        return $this->data;
    }
}
```

Biscuit comes with some examples for elements. See `elements/HelloElement.php` for a coded example with variables.

## Templates in Elements

You are advised to create elements using templates to keep the integrity of your application consistent.

A good place to keep your element template files is the `templates/elements/` folder.

See [Templates](/docs/templates) to learn more.

_To be continued..._