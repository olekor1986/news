<h1>News API - test project</h1>
<h2>Project start instructions</h4>
<h4>System requirements:</h4>
<ul>
	<li>Installed GIT</li>
	<li>Installed Composer</li>
	<li>Server with Apahce 2.4 + PHP 7.2-7.3 + MySQL 5.7</li>
</ul>
<h4>Installation:</h4>
<ol>
	<li>In the domain directory launch a terminal and run: git clone https://github.com/olekor1986/news.git</li>
	<li>Run: composer install</li>
	<li>Copy the file env.example and rename it to .env</li>
	<li>In the .env file, write the parameters of the MySQL database</li>
	<li>Run: php artisan key:generate</li>
	<li>Run: php artisan migrate</li>
	<li>Run: php artisan db:seed</li>
	<li>Specify the /public root directory in the hosting site settings</li>
</ol>
<h4>API Request Options:</h4>
<table>
    <tr>
        <td>API Request</td>
        <td>Type</td>
        <td>Description</td>
        <td>Expected Result </td>
    </tr>
    <tr>
        <td>/api/auth/register?name={{user_name}}&email={{user_email}}&password={{password}}&confirm_password={{password}}</td>
        <td>POST</td>
        <td>Creates a new user with parameters user_name, user_email, password.</td>
        <td>Message: Registration success. Parameters of the new User in JSON. User Api Token created. Response code "201". </td>
    </tr>
    <tr>
        <td>/api/news</td>
        <td>GET</td>
        <td>Shows all News with related Categories</td>
        <td>News list in JSON. Response code "200" </td>
    </tr>
    <tr>
        <td>/api/news/{{news_id}}</td>
        <td>GET</td>
        <td>Shows News by news_id with related Categories</td>
        <td>News by news_id in JSON. Response code "200" </td>
    </tr>
    <tr>
        <td>/api/news?title={{news_title}}&description={{news_description}}&api_token={{api_token}}</td>
        <td>POST</td>
        <td>Creates News with news_title, news_description parameters. Registered User Token = api_token</td>
        <td>Created News in JSON. Response code "201". </td>
    </tr>
    <tr>
        <td>/api/news/{{news_id}}?title={{news_title}}&description={{news_description}}&api_token={{api_token}}</td>
        <td>PUT</td>
        <td>Updates News with news_id, news_title, news_description parameters. Registered User Token = api_token</td>
        <td>Updated News in JSON. Response code "200". </td>
    </tr>
    <tr>
        <td>/api/news/{{news_id}}?api_token={{api_token}}</td>
        <td>DELETE</td>
        <td>Removes News with news_id parameter. Registered User Token = api_token</td>
        <td>Response code "204 No Content". </td>
    </tr>
    <tr>
        <td>/api/categories</td>
        <td>GET</td>
        <td>Shows all Categories with related News </td>
        <td>Categories list in JSON. Response code "200" </td>
    </tr>
    <tr>
        <td>/api/categories/{{category_id}}</td>
        <td>GET</td>
        <td>Shows Category by category_id with related News</td>
        <td>Category by category_id in JSON. Response code "200" </td>
    </tr>
    <tr>
        <td>/api/categories?title={{category_title}}&api_token={{api_token}}</td>
        <td>POST</td>
        <td>Creates Category with category_title parameter. Registered User Token = api_token</td>
        <td>Created Category in JSON. Response code "201". </td>
    </tr>
    <tr>
        <td>/api/categories/{{category_id}}?title={{category_title}}&api_token={{api_token}}</td>
        <td>PUT</td>
        <td>Updates Category with category_id, category_title parameters. Registered User Token = api_token</td>
        <td>Updated Category in JSON. Response code "200". </td>
    </tr>
    <tr>
        <td>/api/categories/{{category_id}}?api_token={{api_token}}</td>
        <td>DELETE</td>
        <td>Removes Category with category_id parameter. Registered User Token = api_token</td>
        <td>Response code "204 No Content". </td>
    </tr>
</table>