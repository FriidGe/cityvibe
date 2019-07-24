<?php

    class Model
    {
        public $db;

        function __construct()
        {
            $this->db = DataBase::getDB();
        }

        public function getData()
        {

        }
    }