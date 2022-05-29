

<?php

$name = 'World';

echo "Hello $name";

$names = [
    'John',
    'Doe',
    'Mary'
];

$person = [
    'age'=> '25',
    'hair'=> 'Black',
    'career'=> 'Software engineer'
];


// instantiate the database
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
} catch(PDOException $e) {
    die('Couldn\'t connect to the database');
}


$statement = $pdo->prepare('select * from todo');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';