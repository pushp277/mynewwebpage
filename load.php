<!DOCTYPE html>
<html>
<head>
<style> 

body{
	display: flex;	
	justify-content: center;
	margin-right: 10vw;
	transition: 1s;
	
}



#load1{		
		position: absolute;
		margin-top: 40vh;
		height: 200px;
		width: 200px;
		border-radius: 50%;
		margin-left: 0;
		border-top: solid blue 0.5vh;
		
		animation: animate1 2s linear infinite;
}

#load2{		
		position: absolute;
		margin-top: 44vh;
		height: 150px;
		width: 150px;
		margin-left: 25px;
		border-radius: 50%;
		border-bottom: solid red 0.5vh;
		
		animation: animate2 1.5s linear infinite;
}

#load3{		
		position: absolute;
		margin-top: 46vh;
		height: 100px;
		margin-left: 50px;
		width: 100px;

		border-radius: 50%;
		border-bottom: solid blue 0.5vh;
		animation: animate3 2.5s linear infinite;
}

#load4{		
		position: absolute;
		margin-top: 48vh;
		height: 50px;
		width: 50px;
		margin-left:75px;
		border-radius: 50%;
		border-top: solid red 0.5vh;
		animation: animate3 0.5s linear infinite;
}

@keyframes animate1{
			0%{
				transform: rotate(0deg);
			}

			100%{
				transform: rotate(360deg);
			}
}

@keyframes animate2{
			0%{
				transform: rotate(0deg);
			}

			100%{
				transform: rotate(360deg);
			}
}

@keyframes animate3{
			0%{
				transform: rotate(0deg);
			}

			100%{
				transform: rotate(360deg);
			}
}


@keyframes animate4{
			0%{
				transform: rotate(0deg);
			}

			100%{
				transform: rotate(360deg);
			}
}


</style>
<title=""></title>
</head>
<body>

	<div id="load1"></div>
	<div id="load2"></div>
	<div id="load3"></div>

	<div id="load4"></div>

	<div id="load5"></div>


</body>
</html>
