@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('videos/'.$videos->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}}
 -->   

    
     <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',$videos->link,['class'=>'form-control','pattern'=>'https?://.+']) !!}
 
     </div>


     <div class="form-group">
        {!! Form::label('img',trans('admin.videos_flag')) !!}
        {!! Form::file('img',['class'=>'form-control']) !!}

          @if(!empty($videos->img))
       <img src="{{ Storage::url($videos->img) }}" style="width:50px;height: 50px;" />
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