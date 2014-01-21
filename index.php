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
								<option>Basic Safety Courses</option>
								<option>Proficiency in Personal Survival Techiniques</option>
								<option>Fire Prevention and Fire Fighting</option>
								<option>Elementary First Aid</option>
								<option>Personal Safety and Social Responsabilities</option>
								<option>Proficiency in Survival Craft and Rescue Boats</option>
								<option>Proficiency in Fast Rescue Boats</option>
								<option>Medical Care</option>
								<option>Advanced Training in Fire Fighting</option>
								<option>General Operator for Global Maritime Distress and Safety System (GMDSS)</option>
								<option>Automatic Radar Plotting Aids (ARPA)</option>
								<option>Radar Observation and Plotting</option>
								<option>Bridge Team Management</option>
								<option>Operational Use of Electronic Chart Display and Informationa System (ECDIS)</option>
								<option>Officer in Charge of a Navigational Watch</option>
								<option>Ratings forming Part of a Navigational Watch</option>
								<option>Ordinary Seaman</option>
						</datalist>
					<div class="large-4 columns">
						<input type="submit" value="Save and Preview" class="add-button">
					</div>
			</fieldset>
		</form>
	</section>
</main>

<?php include 'footer.php'; ?>