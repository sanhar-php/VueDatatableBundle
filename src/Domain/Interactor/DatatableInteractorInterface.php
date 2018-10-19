<?php

declare(strict_types=1);

namespace VueDatatableBundle\Domain\Interactor;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VueDatatableBundle\Domain\Datatable;
use VueDatatableBundle\Domain\DatatableRoute;
use VueDatatableBundle\Domain\Provider\ResultSetInterface;

/**
 * Interface DatatableInteractorInterface.
 *
 * @author Thomas Talbot <thomas.talbot@zephyr-web.fr>
 */
interface DatatableInteractorInterface
{
    public function handleRequest(Datatable $datatable, Request $request): ResultSetInterface;

    public function submit(Datatable $datatable, array $requestData, DatatableRoute $route): ResultSetInterface;

    public function createResponse(Datatable $datatable, ResultSetInterface $result): Response;
}