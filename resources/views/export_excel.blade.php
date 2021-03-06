<!DOCTYPE html>
<html>
 <head>
  <title>Export Data to Excel in Laravel using Maatwebsite</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Export Student Data to Excel in Laravel using Maatwebsite</h3><br />
   <div align="center">
    <a href="{{ route('export_excel.export') }}" class="btn btn-success">Export to Excel</a>
   </div>
   <a href="{{ route('home') }}" class="btn btn-success">Home</a>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td>Student Name</td>
      <td>E-Mail</td>
      <td>FaceBook</td>
      <td>Mobile</td>
     </tr>
     @foreach($student_data as $student)
     <tr>
      <td>{{ $student->name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->fb }}</td>
      <td>{{ $student->mobile }}</td>
     </tr>
     @endforeach
    </table>
   </div>
   
  </div>
 </body>
</html>