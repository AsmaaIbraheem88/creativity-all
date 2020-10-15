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
                           data-toggle="tooltip" title="{{trans('portfolios.portfolios')}}">
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
                                {{trans('portfolios.ask_del')}} {{trans('portfolios.id')}} {{$portfolios->id}} ؟

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

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/portfolios')}}"
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
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('portfolios.id')}} :</b> {{$portfolios->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('portfolios.service_id')}} :</b>
 {!! $portfolios->service_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('portfolios.name')}} :</b>
 {!! $portfolios->name !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('portfolios.image')}} :</b>
 {!! $portfolios->image !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('portfolios.client')}} :</b>
 {!! $portfolios->client !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('portfolios.service_id')}} :</b>
 {!! $portfolios->service_id !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop