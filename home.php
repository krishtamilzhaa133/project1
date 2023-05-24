
 <!DOCTYPE html>
<html>
<head>
	<title>home page</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-sm navbar-inverse navbar-fixed-top">
  <div class="container">

      <div class="navbar-header">
        <a href="#" class="navbar-brand">
          KRISHNA
        </a>
      </div>

      <button class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

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

  </nav>
 <br>
<div class="row">
  <div class="col-md-2 well" id="homed">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="#services">SERVICES</a></li><hr>
      <li><a href="#price">PRICE</a></li><hr>
      <li><a href="#patners">PATNERS</a></li><hr>
      <li><a href="#workenvironment">WORK ENVIRONMENT</a></li><hr>
      <li><a href="#referals">REFERALS</a></li><hr>

    </ul>
  </div>
  <div class="col-md-10 well">
  <div id=services>
    <h1 align="center">HOME PAGE</h1>
    <?php
session_start();
echo "welcome"." ".$_SESSION['uname'];
$userprofile=$_SESSION['uname'];
if($userprofile==true){

}
else{
  header('location:signin.php');
}
?>
    <br>
    <h2>Our Services</h2>
    <p>
      Software Products generally represent high end work that is done by vendors.  Software Services generally represent low end work that is done by vendor.
Products includes activities that add higher value than activities of services. Services includes activities that add lower value than activities of products.
Software product companies usually develop products.  Software service companies may or may not develop products.
Features of software products include efficiency, maintainability, adaptability, etc. Features of software services include application security, high availability, data security, etc.
What Is Software as a Service (SaaS)?
SaaS is a licensing model in which access to software is provided on a subscription basis, where the software is located on external servers rather than on servers located in-house.

Software as a Service is commonly accessed through a web browser, with users logging into the system using a username and password. Instead of each user having to install the software on their computer, the user can access the program via the internet.

KEY TAKEAWAYS
Software as a Service (SaaS) is a software licensing model, which allows access to software on a subscription basis using external servers.
SaaS allows each user to access programs via the Internet, instead of having to install the software on the user's computer.
SaaS has many business applications, including file sharing, email, calendars, customer retention management, and human resources.
SaaS is easy to implement, easy to update and debug, and can be less expensive than purchasing multiple software licenses for multiple computers.
Drawbacks to the adoption of SaaS include data security, speed of delivery, and lack of control.
Understanding Software as a Service (SaaS)
The rise of SaaS coincided with the rise of cloud-based computing. Cloud computing offers technology services through the internet, which often includes access to data storage, networking, and servers.

Before SaaS, companies looking to update the software on their computers had to purchase compact disks containing the updates and download them onto their systems. For large organizations, updating software was a time-consuming endeavor.

With SaaS, users can log in through the internet or web browser and connect to the service provider’s network to access the particular service. Technology companies, financial services companies, entertainment, and utilities have led the business world in adopting SaaS technology.

SaaS History and Characteristics
SaaS can trace its origins to a concept called time-sharing, which was developed in the late 1950s and early 1960s to make more cost-effective use of expensive processor time.
    </p>
  </div>
  <div id=price>
    <h1>Price</h1>
    <p>
<b>Average Cost Of Software Development</b>
When you question IT firms how much software development costs, you often get the typical answer of ‘it depends’. For startup owners, having a vague answer isn’t helpful for budget planning, yet it isn’t hard to put down a solid figure without detailed discussions.

There are many factors that determine the cost of building a piece of software. A development agency would need to run through the project requirements with the client before providing a cost estimate. 

Obviously, a simple app that requires very little user interaction or backend processing will be cheaper to develop. Meanwhile, a complex application that involves financial transactions, heavy interaction, and connected to external systems will be much more expensive to develop.

Software development cost isn’t merely about the scale or complexity of the app. If you’re building a simple app but with dozens of different screens, the cost may rival those of more complicated apps. 

Ultimately, it comes down to the people-hour and the technology stack involved in building the software. Based on our experience, the ballpark range of software development costs is between $50,000 to $250,000.
    </p>
  </div>
   <div id=patners>
    <h1>Patners</h1>
    <p>
A new year means a new start for many. For tech companies, in particular, this often means choosing a software development partner.

Outsourcing your software development team is always a tempting option, but doing it right comes down to covering all the details. 

Depending on the kind of software project you are working on, how you source and work with a software development partner can be quite different. 

It’s important to follow a defined process when outsourcing. This way you can maintain control over the quality of work you receive.

The following guide will cover several steps involved in choosing your software development partner and the outsourcing process in general. Check it out below! Use it to shape your process and hire the best remote talent. 

What Is a Software Development Partner?
A software development partner is a technical party —- often a company or group of IT professionals — who can help you deliver your software project successfully. 

Software development partners are typically outsourcing agencies that are employed by tech startups to alleviate the costs and other burdens associated with hiring developers on your own. 

More likely than not, a reasonably priced software development partner will have the tools and knowledge to build your app or software product with only a detailed understanding from you and/or your associates about the project you’re trying to build. 

Making sure your software development partner has a full comprehension of your project is probably the most critical part of having a successful software product.

After this is sorted, your software development partner can do the rest. 
    </p>
  </div>

  <div id=workenvironment>
    <h1>Work Environment</h1>
    <p>
What is a work environment?
A work environment is the setting, social features and physical conditions in which you perform your job. These elements can impact feelings of well-being, workplace relationships, collaboration, efficiency and employee health. Here are the significant aspects of a work environment:

Physical environment
This element is made up of the size, layout and location of a workplace, whether work is conducted indoors or outdoors, the facilities offered in a workplace and the furnishings used while working.

Company culture
This element refers to the way a company and its employees operate, including what effective communication looks like between different levels of staff, employees’ perspective of company leaders, the company’s goals and what the organization values.

Working conditions
This element includes the formal terms under which staff members are hired, such as the rate of pay, contract of employment and length of the workday. It can also cover recreational activities and other initiatives to promote a healthy workplace.

Read more: Guide to Company Culture
Elements of a work environment
Use the following descriptions of each work environment element to identify a positive and productive workplace:

Physical environment
The physical conditions you work under will play a crucial role in enabling you to reach your full potential. Some critical aspects of your physical environment to consider include:

Size
The size of your working area can have an impact on whether you have everything at hand to accomplish your job, while at the same time significantly influencing how you feel at work. To evaluate the size of your workspace, consider the amount of space you have to move freely, whether you have all the equipment you need nearby and if the area is large enough to accommodate all staff members.

Layout
Some indoor workplaces have an open floor plan, while others use cubicles or other dividers to separate spaces. The design of a workplace may depend on the type of work. For example, a more collaborative environment may benefit from an open layout, while a job that requires discretion would better operate with separate offices or cubicles to ensure privacy.

Furnishings
Desks, chairs, conference tables and other workplace furniture can also impact employees on the job. Access to comfortable and adequate seating, clean workspaces and functional desks can ensure indoor workplaces remain efficient. Outdoor workplaces may include comfortable furniture for break times.
    </p>
  </div>

<div id=referals>
    <h1>Referals</h1>
    <p>
A referral sends someone somewhere, often for help or advice. You'll need a referral from your doctor in order to see a specialist.

You could also receive a referral for a job, if someone passes along your application. If you're dealing with a big company or institution, you might get tired of the endless referrals from one department to another. Remember that referral has two r's in the middle, “rr,” like a growl.
    </p>
  </div>
</div>
</div>
</body>
</html>