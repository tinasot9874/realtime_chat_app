<?php
require_once "database.php";

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    // validation email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){  // if email is valid
        
        // check email already exist in the database
        $statement = $pdo->prepare('SELECT COUNT(email) FROM users WHERE email = :email ');
        $statement->bindValue(':email', "$email");
        $statement->execute();
        $result = $statement->fetchColumn();
        if($result == 1){
            echo "Email already exist!";
        }else{
           // check user upload image 
           if(isset($_FILES['image']['tmp_name'])){  // if file upload
            if (!is_dir(dirname(__DIR__).'/avatar_img')) {
                mkdir(dirname(__DIR__).'/avatar_img');
            }    
                $img_name = $_FILES['image']['name'];     

                $tmp_path = $_FILES['image']['tmp_name'];

                $img_type = $_FILES['image']['type']; // get type file
                
                $img_explode = explode('.', $_FILES['image']['name']);

                $img_ext = end($img_explode); // get extension of img file

                $extenstion = ['png', 'jpeg', 'jpg']; // set rule for valid of ext img file

                if(in_array( $img_ext, $extenstion) === true){ // if extension of image is upload matched with rule
                    
                    $time = time(); // get current time to change name file image upload
                    $session_id = rand(time(), 1000000);
                    $new_img_name = $time.$img_name;

                    //create new foldel path for img upload
                    $imagePath = '/avatar_img'. '/'. $new_img_name;

                    move_uploaded_file($tmp_path, dirname(__DIR__).$imagePath);
                    $status = 1; //set status on

                    $statement = $pdo->prepare('INSERT INTO users (session_id, fname, lname, email, password, image, status)
                                                VALUES (:session_id, :fname, :lname, :email, :password, :image, :status)');
                    
                    $statement->bindValue(':session_id', $session_id);
                    $statement->bindValue(':fname', $fname);
                    $statement->bindValue(':lname', $lname);
                    $statement->bindValue(':email', $email);
                    $statement->bindValue(':password', $password);
                    $statement->bindValue(':image', $imagePath);
                    $statement->bindValue(':status', $status);
                    if($statement->execute()){
                        $_SESSION['token_id'] = $session_id;
                        echo "success";
                    }else{
                        echo "Đăng ký thất bại";
                    }
                    

                }else{
                    echo "This file is not valid for upload!";
                }
                
           }else{
               echo "Image avatar is required!";
           }
        }
    
    }else{
        echo "$email - This is not a valid email!";
    }
}else{
    echo "All fields are required";
}


