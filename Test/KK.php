<html>
    <body>
        
    <form method="post">
        <label for="name">Enter your name</label>
        <input type="text" name="name"><br>
        <label for="age">Enter your age</label>
        <input type="number" name="age"><br>
        <button type="submit">SUBMIT</button>
    </form>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];

    echo "<strong>" .$name."is $age years old. </strong>";
    

    ?>
    </body>
</html>