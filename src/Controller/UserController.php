<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;

class UserController extends AppController
{
    public $user;

    public function initialize(): void
    {
        parent::initialize();
        
        $this->user = new UsersTable;
    }

    public function index()
    {
        $this->paginate = [
            'limit' => '5'
        ];
        
        $this->set([
            'title' => 'Daftar User',
            'users' => $this->paginate($this->user->find())
        ]);
    }

    public function search()
    {
        
    }
    
    public function add()
    {
        $this->set([
            'title' => 'Tambah User'
        ]);
    }

    public function edit($id)
    {
        $this->set([
            'title' => 'Edit User',
            'user' => $this->user->findById($id)->firstOrFail()
        ]);
    }

    public function insert()
    {
        $data = $this->request->getData();
        
        $user = $this->user->newEmptyEntity();
        
        $user->name = $data['name'];
        $user->email = $data['email'];

        if ($this->user->save($user)) {
            $this->Flash->success(__('Successfully saved ..'));
            return $this->redirect('/user');
        }
    }

    public function update($id)
    {
        $user = $this->user->findById($id)->firstOrFail();
        
        $this->user->patchEntity($user, $this->request->getData());
        
        if ($this->user->save($user)) {
            $this->Flash->success(__('User has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        
        $this->Flash->error(__('Unable to update your article.'));
        
        $this->set([
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    public function delete($id) 
    {
        $user = $this->user->findById($id)->firstOrFail();
        
        if ($this->user->delete($user)) {
            $this->Flash->success(__('The {0} user has been deleted.', $user->name));
            return $this->redirect(['action' => 'index']);
        }
    }
}