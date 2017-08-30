<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Create a list!</title>
</head>
<body>
    <div class="container">
        <h1>Fill in your name and your friend's name to create your custom greeting!</h1>

        <form action="index.php">
            <div class="form-group">
                <label for="friend_name">Your friend's name</label>
                <input id="friend_name" name="friend_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="your_name">Your name</label>
                <input id="your_name" name="your_name" class="form-control" type="text">
            </div>
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
</body>
</html>
