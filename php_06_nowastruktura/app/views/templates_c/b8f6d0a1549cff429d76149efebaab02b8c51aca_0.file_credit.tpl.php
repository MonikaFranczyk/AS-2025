<?php
/* Smarty version 5.4.2, created on 2025-11-29 11:22:40
  from 'file:credit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692ac97011c0e1_74986280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f6d0a1549cff429d76149efebaab02b8c51aca' => 
    array (
      0 => 'credit.tpl',
      1 => 1764411751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ac97011c0e1_74986280 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_765323748692ac970103ee6_54021457', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_765323748692ac970103ee6_54021457 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
?>

<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card p-3">
            <h4 class="mb-3">Kalkulator kredytowy</h4>

            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=credit">
                <div class="mb-3">
                    <label>Kwota kredytu (PLN):</label>
                    <input type="text" class="form-control" name="kwota" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->kwota ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                </div>

                <div class="mb-3">
                    <label>Oprocentowanie roczne (%):</label>
                    <input type="text" class="form-control" name="oprocentowanie" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->oprocentowanie ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                </div>

                <div class="mb-3">
                    <label>Liczba miesięcy spłaty:</label>
                    <input type="text" class="form-control" name="miesiace" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->miesiace ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                </div>

                <button type="submit" class="btn btn-success w-100">Oblicz ratę</button>
            </form>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('form')->messages) > 0) {?>
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
 PLN</strong>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
