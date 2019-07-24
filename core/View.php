<?php

   class View{

       function generate($title, $header, $view, $data = null, $data_more = null, $cityUrl = null, $data_more1 = null){
           include 'template/template.php';
       }

       function render(array $args = []){
           foreach ($args as $key => $arg){
               $$key = $arg;
           }
           include 'template/template.php';
       }
   }