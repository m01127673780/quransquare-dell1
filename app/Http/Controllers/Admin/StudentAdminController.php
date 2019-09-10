<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\StudentDatatable;
use App\Http\Controllers\Controller;

use App\Model\Student;
use Illuminate\Http\Request;
 use Storage;

class StudentAdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(studentDatatable $student) {
		return $student->render('admin.student.index', ['title' => trans('admin.student')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.student.create', ['title' => trans('admin.create_student')]);
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
				'name'                => 'sometimes|nullable',
				'email'               => 'sometimes|nullable',
				'subject'             => 'sometimes|nullable',
				'phone'               => 'sometimes|nullable',
				'message'             => 'sometimes|nullable',
 				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'             => trans('admin.name'),
				'email'             => trans('admin.email'),
				'subject'             => trans('admin.subject'),
				'phone'             => trans('admin.phone'),
				'message'             => trans('admin.message'),
 				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'student',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Student::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('student'));
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
		$student = Student::find($id);
		$title   = trans('admin.edit');
		return view('admin.student.edit', compact('student', 'title'));
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
				'name'                => 'sometimes|nullable',
				'email'               => 'sometimes|nullable',
				'subject'             => 'sometimes|nullable',
				'phone'               => 'sometimes|nullable',
				'message'             => 'sometimes|nullable',
 				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'             => trans('admin.name'),
				'email'             => trans('admin.email'),
				'subject'             => trans('admin.subject'),
				'phone'             => trans('admin.phone'),
				'message'             => trans('admin.message'),
 				'icon'                => trans('admin.icon'),
				 
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'student',
					'upload_type' => 'single',
					'delete_file' => Student::find($id)->icon,
				]);
		}

		Student::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('student'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$student = Student::find($id);
		Storage::delete($student->icon);
		$student->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('student'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$student = Student::find($id);
				Storage::delete($student->icon);
				$student->delete();
			}
		} else {
			$student = Student::find(request('item'));
			Storage::delete($student->icon);
			$student->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('student'));
	}
}
