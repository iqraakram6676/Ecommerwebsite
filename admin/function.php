<?php
function price($amount=0)
{
	return "$ " . number_format($amount,2);
}
?>
