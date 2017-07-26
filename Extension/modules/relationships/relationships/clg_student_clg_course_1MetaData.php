<?php
// created: 2017-07-26 11:32:34
$dictionary["clg_student_clg_course_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_student_clg_course_1' => 
    array (
      'lhs_module' => 'clg_Student',
      'lhs_table' => 'clg_student',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Course',
      'rhs_table' => 'clg_course',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_student_clg_course_1_c',
      'join_key_lhs' => 'clg_student_clg_course_1clg_student_ida',
      'join_key_rhs' => 'clg_student_clg_course_1clg_course_idb',
    ),
  ),
  'table' => 'clg_student_clg_course_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'clg_student_clg_course_1clg_student_ida' => 
    array (
      'name' => 'clg_student_clg_course_1clg_student_ida',
      'type' => 'id',
    ),
    'clg_student_clg_course_1clg_course_idb' => 
    array (
      'name' => 'clg_student_clg_course_1clg_course_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_student_clg_course_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_student_clg_course_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_student_clg_course_1clg_student_ida',
        1 => 'clg_student_clg_course_1clg_course_idb',
      ),
    ),
  ),
);