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
								<a  href="{{aurl('subchildservices')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('SubChildService.show_all')}}"
										title="{{trans('SubChildService.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('SubChildService.fullscreen')}}"
										title="{{trans('SubChildService.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/subchildservices'),'id'=>'subchildservices','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_ar',trans('SubChildService.name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control','placeholder'=>trans('SubChildService.name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_en',trans('SubChildService.name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_en',old('name_en'),['class'=>'form-control','placeholder'=>trans('SubChildService.name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('child_service_id',trans('SubChildService.child_service_id'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('child_service_id',App\Model\ChildService::pluck("name","id"),old('child_service_id'),['class'=>'form-control','placeholder'=>trans('SubChildService.child_service_id')]) !!}
		</div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('SubChildService.add'),['class'=>'btn btn-success']) !!}
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
	
