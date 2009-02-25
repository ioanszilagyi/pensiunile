{include file="header.tpl" titlu=$titlu_pag}

<body>
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
          <td width="350" align="right"><input name="searchfield" type="text" class="camp" id="search_field" size="25" maxlength="40" /></td>
          <td width="10">&nbsp;</td>
          <td width="252"><input name="cauta;" type="submit" class="butoane" id="search_btn" value="cauta" /></td>
        </tr>
      </table>
    </div>
    <div id="filtru">
      <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="80" height="40" align="left" class="label">Filtru:&nbsp; </td>
          <td width="140" height="40" align="right" class="label">zona turistic&#259;&nbsp; </td>
          <td width="115" height="40" align="left">
            <select name="selected_zona" class="camp" id="selected_zona">
              
	{html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
          
            </select>
          </td>
          <td width="100" height="40" align="right" class="label">jude&#355;&nbsp;</td>
          <td width="115" height="40" align="left">
            <select name="selected_judet" class="camp" id="selected_judet">
              
				{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
          
            </select>
          </td>
          <td width="100" height="40" align="right" class="label">sta&#355;iunea&nbsp;</td>
          <td width="115" height="40" align="left">
            <select name="selected_statiune" class="camp" id="selected_statiune">
              
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          
            </select>
          </td>
          <td width="100" height="40" align="right" class="label">categoria&nbsp;</td>
          <td width="115" height="40" align="left">
            <select name="selected_categorie" class="camp" id="selected_categorie">
              
	{html_options values=$idCategorie output=$namesCategorie selected=$selectedCategorie}
          
            </select>
          </td>
        </tr>
      </table>
    </div>
    <br>
    </div>
</div>
</form>
</div>
<div id="show_results"></div>
</body>
{include file="footer.tpl"}