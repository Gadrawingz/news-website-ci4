<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    protected $db;
    protected $table = 'news';
    
    public function __construct()
    {
        // $this->load->model('Authdata');
        $this->db = \Config\Database::connect();
        // OR: $this->db = db_connect();
    }

    public function index()
    {
        //$model = model(NewsModel::class);

        $data = [
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    public function show($slug = null)
    {
        /*
        $model = model(NewsModel::class);

        // $data['news'] = $model->getNews($slug);
        $data['news'] = "cole-apogizes-for-a-diss";

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        // $data['title'] = $data['news']['title'];
        $data['title'] = "Cole Apologizes";

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
        */
    }



}
