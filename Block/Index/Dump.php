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
     * Constructor
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Dump the variable
     * @param $dumpMe mixed
     */
    public function dump($dumpMe)
    {
        VarDumper::dump($dumpMe);
    }
}
