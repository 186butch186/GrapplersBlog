<?php
//@Author Michael Butchko
//This page includes functions used to server side validate the users input


//validates the users email if they bypass the javascript
function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};

//validates the users name which should only be text
function isName($name) {
    return preg_match('/^[a-zA-Z\s]*$/', $name);
};

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
