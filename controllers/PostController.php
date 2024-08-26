<?php

require_once 'models/Post.php';

class PostController {
    public $model;

    public function __construct() {
        $this->model = new Post();
        session_start();
    }
    public function index() {
        $posts = $this->model->all();
        // var_dump($posts);
        require 'views/posts/index.php';
        
    }

   public function show() {
        $id = $_GET['id']; 
        $post =  $this->model->find($id);
        // var_dump($post);
        // die();
        require_once 'views/posts/show.php';
    }  
    public function edit()
    {
        $id = $_GET['id'];
        $post = $this->model->find($id);
        require_once 'views/posts/edit.php';
    }  
    public function update()
    {
        $id = $_GET['id'];
        $post = $this->model->find($id);
        $newTitle = $_POST['title'];
        $newContent = $_POST['content'];
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $image_path = 'uploads/';
            $newFile = $_FILES['image']['name'];
            $newImage = $image_path . $newFile;
            if(move_uploaded_file($_FILES['image']['tmp_name'],$newImage)){
                if(file_exists($post['image'])){
                    unlink($post['image']);
                }
                $post['image'] = $newImage;
            }
        }
        $data = [
            'title' => $newTitle,
            'content' => $newContent,
            'image' => $post['image']
        ];
        $this->model->update($id, $data);
        header("Location: /posts");
        exit;
    }
    public function delete(){
        $id = $_GET['id'];
        $post = $this->model->find($id);
        if($post && $post['id'] == $id){
            $this->model->delete($id);
            if(file_exists($post['image'])){
                unlink($post['image']);
            }
        }
        header("Location: /posts");
        exit;
    }
    public function mainCreate(){
        require_once 'views/posts/create.php';
    }
    public function create() {
        $title =$_POST['title'];
        $content =$_POST['content'];
        $author_name = $_SESSION['user'] ['name'];
        if(!empty ($title)&& !empty($content) && isset($_FILES['image'])&& $_FILES['image']['error']===UPLOAD_ERR_OK)
        {
            $image = $_FILES['image']['name'];
            $image_path = 'uploads/'.basename($image);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $image_path))
            {
                $data = [
                    'title' => $title,
                    'content' => $content,
                    'author_name' => $author_name,
                    'image' => $image_path
                ];
                $this->model->create($data);
                header("Location: /posts");
                exit;
            }
            
        }
    }
}
