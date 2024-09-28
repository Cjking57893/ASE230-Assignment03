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