<?php

    class Car {

        var $wheels;
        var $color;

        // // Constructor
        // // We can also pass arguments to the constructor
        // function __construct(){
        //     $this->wheels = 6;
        //     $this->color = "red";
        // }


        // Passing argument to the constructor
        function __construct($wh,$co){
            $this->wheels = $wh;
            $this->color = $co;
        }

    }


    // $x = new Car();
    // echo $x->wheels . "<br>";
    // echo $x->color;

    $x = new Car(14,"pink");
    echo $x->wheels . "<br>";
    echo $x->color;

?>