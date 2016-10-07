medius
======

A Symfony project created on October 4, 2016, 5:32 pm.

Live Demo
=========
Checkout the live demo at:
https://harmonwood.com/medius/


Getting Started
===============
After checking out the code run:
`composer install`
`bin/console server:run`

Then navigate to `http://localhost:8000`

The `app/config/paramaters.yml` file is normally not commited but I left it in
for ease of use.

I also left in the app.db file for ease of use.

Setup
=====

Re-Build Database:
`php bin/console doctrine:database:create`
`php bin/console doctrine:migrations:migrate`
`php bin/console doctrine:fixtures:load`

Changing Assets
===============

When changing an asset file you will need to run a new dump and add those files.

`php bin/console assetic:dump`
