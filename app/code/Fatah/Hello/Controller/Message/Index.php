<?php

namespace Fatah\Hello\Controller\Message;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        echo 'hello world';
    }
}
