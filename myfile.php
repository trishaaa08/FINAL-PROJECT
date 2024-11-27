<?php

// Define the array of members
$members = array(
    array(
        'name' => 'INTEGRATIVE PROGRAMMING AND TECHNOLOGIES 1',
        'image' => 'intprog.jpg',
        'description' => 'Integrative Programming and Technologies 1 (IPT 1) is an introductory course that introduces students to the fundamental concepts and principles of programming and technology integration. The course focuses on developing problem-solving skills, logical thinking, and creativity through hands-on programming projects.',
        'link' => 'https://www.youtube.com/watch?v=JfypSNaXM7g&list=PLn-nBamGYaYdNASeM2tZGqtf1Uw3Nfebx'
    ),
    array(
        'name' => 'SYSTEM INTEGRATION AND ARCHITECTURE 1',
        'image' => 'interdisciplinary.jpg',
        'description' => 'This course covers the principles and practices of designing and integrating complex systems, including software, hardware, and networks. Students will learn how to analyze and design system architectures, identify integration challenges, and develop solutions to integrate different systems and components. The course will focus on the integration of systems from various domains, such as enterprise systems, web applications, mobile devices, and IoT devices.',
        'link' => 'https://www.youtube.com/watch?v=qs4Z3PayuVQ&list=PLeggoenlMQrzUqGamlReq88emA6w-XSjS'
    ),
    array(
        'name' => 'IT PROFESSIONAL ELECTIVE 1',
        'image' => 'itprof.jpg',
        'description' => 'This course is designed to provide students with a comprehensive understanding of [specific topic/technology] in the field of Information Technology. The course will cover the fundamental concepts, principles, and practices of [topic/technology], including its applications, limitations, and future directions.',
        'link' => 'https://youtu.be/qjVaRfXFLgg?si=Nnm7QU9sXWyVexS2'
    ),
    array(
        'name' => 'HUMAN COMPUTER INTERACTION',
        'image' => 'hci.jpg',
        'description' => 'Human-Computer Interaction (HCI) is the study of how people interact with computers, software, and other digital systems. It is concerned with designing and evaluating user interfaces, systems, and products that are intuitive, easy to use, and efficient for humans to interact with.',
        'link' => 'https://youtu.be/MGo7AVXj_rU?si=DJLKeyqiNkoFjtMG'
    ),
    array(
        'name' => 'QUANTITATIVE METHOD',
        'image' => 'quan.jpg',
        'description' => 'Quantitative research methods involve the collection and analysis of numerical data, using statistical methods to describe and explain phenomena. This approach is often used to test hypotheses, examine relationships between variables, and predict outcomes.',
        'link' => 'https://youtu.be/owI7zxCqNY0?si=6if1SHsfiH3OgWTP'
    ),
    array(
        'name' => 'INTERDISCIPLINARY ELECTIVE 2',
        'image' => 'interd.jpg',
        'description' => 'In this dynamic and interactive course, students will embark on an entrepreneurial journey, exploring the principles and practices of starting and growing a successful business. Drawing from various disciplines, including business, design, engineering, social sciences, and humanities, students will develop a comprehensive understanding of the entrepreneurial mindset, identify opportunities, and create innovative solutions.',
        'link' => 'https://youtu.be/8vG18dLGlDM?si=akFZgraa6JQF6K9H'
    )
);

// Loop through the members and create the gallery
foreach ($members as $member) {
    ?>
    <div class="gallery-member">
        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
        <h2><?php echo $member['name']; ?></h2>
        <p><?php echo $member['description']; ?></p>
        <button><a href="<?php echo $member['link']; ?>">Learn more</a></button>
    </div>
    <?php
}

?>

<!-- HTML code goes here -->
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="trisha.css">
</head>
<body>

  <script src="script.js"></script>
</body>
</html>