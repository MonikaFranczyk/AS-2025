<?php
/* Smarty version 5.4.5, created on 2026-04-27 15:02:59
  from 'file:Restauracje.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69ef5e833cc790_65147621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f6b523e8118be32dab249cd72402cf20630cd5' => 
    array (
      0 => 'Restauracje.tpl',
      1 => 1768156147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ef5e833cc790_65147621 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_52682496569ef5e833b9cf0_37026433', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_52682496569ef5e833b9cf0_37026433 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Restauracje</h2>

<ul>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('restauracje'), 'r');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach0DoElse = false;
?>
    <li>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
restauracja_menu&id=<?php echo $_smarty_tpl->getValue('r')['ID_RESTAURACJI'];?>
">
            <?php echo $_smarty_tpl->getValue('r')['NAZWA'];?>

        </a>
    </li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>

<?php
}
}
/* {/block 'content'} */
}
