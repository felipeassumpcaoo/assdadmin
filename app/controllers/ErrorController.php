<?php

namespace app\controllers;

class ErrorController {
    public function notFound() {
        echo "Página não encontrada (404).";
        // Aqui você pode carregar um template ou uma página HTML mais bonita
    }
}
