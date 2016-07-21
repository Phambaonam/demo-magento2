<?php
namespace Phambaonam\Bai1\Controller\Hello;

// viết class, class này sẽ extends sắn 1 class của magento,class này sẽ tạo ra module phái frontend

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

// class world kế thừa class Action
class World extends \Magento\Framework\App\Action\Action
{

    protected $pageFactory;

    // 2 tham số $context và $pageFactory thuôc về 2 class Context và PageFactory.
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
      echo "techmaster.vn";

    }
}


