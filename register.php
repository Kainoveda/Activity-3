<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style type="text/css">
       *  
       body {
            background: linear-gradient(to right, #3494e6, #ec6ead);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        .container h1 {
            color: #3494e6;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            color: #555;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background: #f5f5f5;
            color: #333;
        }

        .form-group input:focus {
            border: 1px solid #3494e6;
            outline: none;
        }

        .form-group button {
            background: #3494e6;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #2178a3;
        }

        .sign-in-link {
            text-align: center;
            margin-top: 20px;
        }

        .sign-in-link a {
            color: #3494e6;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
<script defer src="./script.js"></script>
</head>
<body>
    <div class="container">
       <form action="registersubmit.php" method="POST" class="box" id="form">
            <div class="signcon">
                <h1 class="text">Sign up</h1>
            </div>
            <div class="input-control">
                <label for=""class="fname">First Name</label><label for="" class="lname">Last Name</label><br>
                <input type="text" name="firstname" class="nameInp" placeholder="First Name" id="fname">
                <input type="text" name="lastname" class="nameInp" placeholder="Last Name" id="lname"><br>
            </div>
            <div class="input-control">
                <label for="" class="label">Email</label><br>
                <input type="text" name="email" class="input" placeholder="Email Address" id="email"><br>
            </div>
            <div class="input-control">
                <label for="" class="label">Username</label><br>
                <input type="text" name=username class="input" placeholder="Username" id="uname"><br>
            </div>
            <div class="input-control">
                 <label for="" class="label">Password</label><br>
                <input type="password" name=password class="input" placeholder="Password" id="pass"><br>
            </div>
            <div class="input-control">
                <label for="" class="label">Confirm Password</label><br>
                <input type="password" name="conpassword" class="input" placeholder="Confirm Password" id="conpass"><br>
            </div>
             <h5 class="sign">Already have an account? <a href="login.php">Sign in</a></h5>
         <button type="submit" name="submit"class="button" id='submit'>Register</button>
       </form>
    </div>
</body>
</html>