<!-- BEGIN: main -->
<div class="nv-fullbg">
	<div class="contact-content-1">
		<p>弊社にご関心をお持ちいただきましてありがとうございます。ご質問やご相談、お見積もりの</p>
		<p>ご依頼等ございましたら、下記フォームよりお気軽にお問合わせください。</p>
		<p>担当者よりご連絡させていただきます。</p>
	</div>
	<div class="contact-content-2">
		<p>アレクシア株式会社</p>
		<p>Tel: 03-6240-1134</p>
		<p>住所: 東京都台東区東上野2-9-1 MTKビル4F</p>
		<p>営業時間: 平日09:00 – 18:00</p>
	</div>
    <form method="post" action="{ACTION_FILE}" onsubmit="return nv_validForm(this);" novalidate<!-- BEGIN: recaptcha3 --> data-recaptcha3="1"<!-- END: recaptcha3 -->>
		<!-- BEGIN: iguest -->
		
		<div class="form-group">
			<div class="input-group">
				<input type="email" maxlength="60" value="" name="femail" class="form-control required form-control-contact" placeholder="{LANG.email}" onkeypress="nv_validErrorHidden(this);" data-mess="{LANG.error_email}" />
			</div>
		</div>
		<!-- END: iguest -->
		<!-- BEGIN: iuser -->
		
		<div class="form-group">
			<div class="input-group">
				<label>会社名 (必須)</label>
				<input type="name-company" maxlength="60" value="" name="femail" class="form-control form-control-contact required disabled"  placeholder="" onkeypress="nv_validErrorHidden(this);"  />
			</div>
		</div>
		<div class="clear"></div>
		<div class="form-group">
			<div class="input-group">
				<label>お名前 (必須)</label>
				<input type="name" maxlength="60" value="" name="femail" class="form-control form-control-contact required disabled"  placeholder="" onkeypress="nv_validErrorHidden(this);"  />
			</div>
		</div>
		<div class="clear"></div>
		<div class="form-group">
			<div class="input-group">
				<label>電話番号</label>
                <input type="text" maxlength="60" value="{CONTENT.fphone}" name="fphone" class="form-control form-control-contact" placeholder="{LANG.phone}" />
            </div>
        </div>
        <div class="clear"></div>
		<div class="form-group">
			<div class="input-group">
				<label>メールアドレス (必須)</label>
				<input type="email" maxlength="60" value="" name="femail" class="form-control form-control-contact required disabled"  placeholder="{LANG.email}" onkeypress="nv_validErrorHidden(this);" data-mess="{LANG.error_email}" />
			</div>
		</div>
		<div class="clear"></div>
		<!-- END: iuser -->
        
		<div class="form-group">
            <div>
            	<label>件名</label>
    			<textarea cols="8" rows="4" name="fcon" class="form-control required" maxlength="1000" placeholder="{LANG.content}" onkeypress="nv_validErrorHidden(this);" data-mess="{LANG.error_content}"></textarea>
            </div>
		</div>
		<div class="clear"></div>
		<div class="form-group">
            <div>
            	<label>メッセージ本文</label>
    			<textarea cols="8" rows="4" name="fcon" class="form-control required" maxlength="1000" placeholder="{LANG.content}" onkeypress="nv_validErrorHidden(this);" data-mess="{LANG.error_content}"></textarea>
            </div>
		</div>
        <div class="clear"></div>
        <!-- BEGIN: captcha -->
		<div class="form-group">
            <div class="middle text-left clearfix">
                <img width="{GFX_WIDTH}" height="{GFX_HEIGHT}" title="{LANG.captcha}" alt="{LANG.captcha}" src="{NV_BASE_SITEURL}index.php?scaptcha=captcha&t={NV_CURRENTTIME}" class="captchaImg display-inline-block">
                <em onclick="change_captcha('.fcode');" title="{GLANG.captcharefresh}" class="fa fa-pointer fa-refresh margin-left margin-right"></em>
                <input type="text" placeholder="{LANG.captcha}" maxlength="{NV_GFX_NUM}" value="" name="fcode" class="fcode required form-control display-inline-block" style="width:100px;" data-pattern="/^(.){{NV_GFX_NUM},{NV_GFX_NUM}}$/" onkeypress="nv_validErrorHidden(this);" data-mess="{LANG.error_captcha}"/>
            </div>
		</div>
		<div class="clear"></div>
        <!-- END: captcha -->
        
		<div class="text-center form-group">
			
			<input type="submit" value="{LANG.sendcontact}" name="btsend" class="btn btn-primary" id="bt-submt" />
		</div>
		<div class="clear"></div>
	</form>
    <div class="contact-result alert"></div>
</div>
<!-- END: main -->