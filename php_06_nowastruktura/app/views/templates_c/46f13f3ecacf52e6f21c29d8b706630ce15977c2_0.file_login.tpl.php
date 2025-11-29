<?php
/* Smarty version 5.4.2, created on 2025-11-29 11:11:01
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692ac6b50d4a48_82741178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46f13f3ecacf52e6f21c29d8b706630ce15977c2' => 
    array (
      0 => 'login.tpl',
      1 => 1763749602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ac6b50d4a48_82741178 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_62930691692ac6b4ea49f8_45969055', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_62930691692ac6b4ea49f8_45969055 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Logowanie</h4>
                <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=login">
                    <div class="mb-3">
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" class="form-control" name="login" id="login" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Hasło:</label>
                        <input type="password" class="form-control" name="pass" id="pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
                </form>

                <?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
                    <div class="alert alert-danger mt-3">
                        <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
