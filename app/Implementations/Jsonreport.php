<?php

namespace App\Reports\Implementations;

use App\Interfaces\ReportInterface;

class JsonReport implements ReportInterface
{
    /**
     * Gera o conteúdo do relatório em formato JSON.
     *
     * @param array $data Dados do relatório
     * @return string Conteúdo do relatório em formato JSON
     */
    public function generate(array $data): string
    {
        // Retorna os dados formatados como JSON (bonitinho)
        return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Retorna o tipo de arquivo (extensão).
     *
     * @return string
     */
    public function getFileType(): string
    {
        return 'json';
    }
}
