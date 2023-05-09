<?php
$file_path = '../../../../todoList.json';


if (isset($_POST['new_item'])) {
    // creiamo l'elemento item come un array prendendo come text l'input dell'area,  
    $item = [
        'text' => $_POST['new_item'],
        'done' => false,
    ];

    //leggiamo il file json con file_get_contents
    $todo_list_string = file_get_contents($file_path);


    // convertiamo la stringa in un array associativo per php
    $todo_list_array = json_decode($todo_list_string, true);

    // var_dump($todo_list_array);

    // pushamo all'inizio dell'array la lista
    array_unshift($todo_list_array, $item);
    // var_dump($todo_list_array);

    // convertiamo l'array di nuovo in string jason
    $new_list_string = json_encode($todo_list_array);

    //push la nuova stringa di list in file json
    file_put_contents('todoList.json', $new_list_string);

    //aggiungiamo header
    header('Content-Type: application/json');
    // echo json
    echo $new_list_string;
}

/* 
$new_item = $_POST['new_item'];
header('Content-Type:application/json');

$item_list = json_decode($new_item, true);

var_dump($item_list);
echo ($new_item);
 */