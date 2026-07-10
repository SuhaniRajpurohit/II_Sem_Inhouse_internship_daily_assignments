<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: register.php");
    exit();
}

$username = htmlspecialchars(trim($_POST['username'] ?? ''));
$email    = htmlspecialchars(trim($_POST['email'] ?? ''));
$college  = htmlspecialchars(trim($_POST['college'] ?? ''));
$branch   = htmlspecialchars(trim($_POST['branch'] ?? ''));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 col-md-6">
        <div class="alert alert-success" role="alert">
            Registration Successfully Completed!
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><?php echo $username; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>College</th>
                <td><?php echo $college; ?></td>
            </tr>
            <tr>
                <th>Branch</th>
                <td><?php echo $branch; ?></td>
            </tr>
        </table>

        <a href="register.php" class="btn btn-secondary">Back to Form</a>
    </div>
</body>
</html>