<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    // Your code
    public function beforeRender(Event $event)
    {
        $this->viewBuilder()->setClassName('Smarty'); // SET SMARTY VIEW
    }
    // Your code
}
