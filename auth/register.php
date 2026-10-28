<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .form-container {
            max-width: 1100px;
            width: 90%;
            margin: 30px auto;
        }

        .form-container form {
            margin: auto;
        }

        .input-group {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }

        .input-group label {
            width: 140px;

        }

        .input-group input {
            width: 230px;
            padding: 6px;
        }

        button[type='submit'] {
            background-color: royalblue;
            padding: 6px 20px;
            border: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Register Your Account</h2>
        <form action="" method="post">
            <div class="input-group">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" name="fullname">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</body>

</html>