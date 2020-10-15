@extends('admin.index')
	@section('content')
	<div class="row">
		<div class="col-md-12">
				<div class="widget-extra body-req portlet light bordered">
						<div class="portlet-title">
								<div class="caption">
										<span class="caption-subject bold uppercase font-dark">{{$title}}</span>
								</div>
								<div class="actions">

										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('abouts')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.abouts')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('admin.fullscreen')}}"
												title="{{trans('admin.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/abouts/'.$abouts->id),'method'=>'put','id'=>'abouts','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('features_ar',trans('admin.features_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('features_ar', $abouts->features_ar ,['class'=>'form-control ckeditor','placeholder'=>trans('admin.features_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('features_en',trans('admin.features_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('features_en', $abouts->features_en ,['class'=>'form-control ckeditor','placeholder'=>trans('admin.features_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('admin.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('admin.image')]) !!}
        @if(!empty($abouts->image))
        <img src="{{it()->url($abouts->image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.save'),['class'=>'btn btn-success']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

												</div>
												<div class="clearfix"></div>
								</div>
						</div>
				</div>
		</div>
		@stop
		
