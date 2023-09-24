<?php
function on_register($conn)
{
    $name = htmlspecialchars(trim($_POST['name']));
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($pass)) {
        $arr = [];
        if (empty($name)) $arr["name"] = "Must not be empty.";
        if (empty($email)) $arr["email"] = "Must not be empty.";
        if (empty($pass)) $arr["password"] = "Must not be empty.";
        return [
            "ok" => 0,
            "field_error" => $arr
        ];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [
            "ok" => 0,
            "field_error" => [
                "email" => "Invalid email address."
            ]
        ];
    }

    if(strlen($pass) < 4){
        return [
            "ok" => 0,
            "field_error" => [
                "password" => "Must be at least 4 characters."
            ]
        ];
    }

    $sql = "SELECT `email` FROM `users` WHERE `email` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if(mysqli_stmt_num_rows($stmt) !== 0){
        return [
            "ok" => 0,
            "field_error" => [
                "email" => "This Email is already registered."
            ]
        ];
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name,$email,$pass);
    $is_inserted = mysqli_stmt_execute($stmt);
    if($is_inserted){
        return [
            "ok" => 1,
            "msg" => "You have been registered successfully.",
            "form_reset" => true
        ];
    }
    return [
        "ok" => 0,
        "msg" => "Something going wrong!"
    ];
}
