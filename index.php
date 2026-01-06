<html lang="en">

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    Welcome <?php echo htmlspecialchars($_POST["name"] ?? ''); ?><br>
    Your email is: <?php echo htmlspecialchars($_POST["email"] ?? ''); ?><br>
<?php endif; ?>
</body>
</html>