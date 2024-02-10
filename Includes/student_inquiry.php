<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $district = $_POST["district"];
    $subdistrict = $_POST["subdistrict"];
    $pincode = $_POST["zip"];
    $message = $_POST["message"];

    $sql = "INSERT INTO leads (l_name, l_email, l_phone, l_state, l_district, l_subdistrict, l_pincode, l_message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssssss", $name, $email, $phone, $state, $district, $subdistrict, $pincode, $message);
        
        if ($stmt->execute()) {
            // Successful submission
            // You can redirect the user to a thank-you page or display a success message
            header("Location: ../index.php");
            exit;
        } else {
            // Handle error
            // You might display an error message or redirect the user to an error page
            echo "Error submitting the form.";
        }

        $stmt->close();
    }
}
?>
