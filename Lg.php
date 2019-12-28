<?php

// doing more than name space in the same file not best practise

namespace Lg {
    class CreatePhone
    {
        public $name;
        public function sayHello()
        {
            echo 'hello from lg company <br>';
        }
    }
}

namespace Lg\vip\products {
    class CreatePhone
    {
        public $name;
        public function sayHello()
        {
            echo 'hello from lg company VIP <br>';
        }
    }
}
