<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!--بيخلي الصفحة تقدر تعرض أي لغة-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ربط Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--  html بال  cssربط ملف ال -->
     <link rel="stylesheet" href="css/app.css">

    <title>Home</title>
    <style>
        body{
            background-image: url('{{ asset("/imgs/background1.jpg")}}');
            background-color: beige;
        }
        .title{
            color: brown;
            background-color: ;
            margin: 0.50em; /**/
            font-size: 100px;  /*حجم الخط */
            text-align: center;
        }

        form{/*ده حاويه كبيره عطيناها مكان عشان كل الي فيها يكونو في نفس  السطر */
            float:left;
            padding: 70px;
            color: brown;
            font-size: 20px;
        }
        .port{
            font-size:20px;
        }
        
    </style>

</head>

<body>
    <h1 class="title">login</h1>

    <!-- login for admin --> 
    <form class="admin" action="admin.blade.php" method="post"> 
        <h2 style="text-align:center; font-size:50px;">Admin</h2>
        <p class="port">
            Name:<input type = "text" name="name"><br><br>
            Password:<input type = "text" pass="pass"><br><br>
            <input type="submit" style="font-size:30px; color: brown;"> 
        </p>

    <!-- المفروض السطر ده هيكون في الكنترولر --> 
    <!-- <a style="font-size:30px; color:brown" href="http://localhost/todo-list/public/admin"><button>submit</button> </a> -->
    </form>
    


    <!-- login for user -->
    <form class="user" action="user.blade.php" method="post"> 
        <h2 style="text-align:center; font-size:50px;">User</h2>
        <p class="port">
            UserName:<input type = "text" name="name"><br><br>
            Password:<input type = "text" pass="pass"><br><br>
            <input type="submit" style="font-size:30px; color: brown;">
        </p>
    <!-- المفروض السطر ده هيكون في الكنترولر--> 
    <!-- <a href="http://localhost/todo-list/public/user"><button>submit</button> </a>--> 
    </form>

</body>
</html>