<?php
/**
 * Substance Information Tool Database Driver Interface
 * 
 * @author Harry Staszewski
 */
interface DBDriver {
    public function connect();
    public function execute($sql);
}
?>
