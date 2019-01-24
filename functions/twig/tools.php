<?php
add_filter('get_twig', 'addToTwig');

/** This is where you can add your own functions to twig.
 *
 * @param Twig_Environment $twig get extension.
 * @return Twig_Environment $twig
 */
function addToTwig($twig)
{
    // $twig->addFunction(new Timber\Twig_Function('twig_fn_name', 'fn_name'));

    return $twig;
}
