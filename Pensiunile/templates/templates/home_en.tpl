{include file="header.tpl" titlu=$titlu_pag jsfiles=$jsfiles cssfiles=$cssfiles user=$user}
<div class="logo">
	<a href=""><img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" /></a>
</div>
<div class="search_div">
	<form action="contents/afisare_cautare.php" method="get">
        <div class="search">
            <input name="searchfield" type="text" class="camp" id="search_field" size="25" maxlength="40" />
            <input name="cauta" type="submit" class="butoane" id="search_btn" value="search" />  
            <input name="cauta" type="reset" class="butoane" id="reset_btn" value="reset" />
        </div>
        <div class="filter">
            <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="80" height="34" align="left" valign="middle" class="label">Filters:&nbsp; </td>
                    <td width="110" height="34" align="right" valign="middle" class="label">turistic area&nbsp;</td>
                    <td width="115" height="34" align="left" valign="middle">
                        <select name="selected_zona" class="camp" id="selected_zona">
                            {html_options values=$idZonaTuristica output=$namesZonaTuristica selected=$selectedZonaTuristica}
                        </select>
                    </td>
                    <td width="110" height="34" align="right" valign="middle" class="label">county&nbsp;</td>
                    <td width="115" height="34" align="left" valign="middle">
                        <select name="selected_judet" class="camp" id="selected_judet">
                            {html_options values=$idJudete output=$namesJudete selected=$selectedJudete}
                        </select>
                    </td>
                    <td width="110" height="34" align="right" valign="middle" class="label">station&nbsp;</td>
                    <td width="115" height="34" align="left" valign="middle">
                        <select name="selected_statiune" class="camp" id="selected_statiune">
                            {html_options values=$idStatiune output=$namesStatiune selected=$selectedStatiune}
                        </select>
                    </td>
                    <td width="110" height="34" align="right" valign="middle" class="label">category&nbsp;</td>
                    <td width="115" height="34" align="left" valign="middle">
                        <select name="selected_categorie" class="camp" id="selected_categorie">
                            {html_options values=$idCategorie output=$namesCategorie selected=$selectedCategorie}
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>
<div class="show_results" id="show_results" align="center"></div>
{include file="footer.tpl"}