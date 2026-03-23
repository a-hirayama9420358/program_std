<?php
echo 'Loaded ini: ' . php_ini_loaded_file() . "<br>";
echo 'extension_dir: ' . ini_get('extension_dir') . "<br>";
echo 'PHP Version: ' . PHP_VERSION . "<br><br>";

echo 'extension_loaded("pdo"): ' . (extension_loaded('pdo') ? 'true' : 'false') . "<br>";
echo 'extension_loaded("pdo_mysql"): ' . (extension_loaded('pdo_mysql') ? 'true' : 'false') . "<br><br>";

echo 'PDO::getAvailableDrivers(): ';
try {
    print_r(PDO::getAvailableDrivers());
} catch (Throwable $e) {
    echo 'ERR: ' . $e->getMessage();
}