<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Imports\ResultImport;
use App\Result;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\HasResourceActions;
use Illuminate\Http\Request;
use Excel;

class UploadController extends Controller
{
    use HasResourceActions;

    public function index(Content $content)
    {
        return $content
            ->header('成绩导入')
            ->description('请导入考生成绩')
            ->body(view('upload'));
    }

    public function form()
    {
        $form = new Form(new Result());

        $form->file('excel', '考生成绩统计表');

        $form->tools(function (Form\Tools $tools) {
            // 去掉`列表`按钮
            $tools->disableList();
        });

        $form->footer(function ($footer) {
            // 去掉`查看`checkbox
            $footer->disableViewCheck();
            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();
            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();
        });

        return $form;
    }


    public function import(Request $request, ResultImport $resultImport)
    {
        $this->validate($request, [
            'excel' => 'required',
        ], [
            'excel.required' => 'Excel 不能为空',
        ]);

        \Excel::import($resultImport, $request->file('excel'));

        session()->flash('ok', '数据导入成功!');

        return redirect('/admin/upload');
    }
}
