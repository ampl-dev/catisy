<?php

App::uses('AppController', 'Controller');

/**
 * Tickets Controller
 *
 * @property Ticket $Ticket
 */
class TicketsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Ticket->recursive = 0;
        $this->set('tickets', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Ticket->id = $id;
        if (!$this->Ticket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket')));
        }
        $this->set('ticket', $this->Ticket->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Ticket->create();
            if ($this->Ticket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket')));
            }
        }
        $projects = $this->Ticket->Project->find('list');
        $ticketContainers = $this->Ticket->TicketContainer->find('list');
        $ticketTypes = $this->Ticket->TicketType->find('list');
        $ticketStates = $this->Ticket->TicketState->find('list');
        $requestingUsers = $this->Ticket->RequestingUser->find('list');
        $assignedUsers = $this->Ticket->AssignedUser->find('list');
        $epics = $this->Ticket->Epic->find('list');
        $this->set(compact('projects', 'ticketContainers', 'ticketTypes', 'ticketStates', 'requestingUsers', 'assignedUsers', 'epics'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Ticket->id = $id;
        if (!$this->Ticket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Ticket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket')));
            }
        } else {
            $this->request->data = $this->Ticket->read(null, $id);
        }
        $projects = $this->Ticket->Project->find('list');
        $ticketContainers = $this->Ticket->TicketContainer->find('list');
        $ticketTypes = $this->Ticket->TicketType->find('list');
        $ticketStates = $this->Ticket->TicketState->find('list');
        $requestingUsers = $this->Ticket->RequestingUser->find('list');
        $assignedUsers = $this->Ticket->AssignedUser->find('list');
        $epics = $this->Ticket->Epic->find('list');
        $this->set(compact('projects', 'ticketContainers', 'ticketTypes', 'ticketStates', 'requestingUsers', 'assignedUsers', 'epics'));
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
        $this->Ticket->id = $id;
        if (!$this->Ticket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket')));
        }
        if ($this->Ticket->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Ticket->recursive = 0;
        $this->set('tickets', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Ticket->id = $id;
        if (!$this->Ticket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket')));
        }
        $this->set('ticket', $this->Ticket->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Ticket->create();
            if ($this->Ticket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket')));
            }
        }
        $projects = $this->Ticket->Project->find('list');
        $ticketContainers = $this->Ticket->TicketContainer->find('list');
        $ticketTypes = $this->Ticket->TicketType->find('list');
        $ticketStates = $this->Ticket->TicketState->find('list');
        $requestingUsers = $this->Ticket->RequestingUser->find('list');
        $assignedUsers = $this->Ticket->AssignedUser->find('list');
        $epics = $this->Ticket->Epic->find('list');
        $this->set(compact('projects', 'ticketContainers', 'ticketTypes', 'ticketStates', 'requestingUsers', 'assignedUsers', 'epics'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Ticket->id = $id;
        if (!$this->Ticket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Ticket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('ticket')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('ticket')));
            }
        } else {
            $this->request->data = $this->Ticket->read(null, $id);
        }
        $projects = $this->Ticket->Project->find('list');
        $ticketContainers = $this->Ticket->TicketContainer->find('list');
        $ticketTypes = $this->Ticket->TicketType->find('list');
        $ticketStates = $this->Ticket->TicketState->find('list');
        $requestingUsers = $this->Ticket->RequestingUser->find('list');
        $assignedUsers = $this->Ticket->AssignedUser->find('list');
        $epics = $this->Ticket->Epic->find('list');
        $this->set(compact('projects', 'ticketContainers', 'ticketTypes', 'ticketStates', 'requestingUsers', 'assignedUsers', 'epics'));
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
        $this->Ticket->id = $id;
        if (!$this->Ticket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('ticket')));
        }
        if ($this->Ticket->delete()) {

            $this->flashSuccess(__('The %s deleted', __('ticket')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('ticket')));

        $this->redirect(array('action' => 'index'));
    }

}
