<?php include 'header.php'; ?>
	<section>
		<!-- post -->
		<h1>Create Certificate</h1>
		<form action="#0" method="post">
			<fieldset>
				<legend>Seafarer's Data</legend>
					<div class="large-12 columns">
						<label for="full-name">Full Name</label>
						<input type="text" id="full-name">
					</div>
					<div class="large-6 columns">
						<label for="passport">ID No. or Passport</label>
						<input type="text" id="passport">
					</div>
					<div class="large-6 columns">
						<label for="rank">Rank</label>
						<input type="text" id="rank">
					</div>
					<div class="large-6 columns">
						<label for="nationality">Nationality</label>
						<input type="text" id="nationality">
					</div>
					<div class="large-6 columns">
						<label for="date-of-birth">Date of Birth</label>
						<input type="date" id="date-of-birth">
					</div>
					<div class="large-6 columns">
						<label for="date-of-issue">Date of Issue</label>
						<input type="date" id="date-of-issue">
					</div>
					<div class="large-6 columns">
						<label for="expiry-date">Expiry Date</label>
						<input type="date" id="expiry-date">
					</div>
					<div class="large-12 columns">
						<label for="course">Course Taken</label>
					</div>
					<div class="large-8 columns courses">
						<input type="text" list="courses">
					</div>
						<datalist id="courses">
							<?php echo courses(); ?>
						</datalist>
					<div class="large-4 columns">
						<input type="submit" value="Save and Preview" class="add-button">
					</div>
			</fieldset>
		</form>
	</section>
</main>

<?php include 'footer.php'; ?>