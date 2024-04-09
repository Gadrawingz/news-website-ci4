<?php

namespace App\Controllers;

// Classed that are imported
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    // 01. Index
    public function index()
    {
        //return view('');
        return "Home page!";
    }


    // 02. view
    public function view($page = 'home') {
        // This func checks whether file is it's expected to be.
        if(!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // If the requested page is not there, show default error page
            //throw new PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page);

        return 
            view('templates/header', $data).
            view('pages/' . $page).
            view('templates/footer');
    }
}
