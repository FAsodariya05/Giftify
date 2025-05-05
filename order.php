<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $giftType = $_POST['gift_type'];
    $recipient = $_POST['recipient_name'];
    $message = $_POST['message'];
    $date = date("Y-m-d H:i:s");

    // Handle file upload
    $imagePath = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $imagePath = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    }

    // Save order to a file (or you could use a database)
    $data = "[$date] | $giftType | $recipient | $message | $imagePath\n";
    file_put_contents("orders.txt", $data, FILE_APPEND);

    echo "<script>alert('Order submitted successfully!'); window.location.href='index1.html';</script>";
}
?>
