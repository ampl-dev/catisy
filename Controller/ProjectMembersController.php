<?php

App::uses('AppController', 'Controller');

/**
 * ProjectMembers Controller
 *
 * @property ProjectMember $ProjectMember
 */
class ProjectMembersController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->ProjectMember->recursive = 0;
        $this->set('projectMembers', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->ProjectMember->id = $id;
        if (!$this->ProjectMember->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project member')));
        }
        $this->set('projectMember', $this->ProjectMember->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->ProjectMember->create();
            if ($this->ProjectMember->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project member')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('project member')));
            }
        }
        $projects = $this->ProjectMember->Project->find('list');
        $members = $this->ProjectMember->Member->find('list');
        $this->set(compact('projects', 'members'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->ProjectMember->id = $id;
        if (!$this->ProjectMember->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project member')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ProjectMember->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project member')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('project member')));
            }
        } else {
            $this->request->data = $this->ProjectMember->read(null, $id);
        }
        $projects = $this->ProjectMember->Project->find('list');
        $members = $this->ProjectMember->Member->find('list');
        $this->set(compact('projects', 'members'));
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
        $this->ProjectMember->id = $id;
        if (!$this->ProjectMember->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project member')));
        }
        if ($this->ProjectMember->delete()) {

            $this->flashSuccess(__('The %s deleted', __('project member')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('project member')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->ProjectMember->recursive = 0;
        $this->set('projectMembers', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->ProjectMember->id = $id;
        if (!$this->ProjectMember->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project member')));
        }
        $this->set('projectMember', $this->ProjectMember->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->ProjectMember->create();
            if ($this->ProjectMember->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project member')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('project member')));
            }
        }
        $projects = $this->ProjectMember->Project->find('list');
        $members = $this->ProjectMember->Member->find('list');
        $this->set(compact('projects', 'members'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->ProjectMember->id = $id;
        if (!$this->ProjectMember->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project member')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ProjectMember->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('project member')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('project member')));
            }
        } else {
            $this->request->data = $this->ProjectMember->read(null, $id);
        }
        $projects = $this->ProjectMember->Project->find('list');
        $members = $this->ProjectMember->Member->find('list');
        $this->set(compact('projects', 'members'));
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
        $this->ProjectMember->id = $id;
        if (!$this->ProjectMember->exists()) {
            throw new NotFoundException(__('Invalid %s', __('project member')));
        }
        if ($this->ProjectMember->delete()) {

            $this->flashSuccess(__('The %s deleted', __('project member')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('project member')));

        $this->redirect(array('action' => 'index'));
    }

}
