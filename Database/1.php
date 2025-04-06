<?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $first_name = $_POST["first"];
        $last_name = $_POST["last"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        // $password = $_POST["password"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        try{
            require_once "database.php";

            $query = "SELECT COUNT(*) FROM users WHERE username = ? OR email = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $email]);

            if ($checkStmt->fetchColumn() > 0) {
                $_SESSION['error'] = "Username or email already exists.";
                header("Location: ../signup/index.php");
                exit;
            }            

            $query = "INSERT INTO users (first_name, last_name, username, email, password) values(?, ?, ?, ?, ?);";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$first_name, $last_name, $username, $email, $password]);



            $stmt = NULL;
            $pdo = NULL;

            header("Location: ../index.html");
            die();
            
        } catch (PDOException $error) {
            $_SESSION['error'] = "Something went wrong. Please try again.";
            header("Location: ../signup/index.php");
            exit;
        }        
    }
    else{
        header("Location: ../signup/index.php");
        die();
    }