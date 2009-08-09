{include file="header.tpl" jsfiles=$jsfiles cssfiles=$cssfiles user=$user}
<div class="logo">
	<a href=""><img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" /></a>
</div>
<div class="sign_form">
	<div class="title_form"><strong>Sign In</strong></div>
    <div class="form">
    	<form name="form1" method="post" action="">
      		<table width="1000" border="0" cellspacing="0" cellpadding="0" style="padding:10px 0 0 0;">
        		<tr>
                  <td width="434" height="30" align="right"></td>
                  <td width="238" height="30" align="right" class="label">user (email)</td>
                  <td width="328" height="30">&nbsp;&nbsp;
                    <input name="user_name" type="text" class="camp_oblig" id="user_name" tabindex="1" size="30" maxlength="60" /></td>
                </tr>
                <tr>
                  <td height="30" align="right" class="label">If you are <strong>not</strong> registered you can register now <a href="?page=3" class="label"><strong>HERE</strong></a></td>
                  <td height="30" align="right" class="label">password</td>
                  <td height="30">&nbsp;&nbsp;
                    <input name="password" type="password" class="camp_oblig" id="password" tabindex="2" size="20" maxlength="30" /></td>
                </tr>
                <tr>
                  <td height="30" align="right">&nbsp;</td>
                  <td height="30" align="right">&nbsp;</td>
                  <td height="30">&nbsp;&nbsp;
                    <input name="authenticate" type="submit" class="butoane" id="authenticate" tabindex="3" value="sign in" />
                  {$failed_message}
                  </td>
                </tr>
              </table>
        </form>
    </div>
    
</div>
{include file="footer.tpl"}
