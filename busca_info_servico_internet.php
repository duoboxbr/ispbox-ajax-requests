<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes_internet/buscainfo',[
    'internetid' => 28
]);
echo 'Response:' . "\n";
var_dump($curl->response);
/*

Response:
object(stdClass)#11 (5) {
  ["servicos"]=>
  array(1) {
    [0]=>
    object(stdClass)#10 (146) {
      ["id"]=>
      int(28)
      ["empresas_id"]=>
      int(1)
      ["clientes_id"]=>
      int(29)
      ["internetplanos_id"]=>
      int(4)
      ["bancos_id"]=>
      int(1)
      ["debito_automatico_contas_id"]=>
      NULL
      ["vendedor_id"]=>
      int(0)
      ["revendas_id"]=>
      int(0)
      ["clientes_grupos_id"]=>
      int(0)
      ["condominios_id"]=>
      int(0)
      ["tipo_conexao"]=>
      string(5) "PPPOE"
      ["forma_cobranca"]=>
      string(6) "BOLETO"
      ["radio_ip"]=>
      string(7) "0.0.0.0"
      ["radio_ip_id"]=>
      int(0)
      ["radio_mac"]=>
      string(0) ""
      ["radio_login"]=>
      string(0) ""
      ["radio_senha"]=>
      string(0) ""
      ["radio_sinal"]=>
      int(0)
      ["radio_ccq"]=>
      int(0)
      ["radio_priority"]=>
      int(0)
      ["radio_quality"]=>
      int(0)
      ["radio_capacity"]=>
      int(0)
      ["radio_pops_elementos_interfaces_id"]=>
      int(0)
      ["radio_snmp_oid"]=>
      int(0)
      ["wpa_login"]=>
      string(0) ""
      ["wpa_senha"]=>
      string(0) ""
      ["radio_mikrotik_interfaces_id"]=>
      int(0)
      ["ponto_acesso"]=>
      string(0) ""
      ["caixas_atendimento_cabos_portas_id"]=>
      NULL
      ["status"]=>
      int(0)
      ["desbloqueio_temporario_cliente"]=>
      NULL
      ["status_manual"]=>
      int(0)
      ["status_data_hora"]=>
      string(19) "0000-00-00 00:00:00"
      ["bloqueio_automatico"]=>
      int(1)
      ["bloqueio_automatico_dias"]=>
      int(0)
      ["plano_horario_ativado"]=>
      int(0)
      ["plano_franquia_dados_atingida"]=>
      int(0)
      ["plano_franquia_avisado_parcial_email"]=>
      int(0)
      ["plano_franquia_avisado_parcial_sms"]=>
      int(0)
      ["suspensao_inicio"]=>
      string(10) "0000-00-00"
      ["suspensao_motivo"]=>
      string(0) ""
      ["pppoe_login"]=>
      string(13) "beckertesteaa"
      ["pppoe_senha"]=>
      string(8) "y2N5pZ5l"
      ["pppoe_tipo_ip"]=>
      string(8) "DINAMICO"
      ["pppoe_nome_pool"]=>
      NULL
      ["pppoe_ip"]=>
      int(0)
      ["pppoe_ip_id"]=>
      int(0)
      ["hotspot_mac_login"]=>
      int(0)
      ["hotspot_filtro_ip"]=>
      int(0)
      ["hotspot_filtro_ip_id"]=>
      int(0)
      ["pontos_autenticacao_pppoe_id"]=>
      int(0)
      ["ip_gateway"]=>
      string(7) "0.0.0.0"
      ["ip_mascara"]=>
      int(0)
      ["ip_rede"]=>
      string(7) "0.0.0.0"
      ["ip_broadcast"]=>
      int(0)
      ["ip_atualizar"]=>
      int(1)
      ["ip_dhcp"]=>
      int(0)
      ["ip_traffic_in"]=>
      int(0)
      ["ip_traffic_out"]=>
      int(0)
      ["pops_elementos_interfaces_id"]=>
      int(0)
      ["grafico_banda_snmp_oid"]=>
      int(0)
      ["mikrotik_interfaces_id"]=>
      int(0)
      ["filtro_mac"]=>
      string(0) ""
      ["proxy_transparente"]=>
      int(0)
      ["bloqueio_hora_inicio"]=>
      string(8) "00:00:00"
      ["bloqueio_hora_fim"]=>
      string(8) "00:00:00"
      ["bloqueio_hora_dias"]=>
      string(0) ""
      ["data_instalacao"]=>
      string(10) "2024-08-05"
      ["prazo_contrato"]=>
      int(12)
      ["data_vencimento_contrato"]=>
      NULL
      ["meses_gratuitos"]=>
      int(0)
      ["valor_instalacao"]=>
      NULL
      ["quantidade_parcelas_instalacao"]=>
      int(0)
      ["primeiro_vencimento_instalacao"]=>
      NULL
      ["instalacao_boletos_id"]=>
      NULL
      ["fidelidade"]=>
      int(0)
      ["fidelidade_valor_total"]=>
      string(4) "0.00"
      ["dia_vencimento"]=>
      int(20)
      ["tipo_vencimento"]=>
      int(0)
      ["valor_desconto"]=>
      string(4) "0.00"
      ["valor_acrescimo"]=>
      string(4) "0.00"
      ["desconto_plano_pagamento_antecipado"]=>
      int(1)
      ["isento"]=>
      int(0)
      ["equipamento_instalado"]=>
      string(8) "COMODATO"
      ["tecnologia"]=>
      string(1) "c"
      ["dici_scm_tecnologias_id"]=>
      int(33)
      ["dici_scm_tipo_atendimento"]=>
      string(6) "URBANO"
      ["nota_fiscal_tipo_assinante"]=>
      string(2) "03"
      ["nota_fiscal_tipo_utilizacao"]=>
      string(1) "0"
      ["nota_fiscal_cfop"]=>
      string(4) "5307"
      ["nota_fiscal_21_informacoes_complementares"]=>
      string(0) ""
      ["endereco_instalacao_igual_principal"]=>
      int(1)
      ["instalacao_cep"]=>
      string(0) ""
      ["instalacao_endereco"]=>
      string(0) ""
      ["instalacao_endereco_numero"]=>
      int(0)
      ["instalacao_endereco_complemento"]=>
      string(0) ""
      ["instalacao_endereco_bairro"]=>
      string(0) ""
      ["instalacao_endereco_referencia"]=>
      string(0) ""
      ["instalacao_cidade_ibge"]=>
      int(4104808)
      ["instalacao_cidade"]=>
      string(8) "CASCAVEL"
      ["instalacao_localidade"]=>
      string(0) ""
      ["instalacao_uf"]=>
      string(2) "PR"
      ["instalacao_coordenadas_gps"]=>
      string(0) ""
      ["endereco_cobranca_igual_principal"]=>
      int(1)
      ["cobranca_cep"]=>
      string(0) ""
      ["cobranca_endereco"]=>
      string(0) ""
      ["cobranca_endereco_numero"]=>
      int(0)
      ["cobranca_endereco_complemento"]=>
      string(0) ""
      ["cobranca_endereco_bairro"]=>
      string(0) ""
      ["cobranca_endereco_referencia"]=>
      string(0) ""
      ["cobranca_cidade_ibge"]=>
      int(4104808)
      ["cobranca_cidade"]=>
      string(8) "CASCAVEL"
      ["cobranca_localidade"]=>
      string(0) ""
      ["cobranca_uf"]=>
      string(2) "PR"
      ["cobranca_coordenadas_gps"]=>
      string(0) ""
      ["ativo"]=>
      int(1)
      ["data_rescisao"]=>
      string(10) "0000-00-00"
      ["motivo_rescisao"]=>
      string(0) ""
      ["rescisao_manter_conexao"]=>
      int(0)
      ["rescisao_contas_movimentacao_id"]=>
      int(0)
      ["rescisao_usuarios_id"]=>
      int(0)
      ["data_cadastro"]=>
      string(19) "2024-07-23 18:35:34"
      ["cadastro_usuarios_id"]=>
      int(2)
      ["data_alteracao"]=>
      string(19) "2024-08-05 16:02:59"
      ["alteracao_usuarios_id"]=>
      int(2)
      ["rescisao_motivos_id"]=>
      int(0)
      ["fidelidade_data_rescisao"]=>
      NULL
      ["debito_agencia"]=>
      string(0) ""
      ["debito_id_cliente_empresa"]=>
      string(0) ""
      ["bloqueio_automatico_dias_suspensao_parcial"]=>
      int(0)
      ["rescisao_manter_conexao_data"]=>
      NULL
      ["fidelidade_data_inicio"]=>
      NULL
      ["fidelidade_data_final"]=>
      NULL
      ["fidelidade_valor_bonificacao"]=>
      string(4) "0.00"
      ["debito_id_cliente_banco"]=>
      string(0) ""
      ["fidelidade_tempo"]=>
      int(0)
      ["clientes_cartoes_id"]=>
      int(0)
      ["indicacao"]=>
      int(0)
      ["indicacao_clientes_id"]=>
      NULL
      ["indicacao_outro"]=>
      string(0) ""
      ["grafico_sinal"]=>
      bool(false)
      ["grafico_ccq"]=>
      bool(false)
      ["grafico_airmax"]=>
      bool(false)
      ["roteadores_configuracoes"]=>
      array(0) {
      }
      ["email"]=>
      string(13) "beckertesteaa"
      ["login"]=>
      string(13) "beckertesteaa"
    }
  }
  ["servicos_outros"]=>
  array(0) {
  }
  ["servicos_telefonia"]=>
  array(0) {
  }
  ["servicos_total"]=>
  int(1)
  ["erro"]=>
  int(0)
}
 */