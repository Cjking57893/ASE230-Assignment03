<?php

// Function to display a member card with name, email, LinkedIn, image path, and role
function display_member_card($members, $index) {
    $member = $members[$index];
    echo '
    <header class="resume-header mt-4 pt-4 pt-md-0">
        <div class="row">
            <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                <img class="picture" src="' . $member['img_path'] . '" alt="' . $member['firstname'] . ' ' . $member['lastname'] . '">
            </div><!--//col-->
            <div class="col">
                <div class="row p-4 justify-content-center justify-content-md-between">
                    <div class="primary-info col-auto">
                        <h1 class="name mt-0 mb-1 text-white text-uppercase">' . $member['firstname'] . ' ' . $member['lastname'] . '</h1>
                        <div class="title mb-3">' . $member['team_role'] . '</div>
                        <div class="contact-info">
							<p>Age: ' . calculateFullAge($member['dob']) . '</p>
                            <p>Email: <a href="mailto:' . $member['email'] . '">' . $member['email'] . '</a></p>
                            <p>LinkedIn: <a href="https://' . $member['linked_in'] . '" target="_blank">' . $member['linked_in'] . '</a></p>
                        </div>
                    </div><!--//primary-info-->
                    <div class="secondary-info col-auto mt-2">
                        <a href="detail.php?id=' . $index . '" class="btn btn-secondary">See full profile</a>
                    </div><!--//secondary-info-->
                </div><!--//row-->
            </div><!--//col-->
        </div><!--//row-->
    </header>';
}

// Function to calculate age for team members
function calculateFullAge($dob) {
    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate);
    return $age->y . " years, " . $age->m . " months, and " . $age->d . " days";
}

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
