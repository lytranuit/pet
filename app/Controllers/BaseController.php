<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];
    protected $data = [];
    /**
     * Constructor.
     */

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        // $this->session = \Config\Services::session();
        $session = \Config\Services::session();
        $language = \Config\Services::language();
        $language->setLocale($session->lang);
        //$module = $this->router->fetch_module();
        //$class = $this->router->fetch_class(); // class = controller
        //$method = $this->router->fetch_method();
        $router = service('router');
        $controller  = $router->controllerName();
        $method = $router->methodName();
        $explode = explode("\\", $controller);
        $content = "frontend" . "/" . strtolower($explode[count($explode) - 1]) . "/" . $method;

        // $language = \Config\Services::language();
        // $short_lang =  $language->getLocale();
        // print_r($short_lang);
        // die();
        // echo "<pre>";
        // print_r(user());
        // die();
        //echo $content;
        //die();
        $this->data['stylesheet_tag'] = array();
        $this->data['javascript_tag'] = array();
        $this->data['content'] = $content;
        $this->data['template'] = "main";
        $this->data['title'] = " | Simba Pet";
        /*
        MENU
        */
        $menu_model = model("MenuModel");
        $list_menu = $menu_model->orderBy('order', 'ASC')->asObject()->findAll();
        $list_parent = array_filter((array) $list_menu, function ($item) {
            return $item->parent_id == 0;
        });
        foreach ($list_parent as &$row) {
            $child = array_filter((array) $list_menu, function ($item) use ($row) {
                return $item->parent_id == $row->id;
            });
            foreach ($child as &$row2) {
                $child2 = array_filter((array) $list_menu, function ($item) use ($row2) {
                    return $item->parent_id == $row2->id;
                });
                $row2->child = $child2;
            }
            $row->child = $child;
        }
        // echo "<pre>";
        // print_r($list_menu);
        // die();
        $this->data['list_menu'] = $list_parent;
    }
}
