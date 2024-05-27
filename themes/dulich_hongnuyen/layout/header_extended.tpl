    <noscript>
        <div class="alert alert-danger">{LANG.nojs}</div>
    </noscript>
    <header = class="desktop">
        <div class="section-header-bar">
            <div class="container-page">
                <nav class="header-nav">
                    <div class="header-nav-inner">
						<div class="contactDefault">
                            [MENU_TOP]
                        </div>
                        <div class="contactDefault">
                            [CONTACT_DEFAULT]
                        </div>
                        <div class="social-icons">
                            [SOCIAL_ICONS]
                        </div>
                    </div>
                    <div id="tip" data-content="">
                        <div class="bg"></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="section-header">
            <div class="container-page">
                <div id="header">
                    <div class="logo col-md-4">
                        <a title="{SITE_NAME}" href="{THEME_SITE_HREF}"><img src="{LOGO_SRC}" alt="{SITE_NAME}"></a>
                    </div>
                    <div class="banner-top col-md-20">
                        [BANNER_TOP]
                    </div>
                </div>
            </div>
        </div>
		<div id="menu-main">
			<div class="container-page">
				<nav class="second-nav" id="menusite">
					<div class="container">
						<div class="row">
							<div class="bg box-shadow">
								[MENU_SITE]
							</div>
						</div>
					</div>
				</nav>
				
			</div>
		
		</div>
    </header>
	<header = class="mobile">
        <div class="section-header-bar">
            <div class="container-page">
                <nav class="header-nav">
                    <div class="header-nav-inner">
						<div class="contactDefault">
                            [MENU_TOP]
                        </div>
                        <div class="contactDefault">
                            [CONTACT_DEFAULT]
                        </div>
                        <div class="social-icons">
                            [SOCIAL_ICONS]
                        </div>
                    </div>
                    <div id="tip" data-content="">
                        <div class="bg"></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="section-header">
            <div class="container-page">
                <div id="header">
                    <div class="banner-top col-md-24">
                        [BANNER_TOP]
                    </div>
                </div>
            </div>
        </div>
		<div class="header-bottom">
			<div id="menu-main" class="col-xs-8">
				<div class="container-page">
					<nav class="second-nav" id="menusite">
						<div class="container">
							<div class="row">
								<div class="bg box-shadow">
									[MENU_SITE]
								</div>
							</div>
						</div>
					</nav>	
				</div>
			</div>
			<div class="logo col-md-4 col-xs-8">
                <a title="{SITE_NAME}" href="{THEME_SITE_HREF}"><img src="{LOGO_SRC}" alt="{SITE_NAME}"></a>
            </div>
			<div class="headerSearch col-xs-8 col-sm-6 col-md-6">
				<button onclick="myFunction()" class="dropbtn"><em class="fa fa-search fa-lg"></em></button>
                <div class="input-group dropdown-content" id="myDropdown">
                    <input type="text" class="form-control" id="myInput" maxlength="{NV_MAX_SEARCH_LENGTH}" placeholder="{LANG.search}..." onkeyup="filterFunction()">
					
					<span class="input-group-btn">
					
					<button type="button" class="btn btn-info" data-url="{THEME_SEARCH_URL}" data-minlength="{NV_MIN_SEARCH_LENGTH}" data-click="y"><em class="fa fa-search fa-lg"></em></button>
					
					</span>
                </div>
            </div>
		</div>
    </header>
    <div class="section-body">
        <div class="page">
            <section>
                <div class="container" id="body">
                    
                    [THEME_ERROR_INFO]
