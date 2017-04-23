# Folder Structure

Biscuit Link has a folder structure that has been designed in a way to organise your PHP projects from the start. Inspired by many other famous PHP frameworks, with its own twist.

## Main Structure

The following is the main folder structure for Biscuit Link, we will be discussing each folder and its importance to the framework individually.

```text
(root)
|-- app/
|-- classes/
|-- controllers/
|-- elements/
|-- public/
   |-- assets/
|-- templates/
   |-- elements/
   |-- markdown/
```

### `app/`

The `app/` folder is where the main application files can be found. This is what makes your web application run. However, the serving of the pages are done through the `public/index.php` file (see below).

In this folder you will find the following files:

- `app/config.php`
  - This file is where you will set your globals and your API keys.
  - You are advised to move this configuration file outside your git project, by either changing the framework to fetch the file from an untracked folder. Or simply add it to your `.gitignore` file.
- `app/init.php`
  - This is potentially the most important file in your project.
  - This file is what sets up your environment and includes all the classes and Composer dependencies.
  - You are advised NOT to touch this file, unless you are pretty confident in doing so.
- `app/routes.php`
  - This is where the routing for your app is done.
  - Biscuit Link using AltoRouter for routing mechanism.
  - You are advised to create your displays using a `Controller` class, which are found in `controllers/` (see below).

### `classes/`

This folder is where your classes (excluding controllers and elements) go. Biscuit Link already comes with some classes built-in.

### `controllers/`

This folder is where you should include your controllers. You can find a `DefaultController` class in this folder, which you can use for reference on making your own.

See the `app/routes.php` file which is what calls these controllers.

### `elements/`

This folder includes your elements. `Element` templates are also included in `templates/elements` where the Smarty templates are stored.

### `public/`

The public folder is where your assets such as CSS and JavaScript files go. This folder is the one accessible to the public and is where your `index.php` file is found.

Your web server looks at the `index.php` file when serving a file to your users. A favicon is already provided to you, please replace it with your own.

You are also recommended to place your `sitemap.xml` and `robots.txt` file here for SEO purposes.

#### `public/assets/`

This folder is optional, however, you are advised to place your application's assets inside this folder for organisation purposes.

A file would normally be accessed by `example.com/assets/file.css` for a file named `styles.css` placed in the `public/assets/` folder.

### `templates/`

This folder is where the `Template` class fetches your Smarty template files.

You are advised to keep this folder organised as much as possible.

A folder `templates/elements/` is already created where your Element templates should be placed.

A special folder `templates/markdown/` is used by the `MarkdownElement`. All `.md` files should be placed under this folder. They can be also placed in sub-folders.


_To be continued..._