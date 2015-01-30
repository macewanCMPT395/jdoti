#Josh D CMPT395 Project 1 (CACTUS)

##----Project Cactus (aka. CMPT 395 project 1)-----

Created By: Josh Dotinga

Contact: dotingaj@mymacewan.ca
    
JoshDoti 2015

##----Application------
requirements: PHP

This appliaction is a simple CRUD(create read update delete) app
built on the laravel framework for php. 

The App features a simple login along with way to create and update
a profile/user. Users can also access the profiles of other users.

The app is called CACTUS. Cactus is a platform for connecting users. 
Users would(theoretically) send "pricks" to each other as a form 
of communication. 

##----To get install and run (from unix)------
****An empty sqllite database is included with install****

####1.From terminal in directrory of your choice Clone git repo with
        git clone https://github.com/macewanCMPT395/jdoti.git cactus
  
####2.Get composer (if you dont have it) by running commands
        curl -sS https://getcomposer.org/installer | php
        mv composer.phar /usr/local/bin/composer    (may require permissions)

####3. Get working with commands
        cd cactus
        composer install --dev
        
####4.Run php web app with command
        php artisan serve
        
####5.Access website from your favorite web browser at
        http://localhost:8000/
        
****No need to seed database, An empty sqllite database is included***




