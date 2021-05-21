<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="jumbotron">
            <div class="col-md-6">
               <h1> Insert data using resource controller</h1>
            </div>
            <form action="{{ action('StudentController@store' )}}" method="post">
               {{csrf_field()}}
               <div class="form-group">
                  <label  class="form-label">NAME</label>
                  <input  type="text" class="form-control" name ="name" >
               </div>
               <div class="form-group">
                  <label  class="form-label">COURSE</label>
                  <input type="text" class="form-control" name ="course" >
               </div>
               <div class="form-group">
                  <label  class="form-label">CITY</label>
                  <input type="text" class="form-control"  name ="city">
               </div>
               <div class="form-group">
                  <label  class="form-label">MOBILE NUMBER</label>
                  <input type="text" class="form-control" name ="mobile" >
               </div>
               <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      </div>
   </body>
</html>