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
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message!</div>

                <div class="name-details">
                    <div class="field input">
                        <label for="firstname">First name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="First name">

                    </div>
                    <div class="field input">
                        <label for="lastname">Lastname name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Last name">
                    </div>
                </div>

                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="image">Upload Avatar</label>
                    <input type="file" id="image" name="image" placeholder="Upload your avatar">
                </div>
                <div class="field button">
                    <button type="submit" name="submit">Register your account</button>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>

    </div>
    <script src="javascript/password_show_hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>