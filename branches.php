<?php
session_start();
$userprofile=$_SESSION['uname'];
if($userprofile==true){

}
else{
  header('location:signin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-inverse navbar-fixed-top">
  
      <div class="navbar-header"><a href="#" class="navbar-brand">KRISHNA</a></div>
      <ul class="nav navbar-nav">
      	<li><a href="home.php">HOME</a></li>
      	<li><a href="branches.php">BRANCHES</a></li>
      	<li><a href="contacts.php">CONTACT</a></li>
      	<li><a href="#">ABOUT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="logout.php"><i class="glyphicon glyphicon-log-in"> </i> Log-out  </a></li>
      	<li><a href="home.php"><i class="glyphicon glyphicon-user"> </i>Home  </a></li>
      </ul>
  </div>
  </div>
  </nav>
 <br>
 <div class="container well">
   <h1 align="center">BRANCHES</h1>
   <p>Software engineering is an engineering-style system of software development.[1][2][3] A software engineer is a person who applies the principles of software engineering to design, develop, maintain, test, and evaluate computer software. The term programmer is sometimes used as a synonym, but may also lack connotations of engineering education or skills.

Engineering techniques are used to inform the software development process,[1][4] which involves the definition, implementation, assessment, measurement, management, change, and improvement of the software life cycle process itself. It heavily uses software configuration management,[1][4] which is about systematically controlling changes to the configuration, and maintaining the integrity and traceability of the configuration and code throughout the system life cycle. Modern processes use software versioning.

History
Main article: History of software engineering
Beginning in the 1960s, software engineering was seen as its own type of engineering. Additionally, the development of software engineering was seen as a struggle. It was difficult to keep up with the hardware which caused many problems for software engineers. Problems included software that was over budget, exceeded deadlines, required extensive de-bugging and maintenance, and unsuccessfully met the needs of consumers or was never even completed. In 1968 NATO held the first Software Engineering conference where issues related to software were addressed: guidelines and best practices for the development of software were established.[5]

The origins of the term "software engineering" have been attributed to various sources. The term "software engineering" appeared in a list of services offered by companies in the June 1965 issue of COMPUTERS and AUTOMATION and was used more formally in the August 1966 issue of Communications of the ACM (Volume 9, number 8) “letter to the ACM membership” by the ACM President Anthony A. Oettinger,[6][7] it is also associated with the title of a NATO conference in 1968 by Professor Friedrich L. Bauer, the first conference on software engineering.[8] Margaret Hamilton described the discipline "software engineering" during the Apollo missions to give what they were doing legitimacy.[9] At the time there was perceived to be a "software crisis".[10][11][12] The 40th International Conference on Software Engineering (ICSE 2018) celebrates 50 years of "Software Engineering" with the Plenary Sessions' keynotes of Frederick Brooks[13] and Margaret Hamilton.[14]

In 1984, the Software Engineering Institute (SEI) was established as a federally funded research and development center headquartered on the campus of Carnegie Mellon University in Pittsburgh, Pennsylvania, United States. Watts Humphrey founded the SEI Software Process Program, aimed at understanding and managing the software engineering process. The Process Maturity Levels introduced would become the Capability Maturity Model Integration for Development(CMMI-DEV), which has defined how the US Government evaluates the abilities of a software development team.

Modern, generally accepted best-practices for software engineering have been collected by the ISO/IEC JTC 1/SC 7 subcommittee and published as the Software Engineering Body of Knowledge (SWEBOK).[15] Software engineering is considered one of major computing disciplines.[16]

Definitions and terminology
Notable definitions of software engineering include:

"The systematic application of scientific and technological knowledge, methods, and experience to the design, implementation, testing, and documentation of software"—The Bureau of Labor Statistics—IEEE Systems and software engineering – Vocabulary[17]
"The application of a systematic, disciplined, quantifiable approach to the development, operation, and maintenance of software"—IEEE Standard Glossary of Software Engineering Terminology[18]
"an engineering discipline that is concerned with all aspects of software production"—Ian Sommerville[19]
"the establishment and use of sound engineering principles in order to economically obtain software that is reliable and works efficiently on real machines"—Fritz Bauer[20]
"a branch of computer science that deals with the design, implementation, and maintenance of complex computer programs"—Merriam-Webster[21]
"'software engineering' encompasses not just the act of writing code, but all of the tools and processes an organization uses to build and maintain that code over time. [...] Software engineering can be thought of as 'programming integrated over time.'"—Software Engineering at Google[22]
The term has also been used less formally:

as the informal contemporary term for the broad range of activities that were formerly called computer programming and systems analysis;[23]
as the broad term for all aspects of the practice of computer programming, as opposed to the theory of computer programming, which is formally studied as a sub-discipline of computer science;[24]
as the term embodying the advocacy of a specific approach to computer programming, one that urges that it be treated as an engineering discipline rather than an art or a craft, and advocates the codification of recommended practices.[25]
Etymology of "software engineer"
Margaret Hamilton promoted the term "software engineering" during her work on the Apollo program. The term "engineering" was used to acknowledge that the work should be taken just as seriously as other contributions toward the advancement of technology. Hamilton details her use of the term:

When I first came up with the term, no one had heard of it before, at least in our world. It was an ongoing joke for a long time. They liked to kid me about my radical ideas. It was a memorable day when one of the most respected hardware gurus explained to everyone in a meeting that he agreed with me that the process of building software should also be considered an engineering discipline, just like with hardware. Not because of his acceptance of the new "term" per se, but because we had earned his and the acceptance of the others in the room as being in an engineering field in its own right.[26]

Suitability of the term
Individual commentators have disagreed sharply on how to define software engineering or its legitimacy as an engineering discipline. David Parnas has said that software engineering is, in fact, a form of engineering.[27][28] Steve McConnell has said that it is not, but that it should be.[29] Donald Knuth has said that programming is an art and a science.[30] Edsger W. Dijkstra claimed that the terms software engineering and software engineer have been misused[improper synthesis?] and should be considered harmful, particularly in the United States.[31]

Tasks in large scale projects
Main article: Outline of software engineering
Software requirements
Main article: Software requirements
Requirements engineering is about the elicitation, analysis, specification, and validation of requirements for software. Software requirements can be of three different types. There are functional requirements, non-functional requirements, and domain requirements. The operation of the software should be performed and the proper output should be expected for the user to use. Non-functional requirements deal with issues like portability, security, maintainability, reliability, scalability, performance, reusability, and flexibility. They are classified into the following types: interface constraints, performance constraints (such as response time, security, storage space, etc.), operating constraints, life cycle constraints (maintainability, portability, etc.), and economic constraints. Knowledge of how the system or software works is needed when it comes to specifying non-functional requirements. Domain requirements have to do with the characteristic of a certain category or domain of projects.[32]

Software design
Main article: Software design
Software design is about the process of defining the architecture, components, interfaces, and other characteristics of a system or component. This is also called software architecture. Software design is divided into three different levels of design. The three levels are interface design, architectural design, and detailed design. Interface design is the interaction between a system and its environment. This happens at a high level of abstraction along with the inner workings of the system. Architectural design has to do with the major components of a system and their responsibilities, properties, interfaces, and their relationships and interactions that occur between them. Detailed design is the internal elements of all the major system components, their properties, relationships, processing, and usually their algorithms and the data structures.[33]

Software construction
Main article: Software construction
Software construction, the main activity of software development,[1][4] is the combination of programming, unit testing, integration testing, and debugging. Testing during this phase is generally performed by the programmer while the software is under construction, to verify what was just written and decide when the code is ready to be sent to the next step.

Software testing
Main article: Software testing
Software testing[1][4] is an empirical, technical investigation conducted to provide stakeholders with information about the quality of the product or service under test, with different approaches such as unit testing and integration testing. It is one aspect of software quality. As a separate phase in software development, it is typically performed by quality assurance staff or a developer other than the one who wrote the code.

Software analysis
Main article: Software analysis
Software analysis is the process of analyzing the behavior of computer programs regarding a property such as performance, robustness, and security It can be performed without executing the program (static program analysis), during runtime (dynamic program analysis) or in a combination of both.

Software maintenance
Main article: Software maintenance
Software maintenance[1][4] refers to the activities required to provide cost-effective support after shipping the software product. Software maintenance is modifying and updating software applications after distribution to correct faults and to improve its performance. Software has a lot to do with the real world and when the real world changes, software maintenance is required. Software maintenance includes: error correction, optimization, deletion of unused and discarded features, and enhancement of features that already exist. Usually, maintenance takes up about 40% to 80% of the project cost therefore, focusing on maintenance keeps the costs down.[34]

Education
Globe icon.
The examples and perspective in this article may not represent a worldwide view of the subject. You may improve this article, discuss the issue on the talk page, or create a new article, as appropriate. (November 2010) (Learn how and when to remove this template message)
Knowledge of computer programming is a prerequisite for becoming a software engineer. In 2004 the IEEE Computer Society produced the SWEBOK, which has been published as ISO/IEC Technical Report 1979:2005, describing the body of knowledge that they recommend to be mastered by a graduate software engineer with four years of experience.[35] Many software engineers enter the profession by obtaining a university degree or training at a vocational school. One standard international curriculum for undergraduate software engineering degrees was defined by the Joint Task Force on Computing Curricula of the IEEE Computer Society and the Association for Computing Machinery, and updated in 2014.[36] A number of universities have Software Engineering degree programs; as of 2010, there were 244 Campus Bachelor of Software Engineering programs, 70 Online programs, 230 Masters-level programs, 41 Doctorate-level programs, and 69 Certificate-level programs in the United States.

In addition to university education, many companies sponsor internships for students wishing to pursue careers in information technology. These internships can introduce the student to interesting real-world tasks that typical software engineers encounter every day. Similar experience can be gained through military service in software engineering.

Software engineering degree programs
Half of all practitioners today have degrees in computer science, information systems, or information technology.[citation needed] A small, but growing, number of practitioners have software engineering degrees. In 1987, the Department of Computing at Imperial College London introduced the first three-year software engineering Bachelor's degree in the UK and the world; in the following year, the University of Sheffield established a similar program.[37] In 1996, the Rochester Institute of Technology established the first software engineering bachelor's degree program in the United States, however, it did not obtain ABET accreditation until 2003, the same time as Rice University, Clarkson University, Milwaukee School of Engineering and Mississippi State University obtained theirs.[38] In 1997, PSG College of Technology in Coimbatore, India was the first to start a five-year integrated Master of Science degree in Software Engineering.[citation needed]

Since then, software engineering undergraduate degrees have been established at many universities. A standard international curriculum for undergraduate software engineering degrees, SE2004, was defined by a steering committee between 2001 and 2004 with funding from the Association for Computing Machinery and the IEEE Computer Society. As of 2004, in the U.S., about 50 universities offer software engineering degrees, which teach both computer science and engineering principles and practices. The first software engineering Master's degree was established at Seattle University in 1979. Since then graduate software engineering degrees have been made available from many more universities. Likewise in Canada, the Canadian Engineering Accreditation Board (CEAB) of the Canadian Council of Professional Engineers has recognized several software engineering programs.

In 1998, the US Naval Postgraduate School (NPS) established the first doctorate program in Software Engineering in the world.[citation needed] Additionally, many online advanced degrees in Software Engineering have appeared such as the Master of Science in Software Engineering (MSE) degree offered through the Computer Science and Engineering Department at California State University, Fullerton. Steve McConnell opines that because most universities teach computer science rather than software engineering, there is a shortage of true software engineers.[39] ETS (École de technologie supérieure) University and UQAM (Université du Québec à Montréal) were mandated by IEEE to develop the Software Engineering Body of Knowledge (SWEBOK), which has become an ISO standard describing the body of knowledge covered by a software engineer.[40]</p>
 </div>
</body>
</html>