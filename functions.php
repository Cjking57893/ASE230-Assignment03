<?php

function jobExperience(array $job) {
        echo
			'<article class="resume-timeline-item position-relative pb-5">
			 	<div class="resume-timeline-item-header mb-2">
			 		<div class="d-flex flex-column flex-md-row">
						<h3 class="resume-position-title font-weight-bold mb-1">' . $job['job_title'] . '</h3>
						<div class="resume-company-name ms-auto">' . $job['company_name'] . '</div>
					</div><!--//row-->
				<div class="resume-position-time">' . $job['start_and_end_dates'] . '</div>
				</div><!--//resume-timeline-item-header-->
			 <div class="resume-timeline-item-desc">
			 	<p>' . $job['job_summary'] . '</p>
			 	<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
				<p>' . $job['achievement_header'] . '</p>
				<ul>';

				foreach($job['achievements'] as $achievement) {
					echo
					'<li>' . $achievement . '</li>';
				}

			echo
			   '</ul>
				<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
				<ul class="list-inline">';
				foreach($job['technologies_used'] as $technology) {
					echo
					'<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $technology . '</span></li>';
				}
			   '</ul>
			 </div><!--//resume-timeline-item-desc-->

			 </article><!--//resume-timeline-item-->';
}