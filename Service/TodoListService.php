<?php

namespace Service {

    use Entity\Todolist;
    use Respository\TodolistRespository;

    interface TodolistService
    {
        function showTodoList(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {
        private TodolistRespository  $todolistRepository;


        public function __construct(TodolistRespository $todolistRespository)
        {
            $this->todolistRepository = $todolistRespository;
        }

        function showTodoList(): void
        {

            echo "TodoList" . PHP_EOL;

            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "Success Menambah Todo List" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo 'GAGAL MENGHAPUS TODOLIST' . PHP_EOL;
            }
        }
    }
}
