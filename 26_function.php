<?php
//function adalah blok kode
function sayHello(){
   echo "Hello selamat datang" . PHP_EOL;
}

sayHello();

//function dengan parameter  atau argumen
function sebutNama($name = "Anonymous"){
    echo "Selamat datang $name, semoga anda diberi keberkahan" . "\n";
}

sebutNama("Naufal");
sebutNama("Janaja");
sebutNama();

