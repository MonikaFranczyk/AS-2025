<?php
/* Smarty version 5.4.2, created on 2025-12-06 20:38:30
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69348636de5f29_40902364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ca234a095ebc2ee5931966f97bee6a7ccce5cb3' => 
    array (
      0 => 'login.tpl',
      1 => 1765049903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69348636de5f29_40902364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21088572369348636dcdf84_09867194', 'content');
?>




<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_21088572369348636dcdf84_09867194 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
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

                <?php if (!empty($_smarty_tpl->getValue('messages'))) {?>
                    <div class="alert alert-danger mt-3">
                        <ul>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
                                <li><?php echo $_smarty_tpl->getValue('m')['text'];?>
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
