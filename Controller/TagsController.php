<?php

App::uses('AppController', 'Controller');

/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Tag->recursive = 0;
        $this->set('tags', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Tag->id = $id;
        if (!$this->Tag->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tag')));
        }
        $this->set('tag', $this->Tag->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Tag->create();
            if ($this->Tag->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tag')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('tag')));
            }
        }
        $parentTags = $this->Tag->ParentTag->find('list');
        $this->set(compact('parentTags'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Tag->id = $id;
        if (!$this->Tag->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tag')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Tag->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tag')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('tag')));
            }
        } else {
            $this->request->data = $this->Tag->read(null, $id);
        }
        $parentTags = $this->Tag->ParentTag->find('list');
        $this->set(compact('parentTags'));
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
        $this->Tag->id = $id;
        if (!$this->Tag->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tag')));
        }
        if ($this->Tag->delete()) {

            $this->flashSuccess(__('The %s deleted', __('tag')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('tag')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Tag->recursive = 0;
        $this->set('tags', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Tag->id = $id;
        if (!$this->Tag->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tag')));
        }
        $this->set('tag', $this->Tag->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Tag->create();
            if ($this->Tag->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tag')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('tag')));
            }
        }
        $parentTags = $this->Tag->ParentTag->find('list');
        $this->set(compact('parentTags'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Tag->id = $id;
        if (!$this->Tag->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tag')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Tag->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('tag')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('tag')));
            }
        } else {
            $this->request->data = $this->Tag->read(null, $id);
        }
        $parentTags = $this->Tag->ParentTag->find('list');
        $this->set(compact('parentTags'));
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
        $this->Tag->id = $id;
        if (!$this->Tag->exists()) {
            throw new NotFoundException(__('Invalid %s', __('tag')));
        }
        if ($this->Tag->delete()) {

            $this->flashSuccess(__('The %s deleted', __('tag')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('tag')));

        $this->redirect(array('action' => 'index'));
    }

}
