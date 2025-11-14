<?php
/* Smarty version 5.4.2, created on 2025-11-14 22:14:50
  from 'file:start.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69179bcaf38754_80309575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd4d2170c56a429aa6f7611941ed98cf433f686' => 
    array (
      0 => 'start.tpl',
      1 => 1763154798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69179bcaf38754_80309575 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_169961762669179bcaf34660_86233560', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_169961762669179bcaf34660_86233560 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body text-center">
                <h1 class="mb-3">Welcome!</h1>
                <p class="mb-4">Witaj w systemie kalkulatorów</p>
                <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/app/controllers/LoginCtrl.php">Zaloguj się</a>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
