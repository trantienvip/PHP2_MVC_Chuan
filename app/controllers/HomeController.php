<?php
namespace App\Controllers;
use App\Models\Users;

class HomeController extends BaseController{
  public function index(){
    $this->render('home.index', ['title' => 'Trang Chủ']);
    // $this->render('home.index', compact('users','title'));
  }
  public function user(){
    $users = Users::all();
    $this->render('home.about', ['users' => $users, 'title' => 'Danh sách thành viên']);
  }
}


 ?>