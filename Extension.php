<?php
/**
 * The extension file for IconFonts
 * @author  Lucas Westermann <lswest34+bolt@gmail.com>
 */

namespace Bolt\Extension\lswest\iconfonts;

use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    const NAME = "iconFonts";

    public function getName()
    {
        return Extension::NAME;
    }

    public function initialize()
    {
        // Initialize the Twig function
        $this->addTwigFunction('icon', 'twigIcon');
    }

    /**
     * Twig function {{ icon('icon', 'size') }} in IconFonts extension.
     */
    public function twigIcon($icon, $size = "")
    {
        if ($icon != "") {
            if ($size == "") {
                $html .= '<i class="' . $icon . '"></i>';
            } else {
                $html .= '<i class="' . $icon . '" style="font-size: ' . $size . '"></i>';
            }
            return new \Twig_Markup($html, 'UTF-8');
        } else {
            return "No icon given.";
        }
    }
}
