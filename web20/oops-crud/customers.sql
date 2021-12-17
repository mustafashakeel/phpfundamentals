
-- Create a table called customers where we have the following fields 
-- 1. id  this should be primary key autoincrement , 2. name  3 email 4 . username 5 password 


CREATE TABLE customers (
    id int(11) NOT NULL,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    username varchar(100) NOT NULL,
    password varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- create a sql for inserting two records 

INSERT INTO customers (name,email,username,password) VALUES ('James','James@gmail.com','Jam', 'password123');