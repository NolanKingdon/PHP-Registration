<?PHP

if(!defined('__CONFIG__')){
    exit('You do not have a config file');
    //Should probably re-direct here instead of the exit message
}

class DB {
    
    protected static $con;
    
    private function __construct() {
        
        try {
            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=php_registration_db', 'root', '' );
            //TODO - change from root
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        } catch (PDOException $e) {
            echo $e;
            exit;
        }
        
    }
    
    public static function getConnection() {
        //Try to make a connection if there is not one already
        if (!self::$con){
            new DB();
        }
        //Return the DB connection if it exists
        return self::$con;
    }
    
}


?>