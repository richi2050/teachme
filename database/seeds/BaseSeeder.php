<?php

Use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //esta nos permite crear nuevos fakers
Use Faker\Generator;  //objeto que se utiliza para el metodo create  de Faker


abstract class BaseSeeder extends Seeder
{
    protected function createMultiple($total, array $customValues = array()){
        for($i=1; $i <= $total; $i++){
            $this->create($customValues);
        }
    }

    abstract public function getModel();
    abstract function getDummyData(Generator $faker, array $customValues = array());

    protected function create(array $customValues = array()){
        $values = $this->getDummyData(Faker::create(), $customValues);
        $values = array_merge($values, $customValues);
         $this->getModel()->create($values);
    }
}