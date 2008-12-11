<?php /* Smarty version 2.6.20, created on 2008-12-11 07:31:35
         compiled from home_en.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'home_en.tpl', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('titlu' => $this->_tpl_vars['titlu_pag'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body onLoad="checkCookie();">
<div align="right"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CBD69D">
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
<div style="padding:50px 0 0 0">
<form action="" method="get">
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
        <td width="295" height="30" class="label">county
     
          <select name="select" class="camp" id="select">
		<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idJudete'],'output' => $this->_tpl_vars['namesJudete'],'selected' => $this->_tpl_vars['selectedJudete']), $this);?>

          </select>
          </td>
      </tr>
      <tr>
        <td height="30" align="right">
          <input name="textfield" type="text" class="camp" id="textfield" size="25" maxlength="40" />
        </td>
        <td height="30" align="center">
          <input name="cauta" type="submit" class="butoane" id="caut&#259;" value="search" />
        </td>
        <td height="30" align="center" class="label">in</td>
        <td height="30" align="center">
          <input name="unde" type="radio" class="camp" id="2" tabindex="3" value="unde" />
        </td>
        <td height="30" class="label">turistic area 
       
          <select name="select2" class="camp" id="select2">
	<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idZonaTuristica'],'output' => $this->_tpl_vars['namesZonaTuristica'],'selected' => $this->_tpl_vars['selectedZonaTuristica']), $this);?>

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
        <td height="30" class="label">resort
      
          <select name="select3" class="camp" id="select3">
	<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idStatiune'],'output' => $this->_tpl_vars['namesStatiune'],'selected' => $this->_tpl_vars['selectedStatiune']), $this);?>

          </select>
         </td>
      </tr>
    </table>
  </div>
</div>
</form>
</div>
</body>