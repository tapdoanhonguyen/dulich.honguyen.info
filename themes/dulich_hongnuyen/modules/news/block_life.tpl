<!-- BEGIN: main -->
<div id="hot-life">
    <div class="life_column">
        <div class="panel-body-life">
            <div class="row">
                <div class="col-md-24">
					<div class="life-item">
						<div class="img-life-item">
							<a href="{main.link}" title="{main.title}" {main.target_blank}><img src="{main.imgsource}" alt="{main.title}" width="{main.width}" class="img-thumbnail"/></a>
						</div>						
						<div class="life-content">
							<h5 class="margin-bottom-sm"><a href="{main.link}" title="{main.title}" {main.target_blank}>{main.titleclean60}</a></h5>
							<p>{main.hometext}</p>
						</div>
					</div>
                    
					<div class="clearfix"></div>
					
						<!-- BEGIN: othernews -->
						<div class="col-md-12">
							<div class="list-life">
							<div class="img-list-life">
								<img src="{othernews.imgsource}" alt="{othernews.title}" class="img-thumbnail " />
							</div>
							<div class="life-list-content">
								<a class="show black h4 clearfix" href="{othernews.link}" {othernews.target_blank} 
									<!-- BEGIN: tooltip -->
										data-placement="{TOOLTIP_POSITION}" data-content="{othernews.hometext_clean}" data-img="{othernews.imgsource}" data-rel="tooltip"
									<!-- END: tooltip --> 
									title="{othernews.title}" >
									
									<span>{othernews.titleclean60}</span>
								</a>
							</div>
							</div>
                      
						</div>
						<!-- END: othernews -->
					
					
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: main -->
