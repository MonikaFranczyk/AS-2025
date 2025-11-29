<?php
/* Smarty version 5.4.2, created on 2025-11-21 19:28:02
  from 'file:start.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6920af32b9d230_87960992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '454ea2fd3b2f417a36c6f11a7c34410e58da5ba8' => 
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
function content_6920af32b9d230_87960992 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19578861556920af32b97958_67112773', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_19578861556920af32b97958_67112773 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
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
