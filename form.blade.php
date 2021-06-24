@extends('admin.layouts.index')
@section('page-heading' , 'General Settings')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="clearfix"></div>
                 <div class="panel-body">                 
                    <div class="clearfix"></div>
                      <ul class="nav nav-tabs">
                        <li class="active nav-item"><a data-toggle="tab" class="active nav-link" href="#setting">SETTING</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#seo_tab">SEO SETTING</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#home_tab">HOME SETTING</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#button_tab">BUTTON SETTING</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#postads_tab">POSTADS FORM</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#loginform_tab">LOGIN FORM</a></li> 
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#registration_tab">REGISTRATION FORM</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#reply_tab">REPLY AD</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#reported_tab">REPORTED AD</a></li>
                        <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tagmeta_tab">TAG META</a></li>
                      </ul>                     
                     
                      <div class="tab-content">
                            <!--Setting Tab Start-->
                            <div id="setting" class="tab-pane fade in active">                             
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif   
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('site_name','SITE NAME') !!}
                                        {!! Form::text('setting[site_name]', old('site_name',isset($globalSetting['site_name']) ? $globalSetting['site_name']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                                    
                                    <div class="form-group col-md-6">
                                        {!! Form::label('alt_site_name','ALT SITE NAME') !!}
                                        {!! Form::text('setting[alt_site_name]', old('alt_site_name',isset($globalSetting['alt_site_name']) ? $globalSetting['alt_site_name']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('site_email','EMAIL ID') !!}
                                        {!! Form::text('setting[site_email]', old('site_email',isset($globalSetting['site_email']) ? $globalSetting['site_email']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('site_meta','DEFAULT META TITLE') !!}
                                        {!! Form::text('setting[site_meta]', old('site_meta',isset($globalSetting['site_meta']) ? $globalSetting['site_meta']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('setting[site_desc]','DEFAULT META DESCRIPTION') !!}
                                    {!! Form::textarea('setting[site_desc]', old('site_desc',isset($globalSetting['site_desc']) ? $globalSetting['site_desc']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[cookie_privacy_popup]','COOKIE PRIVACY POPUP CONTENT') !!}
                                    {!! Form::textarea('setting[cookie_privacy_popup]', old('cookie_privacy_popup',isset($globalSetting['cookie_privacy_popup']) ? $globalSetting['cookie_privacy_popup']: ''),['class'=>'form-control']) !!}
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('setting[footer_cookie]','COOKIE DISCLAIMER CONTENT FOOTER') !!}
                                    {!! Form::textarea('setting[footer_cookie]', old('footer_cookie',isset($globalSetting['footer_cookie']) ? $globalSetting['footer_cookie']: ''),['class'=>'form-control']) !!}
                                </div>  
                                <div class="form-group">
                                    {!! Form::label('setting[site_cookie]','COOKIE DISCLAIMER POPUP') !!}
                                    {!! Form::textarea('setting[site_cookie]', old('site_cookie',isset($globalSetting['site_cookie']) ? $globalSetting['site_cookie']: ''),['class'=>'form-control']) !!}
                                </div>                 
                                <div class="row">  
                                <div class="form-group col-md-6">
                                        {!! Form::label('site_cookie_close','COOKIE POPUP CLOSE BUTTON') !!}
                                        {!! Form::text('setting[site_cookie_close]', old('site_cookie_close',isset($globalSetting['site_cookie_close']) ? $globalSetting['site_cookie_close']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('site_cookie_submit','COOKIE POPUP SUBMIT BUTTON') !!}
                                        {!! Form::text('setting[site_cookie_submit]', old('site_cookie_submit',isset($globalSetting['site_cookie_submit']) ? $globalSetting['site_cookie_submit']: ''),['class'=>'form-control']) !!}
                                    </div>                    
                                </div>
                                <div class="form-group">
                                    {!! Form::label('cookie_display','COOKIE DISCLAIMER POPUP DISPLAY') !!}
                                    {!! Form::checkbox('setting[cookie_display]', old('cookie_display',isset($globalSetting['cookie_display']) ? $globalSetting['cookie_display']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[banner_content]','BANNER CONTENT') !!}
                                    {!! Form::textarea('setting[banner_content]', old('banner_content',isset($globalSetting['banner_content']) ? $globalSetting['banner_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[footer_content]','FOOTER CONTENT') !!}
                                    {!! Form::textarea('setting[footer_content]', old('footer_content',isset($globalSetting['footer_content']) ? $globalSetting['footer_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row"> 
                                <div class="form-group col-md-6">
                                        {!! Form::label('twitter_link','TWITTER LINK') !!}
                                        {!! Form::text('setting[twitter_link]', old('twitter_link',isset($globalSetting['twitter_link']) ? $globalSetting['twitter_link']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('instagram_link','INSTAGRAM LINK') !!}
                                        {!! Form::text('setting[instagram_link]', old('instagram_link',isset($globalSetting['instagram_link']) ? $globalSetting['instagram_link']: ''),['class'=>'form-control']) !!}
                                    </div>                    
                                </div>
                                <div class="row">  
                                <div class="form-group col-md-12">
                                        {!! Form::label('oklute_network','OKLUTE NETWORK') !!}
                                        {!! Form::text('setting[oklute_network]', old('oklute_network',isset($globalSetting['oklute_network']) ? $globalSetting['oklute_network']: ''),['class'=>'form-control']) !!}
                                    </div>                                                   
                                </div>                            
                                <div class="form-group">
                                    {!! Form::label('setting[manage_ads_content]','MANAGE ADS CONTENTS') !!}
                                    {!! Form::textarea('setting[manage_ads_content]', old('manage_ads_content',isset($globalSetting['manage_ads_content']) ? $globalSetting['manage_ads_content']: ''),['class'=>'form-control']) !!}
                                </div>                            
                                <div class="form-group">
                                    {!! Form::label('setting[manage_ads_terms]','MANAGE ADS TERMS') !!}
                                    {!! Form::textarea('setting[manage_ads_terms]', old('manage_ads_terms',isset($globalSetting['manage_ads_terms']) ? $globalSetting['manage_ads_terms']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">
                                <div class="form-group col-md-6">
                                        {!! Form::label('manage_ads_email','MANAGE ADS EMAIL CONTENT') !!}
                                        {!! Form::text('setting[manage_ads_email]', old('manage_ads_email',isset($globalSetting['manage_ads_email']) ? $globalSetting['manage_ads_email']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('manage_ads_linkk','MANAGE ADS FOOTER LINK') !!}
                                        {!! Form::text('setting[manage_ads_linkk]', old('manage_ads_linkk',isset($globalSetting['manage_ads_linkk']) ? $globalSetting['manage_ads_linkk']: ''),['class'=>'form-control']) !!}
                                    </div>                    
                                </div>
                                <div class="row">
                                <div class="form-group col-md-12">
                                        {!! Form::label('warning_heading','WARNING ADS POPUP HEADING') !!}
                                        {!! Form::text('setting[warning_heading]', old('warning_heading',isset($globalSetting['warning_heading']) ? $globalSetting['warning_heading']: ''),['class'=>'form-control']) !!}
                                    </div>                                                   
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[warning_content]','WARNING ADS POPUP CONTENT') !!}
                                    {!! Form::textarea('setting[warning_content]', old('warning_content',isset($globalSetting['warning_content']) ? $globalSetting['warning_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('warning_close','WARNING ADS POPUP CLOSE BUTTON') !!}
                                        {!! Form::text('setting[warning_close]', old('warning_close',isset($globalSetting['warning_close']) ? $globalSetting['warning_close']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('follow_us','FOLLOW US') !!}
                                        {!! Form::text('setting[follow_us]', old('follow_us',isset($globalSetting['follow_us']) ? $globalSetting['follow_us']: ''),['class'=>'form-control']) !!}
                                    </div>                    
                                </div>
                                <div class="row">                                    
                                    <div class="form-group col-md-12">
                                        {!! Form::label('blogLink','Blog Link') !!}
                                        {!! Form::text('setting[blogLink]', old('blogLink',isset($globalSetting['blogLink']) ? $globalSetting['blogLink']: ''),['class'=>'form-control']) !!}
                                    </div>                    
                                </div>
                                
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>                            
                                {!! Form::close() !!}
                            </div>
                            <!--Setting Tab End-->

                            <!--Seo Setting Tab Start-->
                            <div id="seo_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif             
                    
                                <div class="row">  
                                <div class="form-group col-md-6">
                                        {!! Form::label('yandex','YANDEX') !!}
                                        {!! Form::text('setting[yandex]', old('yandex',isset($globalSetting['yandex']) ? $globalSetting['yandex']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('bing','BING') !!}
                                        {!! Form::text('setting[bing]', old('bing',isset($globalSetting['bing']) ? $globalSetting['bing']: ''),['class'=>'form-control']) !!}
                                    </div>                       
                                </div>
                                <div class="row">  
                                <div class="form-group col-md-6">
                                        {!! Form::label('google_varifaction','GOOGLE VARIFACTION ') !!}
                                        {!! Form::text('setting[google_varifaction]', old('google_varifaction',isset($globalSetting['google_varifaction']) ? $globalSetting['google_varifaction']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('google_tag_manager','GOOGLE TAG MANAGER') !!}
                                        {!! Form::text('setting[google_tag_manager]', old('google_tag_manager',isset($globalSetting['google_tag_manager']) ? $globalSetting['google_tag_manager']: ''),['class'=>'form-control']) !!}
                                    </div>                       
                                </div>
                                <div class="row">  
                                <div class="form-group col-md-6">
                                        {!! Form::label('google_analytics','GOOGLE ANALYTICS') !!}
                                        {!! Form::text('setting[google_analytics]', old('google_analytics',isset($globalSetting['google_analytics']) ? $globalSetting['google_analytics']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('noindex_nofollow','NOINDEX NOFOLLOW') !!}
                                        {!! Form::text('setting[noindex_nofollow]', old('noindex_nofollow',isset($globalSetting['noindex_nofollow']) ? $globalSetting['noindex_nofollow']: ''),['class'=>'form-control']) !!}
                                    </div>                       
                                </div>
                                <div class="row">  
                                <div class="form-group col-md-12">
                                        {!! Form::label('locale','LOCALE') !!}
                                        {!! Form::text('setting[locale]', old('locale',isset($globalSetting['locale']) ? $globalSetting['locale']: ''),['class'=>'form-control']) !!}
                                    </div>                                                      
                                </div>

                                <div class="form-group">
                                    {!! Form::label('setting[general_setting]','HEADER GENERAL SETTING') !!}
                                    {!! Form::textarea('setting[general_setting]', old('general_setting',isset($globalSetting['general_setting']) ? $globalSetting['general_setting']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Seo Setting Tab End-->

                            <!--Home Setting Tab Start-->
                            <div id="home_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif
                                <div class="form-group">
                                    {!! Form::label('setting[top_content]','CATEGORY TOP CONTENT') !!}
                                    {!! Form::textarea('setting[top_content]', old('top_content',isset($globalSetting['top_content']) ? $globalSetting['top_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[bottom_content]','CATEGORY BOTTOM CONTENT') !!}
                                    {!! Form::textarea('setting[bottom_content]', old('bottom_content',isset($globalSetting['bottom_content']) ? $globalSetting['bottom_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('meta_title',' META TITLE') !!}
                                        {!! Form::text('setting[meta_title]', old('meta_title',isset($globalSetting['meta_title']) ? $globalSetting['meta_title']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('meta_keyword',' META KEYWORD') !!}
                                        {!! Form::text('setting[meta_keyword]', old('meta_keyword',isset($globalSetting['meta_keyword']) ? $globalSetting['meta_keyword']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('setting[meta_description]','META DESCRIPTION') !!}
                                    {!! Form::textarea('setting[meta_description]', old('meta_description',isset($globalSetting['meta_description']) ? $globalSetting['meta_description']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Home Setting Tab End-->

                            <!--Button Setting Tab Start-->
                            <div id="button_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif                            
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('sign_in','SIGN IN') !!}
                                        {!! Form::text('setting[sign_in]', old('sign_in',isset($globalSetting['sign_in']) ? $globalSetting['sign_in']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('sign_up','SIGN UP') !!}
                                        {!! Form::text('setting[sign_up]', old('sign_up',isset($globalSetting['sign_up']) ? $globalSetting['sign_up']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('ads_posts','ADS POSTS') !!}
                                        {!! Form::text('setting[ads_posts]', old('ads_posts',isset($globalSetting['ads_posts']) ? $globalSetting['ads_posts']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('back','BACK BUTTON') !!}
                                        {!! Form::text('setting[back]', old('back',isset($globalSetting['back']) ? $globalSetting['back']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">                              
                                    <div class="form-group col-md-6">
                                        {!! Form::label('select_category', 'SELECT CATEGORY'); !!}
                                        {!! Form::text('setting[select_category]', old('select_category',isset($globalSetting['select_category']) ? $globalSetting['select_category']: ''),['class'=>'form-control']) !!}
                                    </div>                                
                                    <div class="form-group col-md-6">
                                        {!! Form::label('custom_category_url', 'CUSTOM URL CATEGORY'); !!}
                                        {!! Form::text('setting[custom_category_url]', old('custom_category_url',isset($globalSetting['custom_category_url']) ? $globalSetting['custom_category_url']: ''),['class'=>'form-control']) !!}
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                    {!! Form::label('category_display','SELECT CATEGORY DISPLAY') !!} <br>
                                    {!! Form::checkbox('setting[category_display]', old('category_display',isset($globalSetting['category_display']) ? $globalSetting['category_display']: ''),['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('search_button','SEARCH BUTTON') !!}
                                        {!! Form::text('setting[search_button]', old('search_button',isset($globalSetting['search_button']) ? $globalSetting['search_button']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('search_input','SEARCH INPUT') !!}
                                        {!! Form::text('setting[search_input]', old('search_input',isset($globalSetting['search_input']) ? $globalSetting['search_input']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">                               
                                    <div class="form-group col-md-4">
                                        {!! Form::label('search_state', 'State'); !!}
                                        {!! Form::text('setsetting[search_state]', old('search_state',isset($globalSetting['search_state']) ? $globalSetting['search_state']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        {!! Form::label('search_city', 'City'); !!}
                                        {!! Form::text('setting[search_city]', old('search_city',isset($globalSetting['search_city']) ? $globalSetting['search_city']: ''),['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        {!! Form::label('search_district', 'District'); !!}
                                        {!! Form::text('setting[search_district]', old('search_district',isset($globalSetting['search_district']) ? $globalSetting['search_district']: ''),['class'=>'form-control']) !!}
                                    </div>                                
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('search_main_city_in','SELECT MAIN CITY IN ') !!}
                                        {!! Form::text('setting[search_main_city_in]', old('search_main_city_in',isset($globalSetting['search_main_city_in']) ? $globalSetting['search_main_city_in']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('search_all_city_in','SELECT ALL CITY IN') !!}
                                        {!! Form::text('setting[search_all_city_in]', old('search_all_city_in',isset($globalSetting['search_all_city_in']) ? $globalSetting['search_all_city_in']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">
                                <h3>LISTING PAGE BUTTON</h3>
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('listing_years','YEARS') !!}
                                        {!! Form::text('setting[listing_years]', old('listing_years',isset($globalSetting['listing_years']) ? $globalSetting['listing_years']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('listing_next_pages','NEXT PAGES') !!}
                                        {!! Form::text('setting[listing_next_pages]', old('listing_next_pages',isset($globalSetting['listing_next_pages']) ? $globalSetting['listing_next_pages']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('listing_cat_before','CATEGORY BEFOR CONTENT BREADCRUMBS') !!}
                                        {!! Form::text('setting[listing_cat_before]', old('listing_cat_before',isset($globalSetting['listing_cat_before']) ? $globalSetting['listing_cat_before']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('listing_cat_after','CATEGORY AFTER CONTENT BREADCRUMBS') !!}
                                        {!! Form::text('setting[listing_cat_after]', old('listing_cat_after',isset($globalSetting['listing_cat_after']) ? $globalSetting['listing_cat_after']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-12">
                                        {!! Form::label('listing_page_oops_content','LISTING PAGE OPPS CONTENT') !!}
                                        {!! Form::textarea('setting[listing_page_oops_content]', old('listing_page_oops_content',isset($globalSetting['listing_page_oops_content']) ? $globalSetting['listing_page_oops_content']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                              
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-12">
                                        {!! Form::label('contactMe','Contact Me') !!}
                                        {!! Form::text('setting[contactMe]', old('contactMe',isset($globalSetting['contactMe']) ? $globalSetting['contactMe']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-12">
                                        {!! Form::label('report_abuse_content','REPORT ABUSE CONTENT') !!}
                                        {!! Form::textarea('setting[report_abuse_content]', old('report_abuse_content',isset($globalSetting['report_abuse_content']) ? $globalSetting['report_abuse_content']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                              
                                </div>
                                <div class="row">
                                <h3>PROFILE DETAILS PAGE BUTTON</h3>
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('details_posted_on','POSTED ON') !!}
                                        {!! Form::text('setting[details_posted_on]', old('details_posted_on',isset($globalSetting['details_posted_on']) ? $globalSetting['details_posted_on']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('details_reply_ad','REPLY AD') !!}
                                        {!! Form::text('setting[details_reply_ad]', old('details_reply_ad',isset($globalSetting['details_reply_ad']) ? $globalSetting['details_reply_ad']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('details_send_friend','SEND TO A FRIEND') !!}
                                        {!! Form::text('setting[details_send_friend]', old('details_send_friend',isset($globalSetting['details_send_friend']) ? $globalSetting['details_send_friend']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('details_more_ads','MORE ADS') !!}
                                        {!! Form::text('setting[details_more_ads]', old('details_more_ads',isset($globalSetting['details_more_ads']) ? $globalSetting['details_more_ads']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('details_bottom_content','DETAILS BOTTOM CONTENT') !!}
                                        {!! Form::text('setting[details_bottom_content]', old('details_bottom_content',isset($globalSetting['details_bottom_content']) ? $globalSetting['details_bottom_content']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('back_to_search','BACK TO SEARCH') !!}
                                        {!! Form::text('setting[back_to_search]', old('back_to_search',isset($globalSetting['back_to_search']) ? $globalSetting['back_to_search']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('telephone_detail','TELEPHONE') !!}
                                        {!! Form::text('setting[telephone_detail]', old('telephone_detail',isset($globalSetting['telephone_detail']) ? $globalSetting['telephone_detail']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('call_me','CALL ME') !!}
                                        {!! Form::text('setting[call_me]', old('call_me',isset($globalSetting['call_me']) ? $globalSetting['call_me']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[warning_content_detail]','WORNING CONTENT DETAILS') !!}
                                    {!! Form::textarea('setting[warning_content_detail]', old('warning_content_detail',isset($globalSetting['warning_content_detail']) ? $globalSetting['warning_content_detail']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">                                
                                    <div class="form-group col-md-12">
                                        {!! Form::label('frequent_search','FREQUENT SEARCH') !!}
                                        {!! Form::text('setting[frequent_search]', old('frequent_search',isset($globalSetting['frequent_search']) ? $globalSetting['frequent_search']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Button Setting Tab End-->  

                            <!--PostAds Setting Tab Start-->
                            <div id="postads_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif                            
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('insert','INSERT') !!}
                                        {!! Form::text('setting[insert]', old('insert',isset($globalSetting['insert']) ? $globalSetting['insert']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('mandatory','Mandatory fields') !!}
                                        {!! Form::text('setting[mandatory]', old('mandatory',isset($globalSetting['mandatory']) ? $globalSetting['mandatory']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('verify','VERIFY') !!}
                                        {!! Form::text('setting[verify]', old('verify',isset($globalSetting['verify']) ? $globalSetting['verify']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('publish','PUBLISH') !!}
                                        {!! Form::text('setting[publish]', old('publish',isset($globalSetting['publish']) ? $globalSetting['publish']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('insert_ad','INSERT AD') !!}
                                        {!! Form::text('setting[insert_ad]', old('insert_ad',isset($globalSetting['insert_ad']) ? $globalSetting['insert_ad']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('category','CATEGORY') !!}
                                        {!! Form::text('setting[category]', old('category',isset($globalSetting['category']) ? $globalSetting['category']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('city','CITY') !!}
                                        {!! Form::text('setting[city]', old('city',isset($globalSetting['city']) ? $globalSetting['city']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('area','AREA / DISTRICT / NEIGHBOURHOOD') !!}
                                        {!! Form::text('setting[area]', old('area',isset($globalSetting['area']) ? $globalSetting['area']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>                                
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('link_info',' NEIGHBOURHOOD LINK INFO') !!}
                                        {!! Form::text('setting[link_info]', old('link_info',isset($globalSetting['link_info']) ? $globalSetting['link_info']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                                                             
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[link_info_content]','NEIGHBOURHOOD LINK INFO CONTENT') !!}
                                    {!! Form::textarea('setting[link_info_content]', old('link_info_content',isset($globalSetting['link_info_content']) ? $globalSetting['link_info_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('setting[address]','ADDRESS') !!}
                                    {!! Form::textarea('setting[address]', old('address',isset($globalSetting['address']) ? $globalSetting['address']: ''),['class'=>'form-control']) !!}
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('zip','ZIP') !!}
                                        {!! Form::text('setting[zip]', old('zip',isset($globalSetting['zip']) ? $globalSetting['zip']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('district','District') !!}
                                        {!! Form::text('setting[district]', old('district',isset($globalSetting['district']) ? $globalSetting['district']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                         
                                </div>
                                <div class="row">                                      
                                    <div class="form-group col-md-6">
                                        {!! Form::label('title','TITLE') !!}
                                        {!! Form::text('setting[title]', old('title',isset($globalSetting['title']) ? $globalSetting['title']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('min_characters','Min. 5 characters') !!}
                                        {!! Form::text('setting[min_characters]', old('min_characters',isset($globalSetting['min_characters']) ? $globalSetting['min_characters']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                                                             
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('text','TEXT') !!}
                                        {!! Form::text('setting[text]', old('text',isset($globalSetting['text']) ? $globalSetting['text']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('images','IMAGES') !!}
                                        {!! Form::text('setting[images]', old('images',isset($globalSetting['images']) ? $globalSetting['images']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('starting_picture','STARTING TODAY YOUR PICTURES') !!}
                                    {!! Form::textarea('setting[starting_picture]', old('starting_picture',isset($globalSetting['starting_picture']) ? $globalSetting['starting_picture']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('images_content','IMAGES CONTENT') !!}
                                    {!! Form::textarea('setting[images_content]', old('images_content',isset($globalSetting['images_content']) ? $globalSetting['images_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('images_placeholder','IMAGES PLACEHOLDER') !!}
                                        {!! Form::text('setting[images_placeholder]', old('images_placeholder',isset($globalSetting['images_placeholder']) ? $globalSetting['images_placeholder']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('post_ad_details','POST AD DETAILS') !!}
                                        {!! Form::text('setting[post_ad_details]', old('post_ad_details',isset($globalSetting['post_ad_details']) ? $globalSetting['post_ad_details']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('age','AGE') !!}
                                        {!! Form::text('setting[age]', old('age',isset($globalSetting['age']) ? $globalSetting['age']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('telephone','TELEPHONE CONTACT') !!}
                                        {!! Form::text('setting[telephone]', old('telephone',isset($globalSetting['telephone']) ? $globalSetting['telephone']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('email','E-MAIL') !!}
                                        {!! Form::text('setting[email]', old('email',isset($globalSetting['email']) ? $globalSetting['email']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('notvisible','NOT VISIBLE ONLINE') !!}
                                        {!! Form::text('setting[notvisible]', old('notvisible',isset($globalSetting['notvisible']) ? $globalSetting['notvisible']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>                            
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('privacy_heading','PRIVACY HEADING') !!}
                                        {!! Form::text('setting[privacy_heading]', old('privacy_heading',isset($globalSetting['privacy_heading']) ? $globalSetting['privacy_heading']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                          
                                </div>                            
                                <div class="form-group">
                                    {!! Form::label('privacy','PRIVACY CONTENT') !!}
                                    {!! Form::textarea('setting[privacy]', old('privacy',isset($globalSetting['privacy']) ? $globalSetting['privacy']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('submit_button','SUBMIT BUTTON') !!}
                                        {!! Form::text('setting[submit_button]', old('submit_button',isset($globalSetting['submit_button']) ? $globalSetting['submit_button']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                          
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('new_ads_email_template','NEW ADS PUBLISH EMAIL TEMPLATE') !!}
                                    {!! Form::textarea('setting[new_ads_email_template]', old('new_ads_email_template',isset($globalSetting['new_ads_email_template']) ? $globalSetting['new_ads_email_template']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('ads_conform_template','ADS CONFORM EMAIL TEMPLATE') !!}
                                    {!! Form::textarea('setting[ads_conform_template]', old('ads_conform_template',isset($globalSetting['ads_conform_template']) ? $globalSetting['ads_conform_template']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('paid_ads_conform_template','PAID ADS CONFORM EMAIL TEMPLATE') !!}
                                    {!! Form::textarea('setting[paid_ads_conform_template]', old('paid_ads_conform_template',isset($globalSetting['paid_ads_conform_template']) ? $globalSetting['paid_ads_conform_template']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--PostAds Setting Tab End-->                     
                      
                            <!--Login Form Tab Start-->
                            <div id="loginform_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('login_heading','LOGIN HEADING') !!}
                                        {!! Form::text('setting[login_heading]', old('login_heading',isset($globalSetting['login_heading']) ? $globalSetting['login_heading']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('login_email','LOGIN EMAIL') !!}
                                        {!! Form::text('setting[login_email]', old('login_email',isset($globalSetting['login_email']) ? $globalSetting['login_email']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('login_password','LOGIN PASSWORD') !!}
                                        {!! Form::text('setting[login_password]', old('login_password',isset($globalSetting['login_password']) ? $globalSetting['login_password']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('login_button','LOGIN BUTTON') !!}
                                        {!! Form::text('setting[login_button]', old('login_button',isset($globalSetting['login_button']) ? $globalSetting['login_button']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('login_forgot_pass','LOGIN FORGOT PASSWORD') !!}
                                        {!! Form::text('setting[login_forgot_pass]', old('login_forgot_pass',isset($globalSetting['login_forgot_pass']) ? $globalSetting['login_forgot_pass']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                </div>
                                <div class="form-group">
                                    {!! Form::label('login_content','LOGIN CONTENT') !!}
                                    {!! Form::textarea('setting[login_content]', old('login_content',isset($globalSetting['login_content']) ? $globalSetting['login_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('mandatory_content','MANDATORY CONTENT') !!}
                                    {!! Form::textarea('setting[mandatory_content]', old('mandatory_content',isset($globalSetting['mandatory_content']) ? $globalSetting['mandatory_content']: ''),['class'=>'form-control']) !!}
                                </div>                             
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Login Form Tab Start-->  

                            <!--Registration Tab Start-->
                            <div id="registration_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reg_heading','REGISTRATION HEADING') !!}
                                        {!! Form::text('setting[reg_heading]', old('reg_heading',isset($globalSetting['reg_heading']) ? $globalSetting['reg_heading']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reg_email','REGISTRATION EMAIL') !!}
                                        {!! Form::text('setting[reg_email]', old('reg_email',isset($globalSetting['reg_email']) ? $globalSetting['reg_email']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reg_confirm_email','REGISTRATION CONFIRM EMAIL') !!}
                                        {!! Form::text('setting[reg_confirm_email]', old('reg_confirm_email',isset($globalSetting['reg_confirm_email']) ? $globalSetting['reg_confirm_email']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reg_submit_button','REGISTRATION SUBMIT BUTTON') !!}
                                        {!! Form::text('setting[reg_submit_button]', old('reg_submit_button',isset($globalSetting['reg_submit_button']) ? $globalSetting['reg_submit_button']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                
                                <div class="form-group">
                                    {!! Form::label('reg_content','REGISTRATION CONTENT') !!}
                                    {!! Form::textarea('setting[reg_content]', old('reg_content',isset($globalSetting['reg_content']) ? $globalSetting['reg_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('reg_content_success_top','REGISTRATION CONTENT SUCCESS TOP') !!}
                                        {!! Form::text('setting[reg_content_success_top]', old('reg_content_success_top',isset($globalSetting['reg_content_success_top']) ? $globalSetting['reg_content_success_top']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('reg_content_success','REGISTRATION CONTENT SUCCESS BOTTOM') !!}
                                    {!! Form::textarea('setting[reg_content_success]', old('reg_content_success',isset($globalSetting['reg_content_success']) ? $globalSetting['reg_content_success']: ''),['class'=>'form-control']) !!}
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reg_password','REGISTRATION PASSWORD') !!}
                                        {!! Form::text('setting[reg_password]', old('reg_password',isset($globalSetting['reg_password']) ? $globalSetting['reg_password']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reg_confirm_password','REGISTRATION CONFIRM PASSWORD') !!}
                                        {!! Form::text('setting[reg_confirm_password]', old('reg_confirm_password',isset($globalSetting['reg_confirm_password']) ? $globalSetting['reg_confirm_password']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('reg_pass_submit_button','REGISTRATION PASSWORD SUBMIT BUTTON') !!}
                                        {!! Form::text('setting[reg_pass_submit_button]', old('reg_pass_submit_button',isset($globalSetting['reg_pass_submit_button']) ? $globalSetting['reg_pass_submit_button']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                </div>
                                <div class="form-group">
                                    {!! Form::label('reg_privicy_content','REGISTRATION PRIVICY CONTENT') !!}
                                    {!! Form::textarea('setting[reg_privicy_content]', old('reg_privicy_content',isset($globalSetting['reg_privicy_content']) ? $globalSetting['reg_privicy_content']: ''),['class'=>'form-control']) !!}
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('reg_email_template','REGISTRATION EMAIL TEMPLATE') !!}
                                    {!! Form::textarea('setting[reg_email_template]', old('reg_email_template',isset($globalSetting['reg_email_template']) ? $globalSetting['reg_email_template']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('myaccount_choose_password','MY ACCOUNT - CHOOSE PASSWORD') !!}
                                        {!! Form::text('setting[myaccount_choose_password]', old('myaccount_choose_password',isset($globalSetting['myaccount_choose_password']) ? $globalSetting['myaccount_choose_password']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                </div>
                                <div class="form-group">
                                    {!! Form::label('choose_password_contend','CHOOSE PASSWORD CONTENT') !!}
                                    {!! Form::textarea('setting[choose_password_contend]', old('choose_password_contend',isset($globalSetting['choose_password_contend']) ? $globalSetting['choose_password_contend']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('retrive_password','RETRIEVE PASSWORD') !!}
                                        {!! Form::text('setting[retrive_password]', old('retrive_password',isset($globalSetting['retrive_password']) ? $globalSetting['retrive_password']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('retrive_password_content','RETRIEVE PASSWORD CONTENT') !!}
                                    {!! Form::textarea('setting[retrive_password_content]', old('retrive_password_content',isset($globalSetting['retrive_password_content']) ? $globalSetting['retrive_password_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('retrive_password_error','RETRIEVE PASSWORD ERROR') !!}
                                    {!! Form::textarea('setting[retrive_password_error]', old('retrive_password_error',isset($globalSetting['retrive_password_error']) ? $globalSetting['retrive_password_error']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('retrive_password_email','RETRIEVE PASSWORD EMAIL TEMPLATE') !!}
                                    {!! Form::textarea('setting[retrive_password_email]', old('retrive_password_email',isset($globalSetting['retrive_password_email']) ? $globalSetting['retrive_password_email']: ''),['class'=>'form-control']) !!}
                                </div>  
                                                           
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Registration Form Tab Start-->

                            <!--Reply Tab Start-->
                            <div id="reply_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('replyad_heading','REPLY AD HEADING') !!}
                                        {!! Form::text('setting[replyad_heading]', old('replyad_heading',isset($globalSetting['replyad_heading']) ? $globalSetting['replyad_heading']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('replyad_message','REPLY MESSAGE') !!}
                                        {!! Form::text('setting[replyad_message]', old('replyad_message',isset($globalSetting['replyad_message']) ? $globalSetting['replyad_message']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('replyad_email','REPLY EMAIL ADDRESS') !!}
                                        {!! Form::text('setting[replyad_email]', old('replyad_email',isset($globalSetting['replyad_email']) ? $globalSetting['replyad_email']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('replyad_submit_button','REPLY SUBMIT BUTTON') !!}
                                        {!! Form::text('setting[replyad_submit_button]', old('replyad_submit_button',isset($globalSetting['replyad_submit_button']) ? $globalSetting['replyad_submit_button']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('replyad_privicy_content','REPLY PRIVICY CONTENT') !!}
                                    {!! Form::textarea('setting[replyad_privicy_content]', old('replyad_privicy_content',isset($globalSetting['replyad_privicy_content']) ? $globalSetting['replyad_privicy_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('replyad_email_template','REPLY EMAIL TEMPLATE') !!}
                                    {!! Form::textarea('setting[replyad_email_template]', old('replyad_email_template',isset($globalSetting['replyad_email_template']) ? $globalSetting['replyad_email_template']: ''),['class'=>'form-control']) !!}
                                </div>                            
                                
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Reply Tab End--> 

                            <!--Report Tab Start-->
                            <div id="reported_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('reported_heading','REPORT AD HEADEING') !!}
                                        {!! Form::text('setting[reported_heading]', old('reported_heading',isset($globalSetting['reported_heading']) ? $globalSetting['reported_heading']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('false_ad','False Ad') !!}
                                        {!! Form::text('setting[false_ad]', old('false_ad',isset($globalSetting['false_ad']) ? $globalSetting['false_ad']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('false_photo','False Photos') !!}
                                        {!! Form::text('setting[false_photo]', old('false_photo',isset($globalSetting['false_photo']) ? $globalSetting['false_photo']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('illegal_content','Illegal content') !!}
                                        {!! Form::text('setting[illegal_content]', old('illegal_content',isset($globalSetting['illegal_content']) ? $globalSetting['illegal_content']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('wrong_category','Wrong category') !!}
                                        {!! Form::text('setting[wrong_category]', old('wrong_category',isset($globalSetting['wrong_category']) ? $globalSetting['wrong_category']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('other_note','Other') !!}
                                        {!! Form::text('setting[other_note]', old('other_note',isset($globalSetting['other_note']) ? $globalSetting['other_note']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('more_info','More information') !!}
                                        {!! Form::text('setting[more_info]', old('more_info',isset($globalSetting['more_info']) ? $globalSetting['more_info']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('more_info_provide','Please provide more information') !!}
                                        {!! Form::text('setting[more_info_provide]', old('more_info_provide',isset($globalSetting['more_info_provide']) ? $globalSetting['more_info_provide']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('more_info_content','More information bottom content') !!}
                                    {!! Form::textarea('setting[more_info_content]', old('more_info_content',isset($globalSetting['more_info_content']) ? $globalSetting['more_info_content']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-12">
                                        {!! Form::label('reported_button','Reported ad button') !!}
                                        {!! Form::text('setting[reported_button]', old('reported_button',isset($globalSetting['reported_button']) ? $globalSetting['reported_button']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                                                               
                                </div>                                                        
                                
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Report Tab End--> 

                            <!--Tag Meta Tab Start-->
                            <div id="tagmeta_tab" class="tab-pane fade">                                
                                @include('admin.message')
                                {!! Form::model($globalSetting, ['url' => 'administrator/settings/submit', 'method'=>'post' , 'onsubmit'=>"return validateAndSubmit(this)"]) !!}
                                @if($globalSetting)
                                {{ Form::hidden('id', old('id')) }}
                                @endif
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('tag_h1_heading','H1 Heading content') !!}
                                        {!! Form::text('setting[tag_h1_heading]', old('tag_h1_heading',isset($globalSetting['tag_h1_heading']) ? $globalSetting['tag_h1_heading']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('tag_h2_heading','H2 Heading content') !!}
                                        {!! Form::text('setting[tag_h2_heading]', old('tag_h2_heading',isset($globalSetting['tag_h2_heading']) ? $globalSetting['tag_h2_heading']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('tag_description','Tags Description') !!}
                                    {!! Form::textarea('setting[tag_description]', old('tag_description',isset($globalSetting['tag_description']) ? $globalSetting['tag_description']: ''),['class'=>'form-control']) !!}
                                </div>
                                <div class="row">  
                                    <div class="form-group col-md-6">
                                        {!! Form::label('tag_meta_title','Meta Title') !!}
                                        {!! Form::text('setting[tag_meta_title]', old('tag_meta_title',isset($globalSetting['tag_meta_title']) ? $globalSetting['tag_meta_title']: ''),['class'=>'form-control']) !!}
                                    </div> 
                                    <div class="form-group col-md-6">
                                        {!! Form::label('tag_meta_keyword','Meta Keyword') !!}
                                        {!! Form::text('setting[tag_meta_keyword]', old('tag_meta_keyword',isset($globalSetting['tag_meta_keyword']) ? $globalSetting['tag_meta_keyword']: ''),['class'=>'form-control']) !!}
                                    </div>                                                                                             
                                </div> 
                                <div class="form-group">
                                    {!! Form::label('tag_meta_description','Meta Description') !!}
                                    {!! Form::textarea('setting[tag_meta_description]', old('tag_meta_description',isset($globalSetting['tag_meta_description']) ? $globalSetting['tag_meta_description']: ''),['class'=>'form-control']) !!}
                                </div>
                                
                                <div class="form-group" style="margin-top: 10px;">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <!--Tag Meta Tab End-->                 
                        </div>                   
                    </div> 
                </div>
            </div>
        </div>
    </div>
@include('admin._partials.editor')
@endsection
@push('scripts')
<script src="{{asset('assets/backend/js/form.js')}}"></script>

@endpush