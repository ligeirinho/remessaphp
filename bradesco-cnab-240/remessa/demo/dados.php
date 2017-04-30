<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>.:: RemessaPHP - BRADESCO CNAB-240 ::.</title>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style4 {
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<p><img src="../../figuras/bradesco1.jpg" width="75" height="75" align="absmiddle" /> <span class="style1">REMESSA BRADESCO CNAB-240</span></p>
<hr />


<form id="dados2.php" name="dados2.php" method="post" action="dados2.php">
  <table width="100%" border="1" cellspacing="3" cellpadding="3">
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div align="left"><strong>1. DADOS DA EMPRESA E CONTA </strong></div></td>
    </tr>
    <tr>
      <td width="29%"><div align="right" class="style2">Nome da empresa:&nbsp; </div></td>
      <td width="71%"><div align="left">
        <input name="nome_empresa" type="text" id="nome_empresa" value="EMPRESA DEMONSTRACAO LTDA" size="50" maxlength="40" />
      </div></td>
    </tr>
    

    <tr>
      <td><div align="right" class="style2">N&ordm; da Carteira de Cobran&ccedil;a:&nbsp; </div></td>
      <td><div align="left">
        <input name="carteira" type="text" id="carteira" value="09" size="5" maxlength="3" />
      &nbsp;</div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">N&ordm; CNPJ:&nbsp; </div></td>
      <td><div align="left">
        <input name="cnpj" type="text" id="cnpj" value="11837654000208" size="18" maxlength="14" />
      &nbsp;</div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Ag&ecirc;ncia:&nbsp;</div></td>
      <td><div align="left">
  <input name="agencia" type="text" id="agencia" value="23455" size="8" maxlength="5" />
  &nbsp;D&iacute;gito Verifica&ccedil;&atilde;o:
  <input name="dv_agencia" type="text" id="dv_agencia" value="0" size="3" maxlength="1" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Conta:&nbsp;</div></td>
      <td><div align="left">
  <input name="conta" type="text" id="conta" value="10240" size="15" maxlength="12" />
  &nbsp;D&iacute;gito Verifica&ccedil;&atilde;o:
  <input name="dv_conta" type="text" id="dv_conta" value="0" size="3" maxlength="1" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">DV Ag&ecirc;ncia / Conta:&nbsp;</div></td>
      <td><div align="left">
        <input name="dv_ag_conta" type="text" id="dv_ag_conta" value="0" size="3" maxlength="1" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">C&oacute;d. do Benefici&aacute;rio:&nbsp; </div></td>
      <td><div align="left">
          <input name="cod_benef" type="text" id="cod_benef" value="7778549" size="10" maxlength="8" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Conta Cedente:&nbsp;</div></td>
      <td><div align="left">
          <input name="cedente" type="text" id="cedente" value="7778549" size="10" maxlength="8" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div align="left"><strong>2. DADOS DO BOLETO </strong></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Nosso N&uacute;mero:&nbsp; </div></td>
      <td><div align="left">
        <input name="nosso_numero" type="text" id="nosso_numero" value="32244" size="10" maxlength="8" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Data de Vencimento:&nbsp; </div></td>
      <td><div align="left">
          <input name="dt_vencimento" type="text" id="dt_vencimento" value="05012017" size="12" maxlength="8" />
          <span class="style4">(ddmmaaaa)</span> </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Data da Emiss&atilde;o:&nbsp; </div></td>
      <td><div align="left">
          <input name="dt_emissao" type="text" id="dt_emissao" value="03012017" size="12" maxlength="8" />
          <span class="style4">(ddmmaaaa) </span></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Valor Nominal do T&iacute;tulo R$:&nbsp; </div></td>
      <td><div align="left">
          <input name="valor_boleto" type="text" id="valor_boleto" value="32500" size="18" maxlength="15" />
          <span class="style4">(999999999999999)</span></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Data Inicial da cobran&ccedil;a dos Juros:&nbsp; </div></td>
      <td><div align="left">
          <input name="dt_juros" type="text" id="dt_juros" value="06012017" size="12" maxlength="8" />
          <span class="style4">(ddmmaaaa) </span></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Valor % Juros:&nbsp; </div></td>
      <td><div align="left">
          <input name="pjuros" type="text" id="pjuros" value="100" size="18" maxlength="15" />
        <span class="style4">        (999999999999999) ao mes </span></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Data para cobran&ccedil;a da Multa:&nbsp; </div></td>
      <td><div align="left">
          <input name="dt_multa" type="text" id="dt_multa" value="06012017" size="12" maxlength="8" />
          <span class="style4">(ddmmaaaa) </span></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Valor % da Multa:&nbsp; </div></td>
      <td><div align="left">
          <input name="pmulta" type="text" id="pmulta" value="200" size="5" maxlength="3" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Data limite para obten&ccedil;&atilde;o do desconto:&nbsp; </div></td>
      <td><div align="left">
          <input name="dt_desconto" type="text" id="dt_desconto" value="05012017" size="12" maxlength="8" />
          <span class="style4">(ddmmaaaa) </span></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Valor % Desconto:&nbsp; </div></td>
      <td><div align="left">
          <input name="pdesconto" type="text" id="pdesconto" value="500" size="18" maxlength="15" />
          <span class="style4">(999999999999999) ao mes </span></div></td>
    </tr>
    
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div align="left"><strong>3. DADOS DO PAGADOR DO BOLETO </strong></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">CPF:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_cpf" type="text" id="pag_cpf" value="40329542389" size="18" maxlength="15" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Nome:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_nome" type="text" id="pag_nome" value="JOSE SILVA SOUSA SANTOS MELO" size="50" maxlength="40" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Endere&ccedil;o:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_endereco" type="text" id="pag_endereco" value="RUA DO ABACATEIRO, 456" size="50" maxlength="40" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Bairro:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_bairro" type="text" id="pag_bairro" value="CENTRO" size="20" maxlength="15" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Cep:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_cep1" type="text" id="pag_cep1" value="65073" size="8" maxlength="5" />
 -      
 <input name="pag_cep2" type="text" id="pag_cep2" value="300" size="5" maxlength="3" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Cidade:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_cidade" type="text" id="pag_cidade" value="SAO LUIS" size="20" maxlength="15" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Estado:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_estado" type="text" id="pag_estado" value="MA" size="5" maxlength="2" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">E-mail:&nbsp; </div></td>
      <td><div align="left">
          <input name="pag_email" type="text" id="pag_email" value="ALEXANDRE890@YAHOO.COM.BR" size="50" maxlength="40" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div align="left"><strong>4. DADOS DO ARQUIVO DE REMESSA </strong></div></td>
    </tr>
    <tr>
      <td><div align="right" class="style2">Nome do arquivo de remessa:&nbsp; </div></td>
      <td><div align="left">
          <input name="arquivo" type="text" id="arquivo" value="<?php echo "CB".date("d").date("m")."AB";?>" size="20" maxlength="8" />
          <span class="style4"> Onde: CB-dd-mm-versao.REM 
      (dd = dia / mm = mes) </span></div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">
        <input type="submit" name="Submit" value="Gerar Arquivo" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
