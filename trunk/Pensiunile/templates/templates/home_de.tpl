{include file="header.tpl"}

<div id="antet" align="right">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
    <td width="50%" height="22" align="right" valign="middle">
    	{include file=$menu_file}
    </td>
  </tr>
</table>
	
</div>
<div id="plic_cautare">
<form action="contents/afisare_cautare.php" method="get">
<div id="cautare" align="center">
  <a href=""><img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" /></a>
  <div id="plic_filtru">
    <div id="cauta" style="padding:0 0 10px 0">
      <table width="612" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="350" align="right"><input name="searchfield" type="text" class="camp" id="search_field" size="25" maxlength="40" /></td>
          <td width="10">&nbsp;</td>
          <td width="252"><input name="cauta;" type="submit" class="butoane" id="search_btn" value="search" /></td>
        </tr>
      </table>
    </div>
    <div id="filtru">
      <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="80" height="34" align="left" valign="middle" class="label">Filters:&nbsp; </td>
          <td width="110" height="34" align="right" valign="middle" class="label">turistic area&nbsp;</td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_zona" class="camp" id="selected_zona">
              
	{html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
          
            </select>
          </td>
          <td width="110" height="34" align="right" valign="middle" class="label">county&nbsp;</td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_judet" class="camp" id="selected_judet">
              
				{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
          
            </select>
          </td>
          <td width="110" height="34" align="right" valign="middle" class="label">station&nbsp;</td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_statiune" class="camp" id="selected_statiune">
              
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          
            </select>
          </td>
          <td width="110" height="34" align="right" valign="middle" class="label">category&nbsp;</td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_categorie" class="camp" id="selected_categorie">
              
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
<div id="show_results" align="center"></div>

{include file="footer.tpl"}
