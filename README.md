# Magento 2 Symfony VarDumper # 

Magento with Symfony VarDumper replacement to Zend_Debug

# Install demo instructions #

`composer require dominicwatts/magentodump`

`php bin/magento setup:upgrade`

Go to `/xigen_magentodump/index/dump` to see some of the possibilities

# Install VarDumper instructions #

`composer require symfony/var-dumper`

# Usage Instructions #

Can be used as part of a class 

```php
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
```

Or within phtml

```phtml
<p>Hello index/dump.phtml</p>
<?php

Symfony\Component\VarDumper\VarDumper::dump('test');

$block->dump('test');

$block->dump(['arrayone', 'arraytwo']);

$object = ['key' => 'item'];

$block->dump(['array', 1, new Magento\Framework\DataObject($object)]);

?>
```

Demo output

![Demo](https://i.snag.gy/glwbvq.jpg)