<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css"
        integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            padding: 0;
        }

        body {
            margin: 0;
            font-family: "Open Sans", sans-serif;
        }

        .fullscreen-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100vw;
            background: linear-gradient(53deg, rgba(25, 191, 203, 1) 6%, rgba(188, 81, 218, 1) 61%);

        }

        .login-container {
            width: 50%;
            max-width: 400px;
            min-width: 300px;
            padding: 50px 25px 20px;
            background: white;
            border-radius: 10px;
        }

        .header {
            text-align: center;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 50px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-size: .8rem;
        }

        .input-group input {
            font-size: .9rem;
            padding: 10px;
            border: none;
            outline: none;
            border-bottom: 2px solid hsl(0, 0%, 83%);
        }

        .input-group input:focus {
            box-shadow: 0 0 0 1px hsl(178, 100%, 50%);
            border-bottom: 2px solid hsl(0, 0%, 83%, 0%);
        }

        .button {
            margin: 20px 0;
            padding: 10px 0;
            border-radius: 25px;
            border: none;
            outline: none;
            cursor: pointer;
            background: linear-gradient(53deg, rgba(25, 191, 203, 1) 6%, rgba(188, 81, 218, 1) 73%);
            color: white;
            font-size: 1rem;
        }

        .button:focus {
            box-shadow: 0 0 0 1px hsl(178, 100%, 50%);
        }

        .signup-header {
            text-align: center;
            font-weight: 200;
            font-size: .9rem;
            margin-top: 75px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-list {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .social-links {
            text-decoration: none;
        }

        .fa-brands {
            font-size: 1.75rem;
        }

        .fa-facebook {
            border-radius: 50%;
            background: white;
            color: #435892;
        }

        .fa-twitter {
            border-radius: 50%;
            padding: px;
            color: #4AA0E8;
            background-color: white;
        }

        .fa-google {
            color: #D64E44;
        }
    </style>
</head>

<body>
    <div class="fullscreen-container">
        <div class="login-container">
            <h1 class="header">Login</h1>
            <form method="POST" action="<?php echo base_url(); ?>/login" class="form">

                <div class="input-group">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" placeholder="Type your nip">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Type your password">
                </div>
                <button class="button">Login</button>
            </form>

            <h3 class="signup-header">Or signup using</h3>

            <div class="social-icons">
                <ul class="social-list">
                    <li class="social-links"><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="social-links"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="social-links"><a href=""><i class="fa-brands fa-google"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>
