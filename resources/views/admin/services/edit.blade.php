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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('services/create')}}"
												data-toggle="tooltip" title="{{trans('services.add')}}  {{trans('services.services')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('services.delete')}}  {{trans('services.services')}}">
												<a data-toggle="modal" data-target="#myModal{{$services->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$services->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('services.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('services.ask_del')}} {{trans('services.id')}} ({{$services->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['services.destroy', $services->id]
																		]) !!}
																		{!! Form::submit(trans('services.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('services.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('services')}}"
												data-toggle="tooltip" title="{{trans('services.show_all')}}   {{trans('services.services')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('services.fullscreen')}}"
												title="{{trans('services.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/services/'.$services->id),'method'=>'put','id'=>'services','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_ar',trans('services.name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_ar', $services->name_ar ,['class'=>'form-control','placeholder'=>trans('services.name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_en',trans('services.name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_en', $services->name_en ,['class'=>'form-control','placeholder'=>trans('services.name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_ar',trans('services.description_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('description_ar', $services->description_ar ,['class'=>'form-control ckeditor','placeholder'=>trans('services.description_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_en',trans('services.description_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('description_en', $services->description_en ,['class'=>'form-control ckeditor','placeholder'=>trans('services.description_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('services.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('services.image')]) !!}
        @if(!empty($services->image))
        <img src="{{it()->url($services->image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('active',trans('services.active'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('active',['1'=>trans('services.1'),'0'=>trans('services.0'),], $services->active ,['class'=>'form-control','placeholder'=>trans('services.active')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('services.save'),['class'=>'btn btn-success']) !!}
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
		
