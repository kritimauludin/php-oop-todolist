<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/showTodoList.php";
require_once __DIR__ . "/../View/viewAddTodoList.php";
require_once __DIR__ . "/../View/viewDeleteTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewDeleteTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak tersedia" . PHP_EOL;
        }
    }
    echo "Terima Kasih";
}
