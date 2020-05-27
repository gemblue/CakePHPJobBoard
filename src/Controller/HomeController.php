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
     * Before filter.
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        
        // Configure the login action to not require authentication, preventing
        $this->Authentication->addUnauthenticatedActions(['index', 'detail']);
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
            'title' => 'Welcome to the JobsDB Like',
            'jobs' => $this->paginate($this->Jobs)
        ]);
    }

    /**
     * Detail method
     * 
     * Show detail job by slug ..
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function detail($id)
    {
        $job = $this->Jobs->get($id, [
            'contain' => ['Companies'],
        ]);

        $this->set([
            'title' => 'Detail Jobs',
            'job' => $job
        ]);
    }
}