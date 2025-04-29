<?php
require_once(__DIR__ . '/../app_config/config.php');

class DBConnect {
    private static $connection;

    public static function connect() {
        if (self::$connection === null) {
            $config = DB_CONFIG; 
            self::$connection = new mysqli(
                $config['HOST'],     
                $config['USER'],    
                $config['PASSWORD'], 
                $config['DBNAME'],   
                $config['PORT']      
            );

            if (self::$connection->connect_error) {
                die("Помилка з'єднання з базою даних: " . self::$connection->connect_error);
            }
        }

        return self::$connection;
    }
}
?>


