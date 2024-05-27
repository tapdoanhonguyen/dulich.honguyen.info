<!-- BEGIN: main -->
<!-- BEGIN: viewdescription -->
<div class="news_column">
    <div class="alert alert-info clearfix">
        <h1>{CONTENT.title}</h1>
        <!-- BEGIN: image -->
        <img alt="{CONTENT.title}" src="{HOMEIMG1}" width="{IMGWIDTH1}" class="img-thumbnail pull-left imghome" />
        <!-- END: image -->
        <p>{CONTENT.description}</p>
    </div>
</div>
<!-- END: viewdescription -->
<!-- BEGIN: viewcatloop -->
<div class="news_column list-news-viewcat_page">
    
    <!-- BEGIN: news -->
    <div class="panel panel-default col-md-8">
        <div class="panel-body">
            <!-- BEGIN: image -->
            <a href="{CONTENT.link}" title="{CONTENT.title}" {CONTENT.target_blank}><img  alt="{HOMEIMGALT1}" src="{HOMEIMG1}" width="{IMGWIDTH1}" class="img-thumbnail pull-left imghome" /></a>
            <!-- END: image -->
			<div class="clearfix"></div>
            <h3>
                <a href="{CONTENT.link}" title="{CONTENT.title}" {CONTENT.target_blank}>{CONTENT.title}</a>
                <!-- BEGIN: newday -->
                <span class="icon_new">&nbsp;</span>
                <!-- END: newday -->
            </h3>	
            {CONTENT.hometext}
            
        </div>
    </div>
    <!-- END: news -->
</div>
<!-- END: viewcatloop -->
<!-- BEGIN: related -->
<hr/>
<h4>{ORTHERNEWS}</h4>
<ul class="related list-items">
    <!-- BEGIN: loop -->
    <li>
        <em class="fa fa-angle-right">&nbsp;</em><a href="{RELATED.link}" title="{RELATED.title}" {EXTLINK}>{RELATED.title} <em>({RELATED.publtime}) </em></a>
        <!-- BEGIN: newday -->
        <span class="icon_new">&nbsp;</span>
        <!-- END: newday -->
    </li>
    <!-- END: loop -->
</ul>
<!-- END: related -->
<!-- BEGIN: generate_page -->
<div class="clearfix"></div>
<div class="text-center">
    {GENERATE_PAGE}
</div>
<!-- END: generate_page -->
<!-- END: main -->
