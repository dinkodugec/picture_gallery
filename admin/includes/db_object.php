<?php

class Db_object
{


    public static function find_all()
   
    {
       return self::find_this_query("SELECT * From "  . self::$db_table . " ");
    }

   
   
    public static function find_by_id($user_id)
   
    {
        global $database;
        /* $result_set = $database->query("SELECT * FROM users WHERE id = $user_id"); */
        $the_result_array = self::find_this_query("SELECT * From "  . self::$db_table . " WHERE id = $user_id");

        return !empty($the_result_array) ? array_shift($the_result_array) : false;   

    }

    
    public static function find_this_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array(); /*   put empty array to get objects in there */
        while($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantation($row);
        }
        return $the_object_array;
    }


    public static function instantation($the_record) // the record from database
    {
         $the_object= new self;
         /*
        $the_object->id = $found_user['id'];
        $the_object->username = $found_user['username'];
        $the_object->password = $found_user['password'];
        $the_object->first_name = $found_user['first_name'];
        $the_object->last_name = $found_user['last_name'];
 */
     foreach($the_record as $the_attribute=>$value){                 /* loops through this table, we get key and value out */
         if($the_object->has_the_attribute($the_attribute)){
            $the_object->$the_attribute = $value;
         }
     }
     return $the_object;
    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties =  get_object_vars($this);   /*  get_object_vars - built-in function used to get properties of given object */
        return array_key_exists($the_attribute, $object_properties);  /* The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist. */
    }


    
    




}




?>