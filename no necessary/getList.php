<?php

// dichiaro con una variabile la la stringa di json, e con file_get_contents, leggo la stringa contenuta nel file.
$todo_list_string = file_get_contents('todoList.json');
// var_dump($todo_list_string);

header('Content-Type:application/json');

echo $todo_list_string;
