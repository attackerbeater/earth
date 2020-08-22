1. how to create psr-4 autoloading ? 
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