<?php

namespace App\Admin\Controllers;

use App\Models\Novel;
use App\Models\NovelChapter;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NovelChapterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '章节';

    //列表使用
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new NovelChapter());
        $grid->column('id', __('id'));
        $grid->column('novel.title',__('小说名'));
        $grid->column('title', __('章节名'));
        $grid->column('novel_index', __('章节序号'));
        //static $image = '';
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('发布时间'));

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
        $show = new Show(NovelChapter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Name'));
        $show->field('content', __('章节内容'));
//        $show->field('email', __('Email'));
//        $show->field('email_verified_at', __('Email verified at'));
//        $show->field('password', __('Password'));
//        $show->field('remember_token', __('Remember token'));
//        $show->field('created_at', __('Created at'));
//        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    //新增和编辑使用
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(New NovelChapter());

        $form->text('title', __('章节名'));
        $form->editor('content');

//        $form->email('email', __('Email'));
//        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
//        $form->password('password', __('Password'));
//        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
