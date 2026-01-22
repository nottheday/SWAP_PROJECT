<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #eeeeee;
            font-family: Arial, sans-serif;
            background-image: url('amc1.png');
            background-repeat: no-repeat;
        }

        .container {
            background-color: #ffffff;
            width: 400px;
            height: 400px;
            margin: 200px 70px auto auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px -3px #333;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 5px;
        }

        .message-box {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        form {
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            border-radius: 100px;
            padding: 10px 15px;
            width: 80%;
            border: 1px solid #D9D9D9;
            outline: none;
            display: block;
            margin: 30px auto;
        }

        input:focus {
            border-color: #719BE6;
        }

        .sign {
            border-radius: 100px;
            border: none;
            background: #719BE6;
            width: 80%;
            padding: 10px;
            color: #FFFFFF;
            margin-top: 25px;
            box-shadow: 0 2px 10px -3px #719BE6;
            display: block;
            margin: 25px auto 10px auto;
            cursor: pointer;
            font-size: 16px;
        }

        .sign:hover {
            background: #5a82c7;
        }

        .btn-group {
            border: none;
            width: 50%;
            color: #FFFFFF;
            margin: auto auto 10px auto;
            cursor: pointer;
            font-size: 20px;
            padding: 10px;
            display: block;
        }

        .staffbtn:hover {
            background: #5a82c7;
        }

        .adminbtn:hover {
            background: red;
        }
    </style>

</head>
<body>
<div class="container">
  <!-- Login Form-->
  <h2>Sign In</h2>
  <div class="btn-group">
    <button type="button" class="staffbtn">Staff</button>
    <button type="button" class="adminbtn">Admin</button>
 </div>
  <form method="post" action="login.php">
   <input type="text" name="username" placeholder="Username" required>
   <input type="password" name="password" placeholder="Password" required>
   <button type="submit" class="sign">Sign in</button>
  </form>
</div>
</body>
</html>