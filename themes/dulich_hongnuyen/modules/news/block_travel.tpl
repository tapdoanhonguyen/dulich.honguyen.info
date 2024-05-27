<!-- BEGIN: main -->
<div id="hot-news">
    <div class="panel panel-default news_column">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 margin-bottom-lg">
                    <div class="margin-bottom text-center"><a href="{main.link}" title="{main.title}" {main.target_blank}><img src="{main.imgsource}" alt="{main.title}" width="{main.width}" class="img-travel"/></a></div>
                    <h2 class="margin-bottom-sm"><a href="{main.link}" title="{main.title}" {main.target_blank}>{main.titleclean60}</a></h2>
                    {main.hometext}
                   
                </div>
                <div class="hot-news-others col-md-12 margin-bottom-lg">
                    <ul class="column-margin-left list-none">
                        <!-- BEGIN: othernews -->
                        <li class="icon_list">
                            <a class="black h4 clearfix" href="{othernews.link}" {othernews.target_blank} <!-- BEGIN: tooltip -->data-placement="{TOOLTIP_POSITION}" data-content="{othernews.hometext_clean}" data-img="{othernews.imgsource}" <!-- END: tooltip --> title="{othernews.title}" ><img src="{othernews.imgsource}" alt="{othernews.title}" class="img-other pull-left margin-left-sm" style="width:36%;"/><span>{othernews.titleclean60}</span></a>
                        </li>
                        <!-- END: othernews -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: main -->
