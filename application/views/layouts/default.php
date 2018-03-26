<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<h3><a href="http://artjoker/">на главную</a></h3>

<div class="container">
    <?php echo $content; ?>
</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="/public/js/js.js"></script>
<script src="/public/js/addUser.js"></script>
</body>
</html>