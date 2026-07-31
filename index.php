<?php
$chp_form_sent = false;
$chp_form_error = '';
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['chp_contact_nonce'] ) ) {
	if ( wp_verify_nonce( $_POST['chp_contact_nonce'], 'chp_roi_form' ) ) {
		$name     = sanitize_text_field( $_POST['chp_name'] ?? '' );
		$company  = sanitize_text_field( $_POST['chp_company'] ?? '' );
		$contact  = sanitize_text_field( $_POST['chp_contact'] ?? '' );
		$fuel     = sanitize_text_field( $_POST['chp_fuel'] ?? '' );
		$bill     = sanitize_text_field( $_POST['chp_bill'] ?? '' );
		$industry = sanitize_text_field( $_POST['chp_industry'] ?? '' );
		$message  = sanitize_textarea_field( $_POST['chp_message'] ?? '' );

		if ( $name && $contact && $industry && $fuel ) {
			$body = "New Commercial Heat Pumps ROI Assessment enquiry:\n\n"
				. "Name: {$name}\nCompany: {$company}\nContact: {$contact}\n\n"
				. "Current heating fuel: {$fuel}\nApprox. monthly energy bill: {$bill}\nIndustry: {$industry}\n\n"
				. "Additional details:\n{$message}";
			wp_mail( 'exegitanks@gmail.com', 'New ROI Assessment enquiry - ' . $name, $body );
			$chp_form_sent = true;
		} else {
			$chp_form_error = 'Please fill in your name, contact details, current fuel type, and industry.';
		}
	}
}
get_header();
?>

<main id="main-content">

	<section class="hero">
		<div class="container">
			<span class="eyebrow">Commercial &amp; Industrial Heat Pumps</span>
			<h1>Engineering-Grade Heat Pump Systems for Facilities That Can't Afford to Get It Wrong</h1>
			<p class="lede">We work with facility managers, plant operators and strata managers to replace ageing gas boilers with commercial heat pump systems &mdash; backed by real ROI numbers, not sales pitches.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="#roi">Get a Free ROI Assessment</a>
				<a class="btn btn-ghost" href="#systems">Explore Systems</a>
			</div>
			<div class="trust-strip">
				<span>Currently serving Melbourne &amp; Victoria</span>
				<span>Real installations, not stock photography</span>
				<span>Engineering-first, not sales-first</span>
			</div>
		</div>
	</section>

	<section class="section section-alt" id="systems">
		<div class="container">
			<div class="section-heading">
				<span class="kicker">Systems</span>
				<h2>Built for the Load, Not the Brochure</h2>
				<p>Every facility's heating load is different. These are the core system types we work with &mdash; each suited to a different scale, temperature requirement, and site constraint.</p>
			</div>
			<div class="grid-4">
				<a class="tech-card" href="/systems/air-to-water-heat-pumps">
					<span class="tag">System</span>
					<h3>Air-to-Water Heat Pumps</h3>
					<p>The standard entry point for most commercial hot water and space heating replacements.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
				<a class="tech-card" href="/systems/water-source-heat-pumps">
					<span class="tag">System</span>
					<h3>Water Source Heat Pumps</h3>
					<p>Higher efficiency where a suitable water source is available on site.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
				<a class="tech-card" href="/systems/geothermal-hvac">
					<span class="tag">System</span>
					<h3>Geothermal HVAC</h3>
					<p>Ground-source systems for facilities planning for the long-term cost curve.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
				<a class="tech-card" href="/systems/co2-high-temperature">
					<span class="tag">System</span>
					<h3>CO&sup2; High-Temperature</h3>
					<p>For process heating needs above 90&deg;C &mdash; industrial and manufacturing applications.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
			</div>
		</div>
	</section>

	<section class="section" id="industry">
		<div class="container">
			<div class="section-heading">
				<span class="kicker">Industries</span>
				<h2>Every Sector Has Different Pressure Points</h2>
				<p>Compliance, base-load hot water demand, and uptime requirements vary a lot by industry &mdash; we plan around your sector's specific constraints, not a generic template.</p>
			</div>
			<div class="grid-4">
				<a class="tech-card" href="/industry/aged-care-hot-water">
					<span class="tag">Industry</span>
					<h3>Aged Care</h3>
					<p>Legionella prevention, compliance, and heavy base-load hot water demand.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
				<a class="tech-card" href="/industry/hotel-hospitality-heating">
					<span class="tag">Industry</span>
					<h3>Hotel &amp; Hospitality</h3>
					<p>High-demand peaks, guest comfort, and zero tolerance for hot water outages.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
				<a class="tech-card" href="/industry/aquatic-centre-gyms">
					<span class="tag">Industry</span>
					<h3>Aquatic Centres &amp; Gyms</h3>
					<p>Large-volume heating with tight running-cost margins.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
				<a class="tech-card" href="/industry/manufacturing-industrial">
					<span class="tag">Industry</span>
					<h3>Manufacturing &amp; Industrial</h3>
					<p>Process heating loads and large-scale gas boiler replacement.</p>
					<span class="arrow">Learn more &rarr;</span>
				</a>
			</div>
		</div>
	</section>

	<section class="section section-alt" id="proof">
		<div class="container">
			<div class="section-heading">
				<span class="kicker">Recent Installations</span>
				<h2>Real Systems, Real Sites</h2>
				<p>A look at completed commercial installations &mdash; plant rooms, rooftop arrays, and multi-unit configurations.</p>
			</div>
			<div class="proof-strip">
				<div class="proof-photo">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/job-polished-tanks.jpg' ); ?>" alt="Polished stainless commercial hot water tanks with copper pipework" loading="lazy">
				</div>
				<div class="proof-photo">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/job-rooftop-row.jpg' ); ?>" alt="Row of commercial hot water tanks on a rooftop installation" loading="lazy">
				</div>
				<div class="proof-photo">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/job-exterior-stairs.jpg' ); ?>" alt="Commercial heat pump and tank installation on an exterior wall" loading="lazy">
				</div>
			</div>
		</div>
	</section>

	<section class="section roi-band" id="roi">
		<div class="container">
			<div class="section-heading">
				<span class="kicker">Free ROI Assessment</span>
				<h2>Find Out What Switching Actually Costs &mdash; and Saves</h2>
				<p>A few quick details lets us give you a realistic picture before you commit to anything. No obligation, no generic sales call.</p>
			</div>

			<?php if ( $chp_form_sent ) : ?>
				<div class="roi-form" style="text-align:center;">
					<p style="color:var(--chp-navy); font-weight:600; margin-bottom:0;">Thanks &mdash; your assessment request has been received. We'll be in touch shortly.</p>
				</div>
			<?php else : ?>
				<form method="post" class="roi-form">
					<?php wp_nonce_field( 'chp_roi_form', 'chp_contact_nonce' ); ?>
					<?php if ( $chp_form_error ) : ?>
						<p style="color:#b3261e; font-weight:600;"><?php echo esc_html( $chp_form_error ); ?></p>
					<?php endif; ?>

					<div class="form-grid-2">
						<div class="form-row">
							<label for="chp_name">Name</label>
							<input type="text" id="chp_name" name="chp_name" required>
						</div>
						<div class="form-row">
							<label for="chp_company">Company / Facility</label>
							<input type="text" id="chp_company" name="chp_company">
						</div>
					</div>

					<div class="form-row">
						<label for="chp_contact">Email or Phone</label>
						<input type="text" id="chp_contact" name="chp_contact" required>
					</div>

					<div class="form-grid-2">
						<div class="form-row">
							<label for="chp_fuel">Current Heating Fuel</label>
							<select id="chp_fuel" name="chp_fuel" required>
								<option value="">Select one</option>
								<option value="Natural Gas">Natural Gas</option>
								<option value="LPG">LPG</option>
								<option value="Electric">Electric (existing)</option>
								<option value="Other">Other / Not sure</option>
							</select>
						</div>
						<div class="form-row">
							<label for="chp_bill">Approx. Monthly Energy Bill</label>
							<select id="chp_bill" name="chp_bill">
								<option value="">Select a range</option>
								<option value="Under $2,000">Under $2,000</option>
								<option value="$2,000 - $5,000">$2,000 &ndash; $5,000</option>
								<option value="$5,000 - $15,000">$5,000 &ndash; $15,000</option>
								<option value="$15,000+">$15,000+</option>
								<option value="Not sure">Not sure</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<label for="chp_industry">Industry</label>
						<select id="chp_industry" name="chp_industry" required>
							<option value="">Select one</option>
							<option value="Aged Care">Aged Care</option>
							<option value="Hotel / Hospitality">Hotel / Hospitality</option>
							<option value="Aquatic Centre / Gym">Aquatic Centre / Gym</option>
							<option value="Manufacturing / Industrial">Manufacturing / Industrial</option>
							<option value="Strata / Multi-residential">Strata / Multi-residential</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<div class="form-row">
						<label for="chp_message">Anything else worth knowing?</label>
						<textarea id="chp_message" name="chp_message" rows="3"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" style="border:none; cursor:pointer; width:100%;">Request My ROI Assessment</button>
					<p class="form-note">We use these details to give you an accurate assessment, not to add you to a mailing list.</p>
				</form>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>
