@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('stat/'.$stat->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--==================================================== --}} -->  
 
  
         <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',$stat->head_ar,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',$stat->head_en,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('font_awesome',trans('admin.font_awesome')) !!}
        {!! Form::text('font_awesome',$stat->font_awesome,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('number',trans('admin.number')) !!}
        {!! Form::number('number',$stat->number,['class'=>'form-control','pattern'=>'number']) !!}
      </div>
    
     


     <div class="form-group">
        {!! Form::label('img',trans('admin.stat_flag')) !!}
        {!! Form::file('img',['class'=>'form-control']) !!}

          @if(!empty($stat->img))
       <img src="{{ Storage::url($stat->img) }}" style="width:50px;height: 50px;" />
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