<?php
##########################################################################################################################################
# AUTOR: ALEXANDRE GUIMARAES SARMENTO
# DATA: 27-12-2016
# E-MAIL: alexandre890@yahoo.com.br
# WHATSAPP: (98) 99212-5970
# CIDADE: SAO LUIS - MA
##########################################################################################################################################

function remover_acentos($str) 
{ 
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?', 'ç', 'Ç', "'" ); 
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o','c','C', " " ); 
  return str_replace($a, $b, $str); 
} 

function post_slug($str) 
{ 
  return strtoupper(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), 
  array('', '-', ''), remover_acentos($str))); 
} 
?> 

<?php
/*Campos Numéricos (“Picture 9”)
• Alinhamento: sempre à direita, preenchido com zeros à esquerda, sem máscara de edição;
• Não utilizados: preencher com zeros.
*/
function picture_9($palavra,$limite){
	$var=str_pad($palavra, $limite, "0", STR_PAD_LEFT);
	return $var;
}

/*
Campos Alfanuméricos (“Picture X”)
• Alinhamento: sempre à esquerda, preenchido com brancos à direita;
• Não utilizados: preencher com brancos;
• Caracteres: maiúsculos, sem acentuação, sem ‘ç’, sem caracteres especiais.
*/
	 
function picture_x( $palavra, $limite ){
	$var = str_pad( $palavra, $limite, " ", STR_PAD_RIGHT );
	$var = remover_acentos( $var );
	if( strlen( $palavra ) >= $limite ){
		$var = substr( $palavra, 0, $limite );
	}
	$var = strtoupper( $var );// converte em letra maiuscula
	return $var;
}	 
	 
function sequencial($i)
{
if($i < 10)
{
return zeros(0,5).$i;
}
else if($i > 10 && $i < 100)
{
return zeros(0,4).$i;
}
else if($i > 100 && $i < 1000)
{
return zeros(0,3).$i;
}
else if($i > 1000 && $i < 10000)
{
return zeros(0,2).$i;
}
else if($i > 10000 && $i < 100000)
{
return zeros(0,1).$i;
}
}

function zeros($min,$max)
{
$x = ($max - strlen($min));
for($i = 0; $i < $x; $i++)
{
$zeros .= '0';
}
return $zeros.$min;
}

function complementoRegistro($int,$tipo)
{
if($tipo == "zeros")
{
$space = '';
for($i = 1; $i <= $int; $i++)
{
$space .= '0';
}
}
else if($tipo == "brancos")
{
$space = '';
for($i = 1; $i <= $int; $i++)
{
$space .= ' ';
}
}

return $space;
}


$erros = 0;
$extensao = ".TST";

// achar o digito verificador do nosso numero
			
function digitoVerificador_nossonumero( $numero ) {
	$resto2 = modulo_11($numero, 7, 1);
     $digito = 11 - $resto2;
     if ($digito == 10) {
        $dv = "P";
     } elseif($digito == 11) {
     	$dv = 0;
	} else {
        $dv = $digito;
     	}
	 return $dv;
}

// FUNÇÕES
// Algumas foram retiradas do Projeto PhpBoleto e modificadas para atender as particularidades de cada banco

function formata_numero($numero,$loop,$insert,$tipo = "geral") {
	if ($tipo == "geral") {
		$numero = str_replace(",","",$numero);
		while(strlen($numero)<$loop){
			$numero = $insert . $numero;
		}
	}
	if ($tipo == "valor") {
		/*
		retira as virgulas
		formata o numero
		preenche com zeros
		*/
		$numero = str_replace(",","",$numero);
		while(strlen($numero)<$loop){
			$numero = $insert . $numero;
		}
	}
	if ($tipo == "convenio") {
		while(strlen($numero)<$loop){
			$numero = $numero . $insert;
		}
	}
	return $numero;
}

		
function modulo_11($num, $base=9, $r=0)  {
    /**
     *   Autor:
     *           Pablo Costa <pablo@users.sourceforge.net>
     *
     *   Função:
     *    Calculo do Modulo 11 para geracao do digito verificador 
     *    de boletos bancarios conforme documentos obtidos 
     *    da Febraban - www.febraban.org.br 
     *
     *   Entrada:
     *     $num: string numérica para a qual se deseja calcularo digito verificador;
     *     $base: valor maximo de multiplicacao [2-$base]
     *     $r: quando especificado um devolve somente o resto
     *
     *   Saída:
     *     Retorna o Digito verificador.
     *
     *   Observações:
     *     - Script desenvolvido sem nenhum reaproveitamento de código pré existente.
     *     - Assume-se que a verificação do formato das variáveis de entrada é feita antes da execução deste script.
     */                                        

    $soma = 0;
    $fator = 2;

    /* Separacao dos numeros */
    for ($i = strlen($num); $i > 0; $i--) {
        // pega cada numero isoladamente
        $numeros[$i] = substr($num,$i-1,1);
        // Efetua multiplicacao do numero pelo falor
        $parcial[$i] = $numeros[$i] * $fator;
		// Soma dos digitos
        $soma += $parcial[$i];
		if ($fator == $base) {
            // restaura fator de multiplicacao para 2 
            $fator = 1;
        }
        $fator++;
    }

    /* Calculo do modulo 11 */
    if ($r == 0) {
        $soma *= 10;
        $digito = $soma % 11;
        if ($digito == 10) {
            $digito = 0;
        }
        return $digito;
    } elseif ($r == 1){
        $resto = $soma % 11;
        return $resto;
    }
}
		// final da funcao 
		
		
		
		
// FIM DAS FUNCOES

// INICIO DO CODIGO

$fusohorario     = 3; // como o servidor de hospedagem é a dreamhost pego o fuso para o horario do brasil
$timestamp       = mktime(date("H") - $fusohorario, date("i"), date("s"), date("m"), date("d"), date("Y"));

$DATAHORA['PT'][$i]  = gmdate("d/m/Y H:i:s", $timestamp);
$DATAHORA['EN'][$i]  = gmdate("Y-m-d H:i:s", $timestamp);
$DATA['PT'][$i]      = gmdate("d/m/Y", $timestamp);
$DATA['EN'][$i]      = gmdate("Y-m-d", $timestamp);
$DATA['DIA'][$i]     = gmdate("d",$timestamp);
$DATA['MES'][$i]     = gmdate("m",$timestamp);
$DATA['ANO'][$i]     = gmdate("Y",$timestamp);
$HORA            = gmdate("H:i:s", $timestamp);
$HORA1           = gmdate("His", $timestamp);

$filename        = $arquivo;  // nome do seu arquivo de remessa a ser gerado
$conteudo        = '';        // nao alterar
$lote_sequencial = 1;         // nao alterar
$lote_servico    = 1;         // nao alterar - para cobrança registrada é 1 - nao alterar

$header          = '';        // nao alterar - linha do header
$registro_t1     = '';        // nao alterar - linha do corpo ou dos boletos
$linha_9         = '';        // nao alterar - linha do rodape ou trailler do arquivo

$conteudo_meio   = '';        // nao alterar - linha usada para montar o arquivo

$num_seq_linha   = 1;

// *****************************************************************************************************************
// DADOS DA EMPRESA EMISSORA DO BOLETO - TROQUE POR SEUS DADOS
// *****************************************************************************************************************

$valor_multa               = '200';                                    // VALOR DA MULTA INFORMADA EM TAXA PERCENTUAL MENSAL => 200 => 2% 
$carteira                  = '09';                                     // NUMERO DA CARTEIRA ( 09 = COM REGISTRO BRADESCO )
$cpf_cnpj                  = '12345569000155';                         // CNPJ DA EMPRESA SEM PONTOS OU TRACOS
$agencia                   = '2554';                                   // NUMERO DA AGENCIA
$dv_agencia                = '0';                                      // DIGITO VERIFICADOR DA AGENCIA
$conta                     = '234567';                                 // NUMERO DA CONTA
$dv_conta                  = '8';                                      // DIGITO VERIFICADOR DA CONTA
$dv_ag_conta               = '0';                                      // DIGITO VERIFICADOR DA AGENCA/CONTA
$num_banco                 = '237';                                    // NUMERO DO BANCO - 237 => BRADESCO
$nome_banco                = 'BRADESCO SA';                            // NOME DO BANCO -> BRADESCO SA
$codigo_beneficiario       = '123456';                                 // COD. DO BENEFICIARIO
$empresa_beneficiario      = 'EMPRESA DEMO';                           // NOME DA EMPRESA
                             
$numero_sequencial_arquivo = $xnumero_seq;                             // cada arquivo gerado deverá ter uma sequencia (vide arquivo anterior .php)

// *****************************************************************************************************************
// LAYOUT DO ARQUIVO REMESSA - REGISTRO HEADER LABEL - ( 1a. linha do arquivo de remessa )
// *****************************************************************************************************************

$header .= "0";                                                                  // 001 a 001 -> Banco (237 = bradesco) - POR 0
$header .= "1";                                                                  // 002 a 002 -> Identificacao do arquivo remessa - POR 1
$header .= "REMESSA";                                                            // 003 a 009 -> Literal Remessa - POR REMESSA
$header .= "01";                                                                 // 010 a 011 -> codigo do servico ou do movimento - POR 01
$header .= picture_x("COBRANCA",15);                                             // 012 a 026 -> literal servico - por COBRANCA
$header .= picture_9($codigo_beneficiario,20);                                   // 027 a 046 -> Cod. da empresa (fornecido pelo bradesco) (pag. 16)
$header .= picture_x($empresa_beneficiario,30);                                  // 047 a 076 -> Razao social
$header .= picture_9($num_banco,3);                                              // 077 a 079 -> por 237
$header .= picture_x($nome_banco,15);                                            // 080 a 094 -> Nome do banco por extenso
$header .= $DATA['DIA'][$i].$DATA['MES'][$i].substr($DATA['ANO'][$i],2,2);       // 095 a 100 -> Data da gravacao do arquivo
$header .= complementoRegistro(8,"brancos");                                     // 101 a 108 -> Branco
$header .= "MX";                                                                 // 109 a 110 -> Identificacao do sistema ->  Por MX
$header .= picture_9($numero_sequencial_arquivo,7);                              // 111 a 117 -> Num. sequencial de remessa -> Id da sua remessa
$header .= complementoRegistro(277,"brancos");                                   // 118 a 394 -> Branco
$header .= picture_9($num_seq_linha,6);                                          // 395 a 400 -> NUMERO SEQUENCIAL DO REGISTRO DE UM EM UM

$header .= chr(13).chr(10);                                                      // QUEBRA DE LINHA

$num_seq_linha++;


// *******************************************************************************************************************
// LACO PARA PEGAR OS BOLETOS
// *******************************************************************************************************************
$total = 1;

for( $j=0; $j<$total; $j++ ){

	$nosso_numero                    = '32244';               // variavel nosso numero
	$numero_documento                = $nosso_numero;

	// achar o digito verificador do nosso numero
	$yc    = "09"; 
	$nnum  = formata_numero($yc,2,0).formata_numero( $nosso_numero,11,0 ) ;
	$dv_nn = digitoVerificador_nossonumero( $nnum );
	// final

	$dv_nosso_numero                 = $dv_nn;              // incluindo o dig. verificador para atender o bradesco
	$data_vencimento_boleto          = '050217';            // data de vencimento formato DDMMYY
	$data_multa                      = '060217';            // FORMATO -> DDMMYY (06 DIGITOS)
	$data_emissao_boleto             = '201216';            // FORMATO -> DDMMYY (06 DIGITOS)
	$valor_boleto                    = '75897';             // R$ 758,97
	$data_juros                      = '060217';
	$data_desconto                   = '050217';
	$valor_desconto                  = '500';               // 500 => 5%
	
	if( $valor_desconto >0 ){
		$xdata_limite_desc = picture_9( substr( $data_desconto,0,6 ),6 ); 
		$xvalor_desconto   = picture_9($valor_desconto,13);               
	}else{
		$xdata_limite_desc = picture_9('0',6);                            
		$xvalor_desconto   = picture_9('0',13);                           
	}

	$valor_iof                       = complementoRegistro(13,"zeros");         // 193 a 205 -> Valor do IOF => Somente se sua empresa for conecessionaria de credito
    $valor_abatimento                = complementoRegistro(13,"zeros");         // 206 a 218 -> Valor do abatimento a ser concedido ou cancelado
	$tipo_inscricao_pagador          = '1';                                     // 219 a 220 -> Tipo de inscricao de pessoa 1=fisica / 2= juridica
    $numero_inscricao_pagador        = '40329542322';                           // 221 a 234 -> Nº Inscricao do pagador 
	$nome_pagador                    = 'ROBERTO DOS SANTOS SOUSA MELO';         // 235 a 274 -> Nome do pagador
	$endereco_pagador                = 'RUA CEARA 678';                         // 235 a 274 -> Nome do pagador
	$bairro_pagador                  = 'CENTRO';                                // 275 a 314 -> Endereco do pagador
    $pri_msg                         = complementoRegistro(12,"brancos");       // 315 a 326 -> 1a. Mensagem
	$cep_pagador                     = '65072';                                 // 327 a 331 -> CEP
	$cep_pagador_sufixo              = '300';                                   // 332 a 334 -> Sufixo do CEP
	$cidade_pagador                  = 'SAO LUIS';                              // 335 a 394 -> Sacador/Avalista
	$estado_pagador                  = 'MA';                                    // 395 a 400 -> No. sequencial do registro
	$email_pagador                   = 'ROBERTO@UOL.COM.BR';                    // 235 a 274 -> EMAIL PAGADOR

// *****************************************************************************************************************
// REGISTRO DE TRANSACAO - TIPO 1 (OBRIGATORIO) -> Dados dos boletos
// *****************************************************************************************************************

$registro_t1 .= "1";                                                 // 001 a 001 -> Identificacao do registro. Sempre = 1
$registro_t1 .= complementoRegistro(5,"brancos");                    // 002 a 006 -> Agencia de debito (opcional) deixei em branco. cod. agencia do pagador exclus. p/ deb em conta
$registro_t1 .= complementoRegistro(1,"brancos");                    // 007 a 007 -> digito da egencia de debito (opcional)
$registro_t1 .= complementoRegistro(5,"brancos");                    // 008 a 012 -> Razao da conta corrente (Opcional)
$registro_t1 .= complementoRegistro(7,"brancos");                    // 013 a 019 -> Conta corrente (opcional)
$registro_t1 .= complementoRegistro(1,"brancos");                    // 020 a 020 -> Digito da conta corrente (opcional)
$registro_t1 .= "0".picture_9($carteira,3).picture_9($agencia,5).picture_9($conta,6).picture_9($dv_conta,1); // 021 a 037 -> identificacao da empresa beneficiaria no banco
$registro_t1 .= picture_9($numero_documento,25);                     // 038 a 062 -> No. controle do participanete -> (livre e para uso da empresa) deixei 3 zeros
$registro_t1 .= complementoRegistro(3,"zeros");                      // 063 a 065 -> Codigo do banco a ser debitado na camara de compensacao
$registro_t1 .= picture_9('2',1);                                    // 066 a 066 -> Campo de multa
$registro_t1 .= picture_9('200',4);                                  // 067 a 070 -> Percentual de multa
$registro_t1 .= picture_9($nosso_numero,11);                         // 071 a 081 -> Identificacao do titulo no banco Nosso Numero
$registro_t1 .= picture_9($dv_nosso_numero,1);                       // 082 a 082 -> Digito de auto conferencia do nosso numero
$registro_t1 .= complementoRegistro(10,'zeros');                     // 083 a 092 -> Desconto de bonificacao por dia (10 zeros)
$registro_t1 .= picture_9('2',1);                                    // 093 a 093 -> Condicao para emissao da papeleta 1=banco emite / 2=cliente emite
$registro_t1 .= 'N';                                                 // 094 a 094 -> Se o banco vai por em debito em conta N=nao
$registro_t1 .= complementoRegistro(10,'brancos');                   // 095 a 104 -> deixar 10 brancos
$registro_t1 .= complementoRegistro(1,'brancos');                    // 105 a 105 -> deixar 1 branco
$registro_t1 .= complementoRegistro(1,'zeros');                      // 106 a 106 -> enderecamento de aviso de debito -> (opcional) deixar 1 zero
$registro_t1 .= complementoRegistro(2,'brancos');                    // 107 a 108 -> deixar 2 brancos
$registro_t1 .= "01";                                                // 109 a 110 -> cod. do movimento/ocorrencia (pag.20) -> 01 = remessa
$registro_t1 .= picture_9($numero_documento,10);                     // 111 a 120 -> Numero do documento (nosso numero)
$registro_t1 .= picture_9($data_vencimento_boleto,6);                // 121 a 126 -> Data de vencimento   
$registro_t1 .= picture_9($valor_boleto,13);                         // 127 a 139 -> valor do titulo
$registro_t1 .= complementoRegistro(3,"zeros");                      // 140 a 142 -> Agência/banco encarregado da Cobrança (Preencher com zeros)
$registro_t1 .= complementoRegistro(5,"zeros");                      // 143 a 147 -> Agencia depositaria -> preencher com zeros
$registro_t1 .= picture_x('99',2);                                   // 148 a 159 -> Especie de titulo. 99 = outros
$registro_t1 .= "N";                                                 // 150 a 150 -> Identificacao -> Sempre 'N' 
$registro_t1 .= picture_9($data_emissao_boleto,6);                   // 151 a 156 -> Data de emissao do titulo
$registro_t1 .= complementoRegistro(2,"zeros");                      // 157 a 158 -> 1a. instrucao
$registro_t1 .= complementoRegistro(2,"zeros");                      // 159 a 160 -> 2a. instrucao
$registro_t1 .= picture_9("003",13);                                 // 161 a 173 -> Valor a ser cobrado por dia de atraso em percentual = 003 => 0,03 
$registro_t1 .= $xdata_limite_desc;                                  // 174 a 179 -> Data limite para desconto
$registro_t1 .= $xvalor_desconto;                                    // 180 a 192 -> Valor do desconto
$registro_t1 .= complementoRegistro(13,"zeros");                     // 193 a 205 -> Valor do IOF - zeros
$registro_t1 .= complementoRegistro(13,"zeros");                     // 206 a 218 -> Valor do abatimento a ser concedido ou cancelado - Valor abatimento - zeros
$registro_t1 .= "01";                                                // 219 a 220 -> Identificacao do tipo de inscricao pagador / 1=pj 2=pj
$registro_t1 .= picture_9($numero_inscricao_pagador,14);             // 221 a 234 -> Inscricao do pagador - CPF
$registro_t1 .= picture_x($nome_pagador,40);                         // 235 a 274 -> Nome do pagador
$registro_t1 .= picture_x($endereco_pagador,40);                     // 275 a 314 -> Endereco completo
$registro_t1 .= complementoRegistro(12,"brancos");                   // 315 a 326 -> 1a. mensagem
$registro_t1 .= picture_9($cep_pagador,5);                           // 327 a 331 -> CEP
$registro_t1 .= picture_9($cep_pagador_sufixo,3);                    // 332 a 334 -> Cep (sufixo)
$registro_t1 .= complementoRegistro(60,"brancos");                   // 335 a 394 -> Sacador/Avalista ou 2a. mensagem
$registro_t1 .= picture_9( $num_seq_linha, 6 );                      // 395 a 400 -> Numero sequencia do registro

$registro_t1 .= chr(13).chr(10);                                     // QUEBRA DE LINHA

$lote_sequencial++;
	
$num_seq_linha++;
	
$conteudo_meio .= $registro_t1;
	

} 

// *******************************************************************************************************************
// Final do Laco que pega os dados dos boletos no seu banco de dados - FINAL DO CORPO (MEIO ou MIOLO) 
// *******************************************************************************************************************



	// *****************************************************************************************************************
	// REGISTRO TRAILLER - TIPO "9" - MONTAGEM DA ULTIMA LINHA DO ARQUIVO DE REMESSA
	// *****************************************************************************************************************
		
	$num_seq_linha--;
	
	$linha_9 .= '9';                                                // 001 a 001 -> Identificacao registro -> Por 9
	$linha_9 .= complementoRegistro(393,"brancos");                 // 002 a 394 -> Branco
	$linha_9 .= picture_9($num_seq_linha,6);                        // 395 a 400 -> Numero sequencial registro

	$linha_9 .= chr(13).chr(10);                                    // QUEBRA DE LINHA

	$conteudo = $header.$registro_t1.$linha_9;
	
// Em nosso exemplo, nós vamos abrir o arquivo $filename
// em modo de adição. O ponteiro do arquivo estará no final
// do arquivo, e é pra lá que $conteudo irá quando o 
// escrevermos com fwrite().
// 'w+' e 'w' apaga tudo e escreve do zero
// 'a+' comeca a escrever do inicio para o fim preservando o conteudo do arquivo

if (!$handle = fopen($filename, 'w+')){
	erro("<div align='center' class='label_normal'><img src='figuras/erro1.png' align='absmiddle'>&nbsp;Não foi possível abrir o arquivo ($filename)</div><br>");
}

// Escreve $conteudo no nosso arquivo aberto.
if (fwrite($handle, "$conteudo") === FALSE){
	echo "<div align='center' class='label_normal'><img src='figuras/erro1.png' align='absmiddle'>&nbsp;Não foi possível escrever no arquivo ($filename)</div><br>";
}
fclose($handle);
echo "<div align='center' class='label_normal'><img src='figuras/ok2.png' align='absmiddle'>&nbsp;Arquivo de remessa gerado com sucesso!</div>";

?>

<?php
// TRANSFERIR O ARQUIVO PARA O SERVIDOR

	$xdestino = "remessa-400/".$filename;
	$xorigem = $filename;
	@copy($xorigem,$xdestino);
	
	$arquivo = $filename;
	//echo "<br>passei aqui na hora de copiar....";

?>