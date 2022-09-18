<?php

require_once __DIR__ . "/../Entitiy/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    $todoListView->showTodoList();
}

function testViewAddTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    $todoListView->showTodoList();
    
    $todoListView->addTodoList();

    $todoListView->showTodoList();
}

function testViewRemoveTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP-OOP");
    $todoListService->addTodoList("Belajar PHP-Database");

    $todoListView->showTodoList();
    
    $todoListView->removeTodoList();

    $todoListView->showTodoList();
}

// testViewShowTodoList();
// testViewAddTodoList();
testViewRemoveTodoList();