<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM users
                    WHERE username = '%s'",
                   $mysqli->real_escape_string($_POST["id"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if ($_POST["pw"] === $user["password"]) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <section class="box">
        <div class="design">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="form">
            <h2>Mentor Login</h2>
    <form method="post">
        <label for="User Name">username</label>
        <input type="text" name="id" id="id"
               value="<?= htmlspecialchars($_POST["id"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="pw" id="pw">
        
        <button>Log in</button>
    </form>
    
</body>
</html>








