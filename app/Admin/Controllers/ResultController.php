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
            ->header('Index')
            ->description('description')
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

        $grid->id('Id');
        $grid->no('No');
        $grid->exam_registration_number('Exam registration number');
        $grid->name('Name');
        $grid->total_points('Total points');
        $grid->chinese('Chinese');
        $grid->mathematics('Mathematics');
        $grid->english('English');
        $grid->science('Science');
        $grid->arts('Arts');
        $grid->physical_education('Physical education');
        $grid->physicochemical('Physicochemical');
        $grid->information_technology('Information technology');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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

        $show->id('Id');
        $show->no('No');
        $show->exam_registration_number('Exam registration number');
        $show->name('Name');
        $show->total_points('Total points');
        $show->chinese('Chinese');
        $show->mathematics('Mathematics');
        $show->english('English');
        $show->science('Science');
        $show->arts('Arts');
        $show->physical_education('Physical education');
        $show->physicochemical('Physicochemical');
        $show->information_technology('Information technology');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

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

        $form->number('no', 'No');
        $form->number('exam_registration_number', 'Exam registration number');
        $form->text('name', 'Name');
        $form->number('total_points', 'Total points');
        $form->number('chinese', 'Chinese');
        $form->number('mathematics', 'Mathematics');
        $form->number('english', 'English');
        $form->number('science', 'Science');
        $form->number('arts', 'Arts');
        $form->number('physical_education', 'Physical education');
        $form->number('physicochemical', 'Physicochemical');
        $form->number('information_technology', 'Information technology');

        return $form;
    }
}
