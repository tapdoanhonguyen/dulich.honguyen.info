<!-- BEGIN: main -->

<!-- BEGIN: warning -->
<div class="alert alert-danger">{LANG.warning}</div>
<!-- END: warning -->

<div class="page panel panel-default" itemtype="http://schema.org/Article" itemscope>
    <div class="panel-body">
        
        <div class="hidden hide d-none" itemprop="author" itemtype="http://schema.org/Organization" itemscope>
            <span itemprop="name">{SCHEMA_ORGNAME}</span>
        </div>
        <span class="hidden hide d-none" itemprop="datePublished">{SCHEMA_DATEPUBLISHED}</span>
        <span class="hidden hide d-none" itemprop="dateModified">{SCHEMA_DATEPUBLISHED}</span>
        <span class="hidden hide d-none" itemprop="mainEntityOfPage">{SCHEMA_URL}</span>
        <span class="hidden hide d-none" itemprop="image">{SCHEMA_IMAGE}</span>
        <div class="hidden hide d-none" itemprop="publisher" itemtype="http://schema.org/Organization" itemscope>
            <span itemprop="name">{SCHEMA_ORGNAME}</span>
            <span itemprop="logo" itemtype="http://schema.org/ImageObject" itemscope>
                <span itemprop="url">{SCHEMA_ORGLOGO}</span>
            </span>
        </div>
        

        <!-- BEGIN: imageleft -->
        <figure class="article left pointer" onclick="modalShowByObj('#imgpreview');">
            <div style="width:{CONTENT.thumb.width}px;">
                <img alt="{CONTENT.title}" src="{CONTENT.thumb.src}" class="img-thumbnail" />
                <!-- BEGIN: alt --><figcaption>{CONTENT.imagealt}</figcaption><!-- END: alt -->
            </div>
        </figure>
        <div id="imgpreview" style="display:none">
            <p class="text-center"><img alt="{CONTENT.title}" src="{CONTENT.img.src}" srcset="{CONTENT.img.srcset}" class="img-thumbnail"/></p>
        </div>
        <!-- END: imageleft -->

        <!-- BEGIN: description -->
        <div class="hometext margin-bottom-lg" itemprop="description">{CONTENT.description}</div>
        <!-- END: description -->

        <!-- BEGIN: imagecenter -->
        <figure class="article center pointer" onclick="modalShowByObj(this);">
            <p class="text-center"><img alt="{CONTENT.title}" src="{CONTENT.img.src}" srcset="{CONTENT.img.srcset}" width="{CONTENT.img.width}" class="img-thumbnail" /></p>
            <!-- BEGIN: alt --><figcaption>{CONTENT.imagealt}</figcaption><!-- END: alt -->
        </figure>
        <!-- END: imagecenter -->

        <div class="clear"></div>

        <div id="page-bodyhtml" class="bodytext margin-bottom-lg">
            {CONTENT.bodytext}
        </div>
    </div>
</div>

<!-- BEGIN: other -->
<div class=" panel-default">
    <div class="company-body">
        <ul class="nv-list-item">
            <!-- BEGIN: loop -->
            <li><em class="fa fa-angle-double-right">&nbsp;</em><h3><a title="{OTHER.title}" href="{OTHER.link}">{OTHER.title}</a></h3></li>
            <!-- END: loop -->
       </ul>
    </div>
</div>
<!-- END: other -->
<!-- END: main -->
