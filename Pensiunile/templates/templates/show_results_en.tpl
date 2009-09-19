{include file="header.tpl"}

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
          <td width="252"><input name="cauta;" type="submit" class="button" id="search_btn" value="cauta" /></td>
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

<table width="1000" border="0" cellpadding="0" cellspacing="1" class="afisare_cautare">
	<tr>
		<td width="106" rowspan="2" align="left" valign="bottom" class="class_1"><img src="images/imagine-lipsa.png" alt="Pensiune Test 2 care are un nume mai lung"></td>
		<td colspan="5"><div><a href="http://pensiunile.ro/pensiunea2" class="titlu_pensiune">Pensiune Test 2 care are un nume mai lung</a></div></td>
		<td width="64" rowspan="2" align="left" valign="bottom">
      	<div class="lista_img_1">	
          <ul class="lista_img">
            <li><img src="images/parcare-2.png" alt="parcare" width="20" height="20" title="parcare" /></li>
		    <li><img src="images/tv-salon-2.png" alt="televizor in salon" width="20" height="20" title="televizor in calon" /></li>
        	<li><img src="images/dus-camera-2.png" alt="dus in camere" width="20" height="20" title="dus in camera" /></li>
          </ul>
        </div>
        <div class="lista_img_1">   
          <ul class="lista_img">
            <li><img src="images/restaurant-2.png" alt="restaurant" width="20" height="20" title="restaurant" /></li>
            <li><img src="images/cafe-bar-2.png" alt="cafe-bar" width="20" height="20" title="cafe-bar" /></li>
            <li><img src="images/sala-de-mese-2.png" alt="sala de mese" width="20" height="20" title="sala de mese" /></li>
		  </ul>
        </div>    
        <div class="lista_img_1">
          <ul class="lista_img">
            <li><img src="images/internet-salon-2.png" alt="internet" width="20" height="20" title="internet in salon" /></li>
            <li><img src="images/internet-wireless-2.png" alt="internet wireles" width="20" height="20" title="internet wireless" /></li> 	
            <li></li>
		  </ul>
        </div>	  </td>
	</tr>
	<tr>
      <td width="105" valign="middle" class="text_evidentiat_link">
        <div class="text_evidentiat_link_1"><a href="Pensiune%20Test%202%20care%20are%20un%20nume%20mai%20lung/description/" onclick="alert('Pensiune Test 2 care are un nume mai lung');return false;">Descriere</a></div>		  
        <div class="text_evidentiat_link_1"><a href="Pensiune%20Test%202%20care%20are%20un%20nume%20mai%20lung/photos/" onclick="alert('2');return false;">Poze</a></div>		  
        <div class="text_evidentiat_link_1"><img src="images/margareta.png" alt="margareta" width="20" height="20"/><img src="images/margareta.png" alt="margareta" width="20" height="20"/><img src="images/margareta.png" alt="margareta" width="20" height="20"/><img src="images/margareta.png" alt="margareta" width="20" height="20"/><img src="images/margareta.png" alt="margareta" width="20" height="20"/></div>
      </td>
	  <td width="70" valign="middle">
      	<div class="text_1">Adresa:</div>	    
        <div class="text_1">Telefon:</div>	    
        <div class="text_1">e-mail:</div>
      </td>
      <td width="387" valign="middle">
        <div class="text_evidentiat_1">calea Timisoarei nr. 45A, Arad, ARAD</div>	    
        <div class="text_evidentiat_1">+40 720 654321</div>	    
        <div class="text_evidentiat_1">pensiune2@test.ro</div>
      </td>
	  <td width="110" valign="middle">
        <div class="text_1">Zona turistica:</div>		  
        <div class="text_1">Apreciere:</div>		  
        <div class="text_1">Plaja de preturi:</div>
      </td>
      <td width="150" valign="middle">
        <div class="text_evidentiat_1">Ardeal</div>		  
        <div class="text_evidentiat_1">70%(150 votes)</div>		  
        <div class="text_evidentiat_1">50 - 150 EURO</div>
      </td>
    </tr>
  </table>

</div>
<div align="center" style="padding:20px 0 0 0">

{include file="footer.tpl"}