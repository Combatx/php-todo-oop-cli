<?php

namespace View {

    use Service\TodolistService;
    use Helper\inputHelper;

    class TodolistView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodoList(): void
        {
            while (true) {
                $this->todolistService->showTodoList();

                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = inputHelper::input('Pilih');

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai jumpa kembali";
        }

        function addTodoList(): void
        {
            echo "Menambah TODO" . PHP_EOL;

            $todo = inputHelper::input("Todo (x untuk batal)");
            if ($todo == "x") {
                echo "Batal menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodoList($todo);
            }
        }
        function removeTodoList(): void
        {

            echo "Menghapus TODO" . PHP_EOL;

            $todo = inputHelper::input("Nomor (x untuk batal)");
            if ($todo == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($todo);
            }
        }
    }
}
