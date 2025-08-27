<?php

namespace Framework;

use App\Controllers\ErrorController;
use Framework\Middleware\Authorize;

class Router
{
  protected $routes = [];

  /**
   * Add a new route
   *
   * @param string $method
   * @param string $uri
   * @param string $action
   * @return void
   */

  public function registerRoute($method, $uri, $action, $middleware = [])
  {
    // php list assigns the defined variable to index key positions
    list($controller, $controllerMethod) = explode('@', $action);

    $this->routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller,
      'controllerMethod' => $controllerMethod,
      'middleware' => $middleware
    ];
  }

  /**
   * Add a GET route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

  public function get($uri, $controller, $middleware = [])
  {
    $this->registerRoute('GET', $uri, $controller, $middleware);
  }

  /**
   * Add a POST route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

  public function post($uri, $controller, $middleware = [])
  {
    $this->registerRoute('POST', $uri, $controller, $middleware);
  }

  /**
   * Add a POST route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

  public function put($uri, $controller, $middleware = [])
  {
    $this->registerRoute('PUT', $uri, $controller, $middleware);
  }

  /**
   * Add a POST route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

  public function delete($uri, $controller, $middleware = [])
  {
    $this->registerRoute('DELETE', $uri, $controller, $middleware);
  }

  /**
   * Route the request to the corresponding controller
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */
  public function route($uri)
  {

    $requestMethod = $_SERVER['REQUEST_METHOD'];

    // check for _method input
    if ($requestMethod === 'POST' && isset($_POST['_method'])) {
      // override request method with the value of _method
      $requestMethod = strtoupper($_POST['_method']);
    }

    foreach ($this->routes as $route) {
      // split the current URI into segments
      $uriSegments = explode('/', trim($uri, '/'));

      // split the route URI into segments
      $routeSegments = explode('/', trim($route['uri'], '/'));

      $match = true;

      // check if number of segments matches
      if (count($uriSegments) === count($routeSegments) && strtoupper($route['method'] === $requestMethod)) {
        $params = [];

        $match = true;

        for ($i = 0; $i < count($uriSegments); $i++) {
          // if URIs do not match and there is no param
          if ($routeSegments[$i] !== $uriSegments[$i] && !preg_match('/\{(.+?)\}/', $routeSegments[$i])) {
            $match = false;
            break;
          }

          // Check for the param and add to $Params array
          /// preg_match() returns a $matches variable with any found matches
          if (preg_match('/\{(.+?)\}/', $routeSegments[$i], $matches)) {
            $params[$matches[1]] = $uriSegments[$i];
          }
        }

        if ($match) {

          // loop through middleware array
          foreach ($route['middleware'] as $middleware) {
            // since we only have one middleware, the $middleware variable is always expected to be a role
            (new Authorize()->handle($middleware));
          }

          // define namespace for controllers
          $controller = "App\\Controllers\\" . $route['controller'];
          $controllerMethod = $route['controllerMethod'];

          // instantiate controller and invoke method
          $controllerInstance = new $controller();
          $controllerInstance->$controllerMethod($params);
          return;
        }
      }

      // if ($route['uri'] === $uri && $route['method'] === $method) {
      //   // define namespace for controllers
      //   $controller = "App\\Controllers\\" . $route['controller'];
      //   $controllerMethod = $route['controllerMethod'];

      //   // instantiate controller and invoke method
      //   $controllerInstance = new $controller();
      //   $controllerInstance->$controllerMethod();
      //   return;
      // }
    }

    ErrorController::notFound();
  }
}
