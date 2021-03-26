<?php
require_once "database.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    
    // check user
    $statement = $pdo->prepare("SELECT * FROM users WHERE email=:email AND password=:password ");
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();

    $isMatch = $statement->rowCount();

    if ($isMatch == 1) {
        $user = $statement->fetch();
        $_SESSION['token_id'] = $user['session_id'];
        echo "success";

    } else {
        echo "Login fails! Please check email and password again";
    }




    //     $_SESSION['token_id'] = $session_id;


} else {
    echo "All fields are required";
}
