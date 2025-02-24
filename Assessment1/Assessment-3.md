``` SQL

create table products (pro_id(4), pro_name varchar(40), pro_price float,pro_code int (4));

create table products (pro_id int(4), pro_name varchar(40), pro_price float,pro_code int (4));

insert into products values
(101, "Mother Board", 3200.00, 15),ORDER BY pro_price desc, pro_name asc;

SELECT pro_name, pro_price FROM products ORDER BY pro_price asc limit 1;

SELECT AVG(pro_price) AS average_price from products;

SELECT AVG(pro_price) AS average_price, pro_code from products;

SELECT sum(pro_price) AS Total_price from products;

```