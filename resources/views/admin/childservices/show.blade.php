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
                           data-toggle="tooltip" title="{{trans('ChildService.childservices')}}">
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
                                {{trans('ChildService.ask_del')}} {{trans('ChildService.id')}} {{$childservices->id}} ؟

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

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/childservices')}}"
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
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('ChildService.id')}} :</b> {{$childservices->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('ChildService.service_id')}} :</b>
 {!! $childservices->service_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('ChildService.name_ar')}} :</b>
 {!! $childservices->name_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('ChildService.name_en')}} :</b>
 {!! $childservices->name_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('ChildService.service_id')}} :</b>
 {!! $childservices->service_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('ChildService.image')}} :</b>
 {!! $childservices->image !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop