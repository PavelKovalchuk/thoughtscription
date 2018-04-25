<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.04.2018
 * Time: 22:47
 */

function get_form_author($form_class){

	?>

	<div class="row form_ts_row form_success_message_outer" id="js-form_success_message_outer">

		<div class="col-lg-12">

			<p class="form_success_message" id="js-form_success_message"></p>

		</div>
	</div>

	<form class="form_ts_outer <?php echo $form_class; ?>" id="contact_form">

        <div class="text-center text-danger js_message_holder"></div>

		<div class="row form_ts_row">

			<div class="col-lg-6 form_ts_cell">
				<div class="form-group required_field form_group_ts">
					<input type="text" name="contact_name" class="form-control form-control-lg" id="form_ts_name" placeholder="NAME">
				</div>
			</div>

			<div class="col-lg-6 form_ts_cell">
				<div class="form-group required_field form_group_ts">
					<input type="text" name="contact_email" class="form-control form-control-lg" id="form_ts_email" placeholder="EMAIL">
				</div>
			</div>

		</div>

		<div class="row form_ts_row">

			<div class="col-lg-12 form_ts_cell">
				<div class="form-group form_group_ts">
					<textarea class="form-control form-control-lg " name="contact_message" id="form_ts_message" placeholder="MESSAGE" rows="7"></textarea>
				</div>
			</div>

		</div>

		<div class="row form_group_ts form_ts_row">

			<div class="col-lg-12 col-xl-6 form_ts_cell g_recaptcha_outer">
				<div class="d-flex align-items-center h-100  justify-content-center justify-content-xl-end">

					<div class="d-flex required_field  h-100 align-items-center g_recaptcha_inner">
						<div class="g-recaptcha d-flex" data-sitekey="6LcpOT0UAAAAAKrUd6DyGVV4c6mM8CwwwxlpDvWm"></div>
					</div>

				</div>
			</div>

			<div class="col-lg-12 col-xl-6 form_btn_outer">
				<div class="d-flex align-items-center h-100  justify-content-center justify-content-xl-start form_ts_cell">

					<div class="d-flex form_btn_inner animate_link_outer">
						<!--<button type="button" id="js-form-btn" class="btn btn-outline-primary btn-lg ts_btn_white btn-ts-arrow">
							<span class="animate_link_text blog_item_link_text">Submit</span>
						</button>-->
						<button type="button" id="js-form-btn" class="btn btn-lg btn_form_animate">
							<div class="btn_form_animate_text_outer">
								<span class="btn_form_animate_text">Submit</span>
							</div>
						</button>
					</div>

				</div>
			</div>

		</div>

		<div class="row form_group_ts form_privacy_policy_row">
			<div class="col-lg-12">
				<p class="form_privacy_policy_text">
					<?php echo get_option( '_thoughtscription_option_page_options' )['form_policy_text']; ?>
				</p>
			</div>
		</div>

	</form>

	<?php
}