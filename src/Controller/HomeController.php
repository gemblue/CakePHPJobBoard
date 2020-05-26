<?php
declare(strict_types=1);

namespace App\Controller;

use \App\Model\Table\JobsTable;

/**
 * Home Controller
 */
class HomeController extends AppController
{
    public $Jobs;

    public function initialize(): void
    {
        parent::initialize();

        $this->Jobs = new JobsTable;

        $this->viewBuilder()->setLayout('public');
    }

    /**
     * Index method
     * 
     * Show jobs ..
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies'],
        ];
        
        $this->set([
            'title' => 'Homepage',
            'jobs' => $this->paginate($this->Jobs)
        ]);
    }
}