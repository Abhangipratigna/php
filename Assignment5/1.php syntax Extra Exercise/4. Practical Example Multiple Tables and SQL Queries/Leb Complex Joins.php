<?php

// INNER JOIN: 
$sql_inner = "SELECT employees.name AS employee_name, departments.department_name
              FROM employees
              INNER JOIN departments ON employees.department_id = departments.department_id";

// LEFT JOIN:
$sql_left = "SELECT employees.name AS employee_name, departments.department_name
             FROM employees
             LEFT JOIN departments ON employees.department_id = departments.department_id";

// RIGHT JOIN:
$sql_right = "SELECT employees.name AS employee_name, departments.department_name
              FROM employees
              RIGHT JOIN departments ON employees.department_id = departments.department_id";


