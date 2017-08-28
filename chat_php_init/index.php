<?php 
require('functions/templates.inc.php');
$mainTemplate = new template();
$mainTemplate->addTemplate('index');
$mainTemplate->asigna_variables(array(
));
$mainTemplate->compileandgo();
?>