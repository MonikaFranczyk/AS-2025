<?php
/* Smarty version 5.4.2, created on 2025-11-14 22:14:42
  from 'file:calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69179bc276c449_87475389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab399af94e7364422d2914a5847b9f96cd1731d' => 
    array (
      0 => 'calc.tpl',
      1 => 1763154862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69179bc276c449_87475389 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_48200841369179bc2754886_80207661', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_48200841369179bc2754886_80207661 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
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
                            <option value="plus">+</option>
                            <option value="minus">-</option>
                            <option value="times">*</option>
                            <option value="div">/</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Liczba 2:</label>
                        <input type="text" class="form-control" name="y" value="<?php echo (($tmp = $_smarty_tpl->getValue('y') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Oblicz</button>
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
