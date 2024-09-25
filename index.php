<?php
// INSERT DATA HERE.

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
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

	<?php
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
					'achievement_header'=> '',
					//array contains a list of your achievements on the job
					'achievements' => [
						'',
						'',
						''
					],
					//array contains each technology used on the job
					'technologies_used' => [
						''
					]
				],
				//job 2
				[
					'job_title' => 'Work-Based Learning IT Job',
					'company_name'=> 'Bracken County High School',
					'start_and_end_dates'=> '2020 - 2021',
					'job_summary'=> 'A Work-Based learning IT job completed during Senior year of High School. Consisted of assisting students and teachers with computer problems and repairing Chromebooks.',
					'achievement_header'=> '',
					//array contains a list of your achievements on the job
					'achievements' => [
						'',
						'',
						''
					],
					//array contains each technology used on the job
					'technologies_used' => [
						''
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
				'',
				'',
				'',
				'',
				'',
				''
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
					'project_name' => '',
					'project_goal' => '',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => '',
					'project_goal' => ''
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => '',
					'project_goal' => ''
				]
			]
		]
	];
	?>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?= $team_members[0]['img_path'] ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$team_members[0]['firstname'].' '.$team_members[0]['lastname']?></h1>
							    <div class="title mb-3"><?=$team_members[0]['team_role']?></div>
								<a href="detail.php?id=<?=0?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?= $team_members[1]['img_path'] ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$team_members[1]['firstname'].' '.$team_members[1]['lastname']?></h1>
							    <div class="title mb-3"><?=$team_members[1]['team_role']?></div>
								<a href="detail.php?id=<?=1?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?= $team_members[2]['img_path'] ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$team_members[2]['firstname'].' '.$team_members[2]['lastname']?></h1>
							    <div class="title mb-3"><?=$team_members[2]['team_role']?></div>
								<a href="detail.php?id=<?=2?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>

			<header class="resume-header mt-4">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?= $team_members[3]['img_path'] ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$team_members[3]['firstname'].' '.$team_members[3]['lastname']?></h1>
							    <div class="title mb-3"><?=$team_members[3]['team_role']?></div>
								<a href="detail.php?id=<?=3?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= $team_members[0]['firstname'] . ', ' . $team_members[1]['firstname'] . ', ' . $team_members[2]['firstname'] . ', ' . $team_members[3]['firstname'] ?></small>
    </footer>

    

</body>
</html> 

