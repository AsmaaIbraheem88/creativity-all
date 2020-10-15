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
								<a  href="{{aurl('services')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('services.show_all')}}"
										title="{{trans('services.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('services.fullscreen')}}"
										title="{{trans('services.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/services'),'id'=>'services','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_ar',trans('services.name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control','placeholder'=>trans('services.name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_en',trans('services.name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_en',old('name_en'),['class'=>'form-control','placeholder'=>trans('services.name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_ar',trans('services.description_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('description_ar',old('description_ar'),['class'=>'form-control ckeditor','placeholder'=>trans('services.description_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_en',trans('services.description_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('description_en',old('description_en'),['class'=>'form-control ckeditor','placeholder'=>trans('services.description_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('services.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('services.image')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('active',trans('services.active'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('active',['1'=>trans('services.1'),'0'=>trans('services.0'),],old('active'),['class'=>'form-control','placeholder'=>trans('services.active')]) !!}
		</div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('services.add'),['class'=>'btn btn-success']) !!}
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
	
