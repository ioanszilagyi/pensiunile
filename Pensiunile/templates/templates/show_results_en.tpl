{include file="header.tpl" titlu=$titlu_pag}

<div id="antet" align="right">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
    <td width="50%" height="22" align="right" valign="middle"><a href="index.php?page=autentificare&lang=ro" class="txt_explicativ">autentificare</a> <a href="#" class="txt_explicativ">contact</a> <a href="#" class="txt_explicativ">ajutor</a>&nbsp;&nbsp;</td>
  </tr>
</table>
	
</div>
<div id="plic_cautare">
<form action="contents/afisare_cautare.php" method="get">
<div id="cautare" align="center">
  <img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" />
  <div id="plic_filtru">
    <div id="cauta" style="padding:0 0 15px 0">
      <table width="612" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="350" align="right"><input name="search_field" type="text" class="camp" id="search_field" size="25" maxlength="40" /></td>
          <td width="10">&nbsp;</td>
          <td width="252"><input name="cauta;" type="submit" class="butoane" id="search_btn" value="cauta" /></td>
        </tr>
      </table>
    </div>
    <div id="filtru">
      <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="80" height="30" align="left" valign="middle" class="label">Filtru:&nbsp; </td>
          <td width="140" height="30" align="right" valign="middle" class="label">zona turistic&#259;&nbsp; </td>
          <td width="115" height="30" align="left" valign="middle"><select name="selected_zona" class="camp" id="selected_zona">
            
              
	{html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
          
            
          </select>
          </td>
          <td width="100" height="30" align="right" valign="middle" class="label">jude&#355;&nbsp;</td>
          <td width="115" height="30" align="left" valign="middle"><select name="selected_judet" class="camp" id="selected_judet">
            
              
				{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
          
            
          </select>
          </td>
          <td width="100" height="30" align="right" valign="middle" class="label">sta&#355;iunea&nbsp;</td>
          <td width="115" height="30" align="left" valign="middle"><select name="selected_statiune" class="camp" id="selected_statiune">
            
              
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          
            
          </select>
          </td>
          <td width="100" height="30" align="right" valign="middle" class="label">categoria&nbsp;</td>
          <td width="115" height="30" align="left" valign="middle"><select name="selected_categorie" class="camp" id="selected_categorie">
            
              
	{html_options values=$idCategorie output=$namesCategorie selected=$selectedCategorie}
          
            
          </select>
          </td>
        </tr>
      </table>
    </div>
    </div>
</div>
</form>
</div>

<div id="show_results"  align="center">

<div class="afisare_cautare" align="center">
        <table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="81"><img src="images/imagine-lipsa.png" alt="" width="80" height="60" /></td>
    <td width="245" height="60" align="center" valign="top">
    <div class="despartire_informatii">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%" height="36" align="right" class="text">Pensiunea:&nbsp;</td>
        <td align="left" width="67%" height="36" class="titlu_pensiune"><a href="#" class="titlu_pensiune" title="afiseaza detalii despre pensiunea PENSIUNE">PENSIUNE PENSIUNE PENSIUNE</td>
      </tr>
      <tr>
        <td height="22" align="right" class="text">Categoria:&nbsp;</td>
        <td height="22"><img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" /></td>
      </tr>
    </table>
    </div>
    </td>
    <td width="220" align="center">
    <div class="despartire_informatii">
    <table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="47%" align="right" class="text">zona turistic&#259;:&nbsp;</td>
        <td width="53%" class="text_link"><a href="#" class="text_link" title="afiseaza pensiunile din zona turistica">zona turistica</a></td>
      </tr>
      <tr>
        <td align="right" class="text">jude&#355;ul:&nbsp;</td>
        <td ><a href="#" class="text_link" title="afiseaza pensiunile din judetul BIHOR">BIHOR</a></td>
      </tr>
      <tr>
          <td width="39%" align="right" class="text">localitatea:&nbsp;</td>
          <td width="61%"><a href="#" class="text_link" title="afiseaza pensiunile din localitatea ORADEA">ORADEA</a></td>
        </tr>
    </table>    
    </div>
    </td>
    <td width="199" align="center">
    <div class="despartire_informatii">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right" class="text_evidentiat">telefon:&nbsp;</td>
          <td align="left" class="text_evidentiat">0123456789</td>
        </tr>
        <tr>
        <td width="21%" align="right" class="text_evidentiat">e-mail:&nbsp;</td>
        <td width="79%" class="text_evidentiat"><a href="#" class="text_evidentiat_link" title="trimite-ne un e-mail !">contact@pensiunile.ro</a></td>
      </tr>
      <tr>
        <td align="right" class="text_evidentiat">web:&nbsp;</td>
        <td><a href="#" class="text_evidentiat_link" title="vizitati-ne !">www.pensiunile.ro</a></td>
      </tr>
      </table>
    </div>
    </td>
    <td width="255" align="center"><table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="right" class="text">pre&#355;:&nbsp;</td>
        <td align="left" class="text_evidentiat">70 RON</td>
      </tr>
      <tr>
        <td align="right" class="text">disponibilitate:&nbsp;</td>
        <td align="left" class="text_evidentiat">disponibil</td>
      </tr>
    </table>
   </td>
  </tr>
</table>
</div>

<div class="afisare_cautare" align="center">

        <table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="81"><img src="images/imagine-lipsa.png" alt="" width="80" height="60" /></td>
    <td width="245" height="60" align="center" valign="top">
    <div class="despartire_informatii">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%" height="36" align="right" class="text">Pensiunea:&nbsp;</td>
        <td align="left" width="67%" height="36" class="titlu_pensiune"><a href="#" class="titlu_pensiune" title="afiseaza detalii despre pensiunea PENSIUNE">PENSIUNE PENSIUNE PENSIUNE</td>
      </tr>
      <tr>
        <td height="22" align="right" class="text">Categoria:&nbsp;</td>
        <td height="22"><img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" />&nbsp;<img src="images/margareta.png" alt="margareta 3" width="15" height="15" /></td>
      </tr>
    </table>
    </div>
    </td>
    <td width="220" align="center">
    <div class="despartire_informatii">
    <table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="47%" align="right" class="text">zona turistic&#259;:&nbsp;</td>
        <td width="53%" class="text_link"><a href="#" class="text_link" title="afiseaza pensiunile din zona turistica">zona turistica</a></td>
      </tr>
      <tr>
        <td align="right" class="text">jude&#355;ul:&nbsp;</td>
        <td ><a href="#" class="text_link" title="afiseaza pensiunile din judetul BIHOR">BIHOR</a></td>
      </tr>
      <tr>
          <td width="39%" align="right" class="text">localitatea:&nbsp;</td>
          <td width="61%"><a href="#" class="text_link" title="afiseaza pensiunile din localitatea ORADEA">ORADEA</a></td>
        </tr>
    </table>    
    </div>
    </td>
    <td width="199" align="center">
    <div class="despartire_informatii">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right" class="text_evidentiat">telefon:&nbsp;</td>
          <td align="left" class="text_evidentiat">0123456789</td>
        </tr>
        <tr>
        <td width="21%" align="right" class="text_evidentiat">e-mail:&nbsp;</td>
        <td width="79%" class="text_evidentiat"><a href="#" class="text_evidentiat_link" title="trimite-ne un e-mail !">contact@pensiunile.ro</a></td>
      </tr>
      <tr>
        <td align="right" class="text_evidentiat">web:&nbsp;</td>
        <td><a href="#" class="text_evidentiat_link" title="vizitati-ne !">www.pensiunile.ro</a></td>
      </tr>
      </table>
    </div>
    </td>
    <td width="255" align="center"><table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="right" class="text">pre&#355;:&nbsp;</td>
        <td align="left" class="text_evidentiat">70 RON</td>
      </tr>
      <tr>
        <td align="right" class="text">disponibilitate:&nbsp;</td>
        <td align="left" class="text_evidentiat">disponibil</td>
      </tr>
    </table>
   </td>
  </tr>
</table>
</div>
</div>
<div align="center" style="padding:20px 0 0 0">

{include file="footer.tpl"}