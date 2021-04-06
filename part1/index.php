<?php
$num = 10;
echo nl2br('$num = '.$num."\n");
$str = '10';
echo nl2br('$str = '.$str."\n");
echo nl2br('$num+$str = '.$num+$str."\n");
echo nl2br('$num.$str = '.$num.$str."\n");
echo nl2br('($num == $str) = '.(($num == $str) ? 'true' : 'false')."\n");
echo nl2br('($num === $str) = '.(($num === $str) ? 'true' : 'false')."\n");
$str_arr = explode(' ','Hello world from PHP');
foreach ($str_arr as $value) {
    echo nl2br("$value\n");
}
$str = implode(' ', $str_arr);
echo nl2br($str."\n");
$hash_arr = ['e' => 1, 'h' => 2, 'l' => 3, 'o' => 4];
foreach ($hash_arr as $key => $value) {
    echo nl2br("'$key' = $value\n");
}
$sum = 'num';
$$sum = 0;
foreach (str_split('hello') as $value) {
    $$sum += $hash_arr[$value];
}
echo nl2br('hello = '.$$sum."\n");

class classA {
    public $varA;
    public function __construct($var = 0) {
        $varA = $var;
        echo nl2br('Constructing A: $varA = '.$varA."\n");
    }

}

class classB extends classA {
    public $varB;
    public function __construct($varA = 0, $var = 0) {
        parent::__construct($varA);
        $varB = $var;
        echo nl2br('Constructing B: $varB = '.$varB."\n");
    }
}

class singleton {
    private static $inst = null;
    private function __constructor() {
        echo nl2br('Creating singleton');
    }
    static public function getInstance() {
        if (is_null(self::$inst)) {
            self::$inst = new self();
        }
        return self::$inst;
    }
}

$a = new classA();
$b = new classB(1, 1);
$singl1 = singleton::getInstance();
$singl2 = singleton::getInstance();
if ($singl1 === $singl2) {
    echo nl2br("This is the same object\n");
} else {
    echo nl2br("These are different objects\n");
}
?>