@extends('admin.layouts.index')
@section('content')
@can('setting_created')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ url('admin/settings/create') }}">
                {{ trans('global.add') }} {{ trans('global.settings.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#menusetting" data-toggle="tab" aria-expanded="false">SETTINGS</a></li>
                <li class=""><a href="#dashboard" data-toggle="tab" aria-expanded="false">DASHBOARD</a></li>
                <li class=""><a href="#ads" data-toggle="tab" aria-expanded="true">ADS</a></li>
                <li class=""><a href="#products" data-toggle="tab" aria-expanded="false">PRODUCTS</a></li>
                <li class=""><a href="#coins"  data-toggle="tab" aria-expanded="false">COINS</a></li>
                <li class=""><a href="#shoppingcart"  data-toggle="tab" aria-expanded="false">SHOPPING CART</a></li>
                <li class=""><a href="#accountsetting"  data-toggle="tab" aria-expanded="false">ACCOUNT SETTING</a></li>
                <li class=""><a href="#commanbutton"  data-toggle="tab" aria-expanded="false">COMMAN TEXT BUTTON</a></li>
            </ul>
            <div class="tab-content">

			<div class="flash-message">
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
				  @if(Session::has('alert-' . $msg))

				  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
				  @endif
				@endforeach
		    </div> <!-- end .flash-message --> 
		    
		    <!-- /.tab-pane seo setting start-->
			 <div class="tab-pane active" id="menusetting">				
            <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
					  @csrf				
					  <div class="form-group">
						<label for="site_name" class="col-sm-2 control-label">DASHBOARD MENU</label>
						<div class="col-sm-12">
						  <input type="text" class="form-control" name="setting[dashboard_menu]" id="dashboard_menu" value="<?php echo isset($globalSetting['dashboard_menu']) ? $globalSetting['dashboard_menu'] : ''; ?>">
						</div>
					  </div>
                  
					  <div class="form-group">
						<label for="site_email" class="col-sm-2 control-label">ADS MENU</label>
						<div class="col-sm-12">
						  <input type="text" class="form-control" id="ads_menu" name="setting[ads_menu]" value="<?php echo isset($globalSetting['ads_menu']) ? $globalSetting['ads_menu'] : ''; ?>">
						</div>
					  </div> 
					  
					  <div class="form-group">
						<label for="meta_keyword" class="col-sm-2 control-label">PRODUCTS MENU</label>
						<div class="col-md-12">
							<input type="text" class="form-control" id="product_menu" name="setting[product_menu]" value="<?php echo isset($globalSetting['product_menu']) ? $globalSetting['product_menu'] : ''; ?>" >
						</div>
				      </div>
                  
                  
					  <div class="form-group">
						<label for="meta_description" class="col-sm-12 control-label">COIN MENU</label>
						<div class="col-md-12">
							<input type="text" class="form-control" id="coin_menu" name="setting[coin_menu]" value="<?php echo isset($globalSetting['coin_menu']) ? $globalSetting['coin_menu'] : ''; ?>" >
						</div>
                      </div>  

					<div class="form-group">
						<label for="site_cookie" class="col-sm-2 control-label">POST FREE ADS MENU</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="post_free_menu" name="setting[post_free_menu]" value="<?php echo isset($globalSetting['post_free_menu']) ? $globalSetting['post_free_menu'] : ''; ?>" >
							</div>
					</div>

					<div class="form-group">
					  <label for="cookie_display" class="col-sm-12 control-label">SUBMIT TICKET MENU</label>
					  <div class="col-sm-12">
							<input type="text" class="form-control" id="site_meta" name="setting[submit_ticket_menu]" value="<?php echo isset($globalSetting['submit_ticket_menu']) ? $globalSetting['submit_ticket_menu'] : ''; ?>" >
						</div>
					</div>     
                  
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-danger">Submit</button>
					</div>
				  </div>
				</form>
              </div>
              <!-- /.tab-pane end seo setting-->
              
			 <!-- /.tab-pane seo setting start-->
			 <div class="tab-pane" id="dashboard">
				
				<form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
				  @csrf				
				  <div class="form-group">
					<label for="yandex" class="col-sm-2 control-label">PROFILE HEADING</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="setting[profile_heading]" id="yandex" value="<?php echo isset($globalSetting['profile_heading']) ? $globalSetting['profile_heading'] : ''; ?>">
					</div>
                  </div>
                  
                  <div class="form-group">
                    <label for="bing" class="col-sm-2 control-label">USER EMAIL TOP CONTENT</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="bing" name="setting[email_top_content]" value="<?php echo isset($globalSetting['email_top_content']) ? $globalSetting['email_top_content'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">USER EMAIL BOTTOM CONTENT</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[email_bottom_content]" value="<?php echo isset($globalSetting['email_bottom_content']) ? $globalSetting['email_bottom_content'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">MY ADS HEADING</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[my_ads_heading]" value="<?php echo isset($globalSetting['my_ads_heading']) ? $globalSetting['my_ads_heading'] : ''; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="google_analytics" class="col-sm-2 control-label">TOTAL ADS</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_analytics" name="setting[total_ads]" value="<?php echo isset($globalSetting['total_ads']) ? $globalSetting['total_ads'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">ACTIVE</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[active_ads]" value="<?php echo isset($globalSetting['active_ads']) ? $globalSetting['active_ads'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">TOP ADS</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[top_ads]" value="<?php echo isset($globalSetting['top_ads']) ? $globalSetting['top_ads'] : ''; ?>">
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="general_setting" class="col-sm-2 control-label">COIN HEADING</label>
                    <div class="col-sm-12">
						<input type="text" class="form-control" id="google_varifaction" name="setting[coin_heading]" value="<?php echo isset($globalSetting['coin_heading']) ? $globalSetting['coin_heading'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">CURRENT COIN</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[current_coin]" value="<?php echo isset($globalSetting['current_coin']) ? $globalSetting['current_coin'] : ''; ?>">
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">BUY COIN BUTTON</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[buy_coin_button]" value="<?php echo isset($globalSetting['buy_coin_button']) ? $globalSetting['buy_coin_button'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">TICKET HEADING</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[ticket_heading]" value="<?php echo isset($globalSetting['ticket_heading']) ? $globalSetting['ticket_heading'] : ''; ?>">
                    </div>
                  </div>
                  
                 
                  
                   <div class="form-group">
                    <label for="google_varifaction" class="col-sm-2 control-label">TICKET</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="google_varifaction" name="setting[ticket]" value="<?php echo isset($globalSetting['ticket']) ? $globalSetting['ticket'] : ''; ?>">
                    </div>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                  
                </form>
             
             </div>
              <!-- /.tab-pane end seo setting-->
              	
			<!-- /.tab-pane homesetting start-->	
			<div class="tab-pane" id="ads">  
				
		  <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
				  @csrf				
				   <div class="form-group">
                    <label for="topcontent" class="col-sm-2 control-label">ACTIVES<em>*</em></label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" name="setting[active_tab]" value="<?php echo isset($globalSetting['active_tab']) ? $globalSetting['active_tab'] : ''; ?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="bottomcontent" class="col-sm-6 control-label">NOT PUBLISHED</label>
                     <div class="col-md-12">
                        <input type="text" class="form-control" name="setting[not_published_tab]" value="<?php echo isset($globalSetting['not_published_tab']) ? $globalSetting['not_published_tab'] : ''; ?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="meta_title" class="col-sm-2 control-label">EXPIRED</label>
                     <div class="col-md-12">
                      <input type="text" class="form-control"  name="setting[expired_tab]" value="<?php echo isset($globalSetting['expired_tab']) ? $globalSetting['expired_tab'] : ''; ?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="meta_keyword" class="col-sm-2 control-label">FILTER BY</label>
                     <div class="col-md-12">
                      <input type="text" class="form-control"  name="setting[filter_by]" value="<?php echo isset($globalSetting['filter_by']) ? $globalSetting['filter_by'] : ''; ?>" >
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">ORDER BY</label>
                     <div class="col-md-12">
						<input type="text" class="form-control" name="setting[order_by]" value="<?php echo isset($globalSetting['order_by']) ? $globalSetting['order_by'] : ''; ?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">AD EXPIRE DATE</label>
                     <div class="col-md-12">
						<input type="text" class="form-control"  name="setting[ad_expire_date]" value="<?php echo isset($globalSetting['ad_expire_date']) ? $globalSetting['ad_expire_date'] : ''; ?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">PUBLISHED FROM</label>
                     <div class="col-md-12">
						<input type="text" class="form-control" name="setting[published_from]" value="<?php echo isset($globalSetting['published_from']) ? $globalSetting['published_from'] : ''; ?>" >
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">GET MORE VISITORS</label>
                     <div class="col-md-12">
						<input type="text" class="form-control" name="setting[get_more_visitors]" value="<?php echo isset($globalSetting['get_more_visitors']) ? $globalSetting['get_more_visitors'] : ''; ?>" >
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">PROMOTE BUTTON</label>
                     <div class="col-md-12">
						<input type="text" class="form-control"  name="setting[promote_button]" value="<?php echo isset($globalSetting['promote_button']) ? $globalSetting['promote_button'] : ''; ?>" >
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">PROCEED TO THE PAYMENT</label>
                     <div class="col-md-12">
						<input type="text" class="form-control"  name="setting[proceed_payment]" value="<?php echo isset($globalSetting['proceed_payment']) ? $globalSetting['proceed_payment'] : ''; ?>" >
                    </div>
                  </div> 
                  
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">FORWARD BUTTON</label>
                     <div class="col-md-12">
						<input type="text" class="form-control" name="setting[forward_button]" value="<?php echo isset($globalSetting['forward_button']) ? $globalSetting['forward_button'] : ''; ?>" >
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">EDIT BUTTON</label>
                     <div class="col-md-12">
						<input type="text" class="form-control"  name="setting[edit_button]" value="<?php echo isset($globalSetting['edit_button']) ? $globalSetting['edit_button'] : ''; ?>" >
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="meta_description" class="col-sm-2 control-label">SUSPEND BUTTON</label>
                     <div class="col-md-12">
						<input type="text" class="form-control" name="setting[suspend_button]" value="<?php echo isset($globalSetting['suspend_button']) ? $globalSetting['suspend_button'] : ''; ?>" >
                    </div>
                  </div> 
                  
                    <div class="form-group">
                      <label for="meta_description" class="col-sm-2 control-label">DELETE BUTTON</label>
                       <div class="col-md-12">
                            <input type="text" class="form-control"  name="setting[delete_button]" value="<?php echo isset($globalSetting['delete_button']) ? $globalSetting['delete_button'] : ''; ?>" >
                      </div>
                    </div>
                  
                    <div class="form-group">
                        <label for="meta_description" class="col-sm-2 control-label">PUBLISHED BUTTON</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" name="setting[published_button]" value="<?php echo isset($globalSetting['published_button']) ? $globalSetting['published_button'] : ''; ?>" >
                       </div>
                    </div> 
                            
                    <div class="form-group">
                        <label for="meta_description" class="col-sm-2 control-label">COUNT ADS CONTENT</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" name="setting[count_ads_content]" value="<?php echo isset($globalSetting['count_ads_content']) ? $globalSetting['count_ads_content'] : ''; ?>" >
                       </div>
                    </div>              
                                
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="home_setting" value="HomeSetting" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
             
				  
              </div>
            <!-- /.tab-pane end homesetting-->
            
            <!-- /.tab-pane buttonsetting start-->
             <div class="tab-pane" id="products">
              <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
                 @csrf	
                 
                 <div class="row" >
					<div class="col-md-6">
						<div class="form-group">
							<label for="sign_in" class="control-label">CLIMB THE TOP</label>                   
							<input type="text" class="form-control" name="setting[climb_the_top]" value="<?php echo isset($globalSetting['climb_the_top']) ? $globalSetting['climb_the_top'] : ''; ?>" />
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="sign_up" class="col-sm-2 control-label">LEARN MORE</label>
							<input type="text" class="form-control"  name="setting[learn_more]" value="<?php echo isset($globalSetting['learn_more']) ? $globalSetting['learn_more'] : ''; ?>" />
						 </div>
					</div>
                  </div>	
                  
                  
                  <div class="form-group">
                    <label for="ads_posts" class="col-sm-12 control-label">PRODUCT CONTENT TOP</label>
                    <div class="col-sm-12">
						      <textarea type="textarea" class="form-control" name="setting[product_content_top]"><?php echo isset($globalSetting['product_content_top']) ? $globalSetting['product_content_top'] : ''; ?></textarea>
					</div>
                  </div>
                  
                  
                  <div class="form-group">
                        <label for="ads_posts" class="col-sm-12 control-label">PRODUCT CONTENT MIDDLE</label>
                        <div class="col-sm-12">
                            <textarea type="textarea" class="form-control" name="setting[product_content_middle]"><?php echo isset($globalSetting['product_content_middle']) ? $globalSetting['product_content_middle'] : ''; ?></textarea>
                        </div>
                  </div>
                  
                <div class="row">
                        <div class="col-sm-12">
                              <div class="form-group">
                                    <label for="ads_posts" class="col-sm-12 control-label">PROMOTE YOUR ADS</label>
                                    <div class="col-sm-12">
                                      <input type="text" class="form-control"  name="setting[promote_your_ads]" value="<?php echo isset($globalSetting['promote_your_ads']) ? $globalSetting['promote_your_ads'] : ''; ?>" />
                                    </div>
                              </div>
                      </div>
                </div>  
                 
                 <div class="form-group">
                        <label for="ads_posts" class="col-sm-12 control-label">PROMOTE YOUR ADS BOTTOM CONTENT</label>
                        <div class="col-sm-12">
                            <textarea type="textarea" class="form-control" name="setting[promote_bottom_content]"><?php echo isset($globalSetting['promote_bottom_content']) ? $globalSetting['promote_bottom_content'] : ''; ?></textarea>
                        </div>
                  </div>
                
                  
                  <div class="col-md-12">
						<div class="form-group">
							<label for="sign_in" class="control-label">  VIP EXCLUSIVE</label>                   
							<input type="text" class="form-control" name="setting[vip_exclusive]" value="<?php echo isset($globalSetting['vip_exclusive']) ? $globalSetting['vip_exclusive'] : ''; ?>" />
						</div>
					</div>
                  
                  
                   
                <div class="form-group">
                    <label for="ads_posts" class="col-sm-12 control-label">VIP CONTENT TOP</label>
                    <div class="col-sm-12">
			<textarea type="textarea" class="form-control" name="setting[vip_comtent_top]"><?php echo isset($globalSetting['vip_comtent_top']) ? $globalSetting['vip_comtent_top'] : ''; ?></textarea>
                    </div>
                </div>
                  
                <div class="form-group">
                    <label for="ads_posts" class="col-sm-12 control-label">VIP EXCLUSIVE PRICE</label>
                    <div class="col-sm-12">
			<textarea type="textarea" class="form-control" name="setting[vip_exclusive_price]"><?php echo isset($globalSetting['vip_exclusive_price']) ? $globalSetting['vip_exclusive_price'] : ''; ?></textarea>
                    </div>
                </div> 
                  
                  <div class="form-group">
                    <label for="ads_posts" class="col-sm-12 control-label">VIP CONTENT BOTTOM</label>
                    <div class="col-sm-12">
			<textarea type="textarea" class="form-control" name="setting[vip_comtent_bottom]"><?php echo isset($globalSetting['vip_comtent_bottom']) ? $globalSetting['vip_comtent_bottom'] : ''; ?></textarea>
                    </div>
                  </div>
                  		   
                    <div class="col-sm-12">
                       <div class="form-group">
                               <label for="category_display" class="col-sm-12 control-label">ADD PREMIUM</label>
                               <div class="col-sm-12">
                                       <textarea type="textarea" class="form-control" name="setting[add_premium]"><?php echo isset($globalSetting['add_premium']) ? $globalSetting['add_premium'] : ''; ?></textarea>
                               </div>
                       </div>
                     </div>
                 
              
				   
				   
                  <div class="form-group">
                    <label for="search_button" class="col-sm-12 control-label">COINS HEADING</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[credits_content_heading]" value="<?php echo isset($globalSetting['credits_content_heading']) ? $globalSetting['credits_content_heading'] : ''; ?>" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="search_input" class="col-sm-12 control-label">COINS CONTENT</label>
                    <div class="col-sm-12">
						<textarea type="textarea" class="form-control" name="setting[credits_content]"><?php echo isset($globalSetting['credits_content']) ? $globalSetting['credits_content'] : ''; ?></textarea>
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label for="search_button" class="col-sm-12 control-label">BUY COINS</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[buy_coins]" value="<?php echo isset($globalSetting['buy_coins']) ? $globalSetting['buy_coins'] : ''; ?>" />
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
             
            
              </div>
             <!-- /.tab-pane end buttonsetting-->

        
              <!-- /.tab-pane buttonsetting start-->
             <div class="tab-pane" id="coins">
              <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
                 @csrf	
                 
                    <div class="row" >
                        <div class="col-md-4">
                                <div class="form-group">
                                        <label for="sign_in" class="col-sm-12 control-label">BUY COINS</label>                   
                                        <input type="text" class="form-control" name="setting[buy_coins]" value="<?php echo isset($globalSetting['buy_coins']) ? $globalSetting['buy_coins'] : ''; ?>" />
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                        <label for="sign_up" class="col-sm-12 control-label">PURCHASE RECORD</label>
                                        <input type="text" class="form-control"  name="setting[purchage_record]" value="<?php echo isset($globalSetting['purchage_record']) ? $globalSetting['purchage_record'] : ''; ?>" />
                                 </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                        <label class="col-sm-12 control-label">COINS PACKAGES</label>
                                        <input type="text" class="form-control"  name="setting[coin_packages]" value="<?php echo isset($globalSetting['coin_packages']) ? $globalSetting['coin_packages'] : ''; ?>" />
                                 </div>
                        </div>
                        
                    </div>	
                  
                    <div class="form-group">
                      <label class="col-sm-12 control-label">COIN CONTENT TOP</label>
                      <div class="col-sm-12">
                          <textarea type="textarea" class="form-control" name="setting[coin_content_top]"><?php echo isset($globalSetting['coin_content_top']) ? $globalSetting['coin_content_top'] : ''; ?></textarea>
                      </div>
                    </div>
                    
                 
                    <div class="form-group">
                        <label class="col-sm-12 control-label">PURCHASE RECORD CONTENT TOP</label>
                        <div class="col-sm-12">
                            <textarea type="textarea" class="form-control" name="setting[purchage_content_top]"><?php echo isset($globalSetting['purchage_content_top']) ? $globalSetting['purchage_content_top'] : ''; ?></textarea>
                        </div>
                    </div>
                 
                    <div class="form-group">
                      <label class="col-sm-12 control-label">PURCHASE RECORD CONTENT BOTTOM</label>
                      <div class="col-sm-12">
                          <textarea type="textarea" class="form-control" name="setting[purchage_content_bottom]"><?php echo isset($globalSetting['purchage_content_bottom']) ? $globalSetting['purchage_content_bottom'] : ''; ?></textarea>
                      </div>
                    </div>
                  
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                          <label for="ads_posts" class="col-sm-12 control-label">CURRENT COINS</label>
                                          <div class="col-sm-12">
                                            <input type="text" class="form-control"  name="setting[current_coins]" value="<?php echo isset($globalSetting['current_coins']) ? $globalSetting['current_coins'] : ''; ?>" />
                                          </div>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                         <label for="ads_posts" class="col-sm-12 control-label">USED COINS</label>
                                         <div class="col-sm-12">
                                           <input type="text" class="form-control"  name="setting[used_coins]" value="<?php echo isset($globalSetting['used_coins']) ? $globalSetting['used_coins'] : ''; ?>" />
                                         </div>
                                    </div>
                            </div>
                    </div>
                 
                    <div class="row">
                            <div class="col-sm-4">
                                    <div class="form-group">
                                          <label for="ads_posts" class="col-sm-12 control-label">TOTAL COINS ACQUIRED</label>
                                          <div class="col-sm-12">
                                            <input type="text" class="form-control"  name="setting[total_coins_acquired]" value="<?php echo isset($globalSetting['total_coins_acquired']) ? $globalSetting['total_coins_acquired'] : ''; ?>" />
                                          </div>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                         <label for="ads_posts" class="col-sm-12 control-label">DETAIL OF PURCHASES</label>
                                         <div class="col-sm-12">
                                           <input type="text" class="form-control"  name="setting[purchages_details]" value="<?php echo isset($globalSetting['purchages_details']) ? $globalSetting['purchages_details'] : ''; ?>" />
                                         </div>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                         <label for="ads_posts" class="col-sm-12 control-label">PURCHASE DATE</label>
                                         <div class="col-sm-12">
                                           <input type="text" class="form-control"  name="setting[purchage_date]" value="<?php echo isset($globalSetting['purchage_date']) ? $globalSetting['purchage_date'] : ''; ?>" />
                                         </div>
                                    </div>
                            </div>
                    </div> 
				   
				    <div class="row">
					  <div class="col-sm-6">
						  <div class="form-group">
							<label for="ads_posts" class="col-sm-12 control-label">PURCHASE PRODUCT</label>
							<div class="col-sm-12">
							  <input type="text" class="form-control"  name="setting[purchage_product]" value="<?php echo isset($globalSetting['purchage_product']) ? $globalSetting['purchage_product'] : ''; ?>" />
							</div>
						  </div>
					  </div>
					   <div class="col-sm-6">
						  <div class="form-group">
							<label for="ads_posts" class="col-sm-12 control-label">ORDER NUMBER</label>
							<div class="col-sm-12">
							  <input type="text" class="form-control"  name="setting[order_number]" value="<?php echo isset($globalSetting['order_number']) ? $globalSetting['order_number'] : ''; ?>" />
							</div>
						  </div>
					  </div>
				   </div> 
				   
				   <div class="row">
					  <div class="col-sm-4">
						  <div class="form-group">
							<label for="ads_posts" class="col-sm-12 control-label">PURCHASE TOTAL</label>
							<div class="col-sm-12">
							  <input type="text" class="form-control"  name="setting[purchage_total]" value="<?php echo isset($globalSetting['purchage_total']) ? $globalSetting['purchage_total'] : ''; ?>" />
							</div>
						  </div>
					  </div>
					   <div class="col-sm-4">
						  <div class="form-group">
							<label for="ads_posts" class="col-sm-12 control-label">PAYMENT TYPE</label>
							<div class="col-sm-12">
							  <input type="text" class="form-control"  name="setting[payment_type]" value="<?php echo isset($globalSetting['payment_type']) ? $globalSetting['payment_type'] : ''; ?>" />
							</div>
						  </div>
					  </div>
                                         <div class="col-sm-4">
						  <div class="form-group">
							<label for="ads_posts" class="col-sm-12 control-label">PAYMENT STATUS</label>
							<div class="col-sm-12">
							  <input type="text" class="form-control"  name="setting[payment_status]" value="<?php echo isset($globalSetting['payment_status']) ? $globalSetting['payment_status'] : ''; ?>" />
							</div>
						  </div>
					  </div>
				   </div>
				   
				  
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
             
            
              </div>
             <!-- /.tab-pane end buttonsetting-->


                  <!-- /.tab-pane loginform start-->
			 <div class="tab-pane" id="shoppingcart">
               <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="inputName" class="col-sm-6 control-label">SHOPPING CART HEADING</label>
                           <div class="col-sm-12">
                             <input type="text" class="form-control" name="setting[shopping_heading]" value="<?php echo isset($globalSetting['shopping_heading']) ? $globalSetting['shopping_heading'] : ''; ?>">
                           </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail" class="col-sm-2 control-label">ORDER ID</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[shopping_order]" value="<?php echo isset($globalSetting['shopping_order']) ? $globalSetting['shopping_order'] : ''; ?>">
                          </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">PRODUCT</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[shopping_product]" value="<?php echo isset($globalSetting['shopping_product']) ? $globalSetting['shopping_product'] : ''; ?>">
                          </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">LENGTH</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[shopping_length]" value="<?php echo isset($globalSetting['shopping_length']) ? $globalSetting['shopping_length'] : ''; ?>">
                          </div>
                        </div>
                    </div>
                 </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">SCHEDULE</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[shopping_schedule]" value="<?php echo isset($globalSetting['shopping_schedule']) ? $globalSetting['shopping_schedule'] : ''; ?>">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-6 control-label">QUANTITY</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[shopping_quantity]" value="<?php echo isset($globalSetting['shopping_quantity']) ? $globalSetting['shopping_quantity'] : ''; ?>">
                          </div>
                        </div>
                    </div>
                    
                </div>
                
                 <div class="form-group">
                      <label for="inputName" class="col-sm-12 control-label">CLICK ON PRODUCT POPUP</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="setting[click_on_product]" value="<?php echo isset($globalSetting['click_on_product']) ? $globalSetting['click_on_product'] : ''; ?>">
                      </div>
                </div>
                
                 <div class="form-group">
                      <label for="inputName" class="col-sm-12 control-label">DESELECT ON PRODUCT POPUP</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="setting[deselect_on_product]" value="<?php echo isset($globalSetting['deselect_on_product']) ? $globalSetting['deselect_on_product'] : ''; ?>">
                      </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-6 control-label">CLIMB TOP CONTENT</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[clibm_top_content]" value="<?php echo isset($globalSetting['clibm_top_content']) ? $globalSetting['clibm_top_content'] : ''; ?>">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-6 control-label">CLIMB MIDDLE CONTENT</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[clibm_middle_content]" value="<?php echo isset($globalSetting['clibm_middle_content']) ? $globalSetting['clibm_middle_content'] : ''; ?>">
                          </div>
                        </div>
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-12 control-label">CLIMB THE BOTTOM CONTENT</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[clibm_bottom_content]" value="<?php echo isset($globalSetting['clibm_bottom_content']) ? $globalSetting['clibm_bottom_content'] : ''; ?>">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-6 control-label">ADD UPGRADE</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="setting[cart_add_upgrade]" value="<?php echo isset($globalSetting['cart_add_upgrade']) ? $globalSetting['cart_add_upgrade'] : ''; ?>">
                          </div>
                        </div>
                    </div>                    
                </div>
                
                <div class="form-group">
                    <label for="inputExperience" class="col-sm-6 control-label">ADD UPGRADE CONTENT</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" name="setting[cart_upgrade_content]"><?php echo isset($globalSetting['cart_upgrade_content']) ? $globalSetting['cart_upgrade_content'] : ''; ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                      <label for="inputName" class="col-sm-12 control-label">CHOOSE THE PRESENTATION IMAGE</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="setting[presentation_image]" value="<?php echo isset($globalSetting['presentation_image']) ? $globalSetting['presentation_image'] : ''; ?>">
                      </div>
                </div>
                <div class="form-group">
                    <label for="inputName" class="col-sm-6 control-label">CHOOSE THE PRESENTATION IMAGE CONTENT</label>
                    <div class="col-sm-12">
                         <textarea class="form-control" name="setting[presentation_content]"><?php echo isset($globalSetting['presentation_content']) ? $globalSetting['presentation_content'] : ''; ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputName" class="col-sm-6 control-label">SELECT OFFER TYPE AND TIME POPUP CONTENT </label>
                    <div class="col-sm-12">
                         <textarea class="form-control mceNoEditor" name="setting[offer_type_time_popup]"><?php echo isset($globalSetting['offer_type_time_popup']) ? $globalSetting['offer_type_time_popup'] : ''; ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputName" class="col-sm-6 control-label">PUBLISH WITHOUT NUMBER</label>
                    <div class="col-sm-12">
                         <textarea class="form-control mceNoEditor" name="setting[publish_without_number]"><?php echo isset($globalSetting['publish_without_number']) ? $globalSetting['publish_without_number'] : ''; ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputName" class="col-sm-6 control-label">PHONE NUMBER NOT VISUAL ON PAGE POPUP CONTENT</label>
                    <div class="col-sm-12">
                         <textarea class="form-control mceNoEditor" name="setting[not_visible_number]"><?php echo isset($globalSetting['not_visible_number']) ? $globalSetting['not_visible_number'] : ''; ?></textarea>
                    </div>
                </div>
                
                
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="setting[shoppingcart]" value="LoginForm" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane end loginform-->
              
                 <!-- /.tab-pane accountsetting start-->
                <div class="tab-pane" id="accountsetting">
                 <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                
                <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">CHANGE PASSWORD</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[account_change_pass]" value="<?php echo isset($globalSetting['account_change_pass']) ? $globalSetting['account_change_pass'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-12 control-label">ADD NEW E-MAIL UPDATE</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[account_email_update]" value="<?php echo isset($globalSetting['account_email_update']) ? $globalSetting['account_email_update'] : ''; ?>">
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label for="inputEmail" class="col-sm-12 control-label">INPUT E-MAIL</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[account_email]" value="<?php echo isset($globalSetting['account_email']) ? $globalSetting['account_email'] : ''; ?>">
                    </div>
                  </div>
                 
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">SUBMIT BUTTTON NAME</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[account_submit_button]" value="<?php echo isset($globalSetting['account_submit_button']) ? $globalSetting['account_submit_button'] : ''; ?>">
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">TERMS AND CONDITIONS HEADING</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[account_term_heading]" value="<?php echo isset($globalSetting['account_term_heading']) ? $globalSetting['account_term_heading'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">TERMS AND CONDITIONS CONTENT</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" name="setting[account_term_content]"><?php echo isset($globalSetting['account_term_content']) ? $globalSetting['account_term_content'] : ''; ?></textarea>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">I WANT TO DELETE </label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="setting[account_i_want_del]" value="<?php echo isset($globalSetting['account_i_want_del']) ? $globalSetting['account_i_want_del'] : ''; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">TERMS AND CONDITIONS POPUP</label>
                    <div class="col-sm-12">
			<textarea class="form-control" name="setting[account_term_popup]" ><?php echo isset($globalSetting['account_term_popup']) ? $globalSetting['account_term_popup'] : ''; ?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">I WANT TO DELETE POPUP</label>
                    <div class="col-sm-12">
			<textarea class="form-control" name="setting[account_i_want_del_popup]" ><?php echo isset($globalSetting['account_i_want_del_popup']) ? $globalSetting['account_i_want_del_popup'] : ''; ?></textarea>
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">ADD EMAIL UPDATE POPUP</label>
                    <div class="col-sm-12">
			<textarea class="form-control" name="setting[account_email_popup]" ><?php echo isset($globalSetting['account_email_popup']) ? $globalSetting['account_email_popup'] : ''; ?></textarea>
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">ACTION SUCCESS POPUP HOME PAGE</label>
                    <div class="col-sm-12">
			<textarea class="form-control" name="setting[account_success_popup]" ><?php echo isset($globalSetting['account_success_popup']) ? $globalSetting['account_success_popup'] : ''; ?></textarea>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="setting[button_setting]" value="RegistrationForm" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane end registrationform-->
              
                <!-- /.tab-pane commanbutton start-->
		<div class="tab-pane" id="commanbutton">
                 <form class="form-horizontal" action="{{ url('admin/dashboard-setting') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">COINS NAME</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[coins_name]" value="<?php echo isset($globalSetting['coins_name']) ? $globalSetting['coins_name'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">BACK</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_back]" value="{!! $globalSetting['comman_back'] ?? '' !!}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="inputExperience" class="col-sm-4 control-label">PRICE</label>
                                <div class="col-sm-12">
                                   <input type="text" class="form-control" name="setting[shopping_price]" value="<?php echo isset($globalSetting['shopping_price']) ? $globalSetting['shopping_price'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">TOTAL PRICE</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[total_price]" value="<?php echo isset($globalSetting['total_price']) ? $globalSetting['total_price'] : ''; ?>">
                                </div>
                            </div>
                        </div>  
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">CLOSE BTN</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_close]" value="<?php echo isset($globalSetting['comman_close']) ? $globalSetting['comman_close'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-6 control-label"> PUBLISH FREE BUTTON</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[publish_free]" value="<?php echo isset($globalSetting['publish_free']) ? $globalSetting['publish_free'] : ''; ?>">
                                </div>
                            </div>
                        </div>  
                         
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-6 control-label">PRESENTATION PHOTO</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[presentation_photo]" value="<?php echo isset($globalSetting['presentation_photo']) ? $globalSetting['presentation_photo'] : ''; ?>">
                                </div>
                            </div>
                        </div>  
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">YOUR AD</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[your_ads]" value="<?php echo isset($globalSetting['your_ads']) ? $globalSetting['your_ads'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">CALL NOW</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[call_now]" value="<?php echo isset($globalSetting['call_now']) ? $globalSetting['call_now'] : ''; ?>">
                                </div>
                            </div>
                        </div>  
                       
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">STATE NAME</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_state]" value="<?php echo isset($globalSetting['comman_state']) ? $globalSetting['comman_state'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">CITY NAME</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_city]" value="<?php echo isset($globalSetting['comman_city']) ? $globalSetting['comman_city'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">CATEGORY</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_category]" value="<?php echo isset($globalSetting['comman_category']) ? $globalSetting['comman_category'] : ''; ?>">
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">RETURN TO MANAGE ADS</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[return_manage_ads]" value="<?php echo isset($globalSetting['return_manage_ads']) ? $globalSetting['return_manage_ads'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">PODUCT IN THE BASKET</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[product_in_basket]" value="<?php echo isset($globalSetting['product_in_basket']) ? $globalSetting['product_in_basket'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                         
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">MANAGE YOUR AD</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[manage_your_ad]" value="<?php echo isset($globalSetting['manage_your_ad']) ? $globalSetting['manage_your_ad'] : ''; ?>">
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">DAYS</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_day]" value="<?php echo isset($globalSetting['comman_day']) ? $globalSetting['comman_day'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                  
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">HOW DO YOU LIKE TO PAY?</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[how_do_pay]" value="<?php echo isset($globalSetting['how_do_pay']) ? $globalSetting['how_do_pay'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">AVAILABLE COIN</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[comman_available]" value="<?php echo isset($globalSetting['comman_available']) ? $globalSetting['comman_available'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">BUY MORE COINS</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[buy_more_coin]" value="<?php echo isset($globalSetting['buy_more_coin']) ? $globalSetting['buy_more_coin'] : ''; ?>">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">BUY BUTTON</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[buy_button]" value="<?php echo isset($globalSetting['buy_button']) ? $globalSetting['buy_button'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">LOG OUT</label>
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" name="setting[logout]" value="<?php echo isset($globalSetting['logout']) ? $globalSetting['logout'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <label for="inputExperience" class="col-sm-6 control-label">COMMAN INFORMATION</label>
                        <div class="col-sm-12">
                          <textarea class="form-control" name="setting[comman_informations]"><?php echo isset($globalSetting['comman_informations']) ? $globalSetting['comman_informations'] : ''; ?></textarea>
                        </div>
                    </div>
                    
                   <div class="form-group">
                    <label for="search_input" class="col-sm-12 control-label">FOOTER BANNER CONTENT</label>
                        <div class="col-md-12">
                             <textarea class="form-control mceNoEditor"  name="setting[footer_banner_content]"><?php echo isset($globalSetting['footer_banner_content']) ? $globalSetting['footer_banner_content'] : ''; ?></textarea>
                        </div>
                  </div>
                    
                  <div class="form-group">
                    <label for="search_input" class="col-sm-12 control-label">BILLING ADDRESS</label>
                        <div class="col-md-12">
                             <textarea class="form-control mceNoEditor"  name="setting[billing_address]"><?php echo isset($globalSetting['billing_address']) ? $globalSetting['billing_address'] : ''; ?></textarea>
                        </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="search_input" class="col-sm-2 control-label">NOTIFICATION </label>
                        <div class="col-md-12">
                             <textarea class="form-control"  name="setting[notification]"><?php echo isset($globalSetting['notification']) ? $globalSetting['notification'] : ''; ?></textarea>
                        </div>
                  </div>
                    
                  
                    <div class="form-group">
                        <label for="search_input" class="col-sm-12 control-label">FREE PUBLISH CONTENT CONFORM ORDER</label>
                        <div class="col-md-12">
                             <textarea class="form-control"  name="setting[free_publish_conferm]"><?php echo isset($globalSetting['free_publish_conferm']) ? $globalSetting['free_publish_conferm'] : ''; ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="search_input" class="col-sm-12 control-label">FREE NOT PUBLISH CONTENT CONFORM ORDER</label>
                        <div class="col-md-12">
                             <textarea class="form-control"  name="setting[free_not_publish_conferm]"><?php echo isset($globalSetting['free_not_publish_conferm']) ? $globalSetting['free_not_publish_conferm'] : ''; ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="search_input" class="col-sm-12 control-label">FREE PUBLISH SUCCESSFULLY CONTENT</label>
                        <div class="col-md-12">
                             <textarea class="form-control"  name="setting[free_publish_success]"><?php echo isset($globalSetting['free_publish_success']) ? $globalSetting['free_publish_success'] : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="search_input" class="col-sm-12 control-label">MANAGE PUBLISH SUCCESSFULLY CONTENT</label>
                        <div class="col-md-12">
                             <textarea class="form-control"  name="setting[manage_publish_success]"><?php echo isset($globalSetting['manage_publish_success']) ? $globalSetting['manage_publish_success'] : ''; ?></textarea>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="search_input" class="col-sm-12 control-label">ADS BLOCK BY EMAIL </label>
                        <div class="col-md-12">
                             <textarea class="form-control"  name="setting[ads_block_by_email]"><?php echo isset($globalSetting['ads_block_by_email']) ? $globalSetting['ads_block_by_email'] : ''; ?></textarea>
                        </div>
                    </div>
                 
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="setting[button_setting]" value="ReplyForm" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane end replyadsform-->
	
              
           </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
@include('admin._partials.editor')
@endsection
@push('scripts')
<script src="{{asset('assets/backend/js/form.js')}}"></script>

@endpush