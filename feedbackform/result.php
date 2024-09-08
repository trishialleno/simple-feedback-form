<?php
if(isset($_POST['submit'])){
    $txtname = $_POST['txtname'];
    $course = $_POST['course'];
    $score = $_POST['score'];
    $reason = $_POST['reason'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Submitted Entry</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Submitted Entry of Feedback Form">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="feedbackForm.php" class="position-absolute top-50 start-50 translate-middle border border-dark rounded-4 p-5">
            <h1 class="mb-5">Submitted Entry</h1>
            <label for="txtname" class="form-label fw-bold">Your Name (optional):</label>
                <input readonly class="form-control-plaintext" class="d-inline-block form-control" name="txtname" value="<?= $txtname ?>">
            <label for="course" class="d-block form-label mt-3 fw-bold" >Course Title:</label>
                <input readonly class="form-control-plaintext" class="d-inline-block form-control" name="course" value="<?= $course ?>">
            <label for="score" class="d-block form-label mt-3 fw-bold">Given Score (1-10):</label>
                <input readonly class="form-control-plaintext" class="d-inline-block form-control" name="score" value="<?= $score ?>">
            <label for="reason" class="d-block form-label mt-3 fw-bold">Reason:</label>
                <input readonly class="form-control-plaintext" class="d-inline-block form-control" name="reason" value="<?= $reason ?>">
            <input type="submit" value="Return" id="return" class="d-block btn btn-primary mt-3 position-relative bottom-0 start-50 translate-middle-x">
        </form>
    </body>
</html>