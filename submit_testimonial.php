<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the testimonial text from the form
    $testimonialText = $_POST['testimonialText'];

    // Validate if testimonial text is not empty
    if (!empty($testimonialText)) {
        // Sanitize the input (optional, depending on your requirements)
        $testimonialText = htmlspecialchars($testimonialText);

        // Open the file to append the testimonial
        $file = 'testimonials.txt';
        $current = file_get_contents($file);

        // Append the new testimonial to the file
        $current .= $testimonialText . "\n";

        // Write the contents back to the file
        file_put_contents($file, $current);

        // Optionally, you can redirect back to the testimonials page or show a success message
        header('Location: index.html');
        exit;
    } else {
        // If testimonial text is empty, redirect back to the testimonials page
        header('Location: index.html');
        exit;
    }
}
?>
