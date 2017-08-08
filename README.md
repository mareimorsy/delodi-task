# Event Registration Form( Delodi Task )
An event registration form that receives input via a form (a couple of fields of different types) and writes the content to a database. Under the form it should show a full list of all written entries. The logic should be as abstract as possible to be easily adapted to new types of input.
![Marei's Event Registration Form](https://github.com/mareimorsy/delodi-task/blob/master/public/images/screenshot.png)
# Run the app
1. Clone or download the project
```
$ git clone https://github.com/mareimorsy/delodi-task.git
```
2. After extracting the project files, open the terminal in the project directory(delodi-task).
```
$ cd delodi-task
```
3. install Laravel packages
```
$ composer install
```
4. Create a new SQLite database (you can create any other database like MySQL, SQL Server, PostgreSQL, Oracle, etc. But you'll have to change database configurations in your own .env file. as it's a simple task I prefere SQLite DB.
```
$ touch database/database.sqlite
```
5. Migrate database in order to create database schema
```
$ php artisan migrate
```
6. Run the app!
```
$ php artisan serve
```
and the server will start, it usually starts at : http://127.0.0.1:8000

I have written the following classes especially for this task, you can check them out [here](https://github.com/mareimorsy/delodi-task/tree/master/app/MareiClasses/CountryAssets)
