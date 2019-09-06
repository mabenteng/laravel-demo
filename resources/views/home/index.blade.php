<!DOCTYPE html>
@include('home.head')
    <body>
    模版用法foreach<br>
@foreach ($data as $key=>$value)
@if($value->name=="稻香")
    {{$value->name}}---{{$value->age}}----{{$value->addr}}<br>
@endif
@endforeach
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </body>
</html>
