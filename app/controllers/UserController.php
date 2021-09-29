<?php
namespace App\Controllers;
use App\Models\Users;

class UserController{
    function index(){
        return "UserController -> index()";
    }
    function edit(){
        if (isset($_POST['btnSubmit'])) {
            $id = $_GET['id'];
            // $tmp_name = $_FILES['upload']['tmp_name'];
            // $name = $_FILES['upload']['name'];
            // $tmp_size = $_FILES['upload']['size'];
            $users = Users::find($id);

        // if ($tmp_size > 0) {
        //     $path = "./image";
        //     move_uploaded_file($tmp_name, "./image/".$name); 
        //     $avatar = $path .'/'. $name;
        // }else{
        //     $avatar = $users->avatar;
        // }


        $users->id = $_POST['btnSubmit'];
        $users->name = $_POST['name'];
        $users->email = $_POST['email'];
        $users->address = $_POST['address'];
        $users->birth_date = $_POST['birth_date'];
        $users->avatar = 'vvv';
        $users->save();

        header('location: ./index.php');
        }else{
            $id = $_GET['id'];
            $users = Users::find($id);
            require_once('./app/views/edit.php');
        }
    }
};

?>