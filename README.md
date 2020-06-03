# mvc_vanilla
	* An open source custom PHP framework on MVC Pattern codenamed MVC Vanilla.
	* To kill the time in Quarantine I Developed this custom Framework in on MVC Patern in OOP style.


	------- Documentation and Guidance of Usage -----


	1) Change the Config.php file with your values in them. That you're gonna find in app/config. And then proceed to step 2.


	2) Change the following line "/mvc_vanilla/public" to your according of RewriteBase in .htaccess file of the Public folder. Below showing it's sample lines.

	/* 
		<IfModule mod_rewrite.c>
			options -Multiviews
			RewriteEngine On
			RewriteBase /mvc_vanilla/public
			RewriteCond %{REQUEST_FILENAME} !-d
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
		</IfModule>
	*/