<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/deleteTodoList.php";
function viewDeleteTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomer (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = deleteTodoList(($pilihan));
        if ($success) {
            echo "Sukses menghapus todo nomer $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomer $pilihan" . PHP_EOL;
        }
    }
}
