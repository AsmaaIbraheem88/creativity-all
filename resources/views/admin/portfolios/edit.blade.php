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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('portfolios/create')}}"
												data-toggle="tooltip" title="{{trans('portfolios.add')}}  {{trans('portfolios.portfolios')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('portfolios.delete')}}  {{trans('portfolios.portfolios')}}">
												<a data-toggle="modal" data-target="#myModal{{$portfolios->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$portfolios->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('portfolios.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('portfolios.ask_del')}} {{trans('portfolios.id')}} ({{$portfolios->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['portfolios.destroy', $portfolios->id]
																		]) !!}
																		{!! Form::submit(trans('portfolios.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('portfolios.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('portfolios')}}"
												data-toggle="tooltip" title="{{trans('portfolios.show_all')}}   {{trans('portfolios.portfolios')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('portfolios.fullscreen')}}"
												title="{{trans('portfolios.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/portfolios/'.$portfolios->id),'method'=>'put','id'=>'portfolios','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name',trans('portfolios.name'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name', $portfolios->name ,['class'=>'form-control','placeholder'=>trans('portfolios.name')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('portfolios.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('portfolios.image')]) !!}
        @if(!empty($portfolios->image))
        <img src="{{it()->url($portfolios->image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('client',trans('portfolios.client'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('client', $portfolios->client ,['class'=>'form-control','placeholder'=>trans('portfolios.client')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('service_id',trans('portfolios.service_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('service_id',App\Model\Service::pluck("name_en","id"), $portfolios->service_id ,['class'=>'form-control','placeholder'=>trans('portfolios.service_id')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('portfolios.save'),['class'=>'btn btn-success']) !!}
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
		
