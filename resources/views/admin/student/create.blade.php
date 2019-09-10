@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('student'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('email',trans('admin.email')) !!}
        {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('subject',trans('admin.subject')) !!}
        {!! Form::text('subject',old('subject'),['class'=>'form-control']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('phone',trans('admin.phone')) !!}
        {!! Form::text('phone',old('phone'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('message',trans('admin.message')) !!}
        {!! Form::textarea('message',old('message'),['class'=>'form-control']) !!}
     </div>
          
     <div class="form-group">
        {!! Form::label('icon',trans('admin.student')) !!}
        {!! Form::file('icon',['class'=>'form-control icon']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="icon" class="image" src="{{ asset( 'storage/student/No_Image.jpg')}} "   > 
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