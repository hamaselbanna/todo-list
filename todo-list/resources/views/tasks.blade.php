<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
    <link rel="stylesheet" href="{{ asset ('css/tasks.css')}}">
</head>
<body >

    <h1>{{ $page_task }}</h1>

<!-- add tasks-->
 <form action="/tasks" method="POST">
    <!-- حمايه تقريبا :)-->
    @csrf

    <!-- add new task-->
    <input type="text" name="task" placeholder="add task">

    <!-- button for add task-->
    <button type="submit">submit task</button>
 </form><!-- لازم نضيفها للكنترولر عشان يحفظ البيانات->

</body>
</html>