<?php
/* Smarty version 5.4.2, created on 2025-11-29 11:10:58
  from 'file:start.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692ac6b2a3de33_83499900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e35220a8e116df48758fdca75b616b7dfa82b5' => 
    array (
      0 => 'start.tpl',
      1 => 1763749581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ac6b2a3de33_83499900 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1577848957692ac6b2918a06_36866367', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1577848957692ac6b2918a06_36866367 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body text-center">
                <h1 class="mb-3">Welcome!</h1>
                <p class="mb-4">Witaj w systemie kalkulatorów</p>
                <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=loginShow">Zaloguj się</a>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
