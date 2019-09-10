@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('videos'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',old('link'),['class'=>'form-control','pattern'=>'https?://.+']) !!}
          <!-- <input type="url" pattern="https?://.+" required /> -->

     </div>
    

     <div class="form-group">
        {!! Form::label('img',trans('admin.videos')) !!}
        {!! Form::file('img',['class'=>'form-control img']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="img" class="image" src="{{ asset( 'storage/videos/No_Image.jpg')}} "   > 
     </div>
   
    
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

 <style type="text/css">
    
.image{
    width: 100px;
    height: 100px;
    border-radius: 50%;  
     /* text-align: center; */
    margin: auto;
 
}
 </style>

@endsection