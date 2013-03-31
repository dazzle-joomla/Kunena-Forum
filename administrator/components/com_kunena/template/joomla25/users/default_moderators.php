<?php
/**
 * Kunena Component
 * @package Kunena.Administrator.Users
 * @subpackage Categories
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/

// no direct access
defined('_JEXEC') or die;
?>
<fieldset class="batch">
	<legend><?php echo JText::_('COM_KUNENA_BATCH_USERS_OPTIONS');?></legend>
	<label id="batch-choose-action-lbl" for="batch-category-id">
		<?php echo JText::_('COM_KUNENA_BATCH_USERS_TIP'); ?>
	</label>
	<fieldset id="batch-choose-action" class="combo">
		<?php echo $this->modcatlist; ?>
	</fieldset>

	<button type="submit" onclick="Joomla.submitbutton('batch_moderators');">
	<?php echo JText::_('COM_KUNENA_USERS_LABEL_BATCH_PROCESS'); ?>
	</button>
	<button type="button" onclick="document.getElements('#catid > option').removeProperty('selected', '')">
	<?php echo JText::_('COM_KUNENA_SYS_BUTTON_FILTERRESET'); ?>
	</button>
</fieldset>