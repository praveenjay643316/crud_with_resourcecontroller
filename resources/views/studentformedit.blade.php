<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Post</title>
      <style>
         body {
         background: #f7f7f7;
         }
         .form-box {
         max-width: 500px;
         margin: auto;
         padding: 50px;
         background: #ffffff;
         border: 10px solid #f2f2f2;
         }
         h1, p {
         text-align: center;
         }
         input, textarea {
         width: 100%;
         }
      </style>
   </head>
   <body>
      <div class="form-box">
         <h1>UPDATE  DETAILS</h1>
         <form  action="{{action('StudentController@update', $id )}}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
               <input type="hidden" name="id" value="{{$students->id}}">
               <label for="name">Name</label>
               <input class="form-control"  type="text" name="name" value = "{{$students->name}}" >
            </div>
            <div class="form-group">
               <label for="name">Cousre</label>
               <input class="form-control"  type="text" name="course" value = "{{$students->course}}" >
            </div>
            <div class="form-group">
               <label for="name">City</label>
               <input class="form-control"  type="text" name="city" value = "{{$students->city}}" >
            </div>
            <div class="form-group">
               <label for="name">Mobile</label>
               <input class="form-control"  type="text" name="mobile" value = "{{$students->mobile}}" >
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" />
      </div>
      </form>
      </div>
      </form>
   </body>
</html>