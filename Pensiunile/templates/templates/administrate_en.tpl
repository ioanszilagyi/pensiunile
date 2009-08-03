{include file="header.tpl" titlu=$titlu_pag jsfiles=$jsfiles cssfiles=$cssfiles user=$user}
<div class="logo">
	<a href="?page=1"><img src="images/logo.png" alt="Pensiunile din Romania" width="459" height="69" /></a>
</div>
<div id="main" class="main">
    <div id="menu2" class="menu2">
        <ul>
        {foreach from=$menu2 key=menu_text item=menu_link}
        <li><a href="{$menu_link}">{$menu_text}</a></li>
        {/foreach}
        </ul>
    </div>
    
    <div id="content" class="content">
        <table><tr><td>
        <form id="form1" action="">
            <table id="editFormTable" border="1">
                <tbody>
                    <tr>
                        <td><p id="p1" class="text">username (email):</p></td>
                        <td><p id="p2" class="text_evidentiat">{$email_currentUser|default:"Unknow"}</p></td>
                    </tr>
                    <tr>
                        <td><p id="p5" class ="text">password:</p></td>
                        <td><p id="p6" class="text_evidentiat">(not displayed)</p></td>
                    </tr>
                    <tr>
                        <td><p id="p3" class="text">name:</p></td>
                        <td><p id="p4" class="text_evidentiat">{$name_currentUser|default:"Your Name"}</p></td>
                    </tr>
                    <tr>
                        <td><p id="p7" class ="text">phone:</p></td>
                        <td><p id="p8" class="text_evidentiat">{$phone_currentUser|default:"+40123456789"}</p></td>
                    </tr>
                    <tr>
                        <td><p id="p9" class="text">web address:</p></td>
                        <td><p id="p10" class="text_evidentiat">www.pensiunile.ro</p></td>
                    </tr>
                </tbody>
            </table>
            <input id="edit_btn" type="button" onclick="edit('text_evidentiat',this.parentNode);" value="Edit"/>
            <input id="lock_btn" type="button" onclick="save('text_evidentiat',this.parentNode);" value="Lock"/>
            <input id="save_btn" type="button" onclick="save('text_evidentiat',this.parentNode);" value="Record"/>
        </form>
        </td>
        <td>
        <form id="form2" action="">
            <table id="editFormTable" border="1">
                <tbody>
                    <tr>
                        <td><p id="p1" class="text">Name:</p></td>
                        <td><p id="p2" class="text_evidentiat">Name Pension</p></td>
                    </tr>
                    <tr>
                        <td><p id="p5" class ="text">Category:</p></td>
                        <td><p id="p6" class="text_evidentiat">*****</p></td>
                    </tr>
                    <tr>
                        <td><p id="p3" class="text">Description:</p></td>
                        <td><p id="p4" class="text_evidentiat">Your Description</p></td>
                    </tr>
                    <tr>
                        <td><p id="p7" class ="text">Address:</p></td>
                        <td><p id="p8" class="text_evidentiat">str.Principala nr.345</p></td>
                    </tr>
                    <tr>
                        <td><p id="p9" class="text">phone:</p></td>
                        <td><p id="p10" class="text_evidentiat">+40123456789</p></td>
                    </tr>
                </tbody>
            </table>
            <input id="edit_btn" type="button" onclick="edit('text_evidentiat',this.parentNode);" value="Edit"/>
            <input id="lock_btn" type="button" onclick="save('text_evidentiat',this.parentNode);" value="Lock"/>
            <input id="save_btn" type="button" onclick="save('text_evidentiat',this.parentNode);" value="Record"/>
        </form>
        </td></tr>
        </table>
        
    </div>
</div>
{include file="footer.tpl"}
