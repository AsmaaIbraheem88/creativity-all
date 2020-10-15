<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

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
class ChildServicesApi extends Controller
{

            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Display a listing of the resource. Api
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
               return response()->json([
               "status"=>true,
               "data"=>ChildService::orderBy('id','desc')->paginate(15)
               ]);
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Store a newly created resource in storage. Api
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
        $data = Validator::make(request()->all(),$rules,[],[
                         'name_ar'=>trans('ChildService.name_ar'),
             'name_en'=>trans('ChildService.name_en'),
             'service_id'=>trans('ChildService.service_id'),
             'image'=>trans('ChildService.image'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
               if(request()->hasFile('image')){
              $data['image'] = it()->upload('image','childservices');
              }
        $create = ChildService::create($data); 

        return response()->json([
            "status"=>true,
            "message"=>trans('ChildService.added'),
            "data"=>$create
        ]);
    }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $show =  ChildService::find($id);
                 return response()->json([
              "status"=>true,
              "data"=> $show
              ]);  ;
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
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
             $data = Validator::make(request()->all(),$rules,[],[
             'name_ar'=>trans('ChildService.name_ar'),
             'name_en'=>trans('ChildService.name_en'),
             'service_id'=>trans('ChildService.service_id'),
             'image'=>trans('ChildService.image'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
               if(request()->hasFile('image')){
              it()->delete(ChildService::find($id)->image);
              $data['image'] = it()->upload('image','childservices');
               }
              ChildService::where('id',$id)->update($data);

              $ChildService = ChildService::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('ChildService.updated'),
               "data"=> $ChildService
               ]);
            }

            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
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
               return response(["status"=>true,"message"=>trans('ChildService.deleted')]);
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
                    return response(["status"=>true,"message"=>trans('ChildService.deleted')]);
                }else {
                    $childservices = ChildService::find($data);
 
                    	it()->delete($childservices->image);
                    	it()->delete('childservice',$data);

                    @$childservices->delete();
                    return response(["status"=>true,"message"=>trans('ChildService.deleted')]);
                }
            }

            
}