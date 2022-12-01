<?php

require_once __DIR__ . '/Entity/TodoList.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodoListService.php';
require_once __DIR__ . '/View/TodolistView.php';

use \Respository\TodolistRespositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

echo "Aplikasi Todolist" . PHP_EOL;
$todolistRepository = new TodolistRespositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodoList();
