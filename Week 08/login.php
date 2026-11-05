<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>

        <?php include 'header.inc'; ?>

        <h1>Log In</h1>

        

        <form method="post" action="process.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <input type="hidden" name="token" value="abc123">
            <input type="submit" value="Login">
        </form>

        <?php include 'footer.inc'; ?>

        
    </body>

</html>