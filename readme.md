# Starter Theme


## What's Included
1. HTML5 Reset
2. Normalize.css - Replaces the HTML5 Reset reset.ccs file
3. Modernizer
4. Zurb Foundation 5 Framework
5. sass File Structure


## Steps to Customize Before Begining
1. Rename theme folder and update theme info in /style.css.
2. Update Theme Options in WordPress admin under Apperance and Theme.
3. Update Wordpress settings (General and Permalinks).
4. Uncomment Google Analytics in the /footer.php file and add tracking code.
5. Set Sass to complie using CodeKit.
6. Customize Partials in scss for this particular project.


## Setting up a local development environment
1. Start MAMP Pro.
2. Click the + under Hosts and give the Server a name.
3. Choose the disk location for the root url.
4. Click Apply. (You can test the link by clicking the home icon next to the server name.)
5. Go to PHPmyAdmin in MAMP Pro. Create a new database.
6. Download WordPress and add the files to the server folder.
7. Remove -sample from wp-config file.
8. Edit this wp-config file.
		1. Change the DB_name to the name of the database you just created
		2. Change the DB_user to 'root'
		3. Change the DB_password to 'root'
		4. Change the DB_host to 'localhost'



NOTES:
* The CSS uses { box-sizing: Border-Box } - That means that elements maintain their width even when padding is added.
