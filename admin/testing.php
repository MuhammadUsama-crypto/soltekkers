<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea', // Replace all textarea elements with TinyMCE
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            height: 300, // Set the height of the editor
        });
    </script>
</head>
<body>
    <!-- Your admin panel content -->
    <form method="post" action="testing.php">
        <label for="wordTextarea">Word-like Textarea:</label>
        <textarea id="wordTextarea" value="hewllo word" name="wordTextarea"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the content of the textarea
    $wordTextareaContent = $_POST["wordTextarea"];
    echo  $wordTextareaContent;


    // Process the content as needed
    // ...
}
?>
