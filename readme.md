## How to setup the project

###1. Clone the project

    git clone git@github.com:pix-art/phpunitdemo.git


###2. Composer install

    composer install

###3. Setup the database

Edit the following 2 files with the right info:

    app/config/local/database.php
    app/config/database.php

###4. Set the project url


    app/config/app.php
    
    'url' => 'http://localhost/',

## How to setup Behat

###1. Setup behat.yml with the right project url
    
    base_url: http://localhost/
    
###2. Setup Selenium and run your tests

See step 5 and 6 from my blogpost on how to test with Behat.
    
    http://www.pix-art.be/post/testing-your-symfony-application-with-behat
    


