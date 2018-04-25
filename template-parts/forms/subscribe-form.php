<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 23.04.2018
 * Time: 22:24
 */

function get_form_subscribe($form_class){

	?>

	<div class="row form_ts_row form_success_message_outer" id="js-form_success_message_outer">

		<div class="col-lg-12">

			<p class="form_success_message" id="js-form_success_message"></p>

		</div>
	</div>

	<form class="form_ts_outer <?php echo $form_class; ?>" id="contact_form">

        <div class="text-center text-danger js_message_holder"></div>

		<div class="row form_ts_row">

			<div class="col d-flex form_ts_cell">
				<div class="form-group w-100 required_field form_group_ts">
					<input type="text" name="contact_name" class="form-control form-control-lg" id="form_ts_name" placeholder="Enter your name*">
				</div>
			</div>

			<div class="col d-flex form_ts_cell">
				<div class="form-group w-100 required_field form_group_ts">
					<input type="text" name="contact_email" class="form-control form-control-lg" id="form_ts_email" placeholder="Enter your email*">
				</div>
			</div>

            <input type="hidden" name="contact_message" id="form_ts_message"  value="I would like to subscribe to newsletter. I agree to your Privacy Policy." />

			<div class="d-flex col-xs-12 btn_form_subscribe_col padding-block">
				<div class="d-flex align-items-center h-100  justify-content-center justify-content-xl-start form_ts_cell">

					<div class="d-flex form_btn_inner animate_link_outer">
						<button type="button" id="js-form-btn" class="btn btn-lg btn_form_animate btn_form_subscribe">
							<div class="btn_form_animate_text_outer btn_form_subscribe_text_outer">
								<span class="btn_form_animate_text btn_form_subscribe_text">Sign Up</span>
							</div>
						</button>
					</div>

				</div>
			</div>

		</div>

	</form>

	<?php
}