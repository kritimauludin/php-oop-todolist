<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/addTodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todo" . PHP_EOL;
    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        echo "Batal Tambah" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
