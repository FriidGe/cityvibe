<?php

    class RoutChecker {

        public function checkRoutCity($rout){
            $db = DataBase::getDB();
            $sql = "SELECT name city, url cityurl FROM city WHERE url = '$rout'";
            return $db->select($sql);
        }

        public function checkRoutCategory($city, $category){
            $db = DataBase::getDB();
            $sql = "SELECT city.name city, city.url cityurl, category.name category, category.url categoryurl
                        FROM category
                        INNER JOIN citycategory on citycategory.idcategory = category.id 
                        INNER JOIN city on city.id = citycategory.idcity
                        WHERE city.url = '$city' AND category.url = '$category'";
            return $db->select($sql);
        }
    }

