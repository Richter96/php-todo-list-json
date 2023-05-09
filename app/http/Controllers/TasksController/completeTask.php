<?php
$file_path = '../../../../todoList.json';


if (isset($_POST['index_item'])) {

    $index = $_POST['index_item'];

    //leggiamo il file json con file_get_contents
    $todo_list_string = file_get_contents($file_path);

    // convertiamo la stringa in un array associativo per php
    $todo_list_array = json_decode($todo_list_string, true);

    // var_dump($todo_list_array);

    // prendiamo il valore di done dell'array in posiizone index
    $todo_list_array[$index]['done'] = !$todo_list_array[$index]['done'];

    // convertiamo l'array di nuovo in string jason
    $new_list_string = json_encode($todo_list_array);

    //push la nuova stringa di list in file json
    file_put_contents($file_path, $new_list_string);

    //aggiungiamo header
    header('Content-Type: application/json');
    // echo json
    echo $new_list_string;
}
