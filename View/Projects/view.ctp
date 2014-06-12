<div class="row">
    <div class="col-md-9">
        <h1><?= $project['Project']['name'] ?></h1>
        <dl class="dl-horizontal">
            <dt><?= __('Creator'); ?></dt>
            <dd>
                <?= $this->Html->link($project['Creator']['name'], array('controller' => 'users', 'action' => 'view', $project['Creator']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?= __('Created'); ?></dt>
            <dd>
                <?= h($project['Project']['created']); ?>
                &nbsp;
            </dd>
            <dt><?= __('Modified'); ?></dt>
            <dd>
                <?= h($project['Project']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Actions'); ?></h3>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Edit %s', __('Project')), array('action' => 'edit', $project['Project']['id'])); ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Delete %s', __('Project')), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List %s', __('Projects')), array('action' => 'index')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New %s', __('Project')), array('action' => 'add')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New %s', __('Creator')), array('controller' => 'users', 'action' => 'add')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List %s', __('Epics')), array('controller' => 'epics', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List %s', __('Tickets')), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-md-9">
        <h3><?= __('Related %s', __('Epics')); ?></h3>
        <?php if (!empty($project['Epic'])): ?>
            <table class="table">
                <tr>
                    <th><?= __('Id'); ?></th>
                    <th><?= __('Project Id'); ?></th>
                    <th><?= __('User Id'); ?></th>
                    <th><?= __('Name'); ?></th>
                    <th><?= __('Slug'); ?></th>
                    <th><?= __('Is Deleted'); ?></th>
                    <th><?= __('Created'); ?></th>
                    <th><?= __('Modified'); ?></th>
                    <th><?= __('Deleted'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                <?php foreach ($project['Epic'] as $epic): ?>
                    <tr>
                        <td><?= $epic['id']; ?></td>
                        <td><?= $epic['project_id']; ?></td>
                        <td><?= $epic['user_id']; ?></td>
                        <td><?= $epic['name']; ?></td>
                        <td><?= $epic['slug']; ?></td>
                        <td><?= $epic['is_deleted']; ?></td>
                        <td><?= $epic['created']; ?></td>
                        <td><?= $epic['modified']; ?></td>
                        <td><?= $epic['deleted']; ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), array('controller' => 'epics', 'action' => 'view', $epic['id'])); ?>
                            <?= $this->Html->link(__('Edit'), array('controller' => 'epics', 'action' => 'edit', $epic['id'])); ?>
                            <?= $this->Form->postLink(__('Delete'), array('controller' => 'epics', 'action' => 'delete', $epic['id']), null, __('Are you sure you want to delete # %s?', $epic['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
    <div class="col-md-3">
        <ul class="nav nav-list">
            <li><?= $this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <h3><?= __('Related %s', __('Tickets')); ?></h3>
        <?php if (!empty($project['Ticket'])): ?>
            <table class="table">
                <tr>
                    <th><?= __('Id'); ?></th>
                    <th><?= __('Project Id'); ?></th>
                    <th><?= __('Ticket Container Id'); ?></th>
                    <th><?= __('Ticket Type Id'); ?></th>
                    <th><?= __('Ticket State Id'); ?></th>
                    <th><?= __('Requestor User Id'); ?></th>
                    <th><?= __('Assigned User Id'); ?></th>
                    <th><?= __('Name'); ?></th>
                    <th><?= __('Slug'); ?></th>
                    <th><?= __('Is Deleted'); ?></th>
                    <th><?= __('Created'); ?></th>
                    <th><?= __('Modified'); ?></th>
                    <th><?= __('Deleted'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                <?php foreach ($project['Ticket'] as $ticket): ?>
                    <tr>
                        <td><?= $ticket['id']; ?></td>
                        <td><?= $ticket['project_id']; ?></td>
                        <td><?= $ticket['ticket_container_id']; ?></td>
                        <td><?= $ticket['ticket_type_id']; ?></td>
                        <td><?= $ticket['ticket_state_id']; ?></td>
                        <td><?= $ticket['requestor_user_id']; ?></td>
                        <td><?= $ticket['assigned_user_id']; ?></td>
                        <td><?= $ticket['name']; ?></td>
                        <td><?= $ticket['slug']; ?></td>
                        <td><?= $ticket['is_deleted']; ?></td>
                        <td><?= $ticket['created']; ?></td>
                        <td><?= $ticket['modified']; ?></td>
                        <td><?= $ticket['deleted']; ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
                            <?= $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
                            <?= $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), null, __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
    <div class="col-md-3">
        <ul class="nav nav-list">
            <li><?= $this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <h3><?= __('Related %s', __('Users')); ?></h3>
        <?php if (!empty($project['Member'])): ?>
            <table class="table">
                <tr>
                    <th><?= __('Id'); ?></th>
                    <th><?= __('Name'); ?></th>
                    <th><?= __('Email'); ?></th>
                    <th><?= __('Password'); ?></th>
                    <th><?= __('Is Active'); ?></th>
                    <th><?= __('Role'); ?></th>
                    <th><?= __('Created'); ?></th>
                    <th><?= __('Modified'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                <?php foreach ($project['Member'] as $member): ?>
                    <tr>
                        <td><?= $member['id']; ?></td>
                        <td><?= $member['name']; ?></td>
                        <td><?= $member['email']; ?></td>
                        <td><?= $member['password']; ?></td>
                        <td><?= $member['is_active']; ?></td>
                        <td><?= $member['role']; ?></td>
                        <td><?= $member['created']; ?></td>
                        <td><?= $member['modified']; ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $member['id'])); ?>
                            <?= $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $member['id'])); ?>
                            <?= $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
    <div class="col-md-3">
        <ul class="nav nav-list">
            <li><?= $this->Html->link(__('New %s', __('Member')), array('controller' => 'users', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
