<?php 
    # example xx$pagexx is valid too!!!
    function isRouter (string $page ): bool {
        return (strpos($GLOBALS['route'], $page) !== false);
    }

    function requireOnce($fileName) {
        require_once __DIR__ . '/..' . $fileName;
    }
?>