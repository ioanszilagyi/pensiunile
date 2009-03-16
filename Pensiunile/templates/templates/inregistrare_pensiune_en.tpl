{include file="header.tpl" titlu=$titlu_pag}
<body>
<div align="center">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CBD69D">
    <tr>
      <td width="50%" height="22" align="left" valign="middle">{include file="steaguri.tpl"}</td>
      <td width="50%" height="22" align="right" valign="middle"><a href="#" class="txt_explicativ">autentification</a> <a href="#" class="txt_explicativ">contact</a> <a href="#" class="txt_explicativ">help</a>&nbsp;&nbsp;</td>
    </tr>
  </table>
</div>

<br>
<br>

<div align="center" style="height:80px; border-bottom:solid 1px #41583a ; border-top:solid #41583a 1px; background-color:#cbd69d"><img border="0" src="images/logo.png" /></div>
<div style="padding:20px 0 0 0;">
<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
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
                  {html_options values=$id output=$names selected=$selectedCategorie}
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
	{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
</select>
                  </label></form></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">* city</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                  <label>
<select name="localitate" class="camp_oblig" id="localitate" accesskey="l" tabindex="10">
	<option>Select County</option><!--{html_options values=$idLocalitate output=$namesLocalitate selected=$selectedLocalitate}-->
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
			{html_options values=$idStatiuni output=$namesStatiuni selected=$selectedStatiuni}
		</select>
                </label></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle"><strong class="label">touristic area</strong></td>
              <td height="30" valign="middle">&nbsp;&nbsp;
                <label>
                <select name="statiune2" class="camp" id="statiune2" accesskey="l" tabindex="19">
			{html_options values=$idZoneTuristice output=$namesZoneTuristice selected=$selectedZoneTuristice}
                </select>
                </label></td>
            </tr>
          </table> 
    	</div><br />

<div id="3" style="border:solid 1px #cbd69d; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; padding:10px 0 10px 0" align="center" >
    	  <table width="920" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; ">
                <input type="reset" name="btn_renunta" id="btn_renunta" value="Cancel" tabindex="19" class="butoane" />              </td>
              <td width="550" height="30" valign="middle">&nbsp;&nbsp;
                <label><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; ">
                <input type="submit" name="btn_renunta2" id="btn_renunta2" value="Register pension" tabindex="19" class="butoane" />
                </span></label></td>
            </tr>
          </table> 
    	</div>    </div>
    </form></td>
  </tr>
</table>
</div>
</body>
{include file="footer.tpl"}