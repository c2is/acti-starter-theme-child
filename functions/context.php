<?php

add_filter('timber/context', 'addHeaderDataToContext');
add_filter('timber/context', 'addFooterDataToContext');

function addHeaderDataToContext($context)
{
    return $context;
}

function addFooterDataToContext($context)
{
    return $context;
}
