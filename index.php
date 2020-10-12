<?php

# Clase 7 Probamos el proyecto

require __DIR__ . '/vendor/autoload.php';
echo "Test de Dirección de Correo: ";
var_dump(App\Validate::email('edwar@gmail.com'));

echo "<br>";


echo "Test de URL: ";
var_dump(App\Validate::url('https://platzi.com'));

echo "<br>";


echo "Test de Password: ";
var_dump(App\Validate::password('qwerty7785'));
