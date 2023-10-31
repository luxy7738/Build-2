<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
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
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body style="background-image: url('pics/tea.jpg'); background-size: cover;">
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
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








