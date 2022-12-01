<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

use Entity\Todolist;
use Respository\TodolistRespositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodoList(): void
{
    $todolistRepository = new TodolistRespositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajar OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar Database");
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function testAddTodoList(): void
{
    $todolistRepository = new TodolistRespositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodoList();
}

function testRemoveTodoList(): void
{
    $todolistRepository = new TodolistRespositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodoList();

    $todolistService->removeTodolist(1);
    $todolistService->showTodoList();

    $todolistService->removeTodolist(4);
    $todolistService->showTodoList();

    $todolistService->removeTodolist(2);
    $todolistService->showTodoList();

    $todolistService->removeTodolist(1);
    $todolistService->showTodoList();
}

// testShowTodoList();
testRemoveTodoList();
