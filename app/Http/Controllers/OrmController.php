<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Routing\Controller;
 use App\Models\areas;
 
 class OrmController extends Controller{
    public function index() {
        $areas = areas::find(1);
 
        return $areas;
    }

 }