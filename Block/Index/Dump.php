<?php

namespace Xigen\MagentoDump\Block\Index;

use Symfony\Component\VarDumper\VarDumper;

/**
 * Class Dump
 * @package Xigen\MagentoDump\Block\Index
 */
class Dump extends \Magento\Framework\View\Element\Template
{
    /**
     * Dump the variable
     * @param $dumpMe mixed
     */
    public function dump($dumpMe)
    {
        VarDumper::dump($dumpMe);
    }
}
