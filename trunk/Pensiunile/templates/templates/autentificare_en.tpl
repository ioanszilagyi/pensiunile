{include file="header.tpl" titlu=$titlu_pag jsfiles=$jsfiles cssfiles=$cssfiles}

<div id="antet" align="right">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CBD69D">
    <tr>
      <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
  	  <td width="50%" height="22" align="right" valign="middle">
    	{include file=$menu_file}
      </td>
    </tr>
  </table>
</div>

<div id="plic_cautare">
  <div id="cautare" align="center">
    <img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" />
  </div>
</div>
  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <td height="24" align="center" valign="middle" style="background-color:#cbd69d; border:solid 1px #41583a; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a;"><div align="center" ><strong>Sign In</strong></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="border:solid 1px #41583a; border-top-width:0px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a;"><form name="form1" method="post" action="#">
      <table width="1000" border="0" cellspacing="0" cellpadding="0" style="padding:10px 0 0 0;">
        <tr>
          <td width="434" height="30" align="right"></td>
          <td width="238" height="30" align="right" class="label">user</td>
          <td width="328" height="30">&nbsp;&nbsp;
            <input name="utilizator2" type="text" class="camp_oblig" id="utilizator2" tabindex="1" size="30" maxlength="60" /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="label">If you are <strong>not</strong> registered you can register now <a href="?page=3" class="label"><strong>HERE</strong></a></td>
          <td height="30" align="right" class="label">password</td>
          <td height="30">&nbsp;&nbsp;
            <input name="textfield2" type="text" class="camp_oblig" id="textfield2" tabindex="2" size="20" maxlength="30" /></td>
        </tr>
        <tr>
          <td height="30" align="right">&nbsp;</td>
          <td height="30" align="right">&nbsp;</td>
          <td height="30">&nbsp;&nbsp;
            <input name="autentifica" type="submit" class="butoane" id="autentifica" tabindex="3" value="sign in" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
  </table>
