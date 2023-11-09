<?php

function word($kata)
{
    $str = strtoupper(str_replace(" ", "", $kata));
    return $str;
}
