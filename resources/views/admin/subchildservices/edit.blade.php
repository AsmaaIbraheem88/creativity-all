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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('subchildservices/create')}}"
												data-toggle="tooltip" title="{{trans('SubChildService.add')}}  {{trans('SubChildService.subchildservices')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('SubChildService.delete')}}  {{trans('SubChildService.subchildservices')}}">
												<a data-toggle="modal" data-target="#myModal{{$subchildservices->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$subchildservices->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('SubChildService.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('SubChildService.ask_del')}} {{trans('SubChildService.id')}} ({{$subchildservices->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['subchildservices.destroy', $subchildservices->id]
																		]) !!}
																		{!! Form::submit(trans('SubChildService.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('SubChildService.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('subchildservices')}}"
												data-toggle="tooltip" title="{{trans('SubChildService.show_all')}}   {{trans('SubChildService.subchildservices')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('SubChildService.fullscreen')}}"
												title="{{trans('SubChildService.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/subchildservices/'.$subchildservices->id),'method'=>'put','id'=>'subchildservices','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_ar',trans('SubChildService.name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_ar', $subchildservices->name_ar ,['class'=>'form-control','placeholder'=>trans('SubChildService.name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_en',trans('SubChildService.name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_en', $subchildservices->name_en ,['class'=>'form-control','placeholder'=>trans('SubChildService.name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('child_service_id',trans('SubChildService.child_service_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('child_service_id',App\Model\ChildService::pluck("name","id"), $subchildservices->child_service_id ,['class'=>'form-control','placeholder'=>trans('SubChildService.child_service_id')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('SubChildService.save'),['class'=>'btn btn-success']) !!}
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
		
