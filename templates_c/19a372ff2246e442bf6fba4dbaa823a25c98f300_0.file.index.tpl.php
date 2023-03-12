<?php
/* Smarty version 3.1.39, created on 2023-03-11 14:21:41
  from 'C:\xampp\htdocs\task_01-master\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_640c8065c66353_12457196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a372ff2246e442bf6fba4dbaa823a25c98f300' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_01-master\\templates\\index.tpl',
      1 => 1678540897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640c8065c66353_12457196 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/theme.css">

</head>

<body>

    <div id="app">

        <section>
            <h1>Best sellers</h1>
            <hr />
        </section>

        <div class="container">

            <ul class="control" id="custom-control">
                <li class="prev">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15 7.99999C15 7.86738 14.9473 7.74021 14.8536 7.64644C14.7598 7.55267 14.6326 7.49999 14.5 7.49999H2.707L5.854 4.35399C5.90049 4.3075 5.93737 4.25231 5.96252 4.19157C5.98768 4.13083 6.00063 4.06573 6.00063 3.99999C6.00063 3.93425 5.98768 3.86915 5.96252 3.80841C5.93737 3.74767 5.90049 3.69248 5.854 3.64599C5.80751 3.5995 5.75232 3.56263 5.69158 3.53747C5.63085 3.51231 5.56574 3.49936 5.5 3.49936C5.43426 3.49936 5.36916 3.51231 5.30842 3.53747C5.24768 3.56263 5.19249 3.5995 5.146 3.64599L1.146 7.64599C1.09944 7.69244 1.0625 7.74761 1.03729 7.80836C1.01208 7.8691 0.999107 7.93422 0.999107 7.99999C0.999107 8.06576 1.01208 8.13088 1.03729 8.19162C1.0625 8.25237 1.09944 8.30754 1.146 8.35399L5.146 12.354C5.19249 12.4005 5.24768 12.4374 5.30842 12.4625C5.36916 12.4877 5.43426 12.5006 5.5 12.5006C5.56574 12.5006 5.63085 12.4877 5.69158 12.4625C5.75232 12.4374 5.80751 12.4005 5.854 12.354C5.90049 12.3075 5.93737 12.2523 5.96252 12.1916C5.98768 12.1308 6.00063 12.0657 6.00063 12C6.00063 11.9342 5.98768 11.8691 5.96252 11.8084C5.93737 11.7477 5.90049 11.6925 5.854 11.646L2.707 8.49999H14.5C14.6326 8.49999 14.7598 8.44731 14.8536 8.35354C14.9473 8.25978 15 8.1326 15 7.99999Z"
                            fill="black" />
                    </svg>
                </li>
                <li class="next">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1 7.99999C1 7.86738 1.05268 7.74021 1.14645 7.64644C1.24021 7.55267 1.36739 7.49999 1.5 7.49999H13.293L10.146 4.35399C10.0521 4.2601 9.99937 4.13277 9.99937 3.99999C9.99937 3.86721 10.0521 3.73988 10.146 3.64599C10.2399 3.5521 10.3672 3.49936 10.5 3.49936C10.6328 3.49936 10.7601 3.5521 10.854 3.64599L14.854 7.64599C14.9006 7.69244 14.9375 7.74761 14.9627 7.80836C14.9879 7.8691 15.0009 7.93422 15.0009 7.99999C15.0009 8.06576 14.9879 8.13088 14.9627 8.19162C14.9375 8.25237 14.9006 8.30754 14.854 8.35399L10.854 12.354C10.7601 12.4479 10.6328 12.5006 10.5 12.5006C10.3672 12.5006 10.2399 12.4479 10.146 12.354C10.0521 12.2601 9.99937 12.1328 9.99937 12C9.99937 11.8672 10.0521 11.7399 10.146 11.646L13.293 8.49999H1.5C1.36739 8.49999 1.24021 8.44731 1.14645 8.35354C1.05268 8.25978 1 8.1326 1 7.99999V7.99999Z"
                            fill="black" />
                    </svg>
                </li>
            </ul>
            <div class="my-slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                <div class="slider-item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                    <div class="slider-description">
                        <p class="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>

                    </div>

                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_price'] == false) {?>
                        <p class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>((string)$_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl ) );?>
</p>
                        <?php } else { ?>
                        <p class="price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>((string)$_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl ) );?>
</span> <s><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>((string)$_smarty_tpl->tpl_vars['product']->value['specific_price']['priceWithoutReduction'])),$_smarty_tpl ) );?>
</s></p>
                        <?php }?>
                    </div>

                </div>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </div>
        </div>

    </div>



    <?php echo '<script'; ?>
 src="js/jquery-3.6.0.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/tiny-slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/theme.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
