mysql.server.start
mysql -uroot -proot;
CREATE DATABASE hair_salon;
USE shoe_store
CREATE DATABASE shoe_store;
CREATE TABLE stores (id serial PRIMARY KEY, store_name VARCHAR (255));
CREATE TABLE brands (id serial PRIMARY KEY, brand_name VARCHAR (255));
CREATE TABLE brands_stores (id serial PRIMARY KEY, store_id INT, brand_id INT);
