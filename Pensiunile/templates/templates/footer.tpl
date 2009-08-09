<div id="footer" class="footer">
    <span class="text">&#169;2009 Pensiunile din Romania - </span>
    {foreach from=$menu_footer key=menu_text item=menu_link name=menu}
        <a href="?{$menu_link}" class="text">{$menu_text}</a>
        {if not $smarty.foreach.menu.last}<span class="text">|</span>{/if}
    {/foreach}
</div>
{literal}
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7195268-1");
pageTracker._trackPageview();
} catch(err) {}</script>
{/literal}
</body>
</html>
