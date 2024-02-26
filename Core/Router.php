<?php
namespace Core;

class Router{
    protected $routes = [];/*todas mis rutas globales guardadas en un solo array al cual puedo acceder
    y me mapeara cualquier controller a traves de su metodo y su uri
    asi puedo tener muchos controllers de un mismo uri pero cada controller es especifico a
    los metodos restAPI*/

    private function add($method, $uri, $controller){//agregar al array un metodo de tipo X
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
        return $this;
    }

    public function get($uri,$controller){//Agregar un metodo tipo GET al array
        return $this->add('GET',$uri,$controller);
    }

    public function post($uri,$controller){//Agregar un metodo tipo POST al array
        return $this->add('POST',$uri,$controller);
    }

    public function delete($uri,$controller){//Agregar un metodo tipo DELETE al array
        return $this->add('DELETE',$uri,$controller);
    }
    public function put($uri,$controller){//Agregar un metodo tipo PUT al array
        return $this->add('PUT',$uri,$controller);
    }

    public function route($uri,$method){
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path('Http/controllers/'.$route["controller"]);// requiere la ruta que ya esta guardada en el controller y la integra
            }
        }
    }

}