<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <title>稻香学习添加数据laravel</title>
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
            <div class="panel-heading">添加用户数据</div>
            <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group has-feedback">
                            <label  class="col-sm-2 control-label">
                                名 字
                            </label>
                            <div class="col-sm-10 ">
                                <input type="text"  class="form-control " name="name" id=""> 
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                            </div>
                        </div>
                        <div class="form-group">
                                <label  class="col-sm-2 control-label">
                                    年 龄
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="age" class="form-control" id="">
                                </div>
                        </div>
                        <div class="form-group">
                                <label  class="col-sm-2 control-label">
                                    地 区
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="addr" class="form-control" id="">
                                </div>
                        </div>
                        <div class="form-group">
                                <label  class="col-sm-2 control-label">
                                    备 注
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="other" class="form-control" id="">
                                </div>
                        </div>
                        <div class="form-group">
                                <label  class="col-sm-2 control-label">
                                    图 标
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="img" class="form-control" id="">
                                </div>
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
                                <input type="submit" class="btn btn-primary" value="提交">
                            </div>
                        </div> 
                    </form>
            </div>
        </div>
    
   
</body>
</html>