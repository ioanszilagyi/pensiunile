<span class="text">
    {if isset($email_currentUser) && $email_currentUser != "" }
        <b>{$email_currentUser}</b> |
    {/if}
    {foreach from=$menu1 key=menu_text item=menu_link name=menu}
        <a href="?page={$menu_link}" class="txt_explicativ">{$menu_text}</a>
        {if not $smarty.foreach.menu.last}|{/if}
    {/foreach}
</span>
&nbsp;