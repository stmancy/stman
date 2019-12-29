<?php
    require "header.php";
?>

<main>
    <h1>Signup</h1>
    <?php
        if (isset($_GET["error"]))
        {
            if($_GET['error'] == "emptyFields")
            {
                echo '<p>Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "userTaken") 
            {
                echo '<p>Username taken!</p>';
            }
            else if ($_GET['error'] == "wrongpwd") 
            {
                echo '<p>Invalid password!</p>';
            }
            else if ($_GET['error'] == "sqlerror") 
            {
                echo '<p>Sql error!</p>';
            }
        }
        else
        {
            if($_GET['signup'] == "success")
            {
                echo '<p>Signup successful!</p>';
            }
        }
    ?>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup">Signup</button>
    </form>
</main>

<?php
    require "footer.php";
?>