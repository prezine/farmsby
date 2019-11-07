# Farmsby

Farmsby is an Agro Investment platform that leverages on the power of crowd funding to generate capital for African Farmers, thereby eliminating food insecurity, increasing the volume of food production and earning solid returns on all investments made.

## Get Started
```bash
	sudo su
	# [sudo] password for <username>:
	service apache2 start # start server
	cd /var/www/html/farmsby 
	chmod -R 777 * # update read & write permission
```

## Installation
Beautifully Farmsby was created in a less stressful way, do you know how to click? then you're one click away!
open the root directory and add `/install` then type in your database name and hit install, yes it's that simple.

## Configuration
You can find the configuration file in `/app/config.php` all defined as a constant
```php
  # Database Configuration
    defined('DATABASE_HOST')    OR Define('DATABASE_HOST', '');
    defined('DATABASE_USER')    OR define('DATABASE_USER', '');
    defined('DATABASE_CODE')    OR define('DATABASE_CODE', '');
    defined('DATABASE_NAME')    OR define('DATABASE_NAME', '');
  # Permissions
    defined('ENV')              OR define('ENV', 1); 
  # Directory Path
    defined('BASEPATH')         OR define('BASEPATH', 'http://127.0.0.1/farmsby/');
```

## Introduction

### Structure
Farmsby Project structure the `/app` directory holds the functionality of the app, it is the brain directory, within it contains the controller (where every algorithm, logics, and more is applied as a class), the `/library` contains all files from [packagist](https://packagist.org/) php code store, installed using composer. `/logs` stores all errors in .log file, while the `/model` holds every logic of the app.
	-	app
		- controller
		- library
		- logs
		- model
		config.php
		connect.php
	- assets
		- css
		- fonts
		- images
		- js
		- vendors
	- widgets
	.htaccess
	- ... (html files with <.php> extensions)

### Using Database
Hey! working with our Database you need an average knowledge of a working SQL.
`connect.php` file holds connection queries to database. Farmsby is the main Controller that should be extended to other controllers, while of course `Database.php` holds all database queries to interact with the database.

#### Insert
The insert query is in this format `*->insert('tablename', array('row' => 'value'))`

```php
	include_once 'app/connect.php';
	include_once 'app/controller/Farmsby.php';
	include_once 'app/controller/Database.php';
	$database = new Database($conn);
	$database->insert('tablename', array(
		'row1' => 'Value1',
		'row2' => 'Value2'
	));

	# Output: 200 || Error message
```

#### Select
The insert query is in this format `*->select('query', true)`. Adding ,true or ,false on the second parameter is asking if we should enable data return in Json or not. If yes then do not forget to add `*->viewJson();`

```php
	include_once 'app/connect.php';
	include_once 'app/controller/Farmsby.php';
	include_once 'app/controller/Database.php';
	$database->viewJson();
	$database = new Database($conn);
	$database->select('SELECT * FROM tablename WHERE row = "value"', true);

	# Output: 200 || Error message
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.