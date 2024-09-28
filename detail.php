<?php
	include 'functions.php';
	$team_members=[
		[
			'img_path' => 'assets\images\Chris_Profile.jpg',
			'firstname'=>'Chris',
			'lastname'=>'King',
			'team_role' => 'Programmer',
			'email' => 'csking8639@gmail.com',
			'phone_number' => '(812) 584-7514',
			'linked_in' => 'linkedin.com/in/chrisking2026/',
			'github' => 'github.com/CSKing02',
			'website' => 'csking.com',
			'bio'=> 'I am a student currently studying cybersecurity at Northern Kentucky University. Here I have taken many classes over data structures, 
								object oriented programming, web development, linux system administration, and networking. I am also part of a research project where we are currently 
								building an AI therapist. This project has taught me many useful technologies to use in application development, such as bootstrap and PHP. Before this I 
								studied at Southeastern Career Center, studying computer repair and networking.  There I learned how to troubleshoot PCs, how to create and run cat 5 and 
								cat 6 cables, how set up networks, different network arcitectures, and how data is transmitted over a network. I do not have any work experience in my desired field, 
								but I hope to get an internship next summer',
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'Assistant Store Manager',
					'company_name'=> 'Family Dollar',
					'start_and_end_dates'=> '2020 - 2021',
					'job_summary'=> 'I was responsible for overseeing staff, ensuring that dailey tasks were done by the end of the day, 
													counting out each cashiers cash register and the safe, taking the dailey deposit to the bank, and closing and opening the store.',
					'achievement_header'=> 'During my time at Family Dollar I was an effective leader',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Stock was always ran on time',
						'I saw that stock rotations were done regularly',
						'I did weekly cycle counts to ensure our inventory numbers were correct'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'POS system'
					]
				]
			],
			'skills' => [
				'python',
				'Java',
				'JavaScript',
				'HTML/CSS/SASS',
			],
			'other_skills' => [
				'Bash Scripting',
				'Code Review',
				'Git',
				'Wireframing',
				'Bootstrap',
				'Networking'
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//school 1
				[
					'study'=> 'Computer Repair & Networking',
					'school_name'=> 'Southeastern Career Center',
					'start_and_end_dates' => '2018 - 2020'
				],
				//school 2
				[
					'study'=> 'BS Cybersecurity',
					'school_name' => 'Northern Kentucky University',
					'start_and_end_dates' => '2023 - Present'
				]
			],
			'languages' => [
				'english'
			],
			'interests'=> [
				'Video Game Development',
				'Skateboarding',
				'cooking'
			],
			'awards' => [
				'Dean\'s List - Northern Kentucky University',
				'Dean\'s List - Indiana University Southeast'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'Build an AI Therapist',
					'project_goal' => 'We wanted to create an AI driven platform 
											that could provide assistance to those struggling and unable to get traditional help.
											The project uses Llama 3.1 for the AI, and we are building the front end using bootstrap. This is still in active development.',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => '3D Platformer',
					'project_goal' => 'I set out to create a game to explore how certain game mechanics work, such as a camera, movement system, and map generation.
											I have yet to release anything publicly, but hope to upload a demo online by the end of this year.'
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => 'Creating a Computer Lab',
					'project_goal' => 'During my time at Southeastern Career Center I was part of a project that involved creating a computer lab for the school. 
											We, the second year students, ran  cables, set up the hardware, and created an image to install windows to the PCs.'
				]
			],
		],
		[
			'img_path' => 'assets\images\Alanna_Profile.jpg',
			'firstname'=>'Alanna',
			'lastname'=>'Evans',
			'team_role' => 'Programmer',
			'email' => 'evansa27@mymail.nku.edu',
			'phone_number' => '(513)313-4015',
			'linked_in' => 'www.linkedin.com/in/alanna-evans-095b02263',
			'github' => 'https://github.com/evansa27',
			'website' => 'n/a',
			'bio'=> 'My name is Alanna Evans, and I am a senior working on my Bachelor of Science in Cybersecurity at Northern Kentucky University. I am also minoring in Computer Science and Computer Forensics as well. I have had multiple cybersecurtrity based internships at GE Aerospace. During my time here I worked on the Insider Threat and Data Protection Team, as well as the Cyber Intel and Active Defense Team. I have recently accpeted a postion as a DTLP within the company after I graduate. A few fun facts about me is that I recently traveled outside of the country for the first time, and I love going to concerts.',
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'Detection Engineer',
					'company_name'=> 'GE Aerospace',
					'start_and_end_dates'=> 'May 2024 - August 2024',
					'job_summary'=> '-Led an intern-run threat hunt in which teamwork and collaboration were used to determine if a predetermined threat was a concern within the GE Aerospace network with a focus on certain tactics, techniques, and procedures
							-Acted as a threat intel analyst and used Open-Source Intelligence to work through the threat intel pipeline and complete tasks such as conducting open-source intelligence, fulfilling 1 to 2 reports a week, and becoming familiar with threat intelligence tech stacks
							-Completed professional development tasks such as attending educational meetings, networking events, and practicing leadership skills by hosting a staff meeting for digital technology interns and preparing for the CIO as a guest speaker',
					'achievement_header'=> 'These are some of the achievements I have accomplished during this internship.',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Identified ways to improve GE\'s security',
						'Got hands-on cyber experience',
						'Identified ways to improve processes'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'OpenCTI',
						'Cybersecurity Fundamentals',
						'BDEP',
					]
				]
			],
			'skills' => [
				'Leadership',
				'HTML',
				'CSS',
				'Cybersecurity Knowledge & Fundamentals',
			],
			'other_skills' => [
				'Word',
				'Excel',
				'PowerPoint',
				'Teamwork',
				'Communication',
				'Negotiation'
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//school 1
				[
					'study'=> 'Bachelor of Science in Cybersecurity',
					'school_name'=> 'Northern Kentucky University',
					'start_and_end_dates' => '2021 - 2025'
				],
				//school 2
				[
					'study'=> 'High School Diploma',
					'school_name' => 'Bethel-Tate High School',
					'start_and_end_dates' => '2017 - 2021'
				]
			],
			'languages' => [
				'English'
			],
			'interests'=> [
				'Hiking',
				'Pool',
				'Video Games'
			],
			'awards' => [
				'President\'s List - Northern Kentucky University',
				'Dean\'s List - Northern Kentucky University'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'VR',
					'project_goal' => 'Worked closely with a professor to create a tour of the College of Informatics through VR',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => 'Cryptography',
					'project_goal' => 'Created a Keyword Cipher Software for a cryptography course.'
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => 'Chutes and Ladders',
					'project_goal' => 'Wrote software in C that plays the game Chutes and Ladders.'
				]
			]
		],
		[
			'img_path' => 'assets\images\Cody_Profile.jpg',
			'firstname'=>'Cody',
			'lastname'=>'King',
			'team_role' => 'Programmer',
			'email' => 'cody.king04@outlook.com',
			'phone_number' => '606-782-5551',
			'linked_in' => 'linkedin.com/in/codyking57',
			'github' => 'github.com/Cjking57893',
			'website' => 'n/a',
			'bio'=> "Currently I'm attending Northern Kentucky University majoring in Applied Software Engineering. I transferred from a community college after getting my Associate's degree. Some languages I'm proficient in are C#, Javascript, and HTML & CSS. I also have experience using GIT and Github.",
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'IT Support',
					'company_name'=> 'Maysville Community and Technical College',
					'start_and_end_dates'=> '2021 - Present',
					'job_summary'=> 'A student worker position in the IT department at Maysville Community and Technical College. Consists of assisting with computer problems, network issues, and printing issues.',
					'achievement_header'=> 'These are some achievements I completed at this job',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Assisted in transition to webex phone system',
						'Set up networking for new aviation building',
						'Helped with printer upgrades'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'Active Directory',
						'VNC',
						'Teamviewer'
					]
				],
				//job 2
				[
					'job_title' => 'Work-Based Learning IT Job',
					'company_name'=> 'Bracken County High School',
					'start_and_end_dates'=> '2020 - 2021',
					'job_summary'=> 'A Work-Based learning IT job completed during Senior year of High School. Consisted of assisting students and teachers with computer problems and repairing Chromebooks.',
					'achievement_header'=> 'These are some achievements I completed at this job',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Helped with assisting students and teachers with Technical problems',
						'Repaired chromebooks with various broken parts (screen, keyboard, trackpad, etc)'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'Repair tools for Chromebooks'
					]
				]
			],
			'skills' => [
				'C#',
				'Java',
				'JavaScript',
				'Node.js',
				'HTML/CSS'
			],
			'other_skills' => [
				'Git/Github',
				'Linux',
				'Command Prompt'
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//scool 1
				[
					'study'=> 'BSc Applied Software Engineering',
					'school_name'=> 'Northern Kentucky University',
					'start_and_end_dates' => '2023 - 2026'
				],
				//scool 2
				[
					'study'=> 'ASc Information Technology',
					'school_name' => 'Maysville Community and Technical College',
					'start_and_end_dates' => '2021 - 2022'
				]
			],
			'languages' => [
				'English'
			],
			'interests'=> [
				'Gaming',
				'Running',
				'Movies'
			],
			'awards' => [
				'Dean\'s List - Maysville Community and Technical College',
				'Dean\'s List - Northern Kentucky University'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'Midwest Music Site',
					'project_goal' => 'A website to post reviews of concerts.',
				]
			]
		],
		[	
			'img_path' => 'assets\images\Tyler_Profile.jpg',
			'firstname'=>'Tyler',
			'lastname'=>'White',
			'team_role' => 'Programmer',
			'email' => 'Whitet27@mymail.nku.edu',
			'phone_number' => '859-468-0761',
			'linked_in' => 'https://linkedin.com/in/tylerwhite2023',
			'github' => 'https://github.com/clickersb',
			'website' => 'N/A',
			'bio'=> 'My name is Tyler White and I am a sophmore at Northern Kentucky University studying Cybersecurity.',
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'Server/Host',
					'company_name'=> 'Washington Square',
					'start_and_end_dates'=> 'July 2023 - present',
					'job_summary'=> 'At The Washington Square, I provide exceptional customer service, ensuring guests\' needs are met promptly and professionally. Since July 2022, I\'ve managed seating and wait times, optimized service flow, and facilitated communication between staff. I\'ve developed strong time management skills in a fast-paced environment and adapted to unpredictable situations, contributing to a positive team dynamic and the restaurant\'s success.',
					'achievement_header'=> 'Here are some achievements I have accomplished while at the Washington Square',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Lead and controlled traffic of multiple record-breaking hours, reaching over $1500 in sales',
						'Help improve adaptability in unpredictable interactions with customers',
						'Used important attention to detail abilities to make sure the restaurant runs smoothly.'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'Clover'
					]
				]
			],
			'skills' => [
				'Linux',
				'Java',
				'IT Skills',
				'Security+',
			],
			'other_skills' => [
				'Office 365',
				'Windows 10/11',
				'Python',
				'PHP',
				'HTML',
				'Network Management'
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//school 1
				[
					'study'=> 'Bachelor of Science in Cybersecurity',
					'school_name'=> 'Northern Kentucky University',
					'start_and_end_dates' => '2023-2026'
				],
				//school 2
				[
					'study'=> 'Associates of Science',
					'school_name' => 'Gateway Community and Technical College',
					'start_and_end_dates' => '2021-2023'
				]
			],
			'languages' => [
				'English'
			],
			'interests'=> [
				'Skiing',
				'Working out',
				'Video Games'
			],
			'awards' => [
				'Dean\'s List – Gateway Community and Technical College',
				'Dean\'s List - Northern Kentucky University'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'Password Cracking Simulation',
					'project_goal' => ' I set up a virtual machine environment and used tools like John the Ripper to test weak password policies and analyze hashing algorithms. This project taught me the importance of encryption and strong password practices.',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => 'Network Traffic Analysis',
					'project_goal' => 'I monitored and analyzed network traffic using Wireshark to identify potential security threats, including malicious packets, and compiled a report on my findings. This project helped me build skills in packet analysis and network security.'
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => 'Vulnerability Assessment',
					'project_goal' => ' I conducted a vulnerability assessment using OpenVAS to scan a virtual server, identifying risks and providing remediation recommendations. This project enhanced my understanding of system vulnerabilities and how to mitigate them.'
				]
			]
		]
	];

	// Grabbing id value from query string and setting to 0 if not filled out.
	$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

	// Storing array data for selected team member in variables.
	$member = $team_members[$id];
	$skills = $member['skills'];
	$other_skills = $member['other_skills'];
	$job_experience = $member['job_experience'];
	$education = $member['education'];
	$languages = $member['languages'];
	$interests = $member['interests'];
	$awards = $member['awards'];
	$projects = $member['projects'];
	
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $member['firstname'] . ' ' . $member['lastname'] ?> Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= $member['img_path'] ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['firstname'] . ' ' . $member['lastname'] ?></h1>
							    <div class="title mb-3"><?= $member['team_role'] ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $member['email'] ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $member['phone_number'] ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $member['linked_in'] ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $member['github'] ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $member['website'] ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $member['bio'] ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    
									<?php
										foreach($job_experience as $job) {
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
									?>
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
										<?php
											foreach($skills as $skill) {
												echo
												'<li class="mb-2">
								            	 	<div class="resume-skill-name">' . $skill . '</div>
													<div class="progress resume-progress">
														<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
								        		</li>';
											}
										?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <?php
											foreach($other_skills as $other_skill) {
												echo
												'<li class="list-inline-item"><span class="badge badge-light">' . $other_skill . '</span></li>';
											}
										?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php
										foreach($education as $degree) {
											echo 
											'<li>
								        		<div class="resume-degree font-weight-bold">' . $degree["study"] . '</div>
								        		<div class="resume-degree-org">' . $degree["school_name"] . '</div>
								        		<div class="resume-degree-time">' . $degree["start_and_end_dates"] . '</div>
								    		</li>';
										}
									?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php
										foreach($awards as $award) {
											echo
											'<li class="mb-2 ps-4 position-relative">
								        		<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        		<div class="resume-award-name">' . $award . '</div>
								    		</li>';
										}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php
										foreach($languages as $language) {
											echo
											'<li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">' . $language . '</span>';
										}
									?>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <?php
										foreach($interests as $interest) {
											echo
											'<li class="mb-1">' . $interest . '</li>';
										}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<?php
							foreach($projects as $project) {
								echo
								'<div class="col-md-4">
								 	<div class="card">
										<div class="card-body">
											<h5 class="card-title">' . $project['project_name'] . '</h5>
											<p class="card-text">' . $project['project_goal'] . '</p>
											<a href="btn btn-outline-primary" href="#">Go to link</a>
										</div>
									</div>
								</div>';
							}
						?>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= $team_members[0]['firstname'] . ', ' . $team_members[1]['firstname'] . ', ' . $team_members[2]['firstname'] . ', ' . $team_members[3]['firstname'] ?></small>
    </footer>

    

</body>
</html> 

