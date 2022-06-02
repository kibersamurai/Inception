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

.PHONY:	all up down ps clean fclean re
