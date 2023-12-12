<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Arial', sans-serif; background: url('images/loading.png') center center fixed no-repeat; ">

    <div id="loading-container" style="display: flex; align-items: center; position: fixed; left: -100%; width: 100%; height: 100%; ; z-index: 9999; animation: slideIn 1s ease-in-out forwards;">
        <img src="images/yarn-ball.png" alt="Yarn Roll" style="max-width: 25%; max-height: 25%; animation: spin 2s linear infinite;">
    </div>

    <!-- Your website content goes here -->

    <style>
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes slideIn {
            from {
                left: -100%;
            }
            to {
                left: 30%;
            }
        }
    </style>

    <script>
        // Use JavaScript to delay the redirection after 5 seconds
        setTimeout(function() {
            window.location.href = 'home.php';
        }, 5000);
    </script>
</body>
</html>
 