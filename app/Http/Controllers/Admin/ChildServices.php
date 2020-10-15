<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ChildServicesDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\ChildService;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class ChildServices extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(ChildServicesDataTable $childservices)
            {
               return $childservices->render('admin.childservices.index',['title'=>trans('ChildService.childservices')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.childservices.create',['title'=>trans('ChildService.create')]);
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Store a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function store()
            {
              $rules = [
             'name_ar'=>'required',
             'name_en'=>'required',
             'service_id'=>'required|numeric',
             'image'=>''.it()->image().'|nullable|sometimes',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name_ar'=>trans('ChildService.name_ar'),
             'name_en'=>trans('ChildService.name_en'),
             'service_id'=>trans('ChildService.service_id'),
             'image'=>trans('ChildService.image'),

              ]);
		
               if(request()->hasFile('image')){
              $data['image'] = it()->upload('image','childservices');
              }
              ChildService::create($data); 

              session()->flash('success',trans('ChildService.added'));
              return redirect(aurl('childservices'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $childservices =  ChildService::find($id);
                return view('admin.childservices.show',['title'=>trans('ChildService.show'),'childservices'=>$childservices]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $childservices =  ChildService::find($id);
                return view('admin.childservices.edit',['title'=>trans('ChildService.edit'),'childservices'=>$childservices]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * update a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function update($id)
            {
                $rules = [
             'name_ar'=>'required',
             'name_en'=>'required',
             'service_id'=>'required|numeric',
             'image'=>''.it()->image().'|nullable|sometimes',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name_ar'=>trans('ChildService.name_ar'),
             'name_en'=>trans('ChildService.name_en'),
             'service_id'=>trans('ChildService.service_id'),
             'image'=>trans('ChildService.image'),
                   ]);
               if(request()->hasFile('image')){
              it()->delete(ChildService::find($id)->image);
              $data['image'] = it()->upload('image','childservices');
               }
              ChildService::where('id',$id)->update($data);

              session()->flash('success',trans('ChildService.updated'));
              return redirect(aurl('childservices'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $childservices = ChildService::find($id);

               it()->delete($childservices->image);
               it()->delete('childservice',$id);

               @$childservices->delete();
               session()->flash('success',trans('ChildService.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$childservices = ChildService::find($id);

                    	it()->delete($childservices->image);
                    	it()->delete('childservice',$id);
                    	@$childservices->delete();
                    }
                    session()->flash('success', trans('ChildService.deleted'));
                   return back();
                }else {
                    $childservices = ChildService::find($data);
 
                    	it()->delete($childservices->image);
                    	it()->delete('childservice',$data);

                    @$childservices->delete();
                    session()->flash('success', trans('ChildService.deleted'));
                    return back();
                }
            }

            
}