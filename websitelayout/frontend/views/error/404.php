<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 36px;
        }
        p {
            font-size: 18px;
            margin-top: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="" alt="Error Image">
        <h1>Oops! Something went wrong.</h1>
        <p>We apologize for the inconvenience. The page you're looking for may have been moved or doesn't exist.</p>
        <p>Please try again later or <a href="/">go back to the homepage</a>.</p>
    </div>
</body>
</html>


<div style="height: auto;width: 100%;border: 2px solid black; background: white; ">
	<h1>404 Page Not Found</h1>
	<h4>request url dose not find ?search=<?php echo basename($_SERVER['REQUEST_URI']); ?></h4>
	<a href="<?php echo basename($_SERVER['REQUEST_URI']); ?>">BACK TO HOME</a>


</div>