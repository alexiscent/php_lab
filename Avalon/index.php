<?php
session_start();
class pages {
    private static $inst = null;
    private $list = ['main.php', 'container.php', 'info.php', 'auth.php'];
    private function __constructor() {

    }
    static public function getInstance() {
        if (is_null(self::$inst)) {
            self::$inst = new self();
        }
        return self::$inst;
    }
    public function __get($name) {
        $page = $_GET[$name];
        $page = strip_tags($page);
        $page = htmlspecialchars($page);
        if (in_array($page, $this->list)) {
            return $page;
        } else {
            return 'main.php';
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Philosopher&family=Roboto+Slab:wght@300;400;500&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap-grid.css">
</head>
<body>
<?php require "header.php"?>
<?php require pages::getInstance()->page?>
<?php require "footer.php"?>
</body>
</html>