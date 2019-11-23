<?php

$productCode = $_POST['orderNumber'] + 1;
$productLine = $_POST['orderNumber'] + 2;

?>

<div>
Product code: <input type="text" id="productCode" disabled value="<?php echo $productCode ?>" />
Product line: <input type="text" id="productLine" disabled value="<?php echo $productLine ?>" />
</div>
