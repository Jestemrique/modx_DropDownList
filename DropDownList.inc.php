<?php
/* ShowDropdown snippet */
$items = $modx->getOption('items', $scriptProperties, 'No Options To Show');
$multiple = $modx->getOption('multiple', $scriptProperties, false);

/* Set the Tpl to use for each option */
$tpl = '    <option value="[[+item]]">[[+item]]</option>';

/* Convert the comma-separated items to an array */
$items = explode(',', $scriptProperties['items']);

/* See if we're creating a multi-select list */
if ($multiple) {
    $output = '<select multiple="multiple">';
} else {
    $output = '<select>';
}

/* Create the inner HTML */
foreach ($items as $item) {
    $output .= "\n" . str_replace('[[+item]]', trim($item), $tpl);
}

/* add the closing tag */
$output .= "\n</select>";

/* return the finished HTML */
return $output;
