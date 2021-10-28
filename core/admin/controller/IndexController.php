<?php

namespace core\admin\controller;


use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
    protected function inputData() {

        $db = Model::instance();

        $query = "SELECT * from articles, pages WHERE articles.id = 2";
        $query2 = "SELECT * FROM articles JOIN pages ON articles.id = 1";


        $res = $db->query($query);

        $res2 = $db->query($query2);

//        $query = "SELECT id, name FROM product WHERE parent_id =
//                  (SELECT id FROM category WHERE name = 'Apple')";
//          $query = "SELECT category.id, category.name, product.id as p_id, product.name as p_name
//                    FROM product
//                    LEFT JOIN category ON product.parent_id = category.id
//                    ";

//        $query = "SELECT teachers.id, teachers.name, students.id as s_id, students.name as s_name
//                    FROM teachers
//                    LEFT JOIN stud_teach ON teachers.id = stud_teach.teachers
//                    LEFT JOIN students ON stud_teach.students = students.id
//                    ";


        $table = 'teachers';
//        $res = $db->get($table, [
//            'fields' => ['id', 'name'],
//            'where' => ['fio' => 'smirnova', 'name' => 'Masha', 'surname' => 'Sergeevna'],
//            'operand' => ['<>', '='],
//            'condition' => ['AND'],
//            'order' => ['fio', 'name'],
//            'order_direction' => ['ASC', 'DESC'],
//            'limit' => '1'
//
//        ]);

        exit('admin panel');
    }
}