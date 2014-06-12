<?php

App::uses('AppController', 'Controller');

/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Project->recursive = 0;
        $this->set('projects', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project')));
        }
        $this->set('project', $this->Project->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Project->create();
            if ($this->Project->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('project')));
            }
        }
        $creators = $this->Project->Creator->find('list');
        $members = $this->Project->Member->find('list');
        $this->set(compact('creators', 'members'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Project->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('project')));
            }
        } else {
            $this->request->data = $this->Project->read(null, $id);
        }
        $creators = $this->Project->Creator->find('list');
        $members = $this->Project->Member->find('list');
        $this->set(compact('creators', 'members'));
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
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project')));
        }
        if ($this->Project->delete()) {

            $this->flashSuccess(__('The %s deleted', __('project')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('project')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Project->recursive = 0;
        $this->set('projects', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project')));
        }
        $this->set('project', $this->Project->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Project->create();
            if ($this->Project->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('project')));
            }
        }
        $creators = $this->Project->Creator->find('list');
        $members = $this->Project->Member->find('list');
        $this->set(compact('creators', 'members'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Project->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('project')));
            }
        } else {
            $this->request->data = $this->Project->read(null, $id);
        }
        $creators = $this->Project->Creator->find('list');
        $members = $this->Project->Member->find('list');
        $this->set(compact('creators', 'members'));
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
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project')));
        }
        if ($this->Project->delete()) {

            $this->flashSuccess(__('The %s deleted', __('project')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('project')));

        $this->redirect(array('action' => 'index'));
    }

}
