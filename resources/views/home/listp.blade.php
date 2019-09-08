<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>数据列表页</title>
</head>
<body>
        <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">用户列表页面</div>
                <div class="panel-body">
                        <table class='table'>
                            <tr>
                                <th>用户名</th>
                                <th>年龄</th>
                                <th>地区</th>
                                <th>介绍</th>
                                <th>头像</th>
                                <th>管理</th>
                            </tr>
                            @foreach ($data as $val)
                            <tr>
                                <td>{{$val->name}}</td>
                                <td>{{$val->age}}</td>
                                <td>{{$val->addr}}</td>
                                <td>{{$val->other}}</td>
                                <td><img src="{{$val->img}}" style="width:100px;height:100px; " class="img-circle" /></td>
                                <td><a href="{{url('xiugai')}}/{{$val->id}}">修改</a></td>
                            </tr>
                            @endforeach
                        </table>
                        {{$data->links()}}
                </div>
        </div>
    
    
</body>
</html>