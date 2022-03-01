<?php 

    $a = "HaDuc";
    $b = "Hello $a";

    echo $b . "<br>";



    echo "<=== cục bộ ===><br>";
    $x = 5;
    function cuc_bo()
    {
        $x = 0;
        echo "Value of x inside function cuc_bo is: " . $x . "<br>";
    }

    cuc_bo();
    echo "Value of x outside function cuc_bo is: " . $x . "<br>";



    echo "<=== toàn cục ===><br>";
    function toan_cuc()
    {
       global $x;
       $x = 0;
       echo "Value of x outside function toan_cuc is: " . $x . "<br>";
    }

    toan_cuc();
    echo "Value of x outside function toan_cuc is: " . $x . "<br>";

    echo "<=== biến static ===><br>";

    function static_test()
    {
        static $s = 0;
        $s++;
        echo $s."<br>";
    }

    // for ($i=0; $i < 100; $i++) { 
    //     static_test();
    // }
    static_test();
    static_test();
    static_test();

    DEFINE("PI",3.14);
    echo PI;
 ?>