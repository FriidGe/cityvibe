<?php

    class CityModel extends Model
    {
        public function getData()
        {
            $query = "SELECT * FROM `cities` GROUP BY `name`";
            return $this->db->select($query);

        }

        public function getCities()
        {
            $sql = "SELECT name, url FROM city";
            return $this->db->select($sql);
        }

        public function getCategoryFromCity($city)
        {
            $query = "  SELECT city.name city, city.url cityurl, category.name category, category.url categoryurl
                        FROM category
                        INNER JOIN citycategory on citycategory.idcategory = category.id 
                        INNER JOIN city on city.id = citycategory.idcity
                        WHERE city.name = '$city' ";
            return $this->db->select($query);
        }

        public function getCategoryImg($city, $category)
        {
            $query = "  SELECT place.officialImg
                    FROM place 
                    INNER JOIN statisctics on statisctics.idPlace = place.id
                    JOIN (SELECT MAX(statisctics.date) AS max_date FROM statisctics) date on statisctics.date = date.max_date
                    INNER JOIN citycategory on citycategory.id = place.idCityCategory
                    INNER JOIN city on city.id = citycategory.idcity
                    INNER JOIN category on category.id = citycategory.idCategory
                    WHERE city.name = '$city' AND category.name = '$category'
                    ORDER BY statisctics.count DESC ";
            return $this->db->select($query);
        }

    }