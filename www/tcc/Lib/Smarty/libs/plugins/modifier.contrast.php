<?php
function smarty_modifier_contrast($hexcolor, $dark = '#000000', $light = '#FFFFFF')
{
    return (hexdec($hexcolor) > 0xffffff/2) ? $dark : $light;
}
?>