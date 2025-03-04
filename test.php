<?php
   $cookie_name = "user";
   $cookie_value = "";
   setcookie($cookie_name, $cookie_value, time()-3600, "/"); // 86400 = 1 day
   ?>
   <html>
   <body>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie name not set ";
    }
    else{
        echo "Cookie is set";
    }
    ?>
    </body>
    </html>



