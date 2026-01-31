<?php
    class Fruit
    {
        public $name;

        function Fruit($name)
        {
            $this->name = $name;
        }

        function taste()
        {
            echo "Fruit has a general taste.<br>";
        }
    }

    class Blueberry extends Fruit
    {
        function taste()
        {
            echo "Blueberry tastes sweet and slightly tangy.<br>";
        }
    }

    class Kiwi extends Fruit
    {
        function taste()
        {
        echo "Kiwi tastes sweet and sour.<br>";
        }
    }

    class Peach extends Fruit
    {
        function taste()
        {
            echo "Peach tastes sweet and juicy.<br>";
        }
    }

    $fruit1 = new Blueberry("Blueberry");
    $fruit2 = new Kiwi("Kiwi");
    $fruit3 = new Peach("Peach");

    $fruit1->taste();
    $fruit2->taste();

    echo $fruit3->name . ": ";
    $fruit3->taste();
?>
