<?php

class Exemplo
{
    private $conexao;

    public function registrarPontuacao($intIdUsuario, $mixValor)
    {
        $arrPontuacaoUsuario = $this->getPontuacaoUsuario($intIdUsuario);
        $strCampo = $this->getCampoPontuacao($arrPontuacaoUsuario, $intIdUsuario);
        $arrDadosPontuacao = [
            'id_usuario' => $intIdUsuario,
            'pontuacao' => [
                $strCampo => $mixValor
            ],
        ];
        if ($arrPontuacaoUsuario) {
            $arrDadosPontuacao['id_jogo'] = $arrPontuacaoUsuario['id_jogo'];
        }
        $this->salvarPontuacao($arrDadosPontuacao);
    }

    /**
     * Metodo responsavel por retornar a pontuacao do usuario
     *
     * @param $intIdUsuario
     * @return array
     */
    public function getPontuacaoUsuario($intIdUsuario)
    {
        $conexao = $this->getConexao();
        $strSQL = 'select * from tb_usuario_pontuacao where id_usuario = ' . $intIdUsuario;
        $resultSet = mysql_query($strSQL, $conexao);
        return mysql_fetch_assoc($resultSet);
    }

    /**
     * Metodo responsavel por persistir os dados da pontuacao
     *
     * @param $arrDadoPontuaco
     */
    protected function salvarPontuacao($arrDadoPontuaco)
    {
        if (array_key_exists('id_jogo', $arrDadoPontuaco)) {
            $strQuery = 'update tb_usuario_pontuacao set ';
            foreach ($arrDadoPontuaco['pontuacao'] as $field => $strValue) {
                $strQuery .= $field . " = '" . $strValue . "', ";
            }
            $strQuery = substr(trim($strQuery), 0, -1);
            $strQuery .= ' where id_jogo = ' . $arrDadoPontuaco['id_jogo'];
        } else {
            $arrKey = array_keys($arrDadoPontuaco['pontuacao']);
            $strQuery = 'insert into tb_usuario_pontuacao (id_usuario, ' . implode(', ', $arrKey) . ') values (';
            $strQuery .= $arrDadoPontuaco['id_usuario'] . ", '" . implode("','", array_values($arrDadoPontuaco['pontuacao'])) . "')";
        }
        mysql_query($strQuery);
    }

    /**
     * Retorna o campo que deverá ser inserido/atualizado
     *
     * @param $intIdUsuario
     * @return array
     */
    protected function getCampoPontuacao($arrPontuacaoUsuario, $intIdUsuario)
    {
        $strPathIndice = realpath(__DIR__) . '/indice-' . $intIdUsuario . '.txt';
        if (!$arrPontuacaoUsuario) {
            return $this->inseriInformacaoArquivo($strPathIndice, 1);
        }
        # retorna ultimo campo nao preenchido no banco
        if ($arrPontuacaoUsuario) {
            unset($arrPontuacaoUsuario['id_jogo'], $arrPontuacaoUsuario['id_usuario']);
            foreach ($arrPontuacaoUsuario as $strField => $strValue) {
                if (!$strValue) {
                    return $this->inseriInformacaoArquivo($strPathIndice, substr($strField, -2));
                }
            }
        }
        # retorna ultimo campo informado no arquivo
        $strConteudo = intval(substr(file_get_contents($strPathIndice), -2));
        $strValor = ($strConteudo == 10) ? 1 : ($strConteudo + 1);
        return $this->inseriInformacaoArquivo($strPathIndice, $strValor);
    }

    protected function getInicarCampoDefault($strPathIndice)
    {
        $strCampoInicial = 'nu_ponto_' . str_pad(1, 2, 0, STR_PAD_LEFT);
        file_put_contents($strPathIndice, $strCampoInicial);
        return $strCampoInicial;
    }

    protected function inseriInformacaoArquivo($strPathIndice, $strCampoInicial)
    {
        $strCampoInicial = 'nu_ponto_' . str_pad($strCampoInicial, 2, 0, STR_PAD_LEFT);
        file_put_contents($strPathIndice, $strCampoInicial);
        return $strCampoInicial;
    }

    /**
     * Metodo responsavel por estabelecer a conexão
     *
     * @return resource
     */
    private function getConexao()
    {
        if (!$this->conexao) {
            $conexao = mysql_connect('localhost', 'root', 'abcd1234') or die('Não foi possível estabelcer a conexão');
            mysql_select_db('exemplo_01', $conexao) or die('Banco de dados não encontrado');
            $this->conexao = $conexao;
        }
        return $this->conexao;
    }
}