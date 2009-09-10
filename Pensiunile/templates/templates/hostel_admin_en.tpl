{include file="header.tpl" jsfiles=$jsfiles cssfiles=$cssfiles user=$user}
<div id="logo" class="logo-mic">
    <a href=""><img src="images/logo-mic.png" alt="Pensiunile din Romania" width="200" height="30" /></a>
</div>

<div class="sign_form">
    <div class="title_form"><strong>Register form for a pension (all fields marked with * are mandatory)</strong></div>
    <div class="form">
        <form action="" method="post" name="introd_pensiune" target="_self">
            <table width="920" border="0" cellspacing="0" cellpadding="0" style="padding:5px 5px 5px 5px;">
                <tr>
                    <td width="370" height="30" align="right" style="padding:inherit;"><strong class="label">* hostel name</strong></td>
                    <td width="550" height="30" valign="middle" style="padding:inherit;"><label><input name="name_pensiune" id="name_pensiune" type="text" class="camp_oblig" tabindex="1" /><span class="txt_explicativ">(ex: HAIDUCUL)</span></label></td>
                </tr>
                <tr>
                    <td width="370" height="30" align="right" style="padding:inherit;"><strong class="label">* hostel photo</strong></td>
                    <td width="550" height="30" valign="middle" style="padding:inherit;"><label><input name="photo_pensiune" id="photo" type="file" class="camp_oblig" tabindex="1" accept="image/jpeg, image/gif" /></label></td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* category</strong></td>
                    <td height="30" valign="middle"><label><select name="category" id="category" class="camp_oblig" tabindex="2"><option>Categories</option>{html_options values=$id output=$names selected=$selectedCategorie}</select></label></td>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* describe your pension</strong><p class="txt_explicativ">(short description)</p></td>
                    <td height="30" valign="middle"><label><textarea name="description" id="description"  cols="45" rows="4" class="camp_oblig" accesskey="d" tabindex="3"></textarea></label></td>
                </tr>
                <tr>
                    <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; "><strong class="label">* contact person</strong></td>
                    <td width="550" height="30" valign="middle"><label><input name="contact_person" type="text" class="camp_oblig" id="contact_person" accesskey="p" tabindex="4" size="40" maxlength="60" /><span class="txt_explicativ">(ex: POPESCU Ioan)</span></label></td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* phone</strong></td>
                    <td height="30" valign="middle"><label><input name="phone"  id="phone" type="text" class="camp_oblig" accesskey="t" tabindex="5" size="10" maxlength="10" />
                            <span class="txt_explicativ">(ex: +40123456789)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* email</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <input name="email" id="email" type="text" class="camp_oblig" accesskey="e" tabindex="6" size="40" maxlength="60" />
                            <span class="txt_explicativ">(ex: contact@pensiunile.ro)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">web address</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <input name="web" id="web" type="text" class="camp" accesskey="w" tabindex="7" size="40" maxlength="60" />
                            <span class="txt_explicativ">(ex: www.pensiunile.ro)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; "><strong class="label">* country</strong></td>
                    <td width="550" height="30" valign="middle">
                        <label>
                            <select name="tara" class="camp_oblig" id="tara" tabindex="8">
                                <option value="1">Romania</option>
                            </select>
                        </label></td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* county</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <select name="judet" class="camp_oblig" id="judet" tabindex="9">
                                <option>Select County</option>{html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
                            </select>
                        </label>

                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* city</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <select name="localitate_id" id="localitate_id" class="camp_oblig" accesskey="l" tabindex="10">
                                {html_options values=$idLocalitate output=$namesLocalitate selected=$selectedLocalitate}
                            </select>
                            <span class="txt_explicativ">(ex: ORADEA)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">street</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <input name="address" id="address" type="text" class="camp" accesskey="s" tabindex="11" size="30" maxlength="50" />
                            <span class="txt_explicativ">(ex: Alexandru DUCA)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">* number</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <input name="numarul" type="text" class="camp_oblig" id="numarul" accesskey="n" tabindex="12" size="4" maxlength="4" />
                            <span class="txt_explicativ">(ex: 123)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">postal code</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <input name="postal_code" id="postal_code" type="text" class="camp" accesskey="c" tabindex="13" size="6" maxlength="6" />
                            <span class="txt_explicativ">(ex: 123456)</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">GPS coordonate</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <select name="n_s" class="camp" id="n_s" accesskey="l" tabindex="14">
                                <option value="N">N</option>
                                <option value="S">S</option>
                            </select>
                            <input name="pozitie_ns" type="text" class="camp" id="pozitie_ns" accesskey="c" tabindex="15" size="9" maxlength="9" />
                            <span class="txt_explicativ">(ex: 44/56/34)</span>

                            <select name="e_v" class="camp" id="e_v" accesskey="l" tabindex="16">
                                <option value="E">E</option>
                                <option value="V">V</option>
                            </select>
                            <input name="pozitie_ev" type="text" class="camp" id="pozitie_ev" accesskey="c" tabindex="17" size="9" maxlength="9" />
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">health resort</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <select name="statiune" class="camp" id="statiune" tabindex="18">
                                {html_options values=$idStatiuni output=$namesStatiuni selected=$selectedStatiuni}
                            </select>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td height="30" align="right" valign="middle"><strong class="label">touristic area</strong></td>
                    <td height="30" valign="middle">
                        <label>
                            <select name="statiune2" class="camp" id="statiune2" tabindex="19">
                                {html_options values=$idZoneTuristice output=$namesZoneTuristice selected=$selectedZoneTuristice}
                            </select>
                        </label>
                    </td>
                </tr>
            </table>
            <table width="920" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="370" height="30" align="right" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; ">
                        <input type="reset" name="btn_renunta" id="btn_renunta" value="Reset" tabindex="19" class="butoane" />              </td>
                    <td width="550" height="30" valign="middle">
                        <label><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#41583a; ">
                                <input type="submit" name="insert_pensiune_btn" id="insert_pensiune_btn" value="Register pension" tabindex="19" class="butoane" />
                            </span>
                        </label>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

{include file="footer.tpl"}
