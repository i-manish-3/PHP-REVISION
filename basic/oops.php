<?php

class class1{

    function __construct()
    {
        echo "__construct".'<br>';
    }
    function test()
    {
        echo "Class_1<br>";
    }

    function __destruct()
    {
        echo "__destruct";
    }
}
$obj = new class1();
$obj->test();
?>