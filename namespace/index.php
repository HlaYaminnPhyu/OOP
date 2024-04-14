<?php

use Html\form\Input;
use Html\table\Table;

require_once "./Head.php";
require_once "./Button.php";
require_once "./Form.php";
require_once "./Input.php";
require_once "./Select.php";
require_once "./Table.php";

$table=new Table;
var_dump($table->table());

$input=new Input;
var_dump($input->input());

$btn=new \Html\form\Button;
print_r($btn->button());