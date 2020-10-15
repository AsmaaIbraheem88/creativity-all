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
                           data-toggle="tooltip" title="{{trans('SubChildService.subchildservices')}}">
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
                                {{trans('SubChildService.ask_del')}} {{trans('SubChildService.id')}} {{$subchildservices->id}} ؟

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

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/subchildservices')}}"
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
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('SubChildService.id')}} :</b> {{$subchildservices->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('SubChildService.child_service_id')}} :</b>
 {!! $subchildservices->child_service_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('SubChildService.name_ar')}} :</b>
 {!! $subchildservices->name_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('SubChildService.name_en')}} :</b>
 {!! $subchildservices->name_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('SubChildService.child_service_id')}} :</b>
 {!! $subchildservices->child_service_id !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop