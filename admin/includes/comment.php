<?php

use Comment as GlobalComment;

class Comment extends Db_object
{
    protected static $db_table_fields = array('id', 'photo_id', 'author', 'body');
    protected static $db_table = "comments";
    public $id;
    public $photo_id;
    public $author;
    public $body;
    

}

 public static function create_comment($photo_id, '$author="John Do", $body="")
{

     if(!empty($photo_id) && !empty($author) && !empty($body)){
         $comment = new Comment();
         $comment->photo_id = $photo_id;
         $comment->author = $author;
         $comment->body = $body;

         return $comment;

     }else{
       return false;
     }


}






?> 