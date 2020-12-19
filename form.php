<?php

if (isset($_POST['submit'])){
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if (isset($_POST['gender'])) {
        $gender= $_POST['gender'];
    }
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
    }
    if (isset($_POST['languages'])) {
        $languages = $_POST['languages'];
    }
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    }
    if (isset($_POST['tc'])) {
        $tc = $_POST['tc'];
    }
  
} 

    printf('User name: %s 
    <br>Password: %s
    <br>Gender: %s
    <br>Color: %s
    <br>Language(s): %s
    <br>Comments: %s
    <br>T&amp;C: %s',
    htmlspecialchars($name, ENT_QUOTES),
    htmlspecialchars($password, ENT_QUOTES),
    htmlspecialchars($gender, ENT_QUOTES),
    htmlspecialchars($color, ENT_QUOTES),
    htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
    htmlspecialchars($comments, ENT_QUOTES),
    htmlspecialchars($tc, ENT_QUOTES));
?>

<form action="" method="post">
    User name: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    Gender: <input type="radio" name="gender" value="f"> Female
    <input type="radio" name="gender" value="m"> Male
    <input type="radio" name="gender" value="o"> Other<br>
    Favorite Color :
    <select name="color" id="">
        <option value="">Please Select</option>
        <option value="#f00">Red</option>
        <option value="#0f0">Green</option>
        <option value="#00f">Blue</option>
    </select><br>
    Languages Spoken:
    <select name="languages[]" id="">
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="it">Italian</option>
    </select><br>
    Comments: <textarea name="comments" id="" cols="30" rows="10"></textarea><br>
    <input type="checkbox" name="tc" value="ok">I accept the T&amp;C<br>
    <input type="submit" name="submit" value="Register">
</form>