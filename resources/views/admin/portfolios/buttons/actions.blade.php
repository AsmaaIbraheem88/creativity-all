
		<div class="actions">
				<div class="btn-group">
						<a class="btn btn-default btn-outlines btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
								<i class="fa fa-wrench"></i>
						{{ trans('portfolios.actions') }}
								<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right">
								<li>
										<a href="{{ aurl('/portfolios/'.$id.'/edit')}}"><i class="fa fa-pencil-square-o"></i> {{trans('portfolios.edit')}}</a>
								</li>
								<li class="divider"> </li>
								<li>
										<a href="{{ aurl('/portfolios/'.$id)}}"><i class="fa fa-eye"></i> {{trans('portfolios.show')}}</a>
								</li>
								<li>
										<a data-toggle="modal" data-target="#delete_record{{$id}}" href="#">
						<i class="fa fa-trash"></i> {{trans('portfolios.delete')}}</a>
								</li>
						</ul>
				</div>
		</div>
		<div class="modal fade" id="delete_record{{$id}}">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<button class="close" data-dismiss="modal">x</button>
										<h4 class="modal-title">{{trans('portfolios.delete')}}؟</h4>
								</div>
								<div class="modal-body">
										<i class="fa fa-exclamation-triangle"></i> {{trans('portfolios.ask_del')}} {{trans('portfolios.id')}} ({{$id}}) ؟
								</div>
								<div class="modal-footer">
										{!! Form::open([
										'method' => 'DELETE',
										'route' => ['portfolios.destroy', $id]
										]) !!}
										{!! Form::submit(trans('portfolios.approval'), ['class' => 'btn btn-danger']) !!}
										<a class="btn btn-default" data-dismiss="modal">{{trans('portfolios.cancel')}}</a>
										{!! Form::close() !!}
								</div>
						</div>
				</div>
		</div>
		