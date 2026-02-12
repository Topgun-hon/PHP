<html>
    <head>
        <title>POST Method</title>
    </head>
    <body>        
         <form method="POST">
            <label for="name">Enter the name</label>
            <input type="text" name="username" id="name">
            <input type="submit" value="submit">
        </form>
        <?php
            if(isset($_POST['username'])){
                echo $_POST['username'];
                
            }else{
                echo "No Entered name";
            }
        ?>
    </body>
</html>