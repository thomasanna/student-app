<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentMark;
use App\Models\Teacher;
use App\Models\Term;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\HtmlHelper;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentMarkRequest;

class StudentController extends Controller
{   
	protected $title = 'Students';
    protected $viewPath = 'students';
    protected $link = 'students';

    public function list(Request $request)
    {
        $detail = Student::select(['name', 'age', 'gender','reporting_teacher','id'])->with('teacher');
        if (isset($request->form)) {
            foreach ($request->form as $search) {
                if ($search['value'] != NULL && $search['name'] == 'search_name') {
                    $names = strtolower($search['value']);
                    $detail->where(function($query) use ($names) {
                         $query->whereRaw("name like ?", ['%'.$names.'%']);
                    });
                }
            }
        }
       
        $detail->orderBy('id', 'desc');
        return DataTables::of($detail)
            ->editColumn('reporting_teacher', function ($detail) {
                return $detail->teacher->name ?? '';
            })
            ->addColumn('action', function ($detail) {
                $action = '';
                $edit_url = url($this->link . '/' . $detail->id . '/edit');
                $action .= HtmlHelper::editButton($edit_url);
                $action .= HtmlHelper::deleteButton($detail->id);
                return $action;
            })
            ->removeColumn('id','teacher')
            ->escapeColumns([])
            ->make(false);
    }

    public function create()
    {
        $page = collect();
        $page->title = $this->title;
        $page->link = url('dashboard');
        $page->form_url = url('students/store');
        $page->form_method = 'POST';
       
        $student = null;
        $teachers = Teacher::pluck('name', 'id');

        return view('manage', compact('page','student','teachers'));
    }

    public function store(StudentRequest $request)
    {
        $student = New Student();
       
        $this->saveDB($student, $request);

        $url = url('dashboard');
        $error = false;
        $message = Str::singular(Str::title($this->title)) . ' added successfully';
        return compact('error', 'message', 'url');
    }

     public function saveDB($table, $request)
    {
        $table->name = $request->name;
        $table->age = $request->age;
        $table->gender = $request->gender;
        $table->reporting_teacher = $request->reporting_teacher;
       
        $table->save();
    }

     public function edit($id)
    {
        $student = Student::findOrFail($id);
        $page = collect();
        $page->title = $this->title;
        $page->link = url('dashboard');
        $page->form_url = url('students/update/' . $student->id);
        $page->form_method = 'PUT';
        
        $teachers = Teacher::pluck('name', 'id');
       
        return view('/manage', compact('page', 'student','teachers'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);
       
        $this->saveDB($student, $request);

        $url = url('dashboard');
        $error = false;
        $message = Str::singular(Str::title($this->title)) . ' saved successfully';
        return compact('error', 'message', 'url');
    }

     public function destroy($id): array
    {
        Student::findOrFail($id);
        Student::destroy($id);
        $error = false;
        $message = Str::singular(Str::title($this->title)) . ' Deleted successfully';
        return compact('error', 'message');
    }

    public function mark()
    {
        $title = 'Student Marks';

        $page = collect();
        $page->title = $title;
        $page->link = url('students/mark');
        return view('mark', compact('page'));
        
    }

    public function marklist(Request $request)
    {
        $detail = StudentMark::select(['student_id', 'maths', 'science','history','term_id','total_mark','created_at','id'])->with('student','term');
        if (isset($request->form)) {
            foreach ($request->form as $search) {
                
                if ($search['value'] != NULL && $search['name'] == 'student_id') {
                    $detail->where('student_id', $search['value']);
                }
               
            }
        }
       
        $detail->orderBy('id', 'desc');
        return DataTables::of($detail)
            ->editColumn('student_id', function ($detail) {
                return $detail->student->name ?? '';
            })
             ->editColumn('term_id', function ($detail) {
                return $detail->term->name ?? '';
            })
            ->editColumn('created_at', function ($detail) {
                return date("M d, Y h:i:s A", strtotime($detail->created_at));
            })
            ->addColumn('action', function ($detail) {
                $action = '';
                $edit_url = url('students/mark/' . $detail->id . '/edit');
                $action .= HtmlHelper::editButton($edit_url);
                $action .= HtmlHelper::deleteButton($detail->id);
                return $action;
            })
            ->removeColumn('id','student','term')
            ->escapeColumns([])
            ->make(false);
    }

    public function markcreate()
    {
        $page = collect();
        $page->title = 'Student Mark';
        $page->link = url('students/mark');
        $page->form_url = url('students/mark/store');
        $page->form_method = 'POST';

        $students = Student::pluck('name', 'id');
        $terms = Term::pluck('name', 'id');
       
        $mark = null;

        return view('markmanage', compact('page','mark','students','terms'));
    }

    public function markstore(StudentMarkRequest $request)
    {
        $mark = New StudentMark();
       
        $this->markSaveDB($mark, $request);

        $url = url('students/mark');
        $error = false;
        $message = Str::singular(Str::title($this->title)) . ' added successfully';
        return compact('error', 'message', 'url');
    }

     public function markSaveDB($table, $request)
    {
        $table->student_id = $request->student_id;
        $table->maths = $request->maths;
        $table->science = $request->science;
        $table->history = $request->history;
        $table->term_id = $request->term;
        $total_mark = $request->maths + $request->science +$request->history;
        $table->total_mark = $total_mark;
       
        $table->save();
    }

    public function markedit($id)
    {
        $mark = StudentMark::findOrFail($id);
        $page = collect();
        $page->title = 'Student Mark';
        $page->link = url('students/mark');
        $page->form_url = url('students/mark/update/' . $mark->id);
        $page->form_method = 'PUT';
        
        $students = Student::pluck('name', 'id');
        $terms = Term::pluck('name', 'id');
       
        return view('/markmanage', compact('page', 'mark','students','terms'));
    }

    public function markupdate(StudentMarkRequest $request, $id)
    {
        $mark = StudentMark::findOrFail($id);
       
        $this->markSaveDB($mark, $request);

        $url = url('students/mark');
        $error = false;
        $message = Str::singular(Str::title($this->title)) . ' saved successfully';
        return compact('error', 'message', 'url');
    }

     public function markdestroy($id): array
    {
        StudentMark::findOrFail($id);
        StudentMark::destroy($id);
        $error = false;
        $message = Str::singular(Str::title($this->title)) . ' Deleted successfully';
        return compact('error', 'message');
    }

}
