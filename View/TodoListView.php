<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView {

        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void {

            while (true) {
                $this->todoListService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;
        
                $pilihan = InputHelper::input("Pilih");
        
                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } elseif ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak tersedia" . PHP_EOL;
                }
            }
            echo "Terima Kasih";
        }

        function addTodoList(): void {
            echo "Menambah Todo" . PHP_EOL;
            $todo = InputHelper::input("Todo (x untuk batal) ");
        
            if ($todo == "x") {
                echo "Batal Tambah" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($todo);
            }
        }

        function removeTodoList(): void {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomer (x untuk batal)");

            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList(($pilihan));
            }
        }
    }
}