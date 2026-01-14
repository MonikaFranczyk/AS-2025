<?php
/* Smarty version 5.4.5, created on 2026-01-13 17:41:42
  from 'file:Login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696675c6daf3f7_78708568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62b38e7fa631d68f5769c9b512d9aef4dd03ed5' => 
    array (
      0 => 'Login.tpl',
      1 => 1768303383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696675c6daf3f7_78708568 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1950137817696675c6da5754_88558733', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1950137817696675c6da5754_88558733 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Logowanie</h2>

<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login" class="auth-form">

    <div class="form-group">
        <label for="id_login">Login</label>
        <input
            id="id_login"
            type="text"
            name="login"
            value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
        >
    </div>

    <div class="form-group">
        <label for="id_pass">Hasło</label>
        <input
            id="id_pass"
            type="password"
            name="pass"
        >
    </div>

    <button type="submit" class="btn-submit">
        Zaloguj
    </button>

</form>

<?php
}
}
/* {/block 'content'} */
}
