@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('stat'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('number',trans('admin.number')) !!}
        {!! Form::number('number',old('number'),['class'=>'form-control','pattern'=>'number']) !!}
      </div>  
       <div class="form-group">
        {!! Form::label('font_awesome',trans('admin.font_awesome')) !!}
        {!! Form::text('font_awesome',old('font_awesome'),['class'=>'form-control']) !!}
      </div>
       <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',old('head_ar'),['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',old('head_en'),['class'=>'form-control' ]) !!}
      </div>
     

     <div class="form-group">
        {!! Form::label('img',trans('admin.stat')) !!}
        {!! Form::file('img',['class'=>'form-control img']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="img" class="image" src="{{ asset( 'storage/stat/No_Image.jpg')}} "   > 
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