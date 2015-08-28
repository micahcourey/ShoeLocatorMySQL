# _Shoe Locator_

##### _An app for storing info on where particular shoe brands are sold._

#### By _**Micah Courey**_

## Description

_This is an app that allows users to create, read, update and delete shoes and shoe brands and locate which stores have which brands._


## Setup

* _Clone repository from GitHub._
* _Run $ composer install._
* _Start MySql server in web directory._
* _Install MAMP_
* _Access phpMyAdmin_
* _import .sql database files into phpMyAdmin_
* _Start php server in web directory._
* _Direct browser to localhost:8000/_

## MySQL commands used:
* _mysql.server.start_
* _mysql -uroot -proot;_
* _CREATE DATABASE hair_salon;_
* _USE shoe_store_
* _CREATE DATABASE shoe_store;_
* _CREATE TABLE stores (id serial PRIMARY KEY, store_name VARCHAR (255));_
* _CREATE TABLE brands (id serial PRIMARY KEY, brand_name VARCHAR (255));_
* _CREATE TABLE brands_stores (id serial PRIMARY KEY, store_id INT, brand_id INT);_

## Technologies Used

_PHP, HTML, CSS, Silex, Twig, phpUnit, MySql_

### Legal

Copyright (c) 2015 **_Micah Courey_**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
