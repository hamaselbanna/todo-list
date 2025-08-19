<!DOCTYPE html>
<html lang="en"><!--the lang => doc. language-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--  عشان نكتب متغيرات لازم نعمل قوسين  داخل بعض -->
    <title>admin</title>

    <style>
        body{
            background-image: url('{{ asset("/imgs/background1.jpg")}}');
            background-color: beige;
        }

        h1{
            color: brown;
            text-align: center;
            font-size: 50px;
        }

        .row{
            color: brown;
            font-size: 30px;
            border-radius: 40px;
            border-color: brown;
            border-bottom: black;
        }
    </style>

</head>
<body>

    <h1>Admin Page</h1><br>

    <?php 
        $adminname ="hamas";    
        $username1 ="zehra";
        $username2 ="yasin";
        $username2 ="nour";
        $username2 ="abdurahman";
    ?>

    <div class="row">

        <div class="col-sm-6"><p>left side</p></div>

        <div class="col-sm-6"><p>right side</p></div>

    </div>
</body>
</html>