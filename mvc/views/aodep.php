<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ao dep</title>

    <style>
    div { padding: 50px; }
    #header, #footer {
        background-color: yellow;
    }
    </style>
</head>
<body>
    <div id="header">a</div>
    <div id="content">
        <?php require_once "./mvc/views/pages/".$data["pages"].".php"; ?>
    </div>
    <div id="footer">a</div>
</body>
</html>