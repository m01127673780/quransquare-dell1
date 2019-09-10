@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('testimonial'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('head_ar',trans('admin.name_ar')) !!}
        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('name_en',trans('admin.name_en')) !!}
        {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
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
        {!! Form::label('job_ar',trans('admin.job_ar')) !!}
        {!! Form::text('job_ar',old('job_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('job_en',trans('admin.job_en')) !!}
        {!! Form::text('job_en',old('job_en'),['class'=>'form-control']) !!}
     </div>
    <div class="form-group">
        {!! Form::label('country_ar',trans('admin.country_ar')) !!}
        {!! Form::text('country_ar',old('country_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('country_en',trans('admin.country_en')) !!}
        {!! Form::text('country_en',old('country_en'),['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('img',trans('admin.testimonial')) !!}
        {!! Form::file('img',['class'=>'form-control img']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="img" class="image" src="{{ asset( 'storage/testimonial/No_Image.jpg')}} "   > 
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