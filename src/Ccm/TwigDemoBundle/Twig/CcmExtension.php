<?php

// Ccm/TwigDemoBundle/Twig/CcmExtension.php
namespace Ccm\TwigDemoBundle\Twig;

class CcmExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
        new \Twig_SimpleFilter('spaces', array($this, 'spacesFilter')),
        );
    }

    public function spacesFilter($string)
    {

        // validar que string no esté vacío

        $arr = str_split($string);

        $spaces = "";

        foreach ($arr as $letter)
            $spaces .= $letter . ' . ';

        return $spaces;
    }

    public function getName()
    {
        return 'ccm_extension';
    }
}
