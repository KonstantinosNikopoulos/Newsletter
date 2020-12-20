# Newsletter
Store emails for newsletter and send mass email.

## System Requirements
Before starting please make sure that you have successfully installed the below technologies:
-  PHP 7.4      
-  MySQL 8
-  Composer
  
## Installation
- Install composer in /MassEmail:       
$ composer install

## Run Newsletter

- Start MYSQL:      
$ mysql -u root -p;      
$ mysql> drop database if exists newsletter;      
$ mysql> create database newsletter;      
$ mysql> use newsletter;      
$ mysql> source dump.sql;      

- Start PHP in localhost:      
$ php -S 127.0.0.1:8000      

- Open 127.0.0.1:8000      

- Store emails      

- Save MYSQL:      
$ mysqldump -u root -p newsletter > dump.sql      

## Run MassEmail

- Start PHP in localhost:      
$ php -S 127.0.0.1:8000      

- Open 127.0.0.1:8000      

- Send emails            
