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
    <table width="680" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="240" height="30">&nbsp;</td>
        <td width="85" height="30" align="center">&nbsp;</td>
        <td width="25" height="30" align="center">&nbsp;</td>
        <td width="35" height="30" align="center">
          <input name="unde" type="radio" class="camp" id="1" tabindex="2" value="unde" />
        </td>
        <td width="295" height="30" class="label">jude&#355;ul
     
          <select name="select" class="camp" id="select">
		{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
          </select>
          </td>
      </tr>
      <tr>
        <td height="30" align="right">
          <input name="textfield" type="text" class="camp" id="textfield" size="25" maxlength="40" />
        </td>
        <td height="30" align="center">
          <input name="cauta" type="submit" class="butoane" id="caut&#259;" value="cauta" />
        </td>
        <td height="30" align="center" class="label">&icirc;n</td>
        <td height="30" align="center">
          <input name="unde" type="radio" class="camp" id="2" tabindex="3" value="unde" />
        </td>
        <td height="30" class="label">zona turistic&#259; 
       
          <select name="select2" class="camp" id="select2">
	{html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
          </select>
          </td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30" align="center">&nbsp;</td>
        <td height="30" align="center">&nbsp;</td>
        <td height="30" align="center">
          <input name="unde" type="radio" class="camp" id="3" tabindex="4" value="radio" />
        </td>
        <td height="30" class="label">sta&#355;iunea
      
          <select name="select3" class="camp" id="select3">
	{html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
          </select>
         </td>
      </tr>
    </table>
  </div>
</div>
</form>
</div>
</body>