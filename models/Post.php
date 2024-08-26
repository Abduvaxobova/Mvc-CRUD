<?php
require_once ("Model.php");
class Post extends Model
{
    public function __construct()
    {
        parent::__construct('posts'); // Pass the table name to the parent constructor
    }

    public function index(){
        require_once 'views/posts/index.php';
    }
    
    // Check if email exists
  
}