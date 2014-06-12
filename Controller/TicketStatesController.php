<?php

App::uses('AppController', 'Controller');

/**
 * TicketStates Controller
 *
 * @property TicketState $TicketState
 */
class TicketStatesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->TicketState->recursive = 0;
        $this->set('ticketStates', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->TicketState->id = $id;
        if (!$this->TicketState->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket state')));
        }
        $this->set('ticketState', $this->TicketState->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->TicketState->create();
            if ($this->TicketState->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket state')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket state')));
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
        $this->TicketState->id = $id;
        if (!$this->TicketState->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket state')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TicketState->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket state')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket state')));
            }
        } else {
            $this->request->data = $this->TicketState->read(null, $id);
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
        $this->TicketState->id = $id;
        if (!$this->TicketState->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket state')));
        }
        if ($this->TicketState->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket state')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket state')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->TicketState->recursive = 0;
        $this->set('ticketStates', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->TicketState->id = $id;
        if (!$this->TicketState->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket state')));
        }
        $this->set('ticketState', $this->TicketState->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->TicketState->create();
            if ($this->TicketState->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket state')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket state')));
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
        $this->TicketState->id = $id;
        if (!$this->TicketState->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket state')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TicketState->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket state')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket state')));
            }
        } else {
            $this->request->data = $this->TicketState->read(null, $id);
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
        $this->TicketState->id = $id;
        if (!$this->TicketState->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket state')));
        }
        if ($this->TicketState->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket state')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket state')));

        $this->redirect(array('action' => 'index'));
    }

}
