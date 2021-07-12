<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $auth;
    /**
     * @var Auth
     */
    protected $config;

    /**
     * @var \CodeIgniter\Session\Session
     */
    protected $session;

    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        $this->session = service('session');

        $this->config = config('Auth');
        $this->auth = service('authentication');
    }

    public function index()
    {
        $this->data['title'] =  "Trang chủ" . $this->data['title'];
        //echo $this->data['title'];
        //die();  

        return view($this->data['content'], $this->data);
    }
    public function set_area($area)
    {
        helper("cookie");

        // store a cookie value
        $this->response->setCookie(array(
            'name' => 'area_current',
            'value' => $area,
            'expire' => 3600 * 30
        ));
        return redirect()->to(base_url())->withCookies();
        // print_r($area);
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
        // exit();
    }
    public function login()
    {
        // No need to show a login form if the user
        // is already logged in.
        if ($this->auth->check()) {
            $redirectURL = session('redirect_url') ?? site_url('/');
            unset($_SESSION['redirect_url']);

            return redirect()->to($redirectURL);
        }

        // Set a return URL if none is specified
        $_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? site_url('/');

        return view($this->data['content'], $this->data);
    }

    public function contact()
    {
        $this->data['title'] =  "Liên hệ" . $this->data['title'];
        //echo $this->data['title'];
        //die();  

        return view($this->data['content'], $this->data);
    }
    public function about()
    {
        $this->data['title'] =  "Giới thiệu" . $this->data['title'];
        //echo $this->data['title'];
        //die();  

        return view($this->data['content'], $this->data);
    }
    public function library()
    {
        $this->data['title'] =  "Thư viện" . $this->data['title'];
        //echo $this->data['title'];
        //die();  

        $library_model = model("LibraryModel");
        $this->data['libraries'] = $library_model->findAll();


        $library_model->image($this->data['libraries']);
        return view($this->data['content'], $this->data);
    }
}
