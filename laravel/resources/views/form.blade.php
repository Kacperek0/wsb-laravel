<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <div class="content">
        <h1>User info</h1>
        <form action="FormController" method="post">
            {{ @csrf_field() }}
            <input type="email" name="email" placeholder="Podaj email"><br>
            <input type="text" name="address" placeholder="Podaj adres"><br>
            <input type="password" name="password" placeholder="Podaj hasło"><br><br>
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
