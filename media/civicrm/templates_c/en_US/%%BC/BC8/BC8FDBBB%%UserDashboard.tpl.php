<?php /* Smarty version 2.6.27, created on 2016-11-15 12:08:48
         compiled from CRM%5CPledge%5CPage%5CUserDashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 1, false),array('block', 'ts', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 49, false),array('function', 'counter', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 36, false),array('function', 'cycle', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 38, false),array('function', 'crmURL', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 49, false),array('function', 'crmScript', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 57, false),array('modifier', 'crmMoney', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 39, false),array('modifier', 'truncate', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 43, false),array('modifier', 'crmDate', 'CRM\\Pledge\\Page\\UserDashboard.tpl', 43, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['context'] == 'user'): ?>
<div class="view-content">
<?php if ($this->_tpl_vars['pledge_rows']): ?>
<?php echo '<table class="selector"><tr class="columnheader">'; ?><?php $_from = $this->_tpl_vars['pledge_columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?><?php echo '<th>'; ?><?php echo $this->_tpl_vars['header']['name']; ?><?php echo '</th>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</tr>'; ?><?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?><?php echo ''; ?><?php $_from = $this->_tpl_vars['pledge_rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id=\'rowid'; ?><?php echo $this->_tpl_vars['row']['pledge_id']; ?><?php echo '\' class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' '; ?><?php if ($this->_tpl_vars['row']['pledge_status_name'] == 'Overdue'): ?><?php echo ' disabled'; ?><?php endif; ?><?php echo ' crm-pledge crm-pledge_'; ?><?php echo $this->_tpl_vars['row']['pledge_id']; ?><?php echo ' "><td class="crm-pledge-pledge_amount">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['pledge_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['pledge_currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['pledge_currency'])); ?><?php echo '</td><td class="crm-pledge-pledge_total_paid">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['pledge_total_paid'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['pledge_currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['pledge_currency'])); ?><?php echo '</td><td class="crm-pledge-pledge_amount">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['pledge_amount']-$this->_tpl_vars['row']['pledge_total_paid'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['pledge_currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['pledge_currency'])); ?><?php echo '</td><td class="crm-pledge-pledge_contribution_type">'; ?><?php echo $this->_tpl_vars['row']['pledge_financial_type']; ?><?php echo '</td><td class="crm-pledge-pledge_create_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['pledge_create_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-pledge-pledge_next_pay_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['pledge_next_pay_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-pledge-pledge_next_pay_amount">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['pledge_next_pay_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['pledge_currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['pledge_currency'])); ?><?php echo '</td><td class="crm-pledge-pledge_status crm-pledge-pledge_status_'; ?><?php echo $this->_tpl_vars['row']['pledge_status']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['row']['pledge_status']; ?><?php echo '</td><td>'; ?><?php if ($this->_tpl_vars['row']['pledge_contribution_page_id'] && ( $this->_tpl_vars['row']['pledge_status_name'] != 'Completed' ) && ( $this->_tpl_vars['row']['contact_id'] == $this->_tpl_vars['loggedUserID'] )): ?><?php echo '<a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/transact','q' => "reset=1&id=".($this->_tpl_vars['row']['pledge_contribution_page_id'])."&pledgeId=".($this->_tpl_vars['row']['pledge_id'])), $this);?><?php echo '">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Make Payment'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a><br/>'; ?><?php endif; ?><?php echo '<a class="crm-expand-row" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'view payments'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/pledge/payment','q' => "action=browse&context=".($this->_tpl_vars['context'])."&pledgeId=".($this->_tpl_vars['row']['pledge_id'])."&cid=".($this->_tpl_vars['row']['contact_id'])), $this);?><?php echo '">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Payments'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a></td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

<?php echo smarty_function_crmScript(array('file' => 'js/crm.expandRow.js'), $this);?>

<?php else: ?>
<div class="messages status no-popup">
         <div class="icon inform-icon"></div>
             <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no Pledges for your record.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pledgeHonor'] && $this->_tpl_vars['pledgeHonorRows']): ?>
<?php echo '<div class="help"><p>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Pledges made in your honor.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</p></div><table class="selector"><tr class="columnheader"><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Pledger'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Amount'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Type'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Financial Type'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Create date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Acknowledgment Sent'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Acknowledgment Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Status'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr>'; ?><?php $_from = $this->_tpl_vars['pledgeHonorRows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id=\'rowid'; ?><?php echo $this->_tpl_vars['row']['honorId']; ?><?php echo '\' class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo '"><td class="crm-pledge-display_name"><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view",'q' => "reset=1&cid=".($this->_tpl_vars['row']['honorId'])), $this);?><?php echo '" id="view_contact">'; ?><?php echo $this->_tpl_vars['row']['display_name']; ?><?php echo '</a></td><td class="crm-pledge-amount">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['pledge_currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['pledge_currency'])); ?><?php echo '</td><td class="crm-pledge-honor-type">'; ?><?php echo $this->_tpl_vars['row']['honor_type']; ?><?php echo '</td><td class="crm-pledge-type">'; ?><?php echo $this->_tpl_vars['row']['type']; ?><?php echo '</td><td class="crm-pledge-create_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['create_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td align="center">'; ?><?php if ($this->_tpl_vars['row']['acknowledge_date']): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Yes'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'No'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo '</td><td class="crm-pledge-acknowledge_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['acknowledge_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-pledge-status">'; ?><?php echo $this->_tpl_vars['row']['status']; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

<?php endif; ?>
</div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>