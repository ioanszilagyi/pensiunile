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

<table class="afisare_cautare" width="1000">
	<tr>
		<td rowspan="4" height="75" width="100"><img src="images/imagine-lipsa.png" alt="Pensiune Test 2 care are un nume mai lung"></td>
		<td class="titlu_pensiune" colspan="5"><a href="http://pensiunile.ro/pensiunea2">Pensiune Test 2 care are un nume mai lung</a></td>
	</tr>
	<tr>
		<td class="text_evidentiat_link" width="200"><a href="Pensiune%20Test%202%20care%20are%20un%20nume%20mai%20lung/description/" onclick="alert('Pensiune Test 2 care are un nume mai lung');return false;">Descriere</a></td>
		<td class="text">Adresa:</td><td class="text_evidentiat" width="300">calea Timisoarei nr. 45A, Arad, ARAD</td>
		<td class="text">Zona turistica:</td><td class="text_evidentiat">Ardeal</td>
	</tr>
	<tr>
		<td class="text_evidentiat_link"><a href="Pensiune%20Test%202%20care%20are%20un%20nume%20mai%20lung/photos/" onclick="alert('2');return false;">Poze</a></td>
		<td class="text">Telefon:</td><td class="text_evidentiat">+40 720 654321</td><td class="text">Apreciere:</td>
		<td class="text_evidentiat">70%(150 votes)</td>
	</tr>
	<tr>
		<td><img src="images/margareta.png" alt="margareta"/><img src="images/margareta.png" alt="margareta"/><img src="images/margareta.png" alt="margareta"/></td>
		<td class="text">e-mail:</td>
		<td class="text_evidentiat">pensiune2@test.ro</td>
		<td class="text">Plaja de preturi:</td>
		<td class="text_evidentiat">50 - 150 EURO</td>
	</tr>
</table>

</div>
<div align="center" style="padding:20px 0 0 0">

{include file="footer.tpl"}