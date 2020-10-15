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
                           data-toggle="tooltip" title="{{trans('slider.sliders')}}">
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
                                {{trans('slider.ask_del')}} {{trans('slider.id')}} {{$sliders->id}} ؟

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

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/sliders')}}"
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
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('slider.id')}} :</b> {{$sliders->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('slider.heading_ar')}} :</b>
 {!! $sliders->heading_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('slider.heading_en')}} :</b>
 {!! $sliders->heading_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('slider.description_ar')}} :</b>
 {!! $sliders->description_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('slider.description_en')}} :</b>
 {!! $sliders->description_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('slider.image')}} :</b>
 {!! $sliders->image !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop