# QUINT PRACTICAL ASSESSMENT

This application was developed with [laravel] 5.8*

## Installation

Install GIT 

Run the following GIT command to clone the project repository:

``` bash

$ cd /path/to/apache/www/directory

$ git clone https://github.com/reggiestain/quint-assessment

```
## Database Configuration

Read and edit the .env file located in the project directory setup the 'Datasources' and any other configuration relevant to the application.


## Run Database Migration

``` bash

$ cd /path/to/project/directory

$ php artisan migrate

```

## Below, a list of libraries used for implementation.

``` bash

| Language                          | Library   
| --------------------------------- | ------------------------------------------------------------------------------ |
| PHP 7.2 [illuminate/database]     | (https://github.com/illuminate/database)                                       | 
| JavaScript  [Jquery]              | (https://code.jquery.com/jquery-3.3.1.js)                                      |
| JavaScript  [JqueryDataTables]    | (https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js)               |
| JavaScript  [DataTablesBootstrap] | (https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js)           |
| CSS         [DataTables]          | (https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css)         |
| CSS         [DataTables]          | (https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css)         |          

```

## Run Server

``` bash

$ cd /path/to/project/directory

$ php artisan serve

```

You are now set to go.

Run the application on your web server and register as a user to login with
 
Login with email and password to view all created leads

After creating a lead 

## Run Job

``` bash

$ cd /path/to/project/directory

$ php artisan queue:work

```






