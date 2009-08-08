<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="robots" content="ALL"/>
<meta name="title" content="Pensiunile din ROMANIA"/>
<meta name="description" content="Pensiunile din Romania"/>
<meta name="keywords" content="pensiuni, pensiune, hostel, bed, breakfast, turism, cazare, turist, tiristica, zone turistice, preturi cazare"/>
<meta name="category" content="turism"/>
<meta name="author" content="Soft Proiect"/>
<meta name="reply-to" content="office@soft-proiect.ro"/>
<meta name="copyright" content="Soft Proiect - 2008"/>
<meta name="rating" content="General"/>

<title>{$titlu|default:"Pensiunile din Romania"}</title>

{* Add any Javascript files needed *}
{section name="JsSection" loop=$jsfiles}
{strip}
<script src="javascript/{$jsfiles[JsSection]}" type="text/javascript"></script>
{/strip}
{/section}
{* Add any CSS files needed *}
{section name="CSSSection" loop=$cssfiles}
{strip}
<link href="css/{$cssfiles[CSSSection]}" rel="stylesheet" type="text/css"></link>
{/strip}
{/section}
</head>
<body>
<div class="antet">
	<div class="lang_flags">{include file="language_flags.tpl"}</div>
        <div class="up_menu">{include file="menu.tpl" user=$user}</div>
</div>