<?php
if(isset($_POST["submit"])){
    $regNo = $_POST["regNo"];
    $quiz = $_POST["quiz"];
    $exam = $_POST["exam"];
    $class = $_POST["text"];
    $total = $quiz + $exam;
}

?>
   

<html>
    <body>
        
    <p>Your Entered data are:</p>
    <table border="1">
        <tr>
            <th>RegNo</th>
            <th>Quiz</th>
            <th>Exam</th>
            <th>Class</th>
            <th>Total</th>
        </tr>
        <tr>
            <td><?php echo $regNo ?></td>
            <td><?php echo $quiz ?></td>
            <td><?php echo $exam ?></td>
            <td><?php echo $class ?></td>
            <td><?php echo $total ?></td>
        </tr>
        
    </table>

</body>
</html>