<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <title>View Posts</title>
      <style>
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 60%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         tr:nth-child(even) {
         background-color: #dddddd;
         }
         .w-5{
         display:none;
         }
      </style>
   </head>
   <body>
      <a href="{{'/addstudents'}}" class="btn btn-primary">ADD POST</a>
      <table>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Course</th>
            <th>Mobile</th>
            <th>Actions(Edit)</th>
            <th>Actions(Delete)</th>
         </tr>
         @foreach($students as $student)
         <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->mobile}}</td>
            <td>
               <a href="{{ action('StudentController@edit', $student->id) }}" class="btn btn-success">EDIT</a>
            <th>
               <form  action="{{action('StudentController@destroy', $student->id)}}" method="post"> 
                  @csrf
                  {{ method_field('PUT') }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" name ="submit"  class="btn btn-success">DELETE</button>
               </form>
            </th>
         </tr>
         @endforeach
      </table>
   </body>
</html>