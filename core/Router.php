<?php

    include_once ROOT . '/helpers/RoutChecker.php';

    class Router
    {

        private function getURI()
        {
            if (!empty($_SERVER['REQUEST_URI'])) {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }

        public function run()
        {
            $uri = $this->getURI();

            $segments = explode('/', $uri);

            if (empty($uri)) {
                $controllerName = "MainController";
                $actionName = "ActionIndex";
            } elseif (count($segments) == 1 && !empty($uri)) {

                if ($segments[0] === 'admin') {
                    $controllerName = "AdminController";
                    $actionName = "ActionIndex";
                } else {
                    $check = new RoutChecker();
                    $city = $check->checkRoutCity($segments[0]);
                    if (!empty($city)) {
                        $controllerName = "CityController";
                        $actionName = "ActionIndex";
                    } else {
                        $controllerName = "Error404Controller";
                        $actionName = "ActionIndex";
                    }
                }
            } elseif (count($segments) == 2 && !empty($uri)) {

                if ($segments[0] === 'admin' && $segments[1] === 'refreshphotos') {
                    $controllerName = "AdminController";
                    $actionName = "RefreshPhotos";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'refreshphotosfromlocation') {
                    $controllerName = "AdminController";
                    $actionName = "RefreshPhotosLocation";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'refresh_statistics') {
                    $controllerName = "AdminController";
                    $actionName = "RefreshStatistics";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'refresh_top') {
                    $controllerName = "AdminController";
                    $actionName = "RefreshTop";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'cities') {
                    $controllerName = "AdminController";
                    $actionName = "Cities";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'category') {
                    $controllerName = "AdminController";
                    $actionName = "Category";
                    if (isset($_POST["city"])) {
                        $city = array("id" => $_POST["city"]);

                    } else $city = array("" => "");
                } elseif ($segments[0] === 'admin' && $segments[1] === 'places') {
                    $controllerName = "AdminController";
                    $actionName = "Places";
                    if (isset($_POST["city"]) && !isset($_POST["category"])) {
                        $city = array("id" => $_POST["city"]);
                    } else $city = array("" => "");
                } else {

                    $check = new RoutChecker();

                    $city = $check->checkRoutCategory($segments[0], $segments[1]);

                    if (!empty($city)) {
                        $controllerName = "CategoryController";
                        $actionName = "ActionIndex";
                    } elseif ($segments[1] === 'hotel') {
                        $city = $check->checkRoutCategory($segments[0], 'hotels');
                        if (!empty($city)) {
                            $controllerName = "CategoryController";
                            $actionName = "ActionHotel";
                        } else {
                            $controllerName = "Error404Controller";
                            $actionName = "ActionIndex";
                        }
                    } elseif ($segments[1] === 'hotelgo') {
                        $city = $check->checkRoutCategory($segments[0], 'hotels');
                        if (!empty($city)) {
                            $controllerName = "CategoryController";
                            $actionName = "ActionHotelGo";
                        } else {
                            $controllerName = "Error404Controller";
                            $actionName = "ActionIndex";
                        }
                    } else {
                        $controllerName = "Error404Controller";
                        $actionName = "ActionIndex";
                    }
                }
            } elseif (count($segments) == 3 && !empty($uri)) {
                if ($segments[0] === 'admin' && $segments[1] === 'cities' && $segments[2] === 'add') { //Проверка на админку
                    $controllerName = "AdminController";
                    $actionName = "AddCities";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'cities' && $segments[2] === 'del') {
                    $controllerName = "AdminController";
                    $actionName = "DelCities";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'category' && $segments[2] === 'add') {
                    $controllerName = "AdminController";
                    $actionName = "AddCategory";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'category' && $segments[2] === 'del') {
                    $controllerName = "AdminController";
                    $actionName = "DelCategory";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'category' && $segments[2] === 'addincity') {
                    $controllerName = "AdminController";
                    $actionName = "AddInCityCategory";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'category' && $segments[2] === 'delincity') {
                    $controllerName = "AdminController";
                    $actionName = "DelInCityCategory";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'places' && $segments[2] === 'add') {

                    $controllerName = "AdminController";
                    $actionName = "AddPlace";
                } elseif ($segments[0] === 'admin' && $segments[1] === 'places' && $segments[2] === 'del') {

                    $controllerName = "AdminController";
                    $actionName = "DelPlace";
                } else {
                    $controllerName = "Error404Controller";
                    $actionName = "ActionIndex";
                }

            } else {
                $controllerName = "Error404Controller";
                $actionName = "ActionIndex";
            }

            $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

            if (file_exists($controllerFile)) {
                include_once($controllerFile);
            }

            $controllerObject = new $controllerName;

            if ($city != null) {
                call_user_func_array(array($controllerObject, $actionName), $city);
            } else {
                call_user_func_array(array($controllerObject, $actionName), array());
            }
        }

    }