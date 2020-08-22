1. how to create psr-4 autoloading ? 
	https://www.youtube.com/watch?v=xWgtKALpx9E
	- create composer.json from root project
	- add this
	{
		"autoload" : {
			"psr-4" : {
				"App\\": "src/" 
			}
		}
	}

	- run composer dump-autoload -o

	- the add namespace for you application
		- App\Controller
		- App\Model