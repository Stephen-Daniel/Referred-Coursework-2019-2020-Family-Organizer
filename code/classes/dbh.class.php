
<?php

class Dbh {
    
    private $host;
    private $user;
    private $pwd;
    private $dbName;
    //private $charset;
    
    
    public function connect() {
 
    $this->host = 'proj-mysql.uopnet.plymouth.ac.uk';
    $this->user = 'ISAD251_SDaniel';
    $this->pwd = 'ISAD251_22201615';
    $this->dbName = 'isad251_sdaniel';
    //$this->charset = 'utf8mb4';
    
    
    $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
    
    
     
    }
    
}


