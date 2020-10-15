<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ClientsDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Client;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Clients extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(ClientsDataTable $clients)
            {
               return $clients->render('admin.clients.index',['title'=>trans('client.clients')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.clients.create',['title'=>trans('client.create')]);
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
             'name'=>'sometimes',
             'logo'=>'required|'.it()->image().'',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name'=>trans('client.name'),
             'logo'=>trans('client.logo'),

              ]);
		
               if(request()->hasFile('logo')){
              $data['logo'] = it()->upload('logo','clients');
              }
              Client::create($data); 

              session()->flash('success',trans('client.added'));
              return redirect(aurl('clients'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $clients =  Client::find($id);
                return view('admin.clients.show',['title'=>trans('client.show'),'clients'=>$clients]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $clients =  Client::find($id);
                return view('admin.clients.edit',['title'=>trans('client.edit'),'clients'=>$clients]);
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
             'name'=>'sometimes',
             'logo'=>'required|'.it()->image().'',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name'=>trans('client.name'),
             'logo'=>trans('client.logo'),
                   ]);
               if(request()->hasFile('logo')){
              it()->delete(Client::find($id)->logo);
              $data['logo'] = it()->upload('logo','clients');
               }
              Client::where('id',$id)->update($data);

              session()->flash('success',trans('client.updated'));
              return redirect(aurl('clients'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $clients = Client::find($id);

               it()->delete($clients->logo);
               it()->delete('client',$id);

               @$clients->delete();
               session()->flash('success',trans('client.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$clients = Client::find($id);

                    	it()->delete($clients->logo);
                    	it()->delete('client',$id);
                    	@$clients->delete();
                    }
                    session()->flash('success', trans('client.deleted'));
                   return back();
                }else {
                    $clients = Client::find($data);
 
                    	it()->delete($clients->logo);
                    	it()->delete('client',$data);

                    @$clients->delete();
                    session()->flash('success', trans('client.deleted'));
                    return back();
                }
            }

            
}