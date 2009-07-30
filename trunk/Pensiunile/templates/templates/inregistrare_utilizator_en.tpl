{include file="header.tpl" titlu=$titlu_pag jsfiles=$jsfiles cssfiles=$cssfiles}
<div class="logo">
	<a href=""><img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" /></a>
</div>
<div class="sign_form">
	<div class="title_form"><strong>Sign Up - New Users</strong></div>
	<div class="form">
    	<form name="inregistrare_user" method="post" action="">
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
                  <input name="e_mail" type="text" class="camp_oblig" id="e_mail" tabindex="2" size="30" maxlength="60">
                  &nbsp;<span class="txt_explicativ">(ex. user@domain.com)</span></label></td>
              </tr>
              <tr>
                <td height="30" align="right" class="label">password</td>
                <td height="30">&nbsp;&nbsp;
                  <input name="textfield2" type="password" class="camp_oblig" id="textfield2" tabindex="3" size="20" maxlength="30"></td>
              </tr>
              <tr>
                <td height="30" align="right" class="label">password again</td>
                <td height="30">&nbsp;&nbsp;
                  <input name="textfield" type="password" class="camp_oblig" id="textfield" tabindex="4" size="20" maxlength="30">
                  &nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td height="30" align="right">&nbsp;</td>
                <td height="30">&nbsp;&nbsp;
                  <input name="autentifica" type="submit" class="butoane" id="autentifica" tabindex="5" value="sign up"></td>
              </tr>
            </table>
		</form>
    </div>
</div>
{include file="footer.tpl"}
