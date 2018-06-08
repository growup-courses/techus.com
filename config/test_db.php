<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
<<<<<<< HEAD
$db['dsn'] = 'mysql:host=165.227.135.96;dbname=techus_test';
=======
$db['dsn'] = 'mysql:host=127.0.0.1;dbname=techus_test';
>>>>>>> f61f6ce7840c80a7a89d6c56cf2efa0e4766a481

return $db;
