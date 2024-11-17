<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Recipient email
    $to = "unknowninvester04@gmail.com";
    $subject = "New Order for Waterproof Shirt";

    // Email body
    $message = "
    <html>
    <head>
        <title>New Order for Waterproof Shirt</title>
    </head>
    <body>
        <p>You have received a new order for a waterproof shirt.</p>
        <table>
            <tr>
                <th>Name:</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>$address</td>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <td>$phone</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    // Set content-type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: webmaster@yourdomain.com" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Order placed successfully!";
    } else {
        echo "Error in sending email. Please try again.";
    }
}
?>
