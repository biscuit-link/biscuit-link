# Installation

You must have [Vagrant](https://www.vagrantup.com/intro/index.html) and [Virtual Box](https://www.virtualbox.org/wiki/Downloads) installed on your machine in order to be able to run this box.

### The Folder Structure

```php
- Project Name/
  - vagrant-box/
  - website/
  - config/
```

You need to create the main folder `Project Name`. The sub-folders will be created during the setup.
The last sub-folder (`config/`) is optional: You may want to include configuration for your project which can be loaded in when your application boots up.

### Set Up

Follow the following steps in order to get your box running as soon as possible:

1. Into the terminal, select the main folder `Project Name`, and clone the two repositories for Buiscuit Link:

  ```php
  cd Project Name
  git clone https://github.com/biscuit-link/biscuit.link.git website
  git clone https://github.com/biscuit-link/vagrant-box.git
  ```

2. Once your folder structure is done all you gotta do is go to the `vagrant-box` sub-folder, and **vagrant up**. Your box should install all the needed dependencies.

  ```php
  cd vagrant-box
  vagrant up
  ```

3. Biscuit Link has been written from the ground up to support the latest PHP technologies, therefore, we use Composer. Composer is automatically installed when your box is set-up, however, your project does not automatically fetch all the dependencies.

  3.1. Into the same sub-folder (`vagrant-box`), run **vagrant ssh** which should now bring up the shell for your box.

  ```php
  vagrant ssh
  ```

  3.2. Since your `website` sub-folder is in `/var/www/website`, change into the folder using **cd /var/www/website** and then run **composer install**. The dependencies should now be built successfully!

  ```php
    cd /var/www/website
    composer install
  ```

### Run

You are ready to go!! -> http://localhost:4848
