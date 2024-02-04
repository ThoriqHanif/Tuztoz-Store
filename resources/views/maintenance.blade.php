<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAINTENANCE WEBSITE</title>
    <style>
	  * {
    box-sizing: border-box;
  }

  body {
	background-color: #0a0b3b;
	color: #fff;
	font-family: sans-serif;
}

  .container {
    display: flex;
    flex-direction: column;
    justify-content: top;
    align-items: center;
    height: 100vh;
  }  
  .container img {
  	width: 70%;
	  animation: bounce 4s ease-in-out infinite;
  }
  
  h5 {
    font-size: 6em;
    margin: 0;
    animation: pulse 2s ease-in-out infinite;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.2);
    }
    100% {
      transform: scale(1);
    }
  }

  p {
    font-size: 1.5em;
    margin: 0;
    margin-top: 20px;
    text-align: center;
  }

  small {
	display: inline-block;
	padding: 10px 20px;
	color: #fff;
	text-decoration: none;
	margin-top: 20px;
	font-size: 1.2em;
}

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      transform: translateY(0);
    }
    40% {
      transform: translateY(-10px);
    }
    60% {
      transform: translateY(-5px);
    }
  }

  @media (max-width: 768px) {
    h5 {
      font-size: 4em;
    }
    p {
      font-size: 1em;
    }
  }

  @media (max-width: 576px) {
    h5 {
      font-size: 3em;
    }
    p {
      font-size: 0.8em;
    }
    small {
      font-size: 1em;
    }
  } {
		display: inline-block;
		padding: 10px 20px;
		background-color: #4293ef;
		color: #fff;
		text-decoration: none;
		margin-top: 20px;
		font-size: 1.2em;
		border-radius: 50px;
	}
	
	  @keyframes bounce {
	    0%, 20%, 50%, 80%, 100% {
	      transform: translateY(0);
	    }
	    40% {
	      transform: translateY(-10px);
	    }
	    60% {
	      transform: translateY(-5px);
	    }
	  }
	
	  @media (max-width: 768px) {
	    h5 {
	      font-size: 4em;
	    }
	    p {
	      font-size: 1em;
	    }
	  }
	
	  @media (max-width: 576px) {
	    h5 {
	      font-size: 3em;
	    }
	    p {
	      font-size: 0.8em;
	    }
	    small {
	      font-size: 1em;
	    }
	  }
    </style>
</head>
<body>
    <div class="container">        
        <img src="/assets/images/maintenance.gif" alt="">
        <h5>Maintenance</h5>
        <p>Sorry for the inconvenience. We’re performing some maintenance at the moment. we’ll be back up shortly!</p>
        <small>~JSTOREGAME</small>
      </div>
</body>
</html>