<?php
namespace App\Models;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Places
 *
 * @author lenovo
 */
class Places extends Simple\CSVModel{
    //put your code here
    protected $origin = WRITEPATH . '/data/Places.csv';
    protected $keyField = 'id';
    protected $validationRles = [];
}
