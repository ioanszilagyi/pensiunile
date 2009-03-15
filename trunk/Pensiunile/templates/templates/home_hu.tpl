{include file="header.tpl" titlu=$titlu_pag}

<body>
<div id="antet" align="right">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
    <td width="50%" height="22" align="right" valign="middle"><a href="index.php?page=autentificare&lang=ro" class="txt_explicativ">bel</a><a href="#" class="txt_explicativ">&#233</a><a href="index.php?page=autentificare&lang=ro" class="txt_explicativ">p</a><a href="#" class="txt_explicativ">&#233</a><a href="index.php?page=autentificare&lang=ro" class="txt_explicativ">s</a> <a href="#" class="txt_explicativ">kapcsolat</a> <a href="#" class="txt_explicativ">seg&#237;ts&#233g</a>&nbsp;&nbsp;</td>
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
          <td width="252"><input name="cauta;" type="submit" class="butoane" id="search_btn" value="keres" /></td>
        </tr>
      </table>
    </div>
    <div id="filtru">
      <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="80" height="34" align="left" valign="middle" class="label">Filters:&nbsp; </td>
          <td width="110" height="34" align="right" valign="middle" class="label">turisztikai z&#243;na&nbsp; </td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_zona" class="camp" id="selected_zona">
              
	{html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
          
            </select>
          </td>
          <td width="110" height="34" align="right" valign="middle" class="label">megye&nbsp;</td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_judet" class="camp" id="selected_judet">
              
				{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
          
            </select>
          </td>
          <td width="110" height="34" align="right" valign="middle" class="label">&#252;d&#252;l&#337;hely&nbsp;</td>
          <td width="115" height="34" align="left" valign="middle">
            <select name="selected_statiune" class="camp" id="selected_statiune">
              
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          
            </select>
          </td>
          <td width="110" height="34" align="right" valign="middle" class="label">kateg&#243;ria&nbsp;</td>
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
</body>
{include file="footer.tpl"}
