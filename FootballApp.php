<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="cover.css" rel="stylesheet">
	<link href="cover.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="Rmenu.css" />
   <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
		$.ajax({
			headers: { 'X-Auth-Token': '9ac7ca5c762343f6b88f19d8e031ed9f' },
			url:'http://api.football-data.org/v1/competitions/445/fixtures',
			dataType: 'json',
type: 'GET',

}).done	(function(response) {

console.log(response);
var table = $('<table>').addClass('tbl');
var heading = $('<tr>').html('<th>matchday</th><th>home team</th><th>home team goals</th><th>away team goals</th><th>Away team</th>');

table.append(heading);

for(i=0; i< response.fixtures.length; i++){
	if((response.fixtures[i].matchday)==38){
	
    var home = response.fixtures[i].homeTeamName;
	var day = response.fixtures[i].matchday;
	var homeGoals = response.fixtures[i].result.goalsHomeTeam;
	var away = response.fixtures[i].awayTeamName;
	var awayGoals = response.fixtures[i].result.goalsAwayTeam;
	
	
	var row = $('<tr>').html('<td>'+day+'</td><td>'+home+'</td><td>'+homeGoals+'</td><td>'+awayGoals+'</td><td>'+away+'</td>');
    table.append(row);
}
}

$('#resultText').append(table);





});
</script>
<script>
$.ajax({
 headers: { 'X-Auth-Token': '9ac7ca5c762343f6b88f19d8e031ed9f' },
 url: 'http://api.football-data.org/v1/teams/65',
 dataType: 'json',
 type: 'GET',
}).done(function(response) {
 $("#logo").attr("src", response.crestUrl);
$("#teamName").text(response.name);
});
</script>
<script>
		$.ajax({
			headers: { 'X-Auth-Token': '9ac7ca5c762343f6b88f19d8e031ed9f' },
			url:'http://api.football-data.org/v1/teams/65/fixtures/',
			dataType: 'json',
type: 'GET',
}).done(function(response) {

console.log(response);
var table = $('<table>').addClass('tbl');
var heading = $('<tr>').html('<th>matchday</th><th>home team</th><th>home team goals</th><th>away team goals</th><th>Away team</th>');

table.append(heading);

for(i=0; i< response.fixtures.length; i++){
	if((response.fixtures[i]._links.competition.href)=="http://api.football-data.org/v1/competitions/445"){
	
    var home = response.fixtures[i].homeTeamName;
	var day = response.fixtures[i].matchday;
	var homeGoals = response.fixtures[i].result.goalsHomeTeam;
	var away = response.fixtures[i].awayTeamName;
	var awayGoals = response.fixtures[i].result.goalsAwayTeam;
	
	
	var row = $('<tr>').html('<td>'+day+'</td><td>'+home+'</td><td>'+homeGoals+'</td><td>'+awayGoals+'</td><td>'+away+'</td>');
    table.append(row);
}
}

$('#pastResult').append(table);


});
</script>
<script>
		$.ajax({
			headers: { 'X-Auth-Token': '9ac7ca5c762343f6b88f19d8e031ed9f' },
			url:'http://api.football-data.org/v1/teams/65/players',
			dataType: 'json',
type: 'GET',

}).done	(function(response) {

console.log(response);
var table = $('<table>').addClass('tbl');
var heading = $('<tr>').html('<th>Player Name</th><th>Position</th><th>Jersey Number</th><th>DOB</th><th>Nationality</th>');

table.append(heading);

for(i=0; i< response.players.length; i++){
	
	
    var name = response.players[i].name;
	var pos = response.players[i].position;
	var numb = response.players[i].jerseyNumber;
	var dob = response.players[i].dateOfBirth;
	var na = response.players[i].nationality;
	
	
	var row = $('<tr>').html('<td>'+name+'</td><td>'+pos+'</td><td>'+numb+'</td><td>'+dob+'</td><td>'+na+'</td>');
    table.append(row);

}

$('#player').append(table);





});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
			
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p><img src="icon.jpg" width="42" height="42">Premier League</p>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
    </nav>
</div>
<center><img id="logo" align="middle" /></center>
<center><p id="teamName" style="color:white;" /></center>
 <script src="http://widgets.sportsopendata.net/js/premier-league/sod-280.min.js"></script>
<div id="sod-widget"></div>
<div class="container" ng-app="showNewResult" ng-controller="ShowController">
    <h1 style="color:white">Newest Round Result Of Premier League</h1>
    <div class="row">
      <div class="col-md-3">
        <button ng-click="shdiv = !shdiv" class="btn btn-success btn-lg">Show Result</button>
      </div>
      
      <div class="col-md-3 divclass" ng-show="shdiv">
        <center><p id="resultText" style="color:white" /></center>
      </div>
    </div>
     <h1 style="color:white">Past Result Of Our Team</h1>
    <div class="row">
      <div class="col-md-3">
        <button ng-click="shdiv = !shdiv" class="btn btn-success btn-lg">Show Result</button>
      </div>
      
      <div class="col-md-3 divclass" ng-show="shdiv">
        <center><p id="pastResult" style="color:white" /></center>
      </div>
    </div>
	<h1 style="color:white">Player Information</h1>
    <div class="row">
      <div class="col-md-3">
        <button ng-click="shdiv = !shdiv" class="btn btn-success btn-lg">Show Result</button>
      </div>
      
      <div class="col-md-3 divclass" ng-show="shdiv">
        <center><p id="player" style="color:white" /></center>
      </div>
    </div>
</div>
<script>
var showNewResult = angular.module('showNewResult', [])

.controller('ShowController', function($scope) {

  $scope.shdiv = false;
  
});
</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
