<?php

/* 
// dichiaro con una variabile la la stringa di json, e con file_get_contents, leggo la stringa contenuta nel file.
$todo_list_string = file_get_contents('todoList.json');
var_dump($todo_list_string);

// tramite json_decode() trasformiamo una stringa json in una variabile php, in questo caso in un array
$todo_list = json_decode($todo_list_string, true);

echo '<pre>';
var_dump($todo_list);
echo '<pre>';

// con json_encode stampo a schermo l'array todo_list in una stringa json
$todo_list = [
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
header('Content-Type: application/json');
// echo json_encode($todo_list)


//con array push possiamo aggiungere elementi all'array
array_push($todo_list, ['list_object' => 'fare il bagno al cane']);
var_dump($todo_list);

//ritrasformiamo di nuovo l'array con il push in una stringa json per poi sovrasfrivere il file json
$new_todo_list_string = json_encode($todo_list);
var_dump(($new_todo_list_string));

//tramite file_put_contents, possiamo andare a scrivere all'interno di un file
file_put_contents('todoList.json', $new_todo_list_string);
 */

?>

<!doctype html>
<html lang="en">

<head>
    <title>Todo List PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <div id="app">
        <header>
            <h1 class="text-center"> TODO LIST PHP</h1>
        </header>
        <main>
            <div class="col-5 text-center m-auto">
                <input type="text" v-model="new_item_list" @keyup.enter="add_item" placeholder="Inserisci un nuovo elemento">
            </div>
            <div class="card col-4 my-3 listItems">
                <ul class="list-group list-group-flush mx-5">
                    <li :class="list.done ? 'text-decoration-line-through' : ''" class="list-group-item list-group-item-action d-flex justify-content-between" v-for="(list, index) in lists_todo" @click="complet_task(index)">
                        <p class="m-0">
                            {{ list.text }}
                        </p>
                        <a class="trash" href="">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>

    </div>

















    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- cdn axsios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- cdn vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>
</body>

</html>