<?php

namespace App\Reports\Factories;

use App\Interfaces\ReportInterface;
use App\Reports\Implementations\CsvReport;
use App\Reports\Implementations\PdfReport;
use App\Reports\Implementations\JsonReport;
use InvalidArgumentException;

class ReportFactory
{
    /**
     * O método factory que decide qual objeto concreto instanciar.
     *
     * @param string $type O tipo de relatório solicitado ('pdf', 'csv', 'json').
     * @return ReportInterface
     * @throws InvalidArgumentException
     */
    public function createReport(string $type): ReportInterface
    {
        switch (strtolower($type)) {
            case 'pdf':
                return new PdfReport();
            case 'csv':
                return new CsvReport();
            case 'json':
                return new JsonReport(); //Adicionado na Factory a possibilidade de instanciar um arquivo json
            default:
                throw new InvalidArgumentException("Tipo de relatório '{$type}' não suportado.");
        }
    }
}
