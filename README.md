# Laravel CRUD Generator

Laravel CRUD Generator is a package that simplifies the process of generating CRUD (Create, Read, Update, Delete) operations for your Laravel applications.

## Installation

You can install the package via Composer. Inside your Laravel project directory, run the following command:

```bash
composer require laragen/crud-generator

Registering the Command
For Laravel versions, you need to register the service provider manually. Add the following line to your config/app.php file under the providers array:

php
Copy code
'providers' => ServiceProvider::defaultProviders()->merge([
    
    \Laragen\CrudGenerator\CrudGeneratorCommand::class,

])->toArray(),

Copy code
# To Generator Laravel CRUD run:

php artisan crud:generate ModelName

This command will generate:

A model with migration
A controller with resourceful methods
Views (index, create, edit, show)
Routes for the CRUD operations
Configuration
additional configuration is required, you can customize the generated views and controllers as needed for your application. however you need to manually import the classes in the controller with resourceful methods 

Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

License
The Laravel CRUD Generator is open-source software licensed under the MIT license.