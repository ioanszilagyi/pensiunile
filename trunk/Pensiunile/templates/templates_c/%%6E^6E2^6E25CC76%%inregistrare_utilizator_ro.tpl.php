<?php /* Smarty version 2.6.20, created on 2008-10-13 06:26:06
         compiled from inregistrare_utilizator_ro.tpl */ ?>
<link href="css/master.css" rel="stylesheet" type="text/css" />
<link href="css/formulare.css" rel="stylesheet" type="text/css" />
<div align="center" style="">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CBD69D">
    <tr>
      <td width="50%" height="22" align="left" valign="middle"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "steaguri.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      <td width="50%" height="22" align="right" valign="middle"><a href="#" class="txt_explicativ">autentification</a> <a href="#" class="txt_explicativ">contact</a> <a href="#" class="txt_explicativ">help</a>&nbsp;&nbsp;</td>
    </tr>
  </table>
</div>

<br>
<br>

<div align="center" style="height:80px; border-bottom:solid 1px #41583a ; border-top:solid #41583a 1px; background-color:#cbd69d"><img border="0" src="images/logo.png" /></div>
<div align="center" style="padding:30px 0 0 0">
  <table width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td> <div id="1" style="height:30px; background-color:#cbd69d; border:solid 1px #41583a; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:8px 0 0 0" align="center" ><strong>Formular pentru &icirc;nregistrarea unui utilizator nou</strong>
  </div></td>
    </tr>
    <tr>
      <td><div align="center" style="padding:20px 0 0 0; width:1000; border-left:#41583a solid 1px; border-bottom:#41583a solid 1px; border-right:#41583a solid 1px">
      <form name="form1" method="post" action="">
   		<table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="380" height="40" align="right" class="label">numele</td>
        <td width="620" height="40">&nbsp;&nbsp;   
            <input name="utilizator2" type="text" class="camp_oblig" id="utilizator2" tabindex="1" size="30" maxlength="50">
            &nbsp;<span class="txt_explicativ">(ex. Constantin ALUNCA)</span></td>
      </tr>
      <tr>
        <td height="40" align="right" class="label">utilizator</td>
        <td height="40">&nbsp;&nbsp;
          <label>
          <input name="e_mail" type="text" class="camp_oblig" id="e_mail" size="30" maxlength="60">
          &nbsp;<span class="txt_explicativ">(ex. utilizator@domeniu.term)</span></label></td>
      </tr>
      <tr>
        <td height="40" align="right" class="label">parola</td>
        <td height="40">&nbsp;&nbsp;
          <input name="textfield2" type="password" class="camp_oblig" id="textfield2" tabindex="2" size="20" maxlength="30"></td>
      </tr>
      <tr>
        <td height="40" align="right" class="label">reintrodu parola</td>
        <td height="40">&nbsp;&nbsp;
          <input name="textfield" type="password" class="camp_oblig" id="textfield" tabindex="2" size="20" maxlength="30">
          &nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td height="40" align="right">&nbsp;</td>
        <td height="40">&nbsp;&nbsp;
          <input name="autentifica" type="submit" class="butoane" id="autentifica" tabindex="3" value="inregistreaz&#259;"></td>
      </tr>
    </table>
  </form>
      </div>
      </td>
    </tr>
  </table>
</div>