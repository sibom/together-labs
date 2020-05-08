<?php
 show_source("03.php");
   echo '<br>';
 error_reporting(0);
    require 'flag.php';
    include 'config.php';
    error_reporting(0);
    class db
    {
        public $where;
        function __wakeup()
        {
            if(!empty($this->where))
            {
            	 error_reporting(0);
                $this->select($this->where);
            }
        }
        function select($where)
        {    error_reporting(0);
            $sql = mysql_query('SELECT * FROM userinfo WHERE '.$where);
        
            return @mysql_fetch_array($sql);
           
        }
    }

    if(isset($_GET['token']))
    
    {
        $login = unserialize(gzuncompress(base64_decode($_GET['token'])));

        $db = new db();
        $row = $db->select('uname=\''.mysql_real_escape_string($login['uname']).'\'');
       

        if($login['uname'] === 'sibom')
        {
            echo $flag;
        }else if($row['pwd'] !== $login['pwd']){
            echo 'unserialize injection!!';
        }else{
            echo "fuck you!";
        }
        
    }else{
    
        header('Location: error.txt');
    }
mysql_close($con);
?> 