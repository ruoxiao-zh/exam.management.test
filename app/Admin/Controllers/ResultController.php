<?php

namespace App\Admin\Controllers;

use App\Result;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ResultController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('成绩列表')
            ->description('考生成绩列表')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Result);

        $grid->id('Id')->sortable();
        $grid->no('考生号');
        $grid->exam_registration_number('准考证号');
        $grid->name('姓名');
        $grid->total_points('总分')->sortable();
        $grid->chinese('语文')->sortable();
        $grid->mathematics('数学')->sortable();
        $grid->english('英语')->sortable();
        $grid->science('理科综合')->sortable();
        $grid->arts('文科综合')->sortable();
        $grid->physical_education('体育')->sortable();
        $grid->discounts('优惠')->sortable();
        $grid->physicochemical('理化')->sortable();
        $grid->information_technology('信息')->sortable();
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        $grid->filter(function ($filter) {
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            $filter->equal('no', '考生号');
            $filter->equal('exam_registration_number', '准考证号');
            $filter->like('name', '姓名');
        });

        $grid->paginate(15);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Result::findOrFail($id));

        $show->id('Id')->sortable();
        $show->no('考生号');
        $show->exam_registration_number('准考证号');
        $show->name('姓名');
        $show->total_points('总分');
        $show->chinese('语文');
        $show->mathematics('数学');
        $show->english('英语');
        $show->science('理科综合');
        $show->arts('文科综合');
        $show->physical_education('体育');
        $show->discounts('优惠');
        $show->physicochemical('理化');
        $show->information_technology('信息');
        $show->created_at('创建时间');
        $show->updated_at('更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Result);

        $form->number('no', '考生号');
        $form->number('exam_registration_number', '准考证号');
        $form->text('name', '姓名');
        $form->number('total_points', '总分');
        $form->number('chinese', '语文');
        $form->number('mathematics', '数学');
        $form->number('english', '英语');
        $form->number('science', '理科综合');
        $form->number('arts', '文科综合');
        $form->number('physical_education', '体育');
        $form->number('discounts', '优惠');
        $form->number('physicochemical', '理化');
        $form->number('information_technology', '信息');

        return $form;
    }
}
