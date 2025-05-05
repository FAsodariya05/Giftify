<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Orders View</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>📋 Submitted Orders</h1>
    <nav><a href="index1.html">← Back to Home</a></nav>
  </header>

  <section class="form-section">
    <h2>Order List</h2>
    <pre style="white-space: pre-wrap;">
<?php
  $file = "orders.txt";
  if (file_exists($file)) {
    echo htmlspecialchars(file_get_contents($file));
  } else {
    echo "No orders yet.";
  }
?>
    </pre>
  </section>
</body>
</html>
