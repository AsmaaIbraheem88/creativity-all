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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('sliders/create')}}"
												data-toggle="tooltip" title="{{trans('slider.add')}}  {{trans('slider.sliders')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('slider.delete')}}  {{trans('slider.sliders')}}">
												<a data-toggle="modal" data-target="#myModal{{$sliders->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$sliders->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('slider.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('slider.ask_del')}} {{trans('slider.id')}} ({{$sliders->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['sliders.destroy', $sliders->id]
																		]) !!}
																		{!! Form::submit(trans('slider.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('slider.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('sliders')}}"
												data-toggle="tooltip" title="{{trans('slider.show_all')}}   {{trans('slider.sliders')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('slider.fullscreen')}}"
												title="{{trans('slider.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/sliders/'.$sliders->id),'method'=>'put','id'=>'sliders','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('heading_ar',trans('slider.heading_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('heading_ar', $sliders->heading_ar ,['class'=>'form-control','placeholder'=>trans('slider.heading_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('heading_en',trans('slider.heading_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('heading_en', $sliders->heading_en ,['class'=>'form-control','placeholder'=>trans('slider.heading_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_ar',trans('slider.description_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('description_ar', $sliders->description_ar ,['class'=>'form-control','placeholder'=>trans('slider.description_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('description_en',trans('slider.description_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('description_en', $sliders->description_en ,['class'=>'form-control','placeholder'=>trans('slider.description_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('slider.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('slider.image')]) !!}
        @if(!empty($sliders->image))
        <img src="{{it()->url($sliders->image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('slider.save'),['class'=>'btn btn-success']) !!}
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
		
