<?php
/* Smarty version 5.4.5, created on 2026-01-09 08:36:23
  from 'file:Login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6960aff7714c17_93157658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62b38e7fa631d68f5769c9b512d9aef4dd03ed5' => 
    array (
      0 => 'Login.tpl',
      1 => 1767944171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6960aff7714c17_93157658 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6939942956960aff75fc547_62331276', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_6939942956960aff75fc547_62331276 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Logowanie</h2>

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
    <ul style="color:red;">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('msg')->type == 'ERROR') {?>
                <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
    <ul style="color:green;">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('msg')->type == 'INFO') {?>
                <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login">

    <label>
        Login:
        <input id="id_login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    </label>
    <br><br>

    <label>
        Hasło:
        <input id="id_pass" type="password" name="pass">
    </label>
    <br><br>

    <button type="submit">Zaloguj</button>

</form>

<?php
}
}
/* {/block 'content'} */
}
