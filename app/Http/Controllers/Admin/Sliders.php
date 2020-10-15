<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\SlidersDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Slider;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Sliders extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(SlidersDataTable $sliders)
            {
               return $sliders->render('admin.sliders.index',['title'=>trans('slider.sliders')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.sliders.create',['title'=>trans('slider.create')]);
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
             'heading_ar'=>'sometimes|nullable|',
             'heading_en'=>'sometimes|nullable|',
             'description_ar'=>'sometimes|nullable|',
             'description_en'=>'sometimes|nullable|',
             'image'=>'sometimes|nullable|'.it()->image(),

                   ];
              $data = $this->validate(request(),$rules,[],[
             'heading_ar'=>trans('slider.heading_ar'),
             'heading_en'=>trans('slider.heading_en'),
             'description_ar'=>trans('slider.description_ar'),
             'description_en'=>trans('slider.description_en'),
             'image'=>trans('slider.image'),

              ]);
		
               if(request()->hasFile('image')){
              $data['image'] = it()->upload('image','sliders');
              }
              Slider::create($data); 

              session()->flash('success',trans('slider.added'));
              return redirect(aurl('sliders'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $sliders =  Slider::find($id);
                return view('admin.sliders.show',['title'=>trans('slider.show'),'sliders'=>$sliders]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $sliders =  Slider::find($id);
                return view('admin.sliders.edit',['title'=>trans('slider.edit'),'sliders'=>$sliders]);
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
                    'heading_ar'=>'sometimes|nullable|',
                    'heading_en'=>'sometimes|nullable|',
                    'description_ar'=>'sometimes|nullable|',
                    'description_en'=>'sometimes|nullable|',
                    'image'=>'sometimes|nullable|'.it()->image(),

                         ];
             $data = $this->validate(request(),$rules,[],[
             'heading_ar'=>trans('slider.heading_ar'),
             'heading_en'=>trans('slider.heading_en'),
             'description_ar'=>trans('slider.description_ar'),
             'description_en'=>trans('slider.description_en'),
             'image'=>trans('slider.image'),
                   ]);
               if(request()->hasFile('image')){
              it()->delete(Slider::find($id)->image);
              $data['image'] = it()->upload('image','sliders');
               }
              Slider::where('id',$id)->update($data);

              session()->flash('success',trans('slider.updated'));
              return redirect(aurl('sliders'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $sliders = Slider::find($id);

               it()->delete($sliders->image);
               it()->delete('slider',$id);

               @$sliders->delete();
               session()->flash('success',trans('slider.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$sliders = Slider::find($id);

                    	it()->delete($sliders->image);
                    	it()->delete('slider',$id);
                    	@$sliders->delete();
                    }
                    session()->flash('success', trans('slider.deleted'));
                   return back();
                }else {
                    $sliders = Slider::find($data);
 
                    	it()->delete($sliders->image);
                    	it()->delete('slider',$data);

                    @$sliders->delete();
                    session()->flash('success', trans('slider.deleted'));
                    return back();
                }
            }

            
}