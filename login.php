<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                
                <div class="field button">
                    <button type="submit">Register your account</button>
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="#">Signup now</a></div>
        </section>

    </div>
    <script src="javascript/password_show_hide.js"></script>
</body>

</html>