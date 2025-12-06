<?php
/* Smarty version 5.4.2, created on 2025-12-06 20:29:37
  from 'file:start.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69348421008926_08665872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e32869ea70027b6eb733bd9dee4d1e73584b2fd' => 
    array (
      0 => 'start.tpl',
      1 => 1765046579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69348421008926_08665872 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_178167919569348421002da8_95900629', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_178167919569348421002da8_95900629 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body text-center">
                <h1 class="mb-3">Welcome!</h1>
                <p class="mb-4">Witaj w systemie kalkulatorów</p>
                <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/index.php?action=login">Zaloguj się</a>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
