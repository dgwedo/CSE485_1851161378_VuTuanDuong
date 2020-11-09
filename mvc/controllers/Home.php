<?php
class Home extends Controller
{
    function sayHi()
    {
        // model
        $category = $this->model("CategoryModel");
        // echo $category->getData();


        //view
        $viewHome = $this->view("Home", [
            "category" => $category->getData()
        ]);
    }
}
