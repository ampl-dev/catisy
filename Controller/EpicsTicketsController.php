<?php

App::uses('AppController', 'Controller');

/**
 * EpicsTickets Controller
 *
 * @property EpicsTicket $EpicsTicket
 */
class EpicsTicketsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->EpicsTicket->recursive = 0;
        $this->set('epicsTickets', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->EpicsTicket->id = $id;
        if (!$this->EpicsTicket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epics ticket')));
        }
        $this->set('epicsTicket', $this->EpicsTicket->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->EpicsTicket->create();
            if ($this->EpicsTicket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epics ticket')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('epics ticket')));
            }
        }
        $epics = $this->EpicsTicket->Epic->find('list');
        $tickets = $this->EpicsTicket->Ticket->find('list');
        $users = $this->EpicsTicket->User->find('list');
        $this->set(compact('epics', 'tickets', 'users'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->EpicsTicket->id = $id;
        if (!$this->EpicsTicket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epics ticket')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->EpicsTicket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epics ticket')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('epics ticket')));
            }
        } else {
            $this->request->data = $this->EpicsTicket->read(null, $id);
        }
        $epics = $this->EpicsTicket->Epic->find('list');
        $tickets = $this->EpicsTicket->Ticket->find('list');
        $users = $this->EpicsTicket->User->find('list');
        $this->set(compact('epics', 'tickets', 'users'));
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
        $this->EpicsTicket->id = $id;
        if (!$this->EpicsTicket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epics ticket')));
        }
        if ($this->EpicsTicket->delete()) {

            $this->flashSuccess(__('The %s deleted', __('epics ticket')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('epics ticket')));

        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->EpicsTicket->recursive = 0;
        $this->set('epicsTickets', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->EpicsTicket->id = $id;
        if (!$this->EpicsTicket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epics ticket')));
        }
        $this->set('epicsTicket', $this->EpicsTicket->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->EpicsTicket->create();
            if ($this->EpicsTicket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epics ticket')));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->flashError(__('The %s could not be saved. Please, try again.', __('epics ticket')));
            }
        }
        $epics = $this->EpicsTicket->Epic->find('list');
        $tickets = $this->EpicsTicket->Ticket->find('list');
        $users = $this->EpicsTicket->User->find('list');
        $this->set(compact('epics', 'tickets', 'users'));
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->EpicsTicket->id = $id;
        if (!$this->EpicsTicket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epics ticket')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->EpicsTicket->save($this->request->data)) {
                $this->flashSuccess(__('The %s has been saved', __('epics ticket')));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->flashError(__('The %s could not be saved. Please, try again.', __('epics ticket')));
            }
        } else {
            $this->request->data = $this->EpicsTicket->read(null, $id);
        }
        $epics = $this->EpicsTicket->Epic->find('list');
        $tickets = $this->EpicsTicket->Ticket->find('list');
        $users = $this->EpicsTicket->User->find('list');
        $this->set(compact('epics', 'tickets', 'users'));
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
        $this->EpicsTicket->id = $id;
        if (!$this->EpicsTicket->exists()) {
            throw new NotFoundException(__('Invalid %s', __('epics ticket')));
        }
        if ($this->EpicsTicket->delete()) {

            $this->flashSuccess(__('The %s deleted', __('epics ticket')));
            $this->redirect(array('action' => 'index'));
        }

        $this->flashError(__('The %s was not deleted', __('epics ticket')));

        $this->redirect(array('action' => 'index'));
    }

}
