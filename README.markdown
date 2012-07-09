# LyraAdminBundle Demo

This is is a demo project created to provide users with a quick and easy
way to install and try out [LyraAdminBundle](https://github.com/mgiagnoni/LyraAdminBundle).

Beside the admin bundle and its dependencies, the project includes 
[MGIClassifiedsBundle](https://github.com/mgiagnoni/MGIClassifiedsBundle), 
the bundle that is developed step-by-step inside the Getting started tutorial
in LyraAdminBundle documentation, and [MGIBlogBundle](https://github.com/mgiagnoni/MGIBlogBundle) 
a simple Symfony2/Doctrine2 blog.

The demo project is available in two branches:

* branch `master` to test the Symfony 2.1 version of LyraAdminBundle
* branch `2.0` to test the Symfony 2.0.x version of LyraAdminBundle

Composer is used for **both** branches.

## Install master branch

    curl -s http://getcomposer.org/installer | php
    php composer.phar create-project lyra/demo-admin-bundle path/to/install

## Install 2.0 branch

    curl -s http://getcomposer.org/installer | php
    php composer.phar create-project lyra/demo-admin-bundle path/to/install 2.0.x-dev
    cd path/to/install
    php bin/setup

`path/to/install` is the path to the folder where the demo project will be
installed; it must not exist because it will be created by Composer.

Usual steps to setup a regular Symfony project are also needed. Configure a
virtual host with `path/to/install/web` as Document Root and check that
`app/cache`, `app/logs` have correct permissions.

From the demo project folder execute:

    app/console doctrine:database:create
    app/console doctrine:schema:create

Before running the above commands you may need to edit `app/config/parameters.yml`
if you want to choose a different name for your database (default is `lyra_admin_demo`)
or your connection requires a root password.

Then you can login to the admin area:

    http://.../admin/post/list

user: admin, password: admin
