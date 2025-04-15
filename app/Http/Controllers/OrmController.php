<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Routing\Controller;
 use App\Models\areas;
 use App\Models\Aprendices;
    use App\Models\courses;
use App\Models\teachers;
use App\Models\training_centers;

 class OrmController extends Controller{
    public function index() {
       // $areas = areas::find(1);
        //return $areas;

       // $aprendices1 =aprendices::find(4);
        //return $aprendices1->computers;

        //$teachers = teachers::find(1);
        // return $teachers->areas;

      // $course = training_centers::find(2);
      //return $course->courses;
    }

 }