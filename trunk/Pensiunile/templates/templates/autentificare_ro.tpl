<link href="css/master.css" rel="stylesheet" type="text/css" />
<link href="css/formulare.css" rel="stylesheet" type="text/css" />
<div id="antet" align="right">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CBD69D">
    <tr>
      <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
      <td width="50%" height="22" align="right" valign="middle"><a href="#" class="txt_explicativ">autentification</a> <a href="#" class="txt_explicativ">contact</a> <a href="#" class="txt_explicativ">help</a>&nbsp;&nbsp;</td>
    </tr>
  </table>
</div>

<div id="plic_cautare">
  <form action="contents/afisare_cautare.php" method="get">
    <div id="cautare" align="center">
      <img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" />
      <div id="plic_filtru">
        <div id="cauta">
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
              <td width="80" height="32" align="left" valign="middle" class="label">Filtru:&nbsp; </td>
              <td width="110" height="32" align="right" valign="middle" class="label">zona turistic&#259;&nbsp; </td>
              <td width="115" height="32" align="left" valign="middle">
                <select name="selected_zona" class="camp" id="selected_zona">
                  {html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
                </select>
              </td>
              <td width="110" height="32" align="right" valign="middle" class="label">jude&#355;&nbsp;</td>
              <td width="115" height="32" align="left" valign="middle">
                <select name="selected_judet" class="camp" id="selected_judet">
				  {html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
                </select>
              </td>
              <td width="110" height="32" align="right" valign="middle" class="label">sta&#355;iunea&nbsp;</td>
              <td width="115" height="32" align="left" valign="middle">
                <select name="selected_statiune" class="camp" id="selected_statiune">      
                  {html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
                </select>
              </td>
              <td width="110" height="32" align="right" valign="middle" class="label">categoria&nbsp;</td>
              <td width="115" height="32" align="left" valign="middle">
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



  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <td height="24" align="center" valign="middle" style="background-color:#cbd69d; border:solid 1px #41583a; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a;"><div align="center" ><strong>Autentificarea unui utilizator înregistrat</strong></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="border:solid 1px #41583a; border-top-width:0px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a;"><form name="form1" method="post" action="#">
      <table width="1000" border="0" cellspacing="0" cellpadding="0" style="padding:10px 0 0 0;">
        <tr>
          <td width="434" height="30" align="right"></td>
          <td width="238" height="30" align="right" class="label">utilizator</td>
          <td width="328" height="30">&nbsp;&nbsp;
            <input name="utilizator2" type="text" class="camp_oblig" id="utilizator2" tabindex="1" size="30" maxlength="60" /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="label">Dac&#259; <strong>nu</strong> e&#351;ti &icirc;nregistrat, te po&#355;i &icirc;nregistra <a href="index.php?page=3&lang=ro" class="label"><strong>AICI</strong></a></td>
          <td height="30" align="right" class="label">parola</td>
          <td height="30">&nbsp;&nbsp;
            <input name="textfield2" type="text" class="camp_oblig" id="textfield2" tabindex="2" size="20" maxlength="30" /></td>
        </tr>
        <tr>
          <td height="30" align="right">&nbsp;</td>
          <td height="30" align="right">&nbsp;</td>
          <td height="30">&nbsp;&nbsp;
            <input name="autentifica" type="submit" class="butoane" id="autentifica" tabindex="3" value="autentific&#259;" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
  </table>
