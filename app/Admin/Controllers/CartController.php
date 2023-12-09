<?php

namespace App\Admin\Controllers;

use App\Models\Shop\Cart;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CartController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cart';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cart());

        $grid->column('id', __('Id'));
        $grid->column('product_id', __('Product id'));
        $grid->column('user_id', __('User id'));
        $grid->column('description', __('Description'));
        $grid->column('amount', __('Amount'));
        $grid->column('total', __('Total'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Cart::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_id', __('Product id'));
        $show->field('user_id', __('User id'));
        $show->field('description', __('Description'));
        $show->field('amount', __('Amount'));
        $show->field('total', __('Total'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Cart());

        $form->number('product_id', __('Product id'));
        $form->number('user_id', __('User id'));
        $form->textarea('description', __('Description'));
        $form->text('amount', __('Amount'));
        $form->text('total', __('Total'));

        return $form;
    }
}
