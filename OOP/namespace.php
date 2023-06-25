<?php

/* Namespace digunakan untuk membuat lebih dari 1 Claas dengan nama yang sama */

namespace Data\One{
    class Conflict{
        const WRITE = "BELAJAR PHP OOP";
    }
}
namespace Data\Two{
    class Conflict{
       public function helper(){
            echo "Help Me";
        }
    }
}
     

