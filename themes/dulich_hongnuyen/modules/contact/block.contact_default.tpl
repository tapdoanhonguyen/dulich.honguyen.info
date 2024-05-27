<!-- BEGIN: main -->
<span class="visible-xs-inline-block"><a title="{LANG.contactUs}" class="pointer button" data-toggle="tip" data-target="#contactList" data-click="y"><em class="icon-old-phone icon-lg"></em><span class="hidden">{LANG.contactUs}</span></a></span>
<div id="contactList" class="content">
<h3 class="visible-xs-inline-block">{LANG.contactUs}</h3>
<ul class="contactList">
<!-- BEGIN: email --><li><em class="fa fa-envelope"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="{DEPARTMENT.emailhref}">{EMAIL}</a><!-- END: item --></li><!-- END: email -->
<!-- BEGIN: phone --><li><em class="fa fa-phone"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><!-- BEGIN: href --><a href="tel:{PHONE.href}"><!-- END: href -->{PHONE.number}<!-- BEGIN: href2 --></a><!-- END: href2 --><!-- END: item --></li><!-- END: phone -->
</ul>
</div>
<!-- END: main -->