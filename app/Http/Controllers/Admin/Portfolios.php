<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\PortfoliosDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Portfolio;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Portfolios extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(PortfoliosDataTable $portfolios)
            {
               return $portfolios->render('admin.portfolios.index',['title'=>trans('portfolios.portfolios')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.portfolios.create',['title'=>trans('portfolios.create')]);
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
             'name'=>'required',
             'image'=>''.it()->image().'|nullable|sometimes',
             'client'=>'required',
             'service_id'=>'required|numeric',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name'=>trans('portfolios.name'),
             'image'=>trans('portfolios.image'),
             'client'=>trans('portfolios.client'),
             'service_id'=>trans('portfolios.service_id'),

              ]);
		
               if(request()->hasFile('image')){
              $data['image'] = it()->upload('image','portfolios');
              }
              Portfolio::create($data); 

              session()->flash('success',trans('portfolios.added'));
              return redirect(aurl('portfolios'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $portfolios =  Portfolio::find($id);
                return view('admin.portfolios.show',['title'=>trans('portfolios.show'),'portfolios'=>$portfolios]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $portfolios =  Portfolio::find($id);
                return view('admin.portfolios.edit',['title'=>trans('portfolios.edit'),'portfolios'=>$portfolios]);
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
             'name'=>'required',
             'image'=>''.it()->image().'|nullable|sometimes',
             'client'=>'required',
             'service_id'=>'required|numeric',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name'=>trans('portfolios.name'),
             'image'=>trans('portfolios.image'),
             'client'=>trans('portfolios.client'),
             'service_id'=>trans('portfolios.service_id'),
                   ]);
               if(request()->hasFile('image')){
              it()->delete(Portfolio::find($id)->image);
              $data['image'] = it()->upload('image','portfolios');
               }
              Portfolio::where('id',$id)->update($data);

              session()->flash('success',trans('portfolios.updated'));
              return redirect(aurl('portfolios'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $portfolios = Portfolio::find($id);

               it()->delete($portfolios->image);
               it()->delete('portfolio',$id);

               @$portfolios->delete();
               session()->flash('success',trans('portfolios.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$portfolios = Portfolio::find($id);

                    	it()->delete($portfolios->image);
                    	it()->delete('portfolio',$id);
                    	@$portfolios->delete();
                    }
                    session()->flash('success', trans('portfolios.deleted'));
                   return back();
                }else {
                    $portfolios = Portfolio::find($data);
 
                    	it()->delete($portfolios->image);
                    	it()->delete('portfolio',$data);

                    @$portfolios->delete();
                    session()->flash('success', trans('portfolios.deleted'));
                    return back();
                }
            }

            
}