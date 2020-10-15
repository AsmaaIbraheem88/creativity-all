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
								<a  href="{{aurl('childservices')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('ChildService.show_all')}}"
										title="{{trans('ChildService.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('ChildService.fullscreen')}}"
										title="{{trans('ChildService.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/childservices'),'id'=>'childservices','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_ar',trans('ChildService.name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control','placeholder'=>trans('ChildService.name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_en',trans('ChildService.name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_en',old('name_en'),['class'=>'form-control','placeholder'=>trans('ChildService.name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('service_id',trans('ChildService.service_id'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('service_id',App\Model\Service::pluck("name_en","id"),old('service_id'),['class'=>'form-control','placeholder'=>trans('ChildService.service_id')]) !!}
		</div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('ChildService.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('ChildService.image')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('ChildService.add'),['class'=>'btn btn-success']) !!}
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
	
