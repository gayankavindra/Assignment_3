<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
//use Maatwebsite\Excel\Excel;
use Excel;
//use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{
    //
    function index()
    {
     $student_data = DB::table('students')->get();
     return view('export_excel')->with('student_data', $student_data);
    }

    function excel()
    {
     $student_data = DB::table('students')->get()->toArray();
     $student_array[] = array('Student Name', 'E-Mail', 'FaceBook', 'Mobile');
     foreach($student_data as $student)
     {
      $student_array[] = array(
       'Student Name'  => $student->name,
       'E-Mail'   => $student->email,
       'Facebook'    => $student->fb,
       'Mobile'  => $student->mobile,
       
      );
     }
     Excel::download('Student Data', function($excel) use ($student_array){
      $excel->setTitle('Student Data');
      $excel->sheet('Student Data', function($sheet) use ($student_array){
       $sheet->fromArray($student_array);
      });
     })->download('xls');
    }
}
