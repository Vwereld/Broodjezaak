<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 29/03/2019
 * Time: 09:27
 */
namespace App\Repositories;


abstract class Repository {
    protected $model = FALSE;

    public function get($select='*'){
        $builder = $this->model->select($select);
        return $builder->get();
    }
}
