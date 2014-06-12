<?php

App::uses('AppController', 'Controller');

/**
 * Taggeds Controller
 *
 * @property Tagged $Tagged
 */
class TaggedsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Tagged->recursive = 0;
        $this->set('taggeds', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Tagged->id = $id;
        if (!$this->Tagged->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tagged')));
        }
        $this->set('tagged', $this->Tagged->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Tagged->create();
            if ($this->Tagged->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tagged')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('tagged')));
            }
        }
        $users = $this->Tagged->User->find('list');
        $tags = $this->Tagged->Tag->find('list');
        $this->set(compact('users', 'tags'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Tagged->id = $id;
        if (!$this->Tagged->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tagged')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Tagged->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tagged')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('tagged')));
            }
        } else {
            $this->request->data = $this->Tagged->read(null, $id);
        }
        $users = $this->Tagged->User->find('list');
        $tags = $this->Tagged->Tag->find('list');
        $this->set(compact('users', 'tags'));
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
        $this->Tagged->id = $id;
        if (!$this->Tagged->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tagged')));
        }
        if ($this->Tagged->delete()) {

            $this->flashSuccess(__('The %s deleted', __('tagged')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('tagged')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Tagged->recursive = 0;
        $this->set('taggeds', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Tagged->id = $id;
        if (!$this->Tagged->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tagged')));
        }
        $this->set('tagged', $this->Tagged->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Tagged->create();
            if ($this->Tagged->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tagged')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('tagged')));
            }
        }
        $users = $this->Tagged->User->find('list');
        $tags = $this->Tagged->Tag->find('list');
        $this->set(compact('users', 'tags'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Tagged->id = $id;
        if (!$this->Tagged->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tagged')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Tagged->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tagged')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('tagged')));
            }
        } else {
            $this->request->data = $this->Tagged->read(null, $id);
        }
        $users = $this->Tagged->User->find('list');
        $tags = $this->Tagged->Tag->find('list');
        $this->set(compact('users', 'tags'));
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
        $this->Tagged->id = $id;
        if (!$this->Tagged->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tagged')));
        }
        if ($this->Tagged->delete()) {

            $this->flashSuccess(__('The %s deleted', __('tagged')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('tagged')));

        $this->redirect(array('action' => 'index'));
    }

}
