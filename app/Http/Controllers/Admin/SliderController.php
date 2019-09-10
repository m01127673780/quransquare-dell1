<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\sliderDatatable;
use App\Http\Controllers\Controller;

use App\Model\Slider;
use Illuminate\Http\Request;
 use Storage;

class SliderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(sliderDatatable $slider) {
		return $slider->render('admin.slider.index', ['title' => trans('admin.slider')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.slider.create', ['title' => trans('admin.create_slider')]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store() {

		$data = $this->validate(request(),
			[
				'link'                 => 'required',
				'img'                 => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'link'                 => trans('admin.link'),
				'img'                  => trans('admin.img'),
				 
			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'slider',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Slider::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('slider'));
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$slider = Slider::find($id);
		$title   = trans('admin.edit');
		return view('admin.slider.edit', compact('slider', 'title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $r, $id) {

		
		$data = $this->validate(request(),
				[
				'link'                 => 'required',
				'img'                 => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'link'                 => trans('admin.link'),
				'img'                  => trans('admin.img'),
				 
			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'slider',
					'upload_type' => 'single',
					'delete_file' => Slider::find($id)->img,
				]);
		}

		Slider::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('slider'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$slider = Slider::find($id);
		Storage::delete($slider->img);
		$slider->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('slider'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$slider = Slider::find($id);
				Storage::delete($slider->img);
				$slider->delete();
			}
		} else {
			$slider = Slider::find(request('item'));
			Storage::delete($slider->img);
			$slider->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('slider'));
	}
}
