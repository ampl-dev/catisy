<?php

App::uses('AppController', 'Controller');

/**
 * TicketTypes Controller
 *
 * @property TicketType $TicketType
 */
class TicketTypesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->TicketType->recursive = 0;
        $this->set('ticketTypes', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->TicketType->id = $id;
        if (!$this->TicketType->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket type')));
        }
        $this->set('ticketType', $this->TicketType->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->TicketType->create();
            if ($this->TicketType->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket type')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket type')));
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
        $this->TicketType->id = $id;
        if (!$this->TicketType->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket type')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TicketType->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket type')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket type')));
            }
        } else {
            $this->request->data = $this->TicketType->read(null, $id);
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
        $this->TicketType->id = $id;
        if (!$this->TicketType->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket type')));
        }
        if ($this->TicketType->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket type')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket type')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->TicketType->recursive = 0;
        $this->set('ticketTypes', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->TicketType->id = $id;
        if (!$this->TicketType->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket type')));
        }
        $this->set('ticketType', $this->TicketType->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->TicketType->create();
            if ($this->TicketType->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket type')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket type')));
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
        $this->TicketType->id = $id;
        if (!$this->TicketType->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket type')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TicketType->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket type')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket type')));
            }
        } else {
            $this->request->data = $this->TicketType->read(null, $id);
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
        $this->TicketType->id = $id;
        if (!$this->TicketType->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket type')));
        }
        if ($this->TicketType->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket type')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket type')));

        $this->redirect(array('action' => 'index'));
    }

}
