<?php
/**
 * Substance Information Tool
 * SIT User Class
 *
 * @author Harry Staszewski
 */

require_once("class.appsettings.php");
require_once("class.dbmanager.php");

class User {
    
    private $id;
    private $username;
    private $password;
    private $firstname;
    private $surname;
    private $email;
    
    function __construct($id = 0) {
        if ($id > 0) 
        {
            $this->id = $id;
            $this->getUser ();
        }
    }
    
    function getUser() {
        $appsettings = AppSettings::getInstance();
        $dbCon = DBManager::getDBDriver($appsettings->getDBDriver());
        
        $sql = "SELECT * FROM cb_user WHERE id = ? LIMIT 1";
        $result = $dbCon->execute($sql, array($this->id));
 
        foreach ($result as $row)
        {
            $this->username = $row['username'];
            $this->firstname = $row['firstname'];
            $this->surname = $row['surname'];
            $this->email = $row['email'];
        }
        
    }
    
}
?>
