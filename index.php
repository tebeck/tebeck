<!DOCTYPE html>
    <?php
      $cookie_name = "user";
      $cookie_value = "";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Thomas Beckford Full Stack Web Developer" />
  <meta name="robots" content="index, follow"></meta>
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
	<title>Thomas Beckford</title>
	<!--GoogleAnalytics-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-78540060-2', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>
 <main>
	<section>
    <header class="main-header main-container animated fadeIn">
        <h1 >THOMAS BECKFORD</h1>
        <h3>FULL STACK WEB DEVELOPER</h3> <br/>
        <img src="./images/argentina.png" alt="argentina" title="argentina">
    </header>


<!--     <article class="main-body">
        <p class="text-info">HTML5 & CSS3 <br> <small >BOOTSTRAP # FOUNDATION # SEO </small></p>
        <p  class="text-danger">JAVASCRIPT<br> <small> NODEJS # JQUERY # ANGULAR2 # REACT # TYPESCRIPT</small></p>
       <p class="text-success">NPM # GIT # SCRUM # SLACK</p>
        <p class="text-primary">PHP <small> LARAVEL </small></p>
    </article> -->
    <article class="main-footer">
	      <a href="https://github.com/tebeck" title="" target="_blank"><img class="image github" src="images/github.png" alt=""></a>
  <!--    		<h5><a class="link" href="../resume/Download/Curriculum-Thomas-Beckford-Spanish.docx" download>DOWNLOAD</a><span class="link"> # </span><a href="resume/SeeMyResume/thomas-beckford-english.html" target="_blank" class="link">SEE MY RESUME!</a></h5> -->
    </article>
	</section>
 </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
