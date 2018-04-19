First create a folder named "www" and add "cloudtech.php" file in it before running the yml file.

Then do the followinf commands:

docker-compose build
docker-compose up

By running the below command in web browser user can see the content of the database container:

"http://127.0.0.1//cloudtech.php"

The docker-compose.yml file creates two containers: one http container and one database container.

There are two Dockerfiles to run commands and install packages inside each container.
