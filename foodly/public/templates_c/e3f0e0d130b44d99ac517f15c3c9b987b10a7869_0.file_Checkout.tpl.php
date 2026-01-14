<?php
/* Smarty version 5.4.5, created on 2026-01-13 17:46:32
  from 'file:Checkout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696676e80399a3_70308627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f0e0d130b44d99ac517f15c3c9b987b10a7869' => 
    array (
      0 => 'Checkout.tpl',
      1 => 1768322789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696676e80399a3_70308627 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_403167209696676e802d271_74808358', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_403167209696676e802d271_74808358 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Finalizacja zamówienia</h2>

<form method="post"
      action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
checkout_submit"
      class="auth-form">

        <div class="form-group">
        <label for="payment_id">Forma płatności</label>

        <select name="payment_id" id="payment_id" required>
            <option value="">— wybierz formę płatności —</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payments'), 'p');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('p')['ID_PLATNOSC'];?>
">
                    <?php echo $_smarty_tpl->getValue('p')['NAZWA'];?>

                </option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>

        <div class="form-group">
        <label for="address">Adres dostawy</label>

        <textarea name="address"
                  id="address"
                  rows="4"
                  placeholder="Ulica, numer domu/mieszkania, miasto"
                  required></textarea>
    </div>

        <div class="summary-box">
        <p>
            <strong>Koszt dostawy:</strong>
            <?php echo $_smarty_tpl->getValue('deliveryCost');?>
 zł
        </p>

        <p>
            <strong>Kwota produktów:</strong>
            <?php echo $_smarty_tpl->getValue('order')['KWOTA_CALKOWITA'];?>
 zł
        </p>

        <hr>

        <p class="summary-total">
            Do zapłaty:
            <strong><?php echo $_smarty_tpl->getValue('order')['KWOTA_CALKOWITA']+$_smarty_tpl->getValue('deliveryCost');?>
 zł</strong>
        </p>
    </div>

    <button type="submit" class="btn-submit">
        Złóż zamówienie
    </button>

</form>

<?php
}
}
/* {/block 'content'} */
}
