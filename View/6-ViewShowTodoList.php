<?php

require_once __DIR__ . "/../Model/2-TodoList.php";
require_once __DIR__ . "/../BusinessLogic/3-ShowTodoList.php";
require_once __DIR__ . "/../View/7-ViewAddTodoList.php";
require_once __DIR__ . "/../View/8-ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/12-Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
