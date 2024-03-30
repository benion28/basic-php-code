<?php
    namespace app;

    class Router {
        public array $getRoutes = [];
        public array $postRoutes = [];
        public Database $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function get($url, $callbackFunction) {
            $this->getRoutes[$url] = $callbackFunction;
        }

        public function post($url, $callbackFunction) {
            $this->postRoutes[$url] = $callbackFunction;
        }

        public function resolve() {
            // $currentUrl = $_SERVER["PATH_INFO"] ?? "/"; // Previous Current URL
            $currentUrl = $_SERVER["REQUEST_URI"] ?? "/";

            if (strpos($currentUrl, "?") !== false) {
                $currentUrl = substr($currentUrl, 0, strpos($currentUrl, "?"));
            }

            $method = $_SERVER["REQUEST_METHOD"];
            $callbackFunction = null;

            if ($method === "GET") {
                $callbackFunction = $this->getRoutes[$currentUrl] ?? null;
            } else {
                $callbackFunction = $this->postRoutes[$currentUrl] ?? null;
            }

            if ($callbackFunction) {
                call_user_func($callbackFunction, $this);
            } else {
                echo "Page not Found";
            }
        }

        public function renderView($view, $params = []) {
            foreach ($params as $key => $value) {
                $$key = $value;
            }
            ob_start();
            include_once __DIR__."/views/$view.php";
            $content = ob_get_clean();
            include_once __DIR__."/views/_layout.php";
        }
    }
?>