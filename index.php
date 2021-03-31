
<? 
include "init.php";
include "handler.php";
include "head.php";
include "top.php";
?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-490f5c1 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default" data-element_type="section" data-id="490f5c1" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b06db4a" data-element_type="column" data-id="b06db4a" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-37d1319 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="37d1319" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9a46863" data-element_type="column" data-id="9a46863">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-a3cb861 elementor-widget elementor-widget-breadcrumbs animated fadeInLeft" data-element_type="widget" data-id="a3cb861" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="breadcrumbs.default">
													<div class="elementor-widget-container">
														<p id="breadcrumbs"><span><span><a href="https://bike.org.by/">Главная</a> / <strong class="breadcrumb_last">Регистрация участия в акции #30днейнавелосипеде</strong></span></span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-df46f9c elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="df46f9c">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1240f4d" data-element_type="column" data-id="1240f4d">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-8290809 elementor-widget elementor-widget-heading animated fadeInUp" data-element_type="widget" data-id="8290809" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">Регистрация участия в акции #30днейнавелосипеде</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-507e634 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="507e634" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6943b75" data-id="6943b75" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-ca94abe elementor-widget elementor-widget-text-editor" data-id="ca94abe" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix"><p><span class="fontstyle0"><?=$lang["DESCRIPTION"]?></span></p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<? include "map.php"; ?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-11c4aa3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="11c4aa3" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<?php if (!empty($counters["TOTAL"])) { ?>
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6deab74" data-id="6deab74" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7a5d3c6 elementor-widget elementor-widget-counter" data-id="7a5d3c6" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="900" data-from-value="0" data-delimiter=","><?=$counters["TOTAL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Всего зарегистрировалось</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["MINSK"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-6deab74" data-id="6deab74" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7a5d3c6 elementor-widget elementor-widget-counter" data-id="7a5d3c6" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="0" data-delimiter=","><?=$counters["MINSK"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Минск</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["MINSKOBL"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-6deab74" data-id="6deab74" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7a5d3c6 elementor-widget elementor-widget-counter" data-id="7a5d3c6" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="0" data-delimiter=","><?=$counters["MINSKOBL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Минская область</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["BRESTOBL"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ab8d7c6" data-id="ab8d7c6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6bd01f1 elementor-widget elementor-widget-counter" data-id="6bd01f1" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="640" data-from-value="0" data-delimiter=","><?=$counters["BRESTOBL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Брестская область</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["VITEBSKOBL"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ab8d7c6" data-id="327490e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c858e3b elementor-widget elementor-widget-counter" data-id="c858e3b" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="10" data-from-value="0" data-delimiter=","><?=$counters["VITEBSKOBL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Витебская область</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["GOMELOBL"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ab8d7c6" data-id="327490e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c858e3b elementor-widget elementor-widget-counter" data-id="c858e3b" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="10" data-from-value="0" data-delimiter=","><?=$counters["GOMELOBL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Гомельская область</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["GRODNOOBL"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ab8d7c6" data-id="327490e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c858e3b elementor-widget elementor-widget-counter" data-id="c858e3b" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="10" data-from-value="0" data-delimiter=","><?=$counters["GRODNOOBL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Гродненская область</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
			<?php if (!empty($counters["MOGILEVOBL"])) { ?>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ab8d7c6" data-id="327490e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c858e3b elementor-widget elementor-widget-counter" data-id="c858e3b" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="10" data-from-value="0" data-delimiter=","><?=$counters["MOGILEVOBL"]?></span>
										<span class="elementor-counter-number-suffix"></span>
									</div>
									<div class="elementor-counter-title">Могилёвская область</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<? } ?>
		</div>
	</div>
</section>
<section class="add_mbo">
	<div class="container">


<div class="row">
	<div class="col-lg-12 text-center">
		<div class="elementor-element elementor-element-658c490 elementor-widget elementor-widget-heading" data-id="658c490" data-element_type="widget" data-widget_type="heading.default">
			<div class="elementor-widget-container">
				<h2 class="elementor-heading-title elementor-size-default">Регистрация участия в акции #30днейнавелосипеде</h2>		
			</div>
			</div>
			<p><?=$lang["UPPER_FORM_TEXT"]?></p>
		</div>
	</div>
	<form class="simple_form new_member" action="https://bike.org.by/register30/" id="new_member" accept-charset="UTF-8" method="get">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="form-group string required member_given_names"><label class="string required" for="member_given_names">Имя </label>
					<input class="form-control string required" type="text" required name="name" id="member_given_names"></div>
			</div>
			<div class="col-lg-3"></div>
			<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="form-group string required member_given_names"><label class="string required" for="member_given_names">Откуда вы </label>
						<select name="from" class="form-control string required">
							<option value="MINSK"selected>Минск</option>
							<option value="MINSKOBL">Минская область</option>
							<option value="BRESTOBL">Брест и область</option>
							<option value="VITEBSKOBL">Витебск и область</option>
							<option value="GOMELOBL">Гомель и область</option>
							<option value="GRODNOOBL">Гродно и обласать</option>
							<option value="MOGILEVOBL">Могилев и область</option>
						</select>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<input type="submit" value="<?=$lang["FORM_SUBMIT_BUTTON_TEXT"]?>" class="rainbow_but" data-disable-with="Участвовать">
				</div>
			</div>
			<!-- <div class="form-group hidden member_card_number form-group-valid"><input class="form-control is-valid hidden" type="hidden" value="833" name="member[card_number]" id="member_card_number"></div>
			<div class="form-group hidden member_join_date form-group-valid"><input class="form-control is-valid hidden" type="hidden" value="2021-03-23" name="member[join_date]" id="member_join_date"></div> -->
			</form>
		</div>
		</section>


											</div>
										</div>
									</div>
								</div><!-- .entry-content .clear -->
							</article><!-- #post-## -->
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- ast-container -->
			</div><!-- #content -->
<?php include "footer.php"; ?>