<?php

function d($arrResult) {
    echo '<pre>';
    print_r($arrResult);
    die;
}

class Exemplo
{
    private $conexao;

    public function registrarPontuacao($intIdUsuario, $arrPonto)
    {
        # busque toda a pontuacao vinculado ao usuario
        $arrPontuacaoUsuario = $this->getPontuacaoUsuario($intIdUsuario);
        $arrDadosPontuacao = [
            'id_usuario' => $intIdUsuario,
            'pontuacao' => $arrPonto,
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
                $strQuery .= $field . " = '" .  $strValue . "', ";
            }
            $strQuery = substr(trim($strQuery), 0, -1);
            $strQuery .= ' where id_jogo = ' . $arrDadoPontuaco['id_jogo'];
        } else {
            $arrKey = array_keys($arrDadoPontuaco['pontuacao']);
            $strQuery = 'insert into tb_usuario_pontuacao (id_usuario, ' . implode(', ', $arrKey) . ') values (';
            $strQuery .= $arrDadoPontuaco['id_usuario'] . ", '" . implode("','" , array_values($arrDadoPontuaco['pontuacao'])) . "')";
        }
        mysql_query($strQuery);
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