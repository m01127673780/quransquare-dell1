@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('halfhour/'.$halfhour->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}}
 -->     
  <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',$halfhour->head_ar,['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',$halfhour->head_en,['class'=>'form-control']) !!}
     </div> 
         <div class="form-group">
        {!! Form::label('dateshow_ar',trans('admin.dateshow_ar')) !!}
        {!! Form::text('dateshow_ar',$halfhour->dateshow_ar,['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('dateshow_en',trans('admin.dateshow_en')) !!}
        {!! Form::text('dateshow_en',$halfhour->dateshow_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('content_ar',trans('admin.content_ar')) !!}
        {!! Form::text('content_ar',$halfhour->content_ar,['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('content_en',trans('admin.content_en')) !!}
        {!! Form::text('content_en',$halfhour->content_en,['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('number',trans('admin.number')) !!}
        {!! Form::text('number',$halfhour->number,['class'=>'form-control']) !!}
     </div>  
     <!-- --------- -->
       <div class="form-group">
        {!! Form::label('descount3_en',trans('admin.descount3_en')) !!}
        {!! Form::text('descount3_en',$halfhour->descount3_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('descount3_en',trans('admin.descount3_en')) !!}
        {!! Form::text('descount3_en',$halfhour->descount3_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('percentage3',trans('admin.percentage3')) !!}
        {!! Form::text('percentage3',$halfhour->percentage3,['class'=>'form-control']) !!}
     </div>
     <!-- --------- --> 
         <!-- --------- -->
       <div class="form-group">
        {!! Form::label('descount6_en',trans('admin.descount6_en')) !!}
        {!! Form::text('descount6_en',$halfhour->descount6_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('descount6_en',trans('admin.descount6_en')) !!}
        {!! Form::text('descount6_en',$halfhour->descount6_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('percentage6',trans('admin.percentage6')) !!}
        {!! Form::text('percentage6',$halfhour->percentage6,['class'=>'form-control']) !!}
     </div>
     <!-- --------- -->     <!-- --------- -->
       <div class="form-group">
        {!! Form::label('descount12_en',trans('admin.descount12_en')) !!}
        {!! Form::text('descount12_en',$halfhour->descount12_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('descount12_en',trans('admin.descount12_en')) !!}
        {!! Form::text('descount12_en',$halfhour->descount12_en,['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('percentage12',trans('admin.percentage12')) !!}
        {!! Form::text('percentage12',$halfhour->percentage12,['class'=>'form-control']) !!}
     </div>
     <!-- --------- -->


     <div class="form-group">
        {!! Form::label('icon',trans('admin.halfhour_flag')) !!}
        {!! Form::file('icon',['class'=>'form-control']) !!}

          @if(!empty($halfhour->icon))
       <img src="{{ Storage::url($halfhour->icon) }}" style="width:50px;height: 50px;" />
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