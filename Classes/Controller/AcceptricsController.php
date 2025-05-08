<?php

namespace Acceptrics\Acceptrics\Controller;

use Acceptrics\acceptrics_typo3\Domain\Repository\ServiceRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ServiceController
 *
 * @package Acceptrics\acceptrics_typo3\Controller
 */
class AcceptricsController extends ActionController
{
    /**
     * @var ServiceRepository
     */
    private $serviceRepository;

    /**
     * Inject the service repository
     *
     * @param \Acceptrics\acceptrics_typo3\Domain\Repository\ServiceRepository $serviceRepository
     */
    public function injectServiceRepository(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $services = $this->serviceRepository->findAll();
        $this->view->assign('services', $services);
    }
}
