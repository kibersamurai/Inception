all:	up

up:
		@sudo mkdir -p /home/${USER}/data/db
		@sudo mkdir -p /home/${USER}/data/wp
		@sudo docker-compose -f srcs/docker-compose.yml up -d

down:
		@sudo docker-compose -f srcs/docker-compose.yml down

ps:
		@sudo docker-compose -f srcs/docker-compose.yml ps

clean:	down
		@docker volume rm -f db wp

fclean:	down
		docker rm -f $(sudo docker ps -qa)
		docker rm -f $(sudo docker ps -ls)
		docker volume rm $(sudo docker volume ls -q)
		docker system prune -a --volume
		docker system prune -a --force
		sudo rm -Rf /home/${USER}/data/db
		sudo rm -Rf /home/${USER}/data/wp
		mkdir /home/${USER}/data/db
		mkdir /home/${USER}/data/wp
		

re:
		@mkdir -p ../data/wp
		@mkdir -p ../data/db
		@docker-compose -f srcs/docker-compose.yml build
		docker-compose -f srcs/docker-compose.yml up -d

.PHONY:	all up down ps clean fclean re
