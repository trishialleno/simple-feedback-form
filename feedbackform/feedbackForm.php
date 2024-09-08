<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Feedback Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Feedback Form">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="result.php" class="position-absolute top-50 start-50 translate-middle border border-dark rounded-4 p-5" onsubmit="return validateForm()">
            <h1 class="mb-5">Feedback Form</h1>
            <label for="txtname" class="form-label fw-bold">Your Name (optional):</label>
                <input type="text" class="d-block form-control" name="txtname" id="txtname">
            <label for="course" class="d-block form-label mt-3 fw-bold">Course Title:</label>
                <select name="course" class="form-select" required>
                    <option value="">Select a course</option>
                    <option value="PHP track">PHP track</option>
                    <option value="Web Fundamentals track">Web development track</option>
                    <option value="JavaScript track">JavaScript track</option>
                    <option value="Introduction track">Introduction track</option>
                    <option value="Communication track">Communication track</option>
                    <option value="Basic Algorithm track">Basic Algorithm track</option>
                </select>
            <label for="score" class="d-block form-label mt-3 fw-bold">Given Score (1-10):</label>
                <select name="score" class="form-select" required>
                    <option value="">Select a score</option>
                    <?php
                    for ($index=1; $index<=10; $index++){
                        echo "<option value=$index>$index</option>";
                    }
                    ?>
                </select>
            <label for="reason" class="d-block form-label mt-3 fw-bold">Reason:</label>
                <textarea id="reason" name="reason" class="form-control" required></textarea>
            <input type="submit" name="submit" id="submit" class="d-block btn btn-primary mt-3 position-relative bottom-0 start-50 translate-middle-x">
        </form>
        <script>
            function validateForm() {
                var course = document.getElementById("course").value;
                var score = document.getElementById("score").value;
                var reason = document.getElementById("reason").value;
                if (course == "") {
                    alert("Course title must be selected");
                    return false;
                }
                if (score == "") {
                    alert("Score must be selected");
                    return false;
                }
                if (reason == "") {
                    alert("Reason must be filled out");
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>
