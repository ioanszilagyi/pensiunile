{include file="header.tpl" titlu=$titlu_pag}

<body onLoad="checkCookie();">
<div align="right">
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CBD69D">
  <tr>
    <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
    <td width="50%" height="22" align="right" valign="middle"><a href="index.php?page=autentificare&lang=ro" class="txt_explicativ">autentificare</a> <a href="#" class="txt_explicativ">contact</a> <a href="#" class="txt_explicativ">ajutor</a>&nbsp;&nbsp;</td>
  </tr>
</table>
	
</div>
<div style="padding:50px 0 0 0">
<form action="index.php?page=afisare_cautare" method="get">
<div align="center" style="background-color:#cbd69d; border-bottom:solid 1px #41583a; border-top:solid 1px #41583a;">
  <img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" />
  <div style="padding:37px 0 0 0">
    <div style="padding:0 0 20px 0">
      <table width="612" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="350" align="right"><input name="textfield2" type="text" class="camp" id="textfield2" size="25" maxlength="40" /></td>
          <td width="10">&nbsp;</td>
          <td width="252"><input name="caut&#259;" type="submit" class="butoane" id="caut&#259;2" value="cauta" /></td>
        </tr>
      </table>
    </div>
    <div style=" border:solid 1px #cb8649; width:1000px; height:40px">
      <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="80" height="40" align="left" class="label">Filtru:&nbsp; </td>
          <td width="140" height="40" align="right" class="label">zona turistic&#259;&nbsp; </td>
          <td width="115" height="40" align="left"><span class="label">
            <select name="select5" class="camp" id="select5">
              
	{html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
          
            </select>
          </span></td>
          <td width="100" height="40" align="right" class="label">jude&#355;&nbsp;</td>
          <td width="115" height="40" align="left"><span class="label">
            <select name="select4" class="camp" id="select4">
              
		{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
          
            </select>
          </span></td>
          <td width="100" height="40" align="right" class="label">sta&#355;iunea&nbsp;</td>
          <td width="115" height="40" align="left"><span class="label">
            <select name="select6" class="camp" id="select6">
              
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          
            </select>
          </span></td>
          <td width="100" height="40" align="right" class="label">categoria&nbsp;</td>
          <td width="115" height="40" align="left"><span class="label">
            <select name="select7" class="camp" id="select7">
              
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          
            </select>
          </span></td>
        </tr>
      </table>
    </div><br>

    </div>
</div>
</form>
</div>
</body>