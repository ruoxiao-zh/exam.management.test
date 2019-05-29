<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request)
    {
        $this->validate($request, [
            'no'                       => 'required',
            'exam_registration_number' => 'required',
            'name'                     => 'required',
        ], [
            'no.required'                       => '考生号不能为空',
            'exam_registration_number.required' => '准考证号不能为空',
            'name.required'                     => '考生姓名不能为空',
        ]);

        $result = Result::where('no', (int)$request->no)->where('exam_registration_number', (int)$request->exam_registration_number)
            ->where('name', $request->name)->first();

        if ($result) {
            return view('index', compact('result'));
        }

        return back()->withErrors('注意: 没有查到成绩，请仔细检查所填写信息后，再次查询')->withInput();
    }
}
