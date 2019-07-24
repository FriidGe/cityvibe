<?php

    class MainModel extends Model
    {
        public function getRegions()
        {
            $sql = "SELECT r.name FROM city c, region r WHERE c.idRegion = r.id GROUP BY r.name";
            return $this->db->select($sql);
        }

        public function getCities()
        {
            $sql = "SELECT c.id, c.name city, c.url url, r.name region FROM city c INNER JOIN region r on c.idRegion = r.id";
            return $this->db->select($sql);
        }

        public function getCitiesImg()
        {
            $sql = "SELECT city.id, city.name city, place.officialImg
                    FROM place 
                    INNER JOIN statisctics on statisctics.idPlace = place.id
                    JOIN (SELECT MAX(statisctics.date) AS max_date FROM statisctics) date on statisctics.date = date.max_date
                    INNER JOIN citycategory on citycategory.id = place.idCityCategory
                    INNER JOIN city on city.id = citycategory.idcity
                    ORDER BY statisctics.count DESC";
            return $this->db->select($sql);
        }

    }