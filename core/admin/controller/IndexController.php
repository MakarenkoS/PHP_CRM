<?php

namespace core\admin\controller;


use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
    protected function inputData() {

        $db = Model::instance();


//        $query = "SELECT * from articles, pages WHERE articles.id = 1";
//
//        $query2 = "SELECT * FROM articles JOIN pages ON articles.id = 1";
//
//
//        $res = $db->query($query);
//
//        $res2 = $db->query($query2);

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

        $files['gallery_img'] = ["red''.jpg", 'blue.jpg', 'black.jpg'];
        $files['img'] = 'main_img.jpg';


        $res = $db->add($table, [
            'fields' => ['name' => 'Vasya', 'content' => 'Hello'],
            'except' => ['name'],
            'files' => $files
        ]);

        exit('id = ' . $res['id'] . ' ' . ' name = ' . $res['name']);
    }
}