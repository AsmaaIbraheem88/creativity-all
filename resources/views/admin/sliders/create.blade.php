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
								<a  href="{{aurl('sliders')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('slider.show_all')}}"
										title="{{trans('slider.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('slider.fullscreen')}}"
										title="{{trans('slider.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/sliders'),'id'=>'sliders','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('heading_ar',trans('slider.heading_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('heading_ar',old('heading_ar'),['class'=>'form-control','placeholder'=>trans('slider.heading_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('heading_en',trans('slider.heading_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('heading_en',old('heading_en'),['class'=>'form-control','placeholder'=>trans('slider.heading_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_ar',trans('slider.description_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('description_ar',old('description_ar'),['class'=>'form-control','placeholder'=>trans('slider.description_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_en',trans('slider.description_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('description_en',old('description_en'),['class'=>'form-control','placeholder'=>trans('slider.description_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('slider.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('slider.image')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('slider.add'),['class'=>'btn btn-success']) !!}
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
	
