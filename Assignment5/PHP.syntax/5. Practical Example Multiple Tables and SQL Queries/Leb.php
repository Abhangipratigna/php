<?php

// CREATE
CREATE TABLE employees (
    employee_id INT PRIMARY KEY, first_name VARCHAR(50),
    last_name VARCHAR(50), department_id INT,
    salary DECIMAL(10, 2), hire_date DATE,
    FOREIGN KEY (department_id) REFERENCES departments(department_id));

// INSERT
INSERT INTO employees (employee_id, first_name, last_name, department_id, salary, hire_date)
VALUES
(1, 'John', 'niraj', 1, 50000.00, '2020-01-15'),
(2, 'Jane', 'krish', 1, 55000.00, '2019-03-23'),
(3, 'Alice', 'mihir', 2, 60000.00, '2021-07-01'),
(4, 'Bob', 'Ajay', 3, 80000.00, '2018-11-10'),
(5, 'Charlie', 'mahi', 3, 85000.00, '2017-08-15'),
(6, 'Diana', 'jay', 4, 45000.00, '2022-06-07');


// SELECT
SELECT e.first_name, e.last_name, d.department_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id;

// UPDATE
UPDATE employees
SET salary = 60000
WHERE first_name = 'John' AND last_name = 'niraj';

// DELETE
DELETE FROM employees
WHERE employee_id = 6;

// INSERT
INSERT INTO employees (employee_id, first_name, last_name, department_id, salary, hire_date)
VALUES (7, 'Eve', 'pratigna', 2, 65000.00, '2023-02-10');

// WHERE
SELECT first_name, last_name, salary
FROM employees
WHERE salary > 70000;

// LIKE
SELECT first_name, last_name
FROM employees
WHERE last_name LIKE 'S%';

// GROUP BY
SELECT d.department_name, AVG(e.salary) AS avg_salary
FROM employees e
JOIN departments d ON e.department_id = d.department_id
GROUP BY d.department_name;

// HAVING 
SELECT d.department_name, AVG(e.salary) AS avg_salary
FROM employees e
JOIN departments d ON e.department_id = d.department_id
GROUP BY d.department_name
HAVING AVG(e.salary) > 60000;

// LIMIT
SELECT first_name, last_name
FROM employees
LIMIT 3;

// OFFSET
SELECT first_name, last_name
FROM employees
LIMIT 3 OFFSET 3;

// AND
SELECT first_name, last_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE d.department_name = 'Sales' AND e.salary > 50000;

// OR
SELECT first_name, last_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE d.department_name = 'Marketing' OR e.salary < 50000;

// NOT
SELECT first_name, last_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE NOT d.department_name = 'HR';

// IN
SELECT first_name, last_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE d.department_name IN ('Sales', 'Engineering');


?>