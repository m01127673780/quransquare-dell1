@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('whyus'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',old('head_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',old('head_en'),['class'=>'form-control']) !!}
     </div> 
         <div class="form-group">
        {!! Form::label('text_ar',trans('admin.text_ar')) !!}
        {!! Form::text('text_ar',old('text_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('text_en',trans('admin.text_en')) !!}
        {!! Form::text('text_en',old('text_en'),['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('color_diffe_ar',trans('admin.color_diffe_ar')) !!}
        {!! Form::text('color_diffe_ar',old('color_diffe_ar'),['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('color_diffe_en',trans('admin.color_diffe_en')) !!}
        {!! Form::text('color_diffe_en',old('color_diffe_en'),['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('icon',trans('admin.whyus')) !!}
        {!! Form::file('icon',['class'=>'form-control icon']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="icon" class="image" src="{{ asset( 'storage/whyus/No_Image.jpg')}} "   > 
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