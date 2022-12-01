<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\Todolist;
use \Respository\TodolistRespositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist()
{
    $todolistRepository = new TodolistRespositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Belajar PHP');
    $todolistService->addTodolist('Belajar PHP OOP');
    $todolistService->addTodolist('Belajar PHP Database');

    $todolistView->showTodoList();
}


function testViewAddTodolist()
{
    $todolistRepository = new TodolistRespositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Belajar PHP');
    $todolistService->addTodolist('Belajar PHP OOP');
    $todolistService->addTodolist('Belajar PHP Database');

    $todolistService->showTodoList();

    $todolistView->addTodoList();

    $todolistService->showTodoList();

    $todolistView->addTodoList();

    $todolistService->showTodoList();
}

function testViewRemoveTodolist()
{
    $todolistRepository = new TodolistRespositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Belajar PHP');
    $todolistService->addTodolist('Belajar PHP OOP');
    $todolistService->addTodolist('Belajar PHP Database');

    $todolistService->showTodoList();

    $todolistView->removeTodoList();

    $todolistService->showTodoList();

    $todolistView->removeTodoList();

    $todolistService->showTodoList();
}

testViewRemoveTodolist();
