<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Category', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Admin Edit %s', __('Category')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('category', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Category.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Writings')), array('controller' => 'writings', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Writing')), array('controller' => 'writings', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>