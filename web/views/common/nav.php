<nav class="space-mono-regular p1-rl">
	<ul>
		<li class="link-home">
			<a href="./">Home</a>
		</li>
		<li class="link-about-me">
			<a href="./aboutme.php">About Me</a>			
		</li>
		<li class="link-projects">
			<span>Projects</span>
			<ul>
				<li>
					<a href="https://luisfelipelugo.com/works/old_web/" target="_blank">Old Website</a>
				</li>
				<li class="link-data-collector">
					<a href="./collector.php">Data Collector</a>		
				</li>
				<li class="link-seg-inf">
					<a href="./temario.php">Seguridad Informática</a>
				</li>
			</ul>
		</li>
		<li id="userActions">			
			<a id="userNick" href="./user.php">User</a>
		</li>
		<li id="btnClose">
			<a href="./goodbye.php">Bye</a>
		</li>
		<li id="btnLogSing">
			<a class="logButton" href="./login.php">LogIn</a>
			<a class="signButton" href="./signin.php">SignIn</a>
		</li>
	</ul>
</nav>
<script src="./web/js/pathCheker.js"></script>
<script>
	const cookieValue = document.cookie.split("; ").find((row) => row.startsWith("User="))?.split("=")[1];
	const userNick = document.getElementById("userNick");

	const btnClose = document.getElementById("btnClose");
	const btnLogSing = document.getElementById("btnLogSing");
	const userActions = document.getElementById("userActions");
	
	if(cookieValue != null) {
		//console.log(`no es null`);	
		//console.log(`${cookieValue}`);
		userNick.textContent = `${cookieValue}`;
		btnClose.style.display = "block";
		userActions.style.display = "flex";

		btnLogSing.style.display = "none";
	} else {
		//console.log(`es null`);	
		btnClose.style.display = "none";
		userActions.style.display = "none";

		btnLogSing.style.display = "block";
	}

	// nav change on scroll
    let scrollpos = window.scrollY;
    const header = document.querySelector("nav");
    const header_height = header.offsetHeight;
    
    const add_class_on_scroll = () => header.classList.add("scrolled");
    const remove_class_on_scroll = () => header.classList.remove("scrolled");
    
    window.addEventListener('scroll', function() { 
    	scrollpos = window.scrollY;
        //console.log("header_height " + header_height + " | scrollpos " + scrollpos);
    
    	if (scrollpos >= header_height) { 
            add_class_on_scroll();
        } else {
            remove_class_on_scroll();
        }
        
        if(scrollpos == header_height && scrollpos == 0 && header_height == 0) {
            remove_class_on_scroll();
        }
    
    });
</script>