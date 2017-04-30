<?php
$xdata_processamento = date("Y/m/d");

function php_fnumber($var1){
	//return number_format($var1,2,",",'.�.');
	return number_format($var1,2, ',', '.');
}

function datasql($data1) {
	$data1 = substr($data1,0,2).'/'.substr($data1,2,2).'/'.substr($data1,4,4);
	if (!empty($data1)){
	$p_dt = explode('/',$data1);
	$data_sql = $p_dt[2].'-'.$p_dt[1].'-'.$p_dt[0];
	return $data_sql;
	}
}

function datacx_databr( $var1 ){
	// Converter uma string data brasileira em uma data brasileira com as barras
	// Entrada: DDMMAAAA / Saida: DD/MM/AAAA
	$j_dia = substr($var1,0,2);
	$j_mes = substr($var1,2,2);
	$j_ano = substr($var1,4,4);
	$j_dtf = $j_dia."/".$j_mes."/".$j_ano;
	return $j_dtf;
}

function remove_zero_esq( $var1 ){
	$tam = strlen( $var1 );
	for( $i=0; $i<$tam; $i++ ){
		if( substr( $var1, $i, 1 )	== "0" ){
			$y = substr( $var1, ($i+1), ($tam) );
		}else{
			return $y;
		}
	}
	return $y;
}


function numero_usa( $var1 ){
	$tam  = strlen( $var1 );
	$ped1 = substr( $var1,0,($tam-2) );
	$ped2 = substr( $var1,-2);
	$num2 = $ped1.".".$ped2;
	if( $num2 == "." ){
		$num2 = "0.00";
	}	
	return $num2;
}

function rejeicao( $v1 ){

	switch( $v1 ){
	
		case 01:
			$xf = "C�DIGO DO BANCO INV�LIDO";
			break;
		
		case 02:
			$xf = "C�DIGO DO REGISTRO DETALHE INV�LIDO";		
			break;

		case 03:
			$xf = "C�DIGO DO SEGMENTO INV�LIDO";		
			break;

		case 04:
			$xf = "C�DIGO DE MOVIMENTO N�O PERMITIDO PARA CARTEIRA";		
			break;

		case 05:
			$xf = "C�DIGO DE MOVIMENTO INV�LIDO";		
			break;

		case 06:
			$xf = "TIPO/N�MERO DE INSCRI��O DO CEDENTE INV�LIDOS";		
			break;

		case 07:
			$xf = "AG�NCIA/CONTA/DV INV�LIDO";		
			break;

		case 08:
			$xf = "NOSSO N�MERO INV�LIDO";		
			break;

		case 09:
			$xf = "NOSSO N�MERO DUPLICADO";		
			break;

		case 10:
			$xf = "CARTEIRA INV�LIDA";		
			break;

		case 11:
			$xf = "FORMA DE CADASTRAMENTO DO T�TULO INV�LIDO";		
			break;

		case 12:
			$xf = "TIPO DE DOCUMENTO INV�LIDO";		
			break;

		case 13:
			$xf = "IDENTIFICA��O DA EMISS�O DO BLOQUETO INV�LIDA";		
			break;

		case 14:
			$xf = "IDENTIFICA��O DA DISTRIBUI��O DO BLOQUETO INV�LIDA";		
			break;

		case 15:
			$xf = "CARACTER�STICAS DA COBRAN�A INCOMPAT�VEIS";		
			break;

		case 16:
			$xf = "DATA DE VENCIMENTO INV�LIDA";		
			break;
		
		case 17:
			$xf = "DATA DE VENCIMENTO ANTERIOR A DATA DE EMISS�O";		
			break;

		case 18:
			$xf = "VENCIMENTO FORA DO PRAZO DA OPERA��O";		
			break;

		case 19:
			$xf = "T�TULO A CARGO DE BANCOS CORRESPONDENTES COM VENCIMENTO INFERIOR A XX DIAS";		
			break;

		case 20:
			$xf = "VALOR DO T�TULO INV�LIDO";		
			break;

		case 21:
			$xf = "ESP�CIE DO T�TULO INV�LIDA";		
			break;

		case 22:
			$xf = "ESP�CIE DO T�TULO N�O PERMITIDA PARA A CARTEIRA";		
			break;

		case 23:
			$xf = "ACEITE INV�LIDO";		
			break;

		case 24:
			$xf = "DATA DE EMISS�O INV�LIDA";		
			break;

		case 25:
			$xf = "DATA DE EMISS�O POSTERIOR A DATA DE ENTRADA";		
			break;

		case 26:
			$xf = "C�DIGO DE JUROS DE MORA INV�LIDO";		
			break;

		case 27:
			$xf = "VALOR/TAXA DE JUROS DE MORA INV�LIDO";		
			break;

		case 28:
			$xf = "C�DIGO DO DESCONTO INV�LIDO";		
			break;
		
		case 29:
			$xf = "VALOR DO DESCONTO MAIOR OU IGUAL AO VALOR DO T�TULO";		
			break;

		case 30:
			$xf = "DESCONTO A CONCEDER N�O CONFERE";
			break;

		case 31:
			$xf = "CONCESS�O DE DESCONTO - J� EXISTE DESCONTO ANTERIOR";		
			break;

		case 35:
			$xf = "VALOR A CONCEDER N�O CONFERE";		
			break;

		case 42:
			$xf = "C�DIGO PARA BAIXA/DEVOLU��O INV�LIDO";		
			break;

		case 43:
			$xf = "PRAZO PARA BAIXA/DEVOLU��O INV�LIDO";		
			break;

		case 44:
			$xf = "C�DIGO DE MOEDA INV�LIDO";		
			break;

		case 45:
			$xf = "NOME DO PAGADOR N�O INFORMADO";		
			break;

		case 46:
			$xf = "TIPO/N� DE INSCRI��O DO PAGADOR INV�LIDOS";		
			break;

		case 47:
			$xf = "ENDERE�O DO PAGADOR N�O INFORMADO";		
			break;

		case 48:
			$xf = "CEP INV�LIDO";		
			break;

		case 49:
			$xf = "CEP SEM PRA�A DE COBRAN�A (SEM AG�NCIA NA LOCALIDADE )";		
			break;

		case 50:
			$xf = "CEP REFERENTE A UM BANCO CORRESPONDENTE";		
			break;

		case 51:
			$xf = "CEP INCOMPAT�VEL COM A UNIDADE DA FEDERA��O (SIGLA DO ESTADO)";		
			break;

		case 52:
			$xf = "UNIDADE DA FEDERA��O INV�LIDA";		
			break;

		case 57:
			$xf = "C�DIGO DA MULTA INV�LIDO";		
			break;

		case 58:
			$xf = "DATA DA MULTA INV�LIDA";		
			break;

		case 59:
			$xf = "VALOR/PERCENTUAL DA MULTA INV�LIDO";		
			break;

		case 60:
			$xf = "MOVIMENTO PARA T�TULO N�O CADASTRADO";		
			break;

		case 62:
			$xf = "TIPO DE IMPRESS�O INV�LIDA";		
			break;

		case 63:
			$xf = "ENTRADA PARA T�TULO J� CADASTRADO";		
			break;

		case 64:
			$xf = "N�MERO DA LINHA INV�LIDO";		
			break;

		case 72:
			$xf = "D�BITO N�O AGENDADO - BENEFICI�RIO N�O PARTICIPA DA MODALIDADE DE D�BITO AUTOM�TICO";		
			break;

		case 79:
			$xf = "DATA DE JUROS DE MORA INV�LIDO";		
			break;

		case 80:
			$xf = "DATA DO DESCONTO INV�LIDA";		
			break;

		case 86:
			$xf = "SEU N�MERO INV�LIDO";		
			break;

	}
	
	return( $xf );
	
}	





function motivo_liquidacao( $var1 ){

	if( $var1 == "01" ){
		$xfra = "LIQUIDA��O POR SALDO";
	}elseif( $var1 == "02" ){
		$xfra = "LIQUIDA��O POR CONTA";
	}elseif( $var1 == "03" ){
		$xfra = "LIQUIDA��O NO GUICH� DE CAIXA EM DINHEIRO";
	}elseif( $var1 == "04" ){
		$xfra = "COMPENSA��O ELETR�NICA";
	}elseif( $var1 == "05" ){
		$xfra = "COMPENSA��O CONVENCIONAL";
	}elseif( $var1 == "06" ){
		$xfra = "COMPENSA��O POR MEIO ELETR�NICO";
	}elseif( $var1 == "07" ){
		$xfra = "COMPENSA��O AP�S FERIADO LOCAL";
	}elseif( $var1 == "08" ){
		$xfra = "COMPENSA��O EM CART�RIO";
	}elseif( $var1 == "09" ){
		$xfra = "COMANDADA BANCO";  // BAIXA
	}elseif( $var1 == "10" ){
		$xfra = "COMANDADA CLIENTE ARQUIVO";  // BAIXA
	}elseif( $var1 == "11" ){
		$xfra = "COMANDADA CLIENTE ON-LINE";  // BAIXA
	}elseif( $var1 == "12" ){
		$xfra = "DECURSO PRAZO-CLIENTE";  // BAIXA
	}elseif( $var1 == "13" ){
		$xfra = "DECURSO PRAZO-BANCO";  // BAIXA
	}elseif( $var1 == "14" ){
		$xfra = "PROTESTADO";  // BAIXA
	}elseif( $var1 == "15" ){
		$xfra = "T�TULO EXCLU�DO";  // BAIXA
	}elseif( $var1 == "30" ){
		$xfra = "LIQUIDA��O EM GUICH� EM CHEQUE";
	}elseif( $var1 == "31" ){
		$xfra = "LIQUIDA��O EM BANCO CORRESPONDENTE";
	}elseif( $var1 == "32" ){
		$xfra = "LIQUIDA��O EM TERMINAL DE AUTO-ATENDIMENTO";
	}elseif( $var1 == "33" ){
		$xfra = "LIQUIDA��O EM INTERNET BANKING";
	}elseif( $var1 == "34" ){
		$xfra = "LIQUIDA��O EM OFFICE BANKING";
	}elseif( $var1 == "35" ){
		$xfra = "LIQUIDADO CORRESPONDENTE EM DINHEIRO";
	}elseif( $var1 == "36" ){
		$xfra = "LIQUIDADO CORRESPONDENTE EM CHEQUE";
	}elseif( $var1 == "37" ){
		$xfra = "LIQUIDADO POR MEIO DE CENTRAL DE ATENDIMENTO (TELEFONE) BAIXA PELO BANCO";
	}elseif( $var1 == "12" ){
		$xfra = "DECURSO PRAZO - CLIENTE";
	}elseif( $var1 == "13" ){
		$xfra = "DECURSO PRAZO - BANCO";
	}elseif( $var1 == "14" ){
		$xfra = "T�TULO PROTESTADO";
	}elseif( $var1 == "15" ){
		$xfra = "T�TULO EXCLU�DO DO BANCO";
	}else{
		$xfra = "MOTIVO PG: ".$var1."";
	}
	return( $xfra );
	
}	

$z = 0; // contador dos itens da tabela a ser exibida
$total_itens = 0;
$total_itens_processados = 0;
$total_valor_nominal = 0;
$frase_motivo = "";
$bg_color = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>BANCO DO BRASIL - RETORNO CNAB 240</title>

<style>
.tit{
font-family:Geneva, Arial, Helvetica, sans-serif;
font-size:18px;
font-style:normal;
font-weight:bold;
color:#990000;
margin:4px;
}
</style>

</head>

<body>


<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3"><div align="center"><img src="../../../../figuras/logo-big.png" width="350" height="138" /></div></td>
          </tr>
          <tr>
            <td width="1%">&nbsp;</td>
            <td width="97%">&nbsp;</td>
            <td width="2%">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="17%" height="60" valign="top">&nbsp;</td>
    <td width="79%"><div align="left">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="10%" valign="top">&nbsp;</td>
          <td colspan="2" valign="top"><div align="left"><span class="titulo_das_tabelas">ARQUIVOS PROCESSADOS - BB CNAB 240 </span></div></td>
          <td width="3%">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td class="label_normal">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="right" class="label_normal">Arquivo de Retorno:&nbsp;</div></td>
          <td width="71%" class="label_normal"><div align="left" class="label_normal"> <strong><?php echo $_FILES['arquivo']['name'];?></strong> </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="left" class="label_normal">
            <div align="right" class="label_normal">Emiss&atilde;o:&nbsp; </div>
          </div></td>
          <td class="label_normal"><div align="left"><?php echo date("d/m/Y")." - ".date("h:m:s");?></div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div></td>
    <td width="2%">&nbsp;</td>
  </tr>
  <tr>
    <td width="1%" height="26" bgcolor="#FFFFFF"><span class="style57">&nbsp;</span></td>
    <td height="26" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="26" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="26" colspan="2" bgcolor="#FFFFFF"><table width="100%" class="tabela_info2">
      <tr>
        <td height="40" colspan="12" valign="middle" bgcolor="#FFCC00"><div align="center" class="titulo_das_tabelas">ARQUIVO DE RETORNO - BANCO DO BRASIL - CNAB 240</div></td>
      </tr>
      <tr>
        <td height="30" bgcolor="#FFCC00"><div align="center">N&ordm; Boleto</div></td>
        <td bgcolor="#FFCC00"><div align="center">C&oacute;d.&nbsp;Movimento</div></td>
        <td bgcolor="#FFCC00"><div align="center">C&oacute;d.&nbsp;Motivo</div></td>
        <td bgcolor="#FFCC00"><div align="center">Pagador</div></td>
        <td bgcolor="#FFCC00"><div align="center"> Vencimento</div></td>
        <td bgcolor="#FFCC00"><div align="center">Pagamento</div></td>
        <td bgcolor="#FFCC00"><div align="center">Valor</div></td>
        <td bgcolor="#FFCC00"><div align="center">Valor Pago</div></td>
        <td bgcolor="#FFCC00"><div align="center">Acr&eacute;scimos</div></td>
        <td bgcolor="#FFCC00"><div align="center">Desconto</div></td>
        <td bgcolor="#FFCC00"><div align="center">L&iacute;quido</div></td>
        
      </tr>

<?php

# Pegando dados do arquivo ##############################################################################

$nome = $_FILES['arquivo']['name'];
$type = $_FILES['arquivo']['type'];
$size = $_FILES['arquivo']['size'];
$tmp  = $_FILES['arquivo']['tmp_name'];

$b = 4;

$pasta = "retorno"; // Nome da pasta onde ficaram os arquivos de retorno

if(move_uploaded_file($tmp, $pasta."/".$nome)){

	$lendo = @fopen($pasta."/".$nome,"r");

	if (!$lendo){
		echo "Erro ao abrir a URL.";
		exit;
	}else{
		//echo "<br>arquivo aberto com sucesso";
	}

	$i = 1;
	$x = 1;
	$cod_motivo = "  ";
		
	while ( !feof( $lendo ) ) {
	
		$linha = fgets($lendo,241);
		
		$rr = "<pre>".$linha."</pre>";
		
		$xtamanho_linha = strlen($linha);
	
		if( $xtamanho_linha == 240 ){
			
			if( $i > 2 && substr( $rr, $b+14,1 ) == "T" && substr( $rr, $b+16,2)!=28 ){   // Essa linha e' um Segmento "T"
				
				$num_sequencial_t         = substr( $rr, $b+9,5 );                  // 04.3T ->   Num. Seq.T -> Numero Seq.             -> 9(005)   -> Conforme (G038)
				$carteira_nosso_numero    = substr( $rr, $b+38,3 );                 // 13.3T ->   Nosso Num  -> carteira                -> 9(003)   -> Conforme (G069)
				$nosso_numero_bradesco    = substr( $rr, $b+41,8 );                // 13.3T ->   Nosso Num  -> Identific. titulo banco -> 9(011)   -> Conforme (G069)
				$nosso_numero_dv          = substr( $rr, $b+49,1 );                 // 13.3T ->   Nosso Num  -> DV Nosso Numero         -> 9(001)   -> Conforme (G069)
				$nosso_num                = substr( $rr, $b+46,11 );               // nosso numero para funcionar de acordo com o sistema alex.
				$nosso_numero_alex        = remove_zero_esq( $nosso_num );
				$vencimento               = substr( $rr, $b+74,8 );                 // 13.3T ->   Vencimento -> Modalidade nosso numero -> 9(002)   -> Conforme (G069)
				$vm                       = substr( $rr, $b+82,15 );                // 13.3T ->   Valor tit. -> Modalidade nosso numero -> 9(002)   -> Conforme (G069)
				$valor_nominal            = numero_usa( remove_zero_esq( $vm ) );
				$cod_movimento = substr( $rr, $b+16,2 );                            // indica o que houve com o titulo
				$cod_ocorrencia = substr( $rr, $b+214,8);
				
				switch( $cod_movimento ){
				
					case 02:
						$xfrase_movimento = " REMESSA <br>CONFIRMADA (02)";
						$bg_color = "#FFF"; // branco
						$frase_motivo = "REMESSA <br>CONFIRMADA (02)";
						break;

					case 03: // REJEICAO
						$xfrase_movimento = "REMESSA <br>REJEITADA (03)";
						$bg_color = "#FFC4C4"; // vermelho
						$frase_motivo = rejeicao( $cod_ocorrencia );
						break;
						
					case 06: // LIQUIDACAO --> RELACIONA-SE COM O COD. DE OCORRENCIA ( C047 )
						$xfrase_movimento = "LIQUIDA��O (06)";
						$bg_color = "#98FB98"; // verde
						$cod_motivo_liquidacao = $cod_ocorrencia;
						$cod_motivo = $cod_motivo_liquidacao;
						$frase_motivo = motivo_liquidacao( substr(trim($cod_motivo_liquidacao),-2) );
						break;
						
					case 09: // BAIXA SIMPLES 
						$xfrase_movimento = "T�TULO <br>BAIXADO (09)";
						$bg_color = "#98FB98"; // verde
						$cod_motivo_liquidacao = substr( $rr, $b+214,8);
						$cod_motivo = $cod_motivo_liquidacao;
						$frase_motivo = motivo_liquidacao( substr(trim($cod_motivo_liquidacao),-2) );
						break;
				
					case 11:
						$xfrase_movimento = "T�TULOS EM <br>CARTEIRA";
						$frase_motivo = $xfrase_movimento;
						break;
																	
					case 14:
						$xfrase_movimento = "CONFIRMA��O DE RECEBIMENTO <br>INSTRU��O DE ALTERA��O <br>DE VENCIMENTO";
						$frase_motivo = $xfrase_movimento;
						break;
												
					case 15:
						$xfrase_movimento = "FRANCO DE PAGAMENTO";
						$frase_motivo = $xfrase_movimento;
						break;

					case 17: // LIQUIDACAO APOS BAIXA OU LIQUIDACAO SEM REGISTRO
						$xfrase_movimento = "LIQUIDA��O AP�S BAIXA OU<br>LIQUIDA��O T�TULO N�O REGISTRADO (17)";
						$bg_color = "#98FB98"; // verde
						$cod_motivo_liquidacao = substr( $rr, $b+214,8);
						$frase_motivo = motivo_liquidacao( substr(trim($cod_motivo_liquidacao),-2) );
						break;						

					case 26:  // REJEICAO
						$xfrase_movimento = "INSTRU��O REJEITADA (26)";
						$bg_color = "#FFC4C4"; // vermelho
						$frase_motivo = rejeicao( $cod_ocorrencia );
						break;
												
					case 27:
						$xfrase_movimento = $xf = "CONFIRMA��O DO PEDIDO DE<BR> ALTERA��O DE OUTROS DADOS (27)";
						$frase_motivo = $xfrase_movimento;
						break;

					case 28:
						$xfrase_movimento = "D�BITO DE TARIFAS/CUSTAS (28)";
						$frase_motivo = $xfrase_movimento;
						break;
												
					case 29:
						$xfrase_movimento = $xf = "OCORR�NCIAS DO PAGADOR (29)";
						$frase_motivo = $xfrase_movimento;
						break;
												
					case 30:   // REJEICAO
						$xfrase_movimento = "ALTERA��O DE <BR>DADOS REJEITADA (30)";
						$bg_color = "#FFC4C4"; // vermelho
						$frase_motivo = rejeicao( $cod_ocorrencia );
						break;

					case 44:
						$xfrase_movimento = "T�TULO PAGO COM <br>CHEQUE DEVOLVIDO (44)";
						$frase_motivo = $xfrase_movimento;
						break;
												
					case 45:
						$xfrase_movimento = "T�TULO PAGO COM <br>CHEQUE COMPENSADO (45)";
						$frase_motivo = $xfrase_movimento;
						break;
					
				} // fim do switch ... case
			
			}  // fim de se a linha fot uma linha T
			
			// *****************************************************************************************************************************************
			// final essa linha e' segmento "T"
			// *****************************************************************************************************************************************
			
			
			// *****************************************************************************************************************************************
			// Essa linha e' um segmento "U"
			// *****************************************************************************************************************************************
			
			if( $i > 3 && substr( $rr, $b+14,1 ) == "U" && substr( $rr, $b+16,2)!=28 ){
			
				$total_itens_processados++;

				$cod_movimento_u = $cod_movimento;  // o mesmo cod. de movimento da linha U = ao da linha T (linha anterior)

				$num_sequencial_u         = substr( $rr, $b+9,5 );           // 04.3U -> Num. Seq.U           -> Numero Seq.             -> 9(005)   -> Conforme (G038)
				
				$jumu                     = substr( $rr, $b+18,15 );         // 08.3U -> Juros/Multa          -> Juros/Multa             -> 9(015)   -> Conforme (C048)
				$juros_multa = numero_usa ( remove_zero_esq( $jumu ) );
				
				$desco                    = substr( $rr, $b+33,15 );         // 09.3U -> Valor do desconto    -> Valor do desconto       -> 9(015)   -> Conforme (C049)
				$desconto                 = numero_usa ( remove_zero_esq( $desco ) );
				
				$vp                       = substr( $rr, $b+78,15 );         // 12.3U -> Valor pago pagador   -> Valor pago pagador      -> 9(015)   -> Conforme (C052)
				$valor_pago = numero_usa ( remove_zero_esq( $vp ) );
				
				$vl                       = substr( $rr, $b+93,15 );         // 13.3U -> Valor liquido        -> Valor liquido           -> 9(015)   -> Conforme (C078)
				$valor_liquido = numero_usa ( remove_zero_esq( $vl ) );
				
				$outdes                   = substr( $rr, $b+108,15 );        // 14.3U -> Outras despesas      -> Outras Despesas         -> 9(015)   -> Conforme (C054)				
				$outras_despesas          = numero_usa ( remove_zero_esq( $outdes ) );
				
				$data_ocorrencia          = substr( $rr, $b+138,8 );         // 16.3U -> Data ocorrencia      -> Data do evento que afet -> 9(008)   -> Conforme (C056)
				
				$data_credito             = substr( $rr, $b+146,8 );         // 17.3U -> Data do credito      -> Data do credito         -> 9(008)   -> Conforme (C057)				
				
				$data_deb_tarifa          = substr( $rr, $b+158,8 );         // 19.3U -> Data deb. tarifa     -> Data do deb. tarifa     -> 9(008)   -> 

				if( $cod_movimento_u == "06" || $cod_movimento_u == "17" ){
					// seu codigo para boleto liquidado na remessa --> require "grava-boleto-liquidado.php";
					require "retorno3.php";
				}
				if( $cod_movimento_u == "02" ){
					// seu codigo para boleto confirmado na remessa --> require "grava-remessa-confirmada.php";
					require "retorno3.php";
				}
				if( $cod_movimento_u == "03" || $cod_movimento_u == "26" || $cod_movimento_u == "30" ){
					// seu codigo para boleto rejeitado na remessa --> require "grava-remessa-rejeitada.php";
					require "retorno3.php";
				}
				
			
			} // Final essa linha e' segmento "U"
			
			$i++;
	
		} // fim se a linha == 240	
?>

		

<?php
	} // fim While
?>

<?php
	
	fclose($lendo);

} // end mov_upload

?>

 <tr>
        <td height="30" colspan="5" bgcolor="#FFCC00" class="label_normal">&nbsp;</td>
        <td height="30" bgcolor="#FFCC00" class="label_normal"><div align="right">Totais:</div></td>
        <td height="30" bgcolor="#FFCC00" class="label_normal"><div align="right"><?php echo php_fnumber($total_valor_nominal);?></div></td>
        <td height="30" bgcolor="#FFCC00"><div align="right"><?php echo php_fnumber($total_valor_pago);?></div></td>
        <td height="30" bgcolor="#FFCC00"><div align="right"><?php echo php_fnumber($total_juros_multa);?></div></td>
        <td height="30" bgcolor="#FFCC00"><div align="right"><?php echo php_fnumber($total_desconto);?></div></td>
        <td height="30" bgcolor="#FFCC00"><div align="right"><?php echo php_fnumber($total_valor_liquido);?></div></td>
        </tr>
    </table>
    <!-- final do meio -->    </td>
    <td height="26" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="26" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="26" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
