
    <header>
        <div class="section-header">
            
            <div class="logo col-md-2 col-sm-2 col-xs-2">
                <a title="{SITE_NAME}" href="{THEME_SITE_HREF}"><img src="{LOGO_SRC}" alt="{SITE_NAME}"></a>
            </div>
            <div class="menu col-md-22 col-sm-22 col-xs-22">
                [MENU_SITE]
            </div>
        </div>
    </header>
   <div class="clear"></div>
    <div class="main">
        <div class="title-page">

            <!-- BEGIN: breadcrumbs -->
                <div class="breadcrumbs-wrap container-page">
                    <div class="display">
                        <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                        <ul class="breadcrumbs list-none"></ul>
                    </div>
                    <ul class="subs-breadcrumbs"></ul>
                    <ul class="temp-breadcrumbs hidden" itemscope itemtype="https://schema.org/BreadcrumbList">
                        <!-- BEGIN: loop --><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="{BREADCRUMBS.link}" itemprop="item" title="{BREADCRUMBS.title}"><span class="txt" itemprop="name">{BREADCRUMBS.title}</span></a><i class="hidden" itemprop="position" content="{BREADCRUMBS.position}"></i></li><!-- END: loop -->
                    </ul>
                </div>
            <!-- END: breadcrumbs -->
        </div>
        
        <div class="container-page">
            <section>
              