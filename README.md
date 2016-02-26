# Boilerplate for Slim Framework 3
  Boilerplate for getting started with Slim Framework
  
  Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View, Twig template engine, Eloquent Laravel, Sentinel authentication provider, SDK Facebook. It also uses the Monolog logger.
	
#####1 Manual Install
You can manually install by cloning this repo or download the zip file from this repo, and run ```composer install```.
```
$ git clone https://github.com/zhiephie/boilerplate-slim3.git
$ composer install
```

#####2 Alternative install via ```composer```
```
$ composer create-project zhiephie/boilerplate-slim3
```

#####3 Setup Permission
After composer finished install the dependencies, you need to change file and folder permission.
```
$ chmod -R 777 storage
$ chmod 666 config/database.php
```

#####4 Configuration Database and Setting App
Configuration file located in ```config```, edit the database.php, setting.php

#####5 Run ```php migrate```
```
$ php migrate
```

###That's it! Now go build something cool.