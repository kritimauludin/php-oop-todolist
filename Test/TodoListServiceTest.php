<?php

require_once __DIR__ . "/../Entitiy/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(): void {
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todoList[1] = new TodoList("Belajar PHP");
    $todolistRepository->todoList[2] = new TodoList("Belajar PHP-OOP");
    $todolistRepository->todoList[3] = new TodoList("Belajar PHP-Database");

    $todoListService = new TodoListServiceImpl($todolistRepository);

    $todoListService->showTodoList();
}

function testAddTodoList(): void {
    $todolistRepository = new TodoListRepositoryImpl();
    
    $todoListService = new TodoListServiceImpl($todolistRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    $todoListService->showTodoList();
}

function testRemoveTodoList(): void {
    $todolistRepository = new TodoListRepositoryImpl();
    
    $todoListService = new TodoListServiceImpl($todolistRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    $todoListService->showTodoList();
    
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(4);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();
}

// testAddTodoList();
// testShowTodoList();
testRemoveTodoList();