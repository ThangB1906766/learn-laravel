<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(){
        // Chạy đầu tiên
        // Kiểm tra quyền login
    }
    public function index(){
        return 'Danh sách';
    }
}
