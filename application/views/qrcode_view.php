<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate QR Code</title>
</head>
<body>
    <form method="post" action="<?php echo base_url('qrcode1/generate'); ?>">
        <label for="data">Enter Data:</label>
        <input type="text" name="data" id="data" required>
        <button type="submit">Generate QR Code</button>
    </form>
</body>
</html>
