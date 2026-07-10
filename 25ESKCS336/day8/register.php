<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   
</head>
<body>
    <div class="container mt-5 col-md-6">
    <h1>Registration Form</h1><br></br>
    <form action="index.php" method="post">

         <div class="mb-3">
         <label for="username">Name:</label>
         <input type="text" name="username" placeholder="Enter your name" class="form-control" required>
         </div>  

         <div class="mb-3">    
         <label for ="email">Email:</label>
         <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
         </div>

         <div class="mb-3">
         <label for="college">College:</label>
         <input type="text" name="college" placeholder="Enter your college" class="form-control" required>
         </div>

         <div class="mb-3">
         <label for='branch'>Branch:</label>
         <input type="text" name="branch" placeholder="Enter your branch" class="form-control" required>
         </div>

         <div class="mb-3">
         <input type="submit" value="Submit" class="btn btn-primary w-100" name="submit" required>
         </div>

    </form>
    </div>
</body>
</html> 