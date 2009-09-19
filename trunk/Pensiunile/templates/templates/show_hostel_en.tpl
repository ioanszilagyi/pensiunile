{include file="header.tpl" titlu=$titlu_pag jsfiles=$jsfiles cssfiles=$cssfiles user=$user}
{include file="logos.tpl"}
<div id="box_afisare_pensiune" align="center">
	<div id="a_p_1" align="center">
  	<table width="998" border="0" cellspacing="5" cellpadding="0">
		  <tr>
    		<td align="left" valign="top" id="td_images" ><img src="images/pensiune.jpg" height="300" width="300"/></td>
		    <td align="left" valign="top" id="td_info" >
        	<div id="div_info" class="contur">
          	<font class="text">
            	<u>Contact information:</u><br />
              Address: <b>{$address}</b><br />Locality: <b>{$localitate}</b><br />Postal code: <b>{$zip}</b><br />County: <b>{$judet}</b><br />
              GPS position : <b></b><br />
              Telephone : <b>{$phone}</b><br />
              E-mail: <b><a href="mailto:{$email}">{$email}</a></b><br />
              Website: <b>{$web}</b><br />
              Contact person: <b>POPESCU Ioana</b><br /><br />
              
            	<u>Hostel information:</u><br />
              Category: <b>{$category}</b><br />
              Prices : min. <b>{$price_min}</b> - max. <b>{$price_max}</b><br />
              Total rooms: <b>10</b><br />
              Single: <b>10</b><br />
              Double: <b>10</b><br />
              Matrimonial: <b>10</b><br />
              Camere cu 1 pat dublu si 1 pat simplu<b>10</b><br />
              Camere cu 3 paturi<b>10</b><br />
              Camere cu 4 paturi<b>10</b><br />
           	</font>
          </div>
        </td>
    		<td align="left" valign="top" id="td_rezervare" >
        	<div id="div_rezervare" class="contur">
          	<font class="text">
          	<div align="left"><b>Formular de rezervare prin e-mail.</b></div>
          	  <form action="#" method="post" name="sent_hostel_mail">
            	<div align="left" class="spatii_form">Your personal information</div>
            	<div>
              	<table width="356" border="0" align="right" cellpadding="0" cellspacing="0" class="contur">
              		<tr>
										<td width="133" height="20" align="left">
                    	<input name="first_name2" type="text" value="your first name" size="25" maxlength="40" class="camp" />
                    </td>
							    	<td width="192" height="20" align="right">
                    	<input name="last_name2" type="text" value="your last name" size="25" maxlength="40" class="camp" />
                    </td>
							  	</tr>
              		<tr>
										<td height="20" align="left"><input name="email2" type="text" value="your e-mail adress" size="25" maxlength="40" class="camp" /></td>
							    	<td height="20" align="right"><input name="phone2" type="text" value="your phone" size="15" maxlength="13" class="camp" /></td>
							  	</tr>
								</table>
              </div>
            	<div align="left" class="spatii_form">Your rezervation</div>
            	<div>
              	<table width="356" border="0" align="right" cellpadding="0" cellspacing="0" class="contur">
              		<tr>
										<td height="20" align="left">Arrive in:</td>
										<td height="20" align="left">
  	                	<input type="text" name="textfield" id="textfield" class="camp" />							 
    	                Nr of day:
										  <input name="textfield2" type="text" id="textfield2" size="3" maxlength="3" class="camp" />
										</td>
									</tr>
            	  	<tr>
										<td width="60" height="20" align="left">Rooms</td>
							  	  <td width="296" height="20" align="left">Single
                  	  <select name="select" id="select"  class="camp"></select>
                    	Duble
								      <select name="select2" id="select2"  class="camp"></select>
						       		Matrimonial 
										  <select name="select3" id="select3"  class="camp"></select>
							    	</td>
							    </tr>
          	    	<tr>
										<td height="20" align="left">&nbsp;</td>
										<td height="20" align="left">With 3 bads
                	    <select name="select4" id="select4"  class="camp"></select>
                  	  With 4 bads
									  	<select name="select5" id="select5"  class="camp"></select>
	                  </td>
							    </tr>
								</table>
              </div>
            	<div align="left" class="spatii_form">Your message</div>
              <textarea name="message" cols="48" rows="2" class="camp"></textarea><br />
              <div align="left" class="spatii_form">You must waiting for confirmation of your rezervation via e-mail or phone.</div>
              <div>
              <table width="356" border="0" align="right" cellpadding="0" cellspacing="0">
  							<tr>
							    <td height="30" align="left"><input type="reset" name="reset" id="reset" value="Reset" class="butoane"/></td>
							    <td height="30" align="right"><input type="submit" name="SEND" id="SEND" value="SEND" class="butoane"/></td>
							  </tr>
							</table>
							</div>
            </form>
            </font>
          </div>
        </td>
		  </tr>
		</table>
	</div>
  <div id="a_p_2" align="center">
  <table width="998" border="0" cellpadding="0" cellspacing="5">
  <tr>
    <td>Galerie cu imagini</td>
    <td>Schita sau harta cu pozitia pensiunii</td>
    <td>Descriere pensiune</td>
  </tr>
</table>

  </div>
</div>
{include file="footer.tpl"}