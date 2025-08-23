<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <title>hi</title>

    <style>
        body {
            background-image: url('{{ asset("/imgs/background1.jpg")}}');
            background-color: beige;
            box-sizing: border-box;
        }

        h1 {
            color: black;
            text-align: center;
            font-size: 150px;
        }

        p {
            color: black;
            font-size: 100px;
            text-align: center;
            padding: 50px;
        }

        .parent {            
            display:grid;
            text-align: center;
            grid-template-columns: auto auto;
            grid-template-rows: auto auto;
            padding:10px;
            row-gap: 20px  ;
            column-gap: 20px;
        }

        .rad {
            text-align: center;
            width:450px;
            color: black;
            font-size: 70px;
            float: left;
            background-color: brown;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <p>Are you an Admin or a User?</p>

    <div class="parent">
        <div class="rad">
            <input id="admin" type="radio" name="os"  value="admin">
            <label for="admin">Admin</label>
        </div>

        <div class="rad">
            <input id="user" type="radio" name="os" value="user">
            <label for="user">User</label>
        </div>
    </div>
</body>
</html> 