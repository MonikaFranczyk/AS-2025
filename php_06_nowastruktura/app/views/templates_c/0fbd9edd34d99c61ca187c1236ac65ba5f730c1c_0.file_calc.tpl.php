<?php
/* Smarty version 5.4.2, created on 2025-11-21 19:42:34
  from 'file:calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6920b29a9c2b03_80039543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fbd9edd34d99c61ca187c1236ac65ba5f730c1c' => 
    array (
      0 => 'calc.tpl',
      1 => 1763750547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6920b29a9c2b03_80039543 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6218353256920b29a9ac6a3_41509821', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_6218353256920b29a9ac6a3_41509821 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
?>

<div class="row justify-content-center mt-4">
    <div class="col-md-4">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body">
                <h4 class="card-title mb-4">Kalkulator</h4>
                <form method="post">
                    <div class="mb-3">
                        <label>Liczba 1:</label>
                        <input type="text" class="form-control" name="x" value="<?php echo (($tmp = $_smarty_tpl->getValue('x') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>
                    <div class="mb-3">
                        <label>Operacja:</label>
                        <select name="op" class="form-select">
                            <option value="plus" <?php if ($_smarty_tpl->getValue('op') == 'plus') {?>selected<?php }?>>+</option>
                            <option value="minus" <?php if ($_smarty_tpl->getValue('op') == 'minus') {?>selected<?php }?>>-</option>
                            <option value="times" <?php if ($_smarty_tpl->getValue('op') == 'times') {?>selected<?php }?>>*</option>
                            <option value="div" <?php if ($_smarty_tpl->getValue('op') == 'div') {?>selected<?php }?>>/</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Liczba 2:</label>
                        <input type="text" class="form-control" name="y" value="<?php echo (($tmp = $_smarty_tpl->getValue('y') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Oblicz</button>
                </form>

                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
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

                <?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
                    <div class="alert alert-success mt-3">
                        Wynik: <?php echo $_smarty_tpl->getValue('result');?>

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
