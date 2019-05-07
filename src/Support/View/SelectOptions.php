<?php

namespace iEducar\Support\View;

use iEducar\Modules\Educacenso\Model\LocalFuncionamento;
use iEducar\Modules\Transport\Period;
use iEducar\Modules\Educacenso\Model\Deficiencias;
use iEducar\Modules\Educacenso\Model\SituacaoFuncionamento;
use iEducar\Modules\Educacenso\Model\DependenciaAdministrativaEscola;
use iEducar\Modules\Educacenso\Model\EsferaAdministrativa;
use iEducar\Modules\Educacenso\Model\LocalizacaoDiferenciadaEscola;
use iEducar\Modules\Educacenso\Model\LocalizacaoDiferenciadaPessoa;
use iEducar\Modules\Educacenso\Model\UnidadeVinculadaComOutraInstituicao;

class SelectOptions
{
    /**
     * Retorna a opção default para os selects.
     *
     * @return array
     */
    public static function getDefaultOption()
    {
        return ['' => 'Selecione'];
    }

    /**
     * Retorna as opções disponíveis de turno para o módulo de transporte.
     *
     * @return array
     */
    public static function transportPeriods()
    {
        return self::getDefaultOption() + Period::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes à situação de funcionamento da escola
     *
     * @return array
     */
    public static function situacoesFuncionamentoEscola()
    {
        return self::getDefaultOption() + SituacaoFuncionamento::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes às dependências administrativas da escola
     *
     * @return array
     */
    public static function dependenciasAdministrativasEscola()
    {
        return self::getDefaultOption() + DependenciaAdministrativaEscola::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes às esferas administrativas da escola
     *
     * @return array
     */
    public static function esferasAdministrativasEscola()
    {
        return self::getDefaultOption() + EsferaAdministrativa::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes à localização diferenciada da escola
     *
     * @return array
     */
    public static function localizacoesDiferenciadasEscola()
    {
        return self::getDefaultOption() + LocalizacaoDiferenciadaEscola::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes à localização diferenciada das pessoas
     *
     * @return array
     */
    public static function localizacoesDiferenciadasPessoa()
    {
        return self::getDefaultOption() + LocalizacaoDiferenciadaPessoa::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes às instituições quais a escola pode ser vinculada
     *
     * @return array
     */
    public static function unidadesVinculadasEscola()
    {
        return self::getDefaultOption() + UnidadeVinculadaComOutraInstituicao::getDescriptiveValues();
    }

    /**
     * Retorna as opções disponíveis referentes às deficiências do Educacenso
     *
     * @return array
     */
    public static function educacensoDeficiencies()
    {
        return self::getDefaultOption() + Deficiencias::getDescriptiveValues();
    }

    public static function locaisFuncionamentoEscola()
    {
        return self::getDefaultOption() + LocalFuncionamento::getDescriptiveValues();
    }
}
