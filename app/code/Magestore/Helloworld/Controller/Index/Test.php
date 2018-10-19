<?php

namespace Magestore\Hellowolrd\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_resultPageFactory = $pageFactory;

		return parent::__construct($context);
	}

	public function execute()
	{
		$resultPage = $this->_resultPageFactory->create();
		return $resultPage;
	}
}
