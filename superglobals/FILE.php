<html>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <label for="photo">Upload a picture</label>
            <input type="file" name="photo" id="photo"><br>
            <input type="submit" value="Click ME">
        </form>
        <?php
        if(isset($_FILES['photo'])){
        echo "The file name is: " . $_FILES['photo']['name']."<br>";
        echo "The file size in bytes is: ". $_FILES['photo']['size']."<br>";
        echo "The file temporary name is: ". $_FILES['photo']['tmp_name']."<br>";
        echo "The file type is: ". $_FILES['photo']['type']."<br>";
        echo "The upload error: ". $_FILES['photo']['error']."<br>";
        }
        ?>
    </body>
</html>