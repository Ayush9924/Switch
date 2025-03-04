<?php
// $_COOKIE is a superglobal variable that holds all the cookies sent by the client
if(isset($_COOKIE["user"])) {
    echo "welcome," .$_COOKIE["user"];
} else {
    echo "welcome back";
}
