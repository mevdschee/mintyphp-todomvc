# MintyPHP TodoMVC

[TodoMVC.com](https://todomvc.com/) is a website helping you to choose a MV* framework for your JavaScript web app. The site states:

>Developers these days are spoiled with choice when it comes to selecting an MV* framework for structuring and organizing their JavaScript web apps.

Although web games may benefit from continous updates to the UI, business software works much better when approached in a more boring and predicatable transactional fashion, with forms, a relational database and minimal use of Javascript.

Javascript version: https://todomvc.com/examples/vanillajs/

This is an implementation of the TodoMVC application in the [MintyPHP framework](https://github.com/mintyphp/mintyphp) to show even for this UI intensive (showcase) application you don't need a Javascript MV* framework. This Symfony application has the exact same functionality as the Javascript version linked above, but with minimal use of Javascript.

### Requirements

- Requires PHP 7 or higher 
- MySQL compatible database

### Installing and runnning

Run the following command to start the application (on Linux):

    git clone git@github.com:mevdschee/mintyphp-todomvc.git
    cd mintyphp-todomvc
    cat create.sql | sudo mysql
    cp config/config.php.template config/config.php
    bash start.sh

Now point your browser to [http://localhost:8000/](http://localhost:8000/) to start the application in your browser.

Enjoy!
