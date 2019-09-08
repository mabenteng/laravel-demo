<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>修改数据数据laravel</title>
</head>
<body>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="panel panel-success">
                <!-- Default panel contents -->
                <div class="panel-heading">修改用户数据页面</div>
                <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">
                                    名 字
                                </label>
                                <div class="col-sm-10">
                                {{$data->name}}
                                </div>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-2 control-label">
                                        年 龄
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="age" value="{{$data->age}}" class="form-control" id="">
                                    </div>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-2 control-label">
                                        地 区
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="addr" value="{{$data->addr}}" class="form-control" id="">
                                    </div>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-2 control-label">
                                        备 注
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="other" value="{{$data->other}}" class="form-control" id="">
                                    </div>
                            </div>
                            
                            
                                
                            
                            <div class="form-group">
                                    
                                    <label  class="col-sm-2 control-label">
                                        图 标
                                    </label>
                                    @if (!empty($data->img))
                                    <div class="col-sm-5">
                                        <img src="{{ltrim($data->img,".")}}" width=100 height=100/>
                                    </div>
                                    <div class="col-sm-5">
                                            <input type="file" name="img" class="form-control" id="">
                                        </div>
                                    @else

                                    <div class="col-sm-10">
                                        <input type="file" name="img" class="form-control" id="">
                                    </div>
                                    @endif
                            </div>
                            
                            <div class="form-group">
                                    <label  class="col-sm-2 control-label">
                                        验证码
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="capt" class="form-control" id="">
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="{{captcha_src('mini')}}" onclick="this.src=this.src+'&k='+Math.random();">
                                    </div> 
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {{csrf_field()}}
                                    <input type="hidden" name="oldimg" value="{{$data->img}}">
                                    <input type="submit" class="btn btn-primary" value="提交">
                                </div>
                            </div> 
                        </form>
                </div>
            </div>

</body>
</html>