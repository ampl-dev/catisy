<?php

App::uses('AppController', 'Controller');

/**
 * Epics Controller
 *
 * @property Epic $Epic
 */
class EpicsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Epic->recursive = 0;
        $this->set('epics', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Epic->id = $id;
        if (!$this->Epic->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epic')));
        }
        $this->set('epic', $this->Epic->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Epic->create();
            if ($this->Epic->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epic')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('epic')));
            }
        }
        $projects = $this->Epic->Project->find('list');
        $creators = $this->Epic->Creator->find('list');
        $tickets = $this->Epic->Ticket->find('list');
        $this->set(compact('projects', 'creators', 'tickets'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Epic->id = $id;
        if (!$this->Epic->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epic')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Epic->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epic')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('epic')));
            }
        } else {
            $this->request->data = $this->Epic->read(null, $id);
        }
        $projects = $this->Epic->Project->find('list');
        $creators = $this->Epic->Creator->find('list');
        $tickets = $this->Epic->Ticket->find('list');
        $this->set(compact('projects', 'creators', 'tickets'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Epic->id = $id;
        if (!$this->Epic->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epic')));
        }
        if ($this->Epic->delete()) {

            $this->flashSuccess(__('The %s deleted', __('epic')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('epic')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Epic->recursive = 0;
        $this->set('epics', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Epic->id = $id;
        if (!$this->Epic->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epic')));
        }
        $this->set('epic', $this->Epic->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Epic->create();
            if ($this->Epic->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epic')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('epic')));
            }
        }
        $projects = $this->Epic->Project->find('list');
        $creators = $this->Epic->Creator->find('list');
        $tickets = $this->Epic->Ticket->find('list');
        $this->set(compact('projects', 'creators', 'tickets'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Epic->id = $id;
        if (!$this->Epic->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epic')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Epic->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epic')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('epic')));
            }
        } else {
            $this->request->data = $this->Epic->read(null, $id);
        }
        $projects = $this->Epic->Project->find('list');
        $creators = $this->Epic->Creator->find('list');
        $tickets = $this->Epic->Ticket->find('list');
        $this->set(compact('projects', 'creators', 'tickets'));
    }

    /**
     * admin_delete method
     *
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Epic->id = $id;
        if (!$this->Epic->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epic')));
        }
        if ($this->Epic->delete()) {

            $this->flashSuccess(__('The %s deleted', __('epic')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('epic')));

        $this->redirect(array('action' => 'index'));
    }

}
