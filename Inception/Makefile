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
	
		sudo docker system prune -a --force
		sudo rm -Rf /home/${USER}/data/db
		sudo rm -Rf /home/${USER}/data/wp
		sudo mkdir /home/${USER}/data/db
		sudo mkdir /home/${USER}/data/wp
		

re:		fclean
		@sudo mkdir -p ../data/wp
		@sudo mkdir -p ../data/db
		@sudo docker-compose -f srcs/docker-compose.yml build
		@sudo docker-compose -f srcs/docker-compose.yml up -d

.PHONY:	all up down ps clean fclean re
