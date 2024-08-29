<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Liệt kê
    public function index(){
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    // Thêm
  public function create(){
        return view('student.create');
    }

    // Lưu
    public function store(Request $request){
        $student = $request->validate([
            'masv' => 'required|unique:students,masv',
            'ten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required|regex:/^0[0-9]{9}$/',
            'gioitinh' => 'required|in:nam,nữ,Nam,Nữ'
        ],[
            'masv.unique'=>'Mã sinh viên đã tồn tại.',
            'masv.required'=>'Vui lòng nhập mã sinh viên.',
            'ten.required'=>'Vui lòng nhập tên.',
            'ngaysinh.required'=>'Vui lòng chọn ngày sinh.',
            'sdt.required'=>'Vui lòng nhập số điện thoại.',
            'sdt.regex'=>'Số điện thoại bắt đầu bằng số 0 và phải 10 số.',
            'gioitinh.required'=>'Vui lòng nhập giới tính.',
            'gioitinh.in'=>'Giới tính chỉ có Nam và Nữ.'
        ]);

        $newstudent = Student::create($student);
        return redirect(route('student.all'))->with('success', 'Thêm sinh viên thành công');
        // $student = new Student;
        // $student->masv = $request->input('masv');
        // $student->ten = $request->input('ten');
        // $student->ngaysinh = $request->input('ngaysinh');
        // $student->sdt = $request->input('sdt');
        // $student->gioitinh = $request->input('gioitinh');
        // $student->save();
       
        // try {
            
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Lỗi thêm sinh viên.');
        // }
        
    }

    
    function s(){
        $students = Student::all();
        return view('student.search', compact('students'));
    }

    public function search(Request $request){
        $search = $request->input('search');
        // dd($search);
        if (empty($search)) {
            return view('student.search');
        }
        $students = Student::where('masv', $search)->get();   
        return view('student.search', compact('students'));
    }




    // public function search(Request $request)
    // {
    //      // Lấy mã sinh viên từ form
    //      $search = $request->input('search');
    
    //     // Tìm sinh viên theo mã sinh viên
    //     $students = Student::where('masv', $search)->get();
    
    //     if ($students) {
    //         // Nếu tìm thấy, trả về view hiển thị thông tin sinh viên
    //         return view('student.search', ['students' => $students]);
    //     } else {
    //         // Nếu không tìm thấy, trả về trang trước đó kèm thông báo lỗi
    //         return redirect()->back()->with('error', 'Student not found');
    //     }
    // }
}


