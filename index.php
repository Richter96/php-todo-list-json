<?php

/* con json_encode stampo a schermo l'array todo_list in una stringa json */
/* $todo_list = [
    [
        'list_object' => 'fare la spesa',
    ],
    [
        'list_object' => 'portare a spasso i cani',
    ],
    [
        'list_object' => 'fare la spesa',
    ]
];
header('Content-Type: application/json'); */
// echo json_encode($todo_list)

// dichiaro con una variabile la la stringa di json, e con file_get_contents, leggo la stringa contenuta nel file.
$todo_list_string = file_get_contents('todoList.json');
var_dump($todo_list_string);

// tramite json_decode() trasformiamo una stringa json in una variabile php, in questo caso in un array
$todo_list = json_decode($todo_list_string, true);

echo '<pre>';
var_dump($todo_list);
echo '<pre>';

//con array push possiamo aggiungere elementi all'array
array_push($todo_list, ['list_object' => 'fare il bagno al cane']);
var_dump($todo_list);

//ritrasformiamo di nuovo l'array con il push in una stringa json per poi sovrasfrivere il file json
$new_todo_list_string = json_encode($todo_list);
var_dump(($new_todo_list_string));

//tramite file_put_contents, possiamo andare a scrivere all'interno di un file
file_put_contents('todoList.json', $new_todo_list_string);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Todo List PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1 class="text-center"> TODO LIST PHP</h1>
    </header>
    <main>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>