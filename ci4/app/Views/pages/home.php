


<body>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/script.js"></script>
    <section>
        <h2><?php echo 'About Me'; ?></h2>
        <p>
            <?php echo "Welcome to my profile! I've been an APC student since senior high at the start of the pandemic. This means that I have been in APC for 4 years.
            and right now, I am a student studying for a degree in bachelor's computer science under cyber security and system forensics. My birthday is on June 10 2002.";
			?>
		</p>
		<button onclick="startCountdown()">My Birthday Countdown</button>
		<p id="countdown"></p>
    </section>

    <section>
        <h2>Fun Facts</h2>
        <ul>
            <li> I have a total of <?php $catnum = 11; 
			print $catnum;
			?> cats at home </li>
            <li>I've watched over <?php
				function getFiveHundred() {
					return 500;
				}
				$result = getFiveHundred();
				echo $result; ?> anime </li>
            <li>I love trying out new things </li>
        </ul>
    </section>

    <section>
        <h2>Contacts</h2>
        <p>Feel free to reach out to me. Let's connect!</p>
        <ul>
            <li>Email: <a href="mailto:jacobdevilla@gmail.com">jacobdevilla@gmail.com</a></li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/jacob-de-villa-193a801b4/" target="_blank">LinkedIn</a></li>
            <li>GitHub: <a href="https://github.com/jcdevilla01" target="_blank">GitHub</a></li>
        </ul>
    </section>
</body>
		
