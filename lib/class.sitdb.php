<?php
/**
 * Substance Information Tool Database Model
 *
 * @author Harry Staszewski
 */
class SitDb {
    //Private static property to contain class instance
    private static $db_instance;
    
    private $pdo;
    
    private function __construct() {
        self::$db_instance = new PDO();
    }
    
    public function getInstance() {
        if (!self::$db_instance)
        {
            self::$db_instance = new self();
        }
        
        return self::$db_instance;
    }
}

?>
