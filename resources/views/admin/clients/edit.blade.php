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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('clients/create')}}"
												data-toggle="tooltip" title="{{trans('client.add')}}  {{trans('client.clients')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('client.delete')}}  {{trans('client.clients')}}">
												<a data-toggle="modal" data-target="#myModal{{$clients->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$clients->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('client.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('client.ask_del')}} {{trans('client.id')}} ({{$clients->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['clients.destroy', $clients->id]
																		]) !!}
																		{!! Form::submit(trans('client.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('client.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('clients')}}"
												data-toggle="tooltip" title="{{trans('client.show_all')}}   {{trans('client.clients')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('client.fullscreen')}}"
												title="{{trans('client.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/clients/'.$clients->id),'method'=>'put','id'=>'clients','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name',trans('client.name'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name', $clients->name ,['class'=>'form-control','placeholder'=>trans('client.name')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('logo',trans('client.logo'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('logo',['class'=>'form-control','placeholder'=>trans('client.logo')]) !!}
        @if(!empty($clients->logo))
        <img src="{{it()->url($clients->logo)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('client.save'),['class'=>'btn btn-success']) !!}
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
		
