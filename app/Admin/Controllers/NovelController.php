<?php

namespace App\Admin\Controllers;

use App\Models\Novel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NovelController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '小说';

    //列表使用
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Novel());

        $grid->column('id', __('id'));
        $grid->column('title', __('小说名'));
        $grid->column('auth', __('作者'));
        $grid->column('img', __('封面图'));
        $grid->column('description', __('描述信息'))->limit(20);

        return $grid;
    }

    //详情使用
    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Novel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Name'));
//        $show->field('email', __('Email'));
//        $show->field('email_verified_at', __('Email verified at'));
//        $show->field('password', __('Password'));
//        $show->field('remember_token', __('Remember token'));
//        $show->field('created_at', __('Created at'));
//        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    //编辑使用
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(New Novel());

        $form->text('title', __('title'));
//        $form->email('email', __('Email'));
//        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
//        $form->password('password', __('Password'));
//        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
