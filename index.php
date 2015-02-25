<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Police Database System</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<?php include 'assets/header.php'; ?>

		<section class="container-fluid">
			<?php include 'assets/loginForm.php'; ?>
			  
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <div class="jumbotron">
			    		<h1>Police Database System</h1>      
			    		<p>Geographic Information System</p>      
			    		<a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
				      </div>
				    </div>

				    <div class="item">
				      <div class="jumbotron">
			    		<h1>Prelims Checklist</h1>      
			    		<p>Geographic Information System</p>
			    		<ul>
			    			<li>Database</li>
			    			<li>Add</li>
			    			<li>Edit</li>
			    			<li>Delete</li>
			    		</ul>
			    	  </div>
				    </div>

				    <div class="item">
				      <div class="jumbotron">
			    		<h1>Midterms Checklist</h1>      
			    		<p>Geographic Information System</p>
			    		<ul>
			    			<li>Extensive Queries</li>
			    			<li>Report Generation</li>
			    		</ul>
			    	  </div>
				    </div>

				    <div class="item">
				      <div class="jumbotron">
			    		<h1>Finals Checklist</h1>      
			    		<p>Geographic Information System</p>
			    		<ul>
			    			<li>Graphs</li>
			    			<li>System Security</li>
			    			<li>Google Maps Integration</li>
			    		</ul>
			    	  </div>
				    </div>
				  </div>
				</div>
			  </div>

			  <div class="row">
			    <div class="col-md-3">
			      <p>This project is called Geographic Information System (GIS) Based Police Database System. It is focused on the development and implementation of “Geographic Information System (GIS)-based Police Database System” which is aimed to simulate the actual process of crime data input, design a web-based interface, address issues in data input and show the functionality of the system. </p>
			    </div>
			    <div class="col-md-3">        
			      <p>GIS has been embraced by professionals in all areas of law enforcement for conducting day-to-day operations as well as for planning, analysis, and decision support". GIS plays a major role in generating crime maps in attaining efficiency in operations and rationality in the decision making process.  Crime analysis is a method that will be used by law enforcement to reduce, prevent, and to solve crime, disorder, and quality of life issues. The system has several functions which are crime complaints recording, case investigation and statistics. By integrating GIS into, the user could see the analysis report in geographical form.</p>      
			    </div>
			    <div class="col-md-3">        
			      <p>Currently, law enforcers are using traditional methods to record crime complaints, access the complaint for investigation and crime analysis.  This method produced the following problems: missing information in the form like biometrics, picture, sex, height, inconsistencies with data entry, double entries of data, inconsistencies of data, postponement of encoding of data due to insufficient data in the form. They are also facing problem to maintain the database because they don't have a centralized database. The method that they used above is roughly time consuming. Thus, the achievements of combating crime are slow and inefficient.</p>      
			    </div>
			    <div class="col-md-3">        
			      <p><strong>Note: Database design is quite important to the system because it will define the structure of the system. This logical data model contains all the needed logical and physical design choices and physical storage parameters needed to generate a design in a Data Definition Language, which can then be used to create a database. Normalization in database design was used to reduce data redundancies. Database normalization is a design technique for structuring relational database tables. Database theory describes a table's degree of normalization in terms of normal forms. The database was normalized in the third normal form (3NF).</strong></p>
			    </div>
			  </div>			
		</section>

		<?php include 'assets/footer.php'; ?>

  		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->	
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>