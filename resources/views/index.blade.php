<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach($users as $val)
        <tr>
            <td>Title - {{$val->title}}</td>
            <td>EmpId - {{$val->emp_id}}</td>
            <td>Progress - {{$val->progress}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>