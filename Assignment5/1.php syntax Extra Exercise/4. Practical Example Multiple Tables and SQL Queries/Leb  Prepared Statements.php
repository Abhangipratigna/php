<?php

// SELECT 
SELECT * FROM users where id=1; DROP TABLE users;

// INSERT
("INSERT INTO users (name, email) VALUES (:name, :email)");


// UPDATE
("UPDATE users SET name = :name WHERE id = :id");


// DELETE
("DELETE FROM users WHERE id = :id");

?>