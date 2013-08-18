<?php
/**
 * Substance Information Tool
 * Application Controller
 *
 * @author Harry Staszewski
 */

require_once("class.appsettings.php");
require_once("class.dbmanager.php");

class SitApp {
    private $settings;
    private $db_driver;
    
    public function __construct()
    {
        $this->settings = AppSettings::getInstance();
        $this->settings->saveSettings();
        $this->db_driver = DBManager::getDBDriver($this->settings->getDBDriver());
        
    }
    
    
}

?>
