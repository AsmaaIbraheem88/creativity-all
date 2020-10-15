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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('childservices/create')}}"
												data-toggle="tooltip" title="{{trans('ChildService.add')}}  {{trans('ChildService.childservices')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('ChildService.delete')}}  {{trans('ChildService.childservices')}}">
												<a data-toggle="modal" data-target="#myModal{{$childservices->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$childservices->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('ChildService.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('ChildService.ask_del')}} {{trans('ChildService.id')}} ({{$childservices->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['childservices.destroy', $childservices->id]
																		]) !!}
																		{!! Form::submit(trans('ChildService.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('ChildService.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('childservices')}}"
												data-toggle="tooltip" title="{{trans('ChildService.show_all')}}   {{trans('ChildService.childservices')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('ChildService.fullscreen')}}"
												title="{{trans('ChildService.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/childservices/'.$childservices->id),'method'=>'put','id'=>'childservices','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_ar',trans('ChildService.name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_ar', $childservices->name_ar ,['class'=>'form-control','placeholder'=>trans('ChildService.name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_en',trans('ChildService.name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_en', $childservices->name_en ,['class'=>'form-control','placeholder'=>trans('ChildService.name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('service_id',trans('ChildService.service_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('service_id',App\Model\Service::pluck("name_en","id"), $childservices->service_id ,['class'=>'form-control','placeholder'=>trans('ChildService.service_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('ChildService.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('ChildService.image')]) !!}
        @if(!empty($childservices->image))
        <img src="{{it()->url($childservices->image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('ChildService.save'),['class'=>'btn btn-success']) !!}
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
		
