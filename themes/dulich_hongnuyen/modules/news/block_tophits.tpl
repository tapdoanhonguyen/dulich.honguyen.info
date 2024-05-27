<!-- BEGIN: main -->
<ul class="block_tophits list-none list-items">
    <!-- BEGIN: newloop -->
    <li class="clearfix food">
        <!-- BEGIN: imgblock -->
        <a title="{blocknews.title}" href="{blocknews.link}" {blocknews.target_blank}><img src="{blocknews.imgurl}" alt="{blocknews.title}" width="{blocknews.width}" class=" pull-left mr-1"/></a>
		
        <!-- END: imgblock -->
        <a {TITLE}  href="{blocknews.link}" {blocknews.target_blank} data-content="{blocknews.hometext_clean}" data-img="{blocknews.imgurl}" data-rel="block_news_tooltip">{blocknews.title}</a>
		 <span class="h5">{DETAIL.publtime}</span>
    </li>
    <!-- END: newloop -->
</ul>

