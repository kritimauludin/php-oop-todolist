<?php
require_once "../View/viewAddTodoList.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../BusinessLogic/addTodoList.php";


addTodoList("Kriti");
addTodoList("Mauludin");
viewAddTodoList();
showTodoList();
