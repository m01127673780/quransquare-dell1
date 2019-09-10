@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('student/'.$student->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}} --> 
     <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',$student->name,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('email',trans('admin.email')) !!}
        {!! Form::email('email',$student->email,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('subject',trans('admin.subject')) !!}
        {!! Form::text('subject',$student->subject,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('phone',trans('admin.phone')) !!}
        {!! Form::text('phone',$student->phone,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('message',trans('admin.message')) !!}
        {!! Form::textarea('message',$student->message,['class'=>'form-control']) !!}
     </div>
   

  

     <div class="form-group">
        {!! Form::label('icon',trans('admin.student')) !!}
        {!! Form::file('icon',['class'=>'form-control']) !!}

          @if(!empty($student->icon))
       <img src="{{ Storage::url($student->icon) }}" style="width:50px;height: 50px;" />
      @endif

     </div>
<!--     {{--================================================================== --}}-->
 


     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection