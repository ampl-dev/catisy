<?php

App::uses('AppController', 'Controller');

/**
 * TicketContainers Controller
 *
 * @property TicketContainer $TicketContainer
 */
class TicketContainersController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->TicketContainer->recursive = 0;
        $this->set('ticketContainers', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->TicketContainer->id = $id;
        if (!$this->TicketContainer->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket container')));
        }
        $this->set('ticketContainer', $this->TicketContainer->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->TicketContainer->create();
            if ($this->TicketContainer->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket container')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket container')));
            }
        }
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->TicketContainer->id = $id;
        if (!$this->TicketContainer->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket container')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TicketContainer->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket container')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket container')));
            }
        } else {
            $this->request->data = $this->TicketContainer->read(null, $id);
        }
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
        $this->TicketContainer->id = $id;
        if (!$this->TicketContainer->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket container')));
        }
        if ($this->TicketContainer->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket container')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket container')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->TicketContainer->recursive = 0;
        $this->set('ticketContainers', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->TicketContainer->id = $id;
        if (!$this->TicketContainer->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket container')));
        }
        $this->set('ticketContainer', $this->TicketContainer->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->TicketContainer->create();
            if ($this->TicketContainer->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket container')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket container')));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->TicketContainer->id = $id;
        if (!$this->TicketContainer->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket container')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TicketContainer->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket container')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket container')));
            }
        } else {
            $this->request->data = $this->TicketContainer->read(null, $id);
        }
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
        $this->TicketContainer->id = $id;
        if (!$this->TicketContainer->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket container')));
        }
        if ($this->TicketContainer->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket container')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket container')));

        $this->redirect(array('action' => 'index'));
    }

}
