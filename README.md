# Insurance Management System

This system is part of a project submitted for the course Internet and Web Programming. It is an insurance management system written mostly in PHP and connects to a MySQL database. This document details the setup process for this system.

Try the live site [here](https://vada-insurance.herokuapp.com/).

## Dependencies

* Apache Web Server

* PHP 5.5+

* Node.js 6+

* MySQL 5.6 (with database creation privileges)

* Git (optional)

* Composer (optional)

## Setup process

Follow the below sections in order.

### Setup the server

* Navigate to the `src` folder and open `.htaccess`

* For the database URL environment variable rewrite it in the following format-

```html
mysql://username:password@localhost:port/database?reconnect=true
```

* Start Apache server.

### Setup the database

**Recommended:** Use PHPMyAdmin to execute the SQL scripts.

*Note:* Make sure you have a database created with create, update and insert permissions.

Execute the `queries.sql` file in the directory root using the MySQL command line or PHPMyAdmin. This will create the required tables and populate the database with pre-defined values.

### Setup Node.js

* Install the latest LTS of [node.js](https://nodejs.org) for your operating system.

* Make sure `node` is in your system PATH.

* Navigate to the directory root of this repository.

* Open a command window in the directory and run `npm init`. This should install all the JavaScript dependencies required such as Babel, Bootstrap and JQuery on the system. You can access them at `node_modules/`.

* Finally to build and transpile all the JavaScript code, run `npm run build` on the command prompt. Once this is finished, you will see a new folder called `out` that has been created with all the files ready to be executed.

### Final steps

* Copy the contents of the `out` folder to the `www` folder of Apache or make a symlink to it if you so prefer.

* Make sure you have an internet connection.

* Open `http://localhost/main.php` on your browser. The landing page should open.

* Use the following default accounts to access the site: For employees and managers, the username is "1" and the password is "reddit" without quotes. For customers, the username is "1" and the password is "rahul".