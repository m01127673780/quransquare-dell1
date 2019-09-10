@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('teachers/'.$teachers->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--==================================================== --}} -->  
 
     <div class="form-group">
        {!! Form::label('name_ar',trans('admin.name_ar')) !!}
        {!! Form::text('name_ar',$teachers->name_ar,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
        {!! Form::label('name_en',trans('admin.name_en')) !!}
        {!! Form::text('name_en',$teachers->name_en,['class'=>'form-control']) !!}
      </div>
         <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',$teachers->head_ar,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',$teachers->head_en,['class'=>'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',$teachers->link,['class'=>'form-control','pattern'=>'https?://.+']) !!}
      </div>
     


     <div class="form-group">
        {!! Form::label('img',trans('admin.teachers_flag')) !!}
        {!! Form::file('img',['class'=>'form-control']) !!}

          @if(!empty($teachers->img))
       <img src="{{ Storage::url($teachers->img) }}" style="width:50px;height: 50px;" />
      @endif

     </div>
<!--     {{--================================================================== --}}
 -->


     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection