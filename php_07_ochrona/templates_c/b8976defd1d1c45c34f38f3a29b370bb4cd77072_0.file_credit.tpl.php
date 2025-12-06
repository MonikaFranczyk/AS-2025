<?php
/* Smarty version 5.4.2, created on 2025-12-06 20:38:56
  from 'file:credit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6934865097cfd2_43341235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8976defd1d1c45c34f38f3a29b370bb4cd77072' => 
    array (
      0 => 'credit.tpl',
      1 => 1765047850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6934865097cfd2_43341235 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_237568319693486509593f1_85017289', 'content');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_237568319693486509593f1_85017289 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
?>

<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body">
                <h4 class="card-title mb-4">Kalkulator kredytowy</h4>

                <form method="post">
                    <div class="mb-3">
                        <label>Kwota kredytu (PLN):</label>
                        <input type="number" class="form-control" name="kwota" step="0.01" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->kwota ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                    </div>
                    <div class="mb-3">
                        <label>Oprocentowanie roczne (%):</label>
                        <input type="number" class="form-control" name="oprocentowanie" step="0.01" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->oprocentowanie ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                    </div>
                    <div class="mb-3">
                        <label>Liczba miesięcy spłaty:</label>
                        <input type="number" class="form-control" name="miesiace" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->miesiace ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Oblicz ratę</button>
                </form>

                <?php if ((null !== ($_smarty_tpl->getValue('form')->messages ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('form')->messages) > 0) {?>
                    <div class="alert alert-danger mt-3">
                        <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('form')->messages, 'msg');
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

                <?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
                    <div class="alert alert-success mt-3 text-center">
                        Miesięczna rata: <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('result'),2,',',' ');?>

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
