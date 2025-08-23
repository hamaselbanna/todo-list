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
        body {
            background-image: url('{{ asset("/imgs/background1.jpg")}}');
            background-color: beige;
        }

        .title {
            color: brown;
            background-color: ;
            margin: 0.50em;
            /**/
            font-size: 100px;
            /*حجم الخط */
            text-align: center;
        }

            

        .port {
            font-size: 20px;
        }
    </style>

</head>

<body>
    <h1 class="title">login</h1>

    <!-- login for admin -->
    <form class="admin" action="admin.blade.php" method="post">
        <h2 style="text-align:center; font-size:50px;">Admin</h2>
        <p class="port">
            <label>Name:</label><!--input descriptions-->
            <input type="text" placeholder="Name"><br><br>
            <label>Email:</label>
            <input type="email" placeholder="email"><br><br>
            <label>Password:</label>
            <input type="password" required placeholder="Password"><br><br>
            <input type="submit" style="font-size:30px; color: brown;">
        </p>

        <!-- المفروض السطر ده هيكون في الكنترولر -->
        <!-- <a style="font-size:30px; color:brown" href="http://localhost/todo-list/public/admin"><button>submit</button> </a> -->
    </form>



    <!-- login for user -->
    <form class="user" action="user.blade.php" method="post"><!--طريقه الارسال -->
        <h2 style="text-align:center; font-size:50px;">User</h2>
        <p class="port">
            <label>Name:</label><!--input descriptions-->
            <input 
                type="text" 
                placeholder="Name" 
                name="name" 
                autofocus><br><br>

            <label>Email:</label>
            <input 
                type="email" 
                placeholder="email" 
                name="mail"><br><br>

            <label>Password:</label>
            <input 
                type="password" 
                required 
                placeholder="Password" 
                name="pass" minlength="6" 
                maxlength="15"><br><br>

            <label>Number:</label>
            <input 
                type="number" 
                min="10" 
                max="100" 
                step="5"><br><br>

            <label>range:</label>
            <input 
                type="range" 
                min="10" 
                max="100" 
                step="5" 
                value="20"><br><br>
                <div>
                <input id="win" type="checkbox" name="windows">
                <label for="win">windows:</label>
            </div>
            <div>
                <input id="mac" type="checkbox" name="mac">
                <label for="mac">mac:</label>
            </div>
            <div>
                <input id="lin" type="checkbox" name="linux">
                <label for="lin">linux:</label>
            </div><br>
                
            <label>color:</label>
            <input type="color"><br><br>          

            <input type="submit" style="font-size:30px; color: brown;">
        </p>
        <!-- المفروض السطر ده هيكون في الكنترولر-->
        <!-- <a href="http://localhost/todo-list/public/user"><button>submit</button> </a>-->
    </form>

</body>

</html>