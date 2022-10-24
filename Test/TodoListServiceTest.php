<?php

require_once __DIR__ . "/../Entitiy/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(): void
{
    $connection  = \Config\Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todolistRepository);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    $todoListService->showTodoList();
}

function testAddTodoList(): void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todolistRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    // $todoListService->showTodoList();
}

function testRemoveTodoList(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todolistRepository);

    echo $todoListService->removeTodoList(5) . PHP_EOL;
    echo $todoListService->removeTodoList(4) . PHP_EOL;
    echo $todoListService->removeTodoList(3) . PHP_EOL;
    echo $todoListService->removeTodoList(2) . PHP_EOL;
    echo $todoListService->removeTodoList(1) . PHP_EOL;
}

// testAddTodoList();
testShowTodoList();
// testRemoveTodoList();
