{include file="header.tpl" titlu=$titlu_pag jsfiles=$jsfiles cssfiles=$cssfiles}

<div align="center" style="">
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
  <tr>
    <td height="24" align="center" valign="middle" style="background-color:#cbd69d; border:solid 1px #41583a; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a;"><div align="center" ><strong>Sign Up - New Users</strong></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="border:solid 1px #41583a; border-top-width:0px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a;">
    <div style="height:10px;"></div>
    
    
      <form name="inregistrare_user" method="post" action="index.php?page=inregistrare_utilizator">
   		<table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="380" height="30" align="right" class="label">name</td>
        <td width="620" height="30">&nbsp;&nbsp;   
            <input name="utilizator2" type="text" class="camp_oblig" id="utilizator2" tabindex="1" size="30" maxlength="50">
            &nbsp;<span class="txt_explicativ">(ex. Constantin ALUNCA)</span></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">user (email address)</td>
        <td height="30">&nbsp;&nbsp;
          <label>
          <input name="e_mail" type="text" class="camp_oblig" id="e_mail" size="30" maxlength="60">
          &nbsp;<span class="txt_explicativ">(ex. user@domain.com)</span></label></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">password</td>
        <td height="30">&nbsp;&nbsp;
          <input name="textfield2" type="password" class="camp_oblig" id="textfield2" tabindex="2" size="20" maxlength="30"></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">password again</td>
        <td height="30">&nbsp;&nbsp;
          <input name="textfield" type="password" class="camp_oblig" id="textfield" tabindex="2" size="20" maxlength="30">
          &nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td height="30">&nbsp;&nbsp;
          <input name="autentifica" type="submit" class="butoane" id="autentifica" tabindex="3" value="sign up"></td>
      </tr>
    </table>
  </form>

    
    
    </td>
  </tr>
</table>

{include file="footer.tpl"}
