<span class="text"><b>{$email_currentUser|default:" Unknow"}</b></span>
{foreach from=$menu1 key=menu_text item=menu_link}
| <a href="{$menu_link}" class="txt_explicativ">{$menu_text}</a>
{/foreach}
&nbsp;