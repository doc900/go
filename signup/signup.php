<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Signup</title>
    <?php require '/wamp64/www/Allsite/navbar/header.php'; ?>
    <?php require '/wamp64/www/Allsite/navbar/footer.php'; ?>
    <link rel="stylesheet" href="/signup/signup">
</head>
<body>
    <h1>Signup</h1>

    <form action="process-signup.php" method="POST" novalidate>

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button>signup</button>
    </form>
</body>
</html>