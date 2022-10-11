<?php

abstract class AbstractController
{

    protected $model = null;
    protected $view = null;


    public function setModel(Model $m)
    {
        $this->model = $m;
    }

    public function setView(View $v)
    {
          $this->view = $v;
    }

    abstract protected function run();

} 