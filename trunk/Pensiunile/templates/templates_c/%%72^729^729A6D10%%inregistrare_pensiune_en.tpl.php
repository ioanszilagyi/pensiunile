<?php /* Smarty version 2.6.20, created on 2008-10-07 08:42:34
         compiled from inregistrare_pensiune_en.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'inregistrare_pensiune_en.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('titlu' => $this->_tpl_vars['titlu_pag'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <form action="" method="post" name="introd_pensiune" target="_self"><div id="1" style="height:30px; background-color:#cbd69d; border:solid 1px #41583a; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:8px 0 0 0" align="center" ><strong>&nbsp;&nbsp;Register form for a pension (all fields marked with * are mandatory)</strong></div>
    <div id="2" style="border-bottom:#41583a solid 1px; border-left:#41583a solid 1px; border-right:#41583a solid 1px; padding:20px 20px 20px 20px">
    	<div id="3" style="border:solid 1px #cbd69d; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:10px 0 10px 0" align="center" >
    	  <table width="920" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; "><strong class="label">* pension name</strong></td>
              <td width="550" height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <input name="numele" type="text" class="camp_oblig" id="numele" accesskey="n" tabindex="1" />
                &nbsp;&nbsp;<span class="txt_explicativ">(ex: HAIDUCUL)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* category</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <select name="margarete" class="camp_oblig" id="margarete" accesskey="m" tabindex="2">
                  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['id'],'output' => $this->_tpl_vars['names'],'selected' => $this->_tpl_vars['selectedCategorie']), $this);?>

                </select>
                &nbsp;</label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">describe your pension<br />
                <span class="txt_explicativ">(maxim x caractere)<br />
                pana acum ati scris Y caractere din X</span></strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <textarea name="descriere" cols="45" rows="4" class="camp" id="descriere" accesskey="d" tabindex="3"></textarea>
                </label></td>
            </tr>
          </table> 
    	</div>
        <br />
        <div id="4" style="border:solid 1px #cbd69d; font:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:10px 0 10px 0" align="center" >
          <table width="920" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; "><strong class="label">* contact person</strong></td>
              <td width="550" height="30" valign="middle">&nbsp;&nbsp;
                  <label>
                  <input name="pers_contact" type="text" class="camp_oblig" id="pers_contact" accesskey="p" tabindex="4" size="40" maxlength="60" />
                    &nbsp;&nbsp;<span class="txt_explicativ">(ex: POPESCU Ioan)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* phone</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                  <label>
                  <input name="telefon" type="text" class="camp_oblig" id="telefon" accesskey="t" tabindex="5" size="10" maxlength="10" />
&nbsp;&nbsp;<span class="txt_explicativ">(ex: 0123456789)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* email</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                  <label>
                  <input name="email" type="text" class="camp_oblig" id="email" accesskey="e" tabindex="6" size="40" maxlength="60" />
&nbsp;&nbsp;<span class="txt_explicativ">(ex: contact@pensiunile.ro)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">web address</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <input name="web" type="text" class="camp" id="web" accesskey="w" tabindex="7" size="40" maxlength="60" />
&nbsp;&nbsp;<span class="txt_explicativ">(ex: www.pensiunile.ro)</span></label></td>
            </tr>
          </table> 
    	
        </div><br />

        <div id="4" style="border:solid 1px #cbd69d; font:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:10px 0 10px 0" align="center">
          <table width="920" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; "><strong class="label">* country</strong></td>
              <td width="550" height="30" valign="middle">&nbsp;&nbsp;
                  <label>
<select name="tara" class="camp_oblig" id="tara" accesskey="t" tabindex="8">
  <option value="1">Romania</option>
</select>
                  </label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* county</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;<form action="#">
                  <label>
<select name="judet" class="camp_oblig" id="judet" accesskey="j" tabindex="9">
	<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idJudete'],'output' => $this->_tpl_vars['namesJudete'],'selected' => $this->_tpl_vars['selectedJudete']), $this);?>

</select>
                  </label></form></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* city</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                  <label>
<select name="localitate" class="camp_oblig" id="localitate" accesskey="l" tabindex="10">
	<option>Select County</option><!--<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idLocalitate'],'output' => $this->_tpl_vars['namesLocalitate'],'selected' => $this->_tpl_vars['selectedLocalitate']), $this);?>
-->
</select>
&nbsp;&nbsp;<span class="txt_explicativ">(ex: ORADEA)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">street</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                  <label>
                  <input name="strada" type="text" class="camp" id="strada" accesskey="s" tabindex="11" size="30" maxlength="50" />
                &nbsp;&nbsp;<span class="txt_explicativ">(ex: Alexandru DUCA)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* number</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <input name="numarul" type="text" class="camp_oblig" id="numarul" accesskey="n" tabindex="12" size="4" maxlength="4" />
                &nbsp;&nbsp;<span class="txt_explicativ">(ex: 123)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">postal code</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <input name="cod_p" type="text" class="camp" id="cod_p" accesskey="c" tabindex="13" size="6" maxlength="6" />
&nbsp;&nbsp;<span class="txt_explicativ">(ex: 123456)</span></label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">GPS coordonate</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <select name="n_s" class="camp" id="n_s" accesskey="l" tabindex="14">
                  <option value="N">N</option>
                  <option value="S">S</option>
                                </select>
                <input name="pozitie_ns" type="text" class="camp" id="pozitie_ns" accesskey="c" tabindex="15" size="9" maxlength="9" />
                <span class="txt_explicativ">(ex: 44/56/34)</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="e_v" class="camp" id="e_v" accesskey="l" tabindex="16">
                  <option value="E">E</option>
                  <option value="V">V</option>
                </select>
                <input name="pozitie_ev" type="text" class="camp" id="pozitie_ev" accesskey="c" tabindex="17" size="9" maxlength="9" />
                </label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">health resort</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <select name="statiune" class="camp" id="statiune" accesskey="l" tabindex="18">
			<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idStatiuni'],'output' => $this->_tpl_vars['namesStatiuni'],'selected' => $this->_tpl_vars['selectedStatiuni']), $this);?>

		</select>
                </label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">touristic area</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <select name="statiune2" class="camp" id="statiune2" accesskey="l" tabindex="19">
			<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['idZoneTuristice'],'output' => $this->_tpl_vars['namesZoneTuristice'],'selected' => $this->_tpl_vars['selectedZoneTuristice']), $this);?>

                </select>
                </label></td>
            </tr>
          </table> 
    	</div><br />

<div id="3" style="border:solid 1px #cbd69d; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:10px 0 10px 0" align="center" >
    	  <table width="920" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; ">
                <input type="reset" name="btn_renunta" id="btn_renunta" value="Cancel" tabindex="19" />              </td>
              <td width="550" height="30" valign="middle">&nbsp;&nbsp;
                <label><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; ">
                <input type="submit" name="btn_renunta2" id="btn_renunta2" value="Register pension" tabindex="19" />
                </span></label></td>
            </tr>
          </table> 
    	</div>    </div>
    </form></td>
  </tr>
</table>
</body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>