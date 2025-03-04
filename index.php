<?php
    $default_theme = "light";   
    if(isset($_POST["theme"])) { 
        setcookie("user_theme", $_POST["theme"], time() + 3600, "/"); 
        header("Refresh:0"); // 1 hour expiration
    } if(isset($_POST["reset"])) {// set default theme
        setcookie("user_theme", $default_theme, time() + 3600, "/");
        header("Refresh:0"); // 1 hour expiration
    }
$current_theme = isset($_COOKIE["user_theme"]) ? $_COOKIE["user_theme"] : $default_theme;
?>
<html>
    <body style="background-color: <?php echo $current_theme=='dark'?'#333':'#fff'; ?>;
    color: <?php echo $current_theme=='dark'?'#fff':'#000'; ?>;">
    <h2>Select theme</h2>
    <form method="post">
        <button type="submit" name="theme" value="light">Light</button>
        <button type="submit" name="theme" value="dark">Dark</button>
        <button type="submit" name="reset">Reset to default</button>
    </form>
    <p>Current theme: <?php echo ucfirst($current_theme); ?></p>
    </body>
</html>