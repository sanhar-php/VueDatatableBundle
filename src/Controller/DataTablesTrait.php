<?php

/*
 * Symfony DataTables Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VueDatatableBundle\Controller;

use Omines\DataTablesBundle\DataTable;
use Psr\Container\ContainerInterface;
use VueDatatableBundle\DatatableBuilder;

/**
 * DataTablesTrait.
 *
 * @author Niels Keurentjes <niels.keurentjes@omines.com>
 *
 * @property ContainerInterface $container
 */
trait DataTablesTrait
{
    /**
     * Creates and returns a basic DataTable instance.
     *
     * @param array $options Options to be passed
     * @return DataTable
     */
    protected function createDataTable(array $options = [])
    {
        return $this->container->get(DatatableBuilder::class)->create($options);
    }

    /**
     * Creates and returns a DataTable based upon a registered DataTableType or an FQCN.
     *
     * @param string $type FQCN or service name
     * @param array $typeOptions Type-specific options to be considered
     * @param array $options Options to be passed
     * @return DataTable
     */
    protected function createDataTableFromType($type, array $typeOptions = [], array $options = [])
    {
        return $this->container->get(DatatableBuilder::class)->createFromType($type, $typeOptions, $options);
    }
}
