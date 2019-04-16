<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="practice_post.php" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        Addess in Japam:<br>
        <input type="text" name="address"><br>
        About Myself: <br>
        <textarea type="text" name="about_myself"></textarea><br>
        Gender:<br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        <input type="submit">
    </form>
</body>
</html>