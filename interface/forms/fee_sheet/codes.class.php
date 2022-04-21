<?php
declare(strict_types=1);
function get_code_type_name(int $code_type): string
{
    $code_name = '';
    $row = sqlQuery("SELECT ct_label FROM code_types WHERE " .
    "ct_id = ? LIMIT 1", array($code_type));
    return $row['ct_label'];
}
