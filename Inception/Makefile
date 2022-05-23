all:
	sudo mkdir /home/bprovolo/data/
	sudo mkdir /home/bprovolo/data/wordpress
	sudo mkdir /home/bprovolo/data/db

	docker-compose -f srcs/docker-compose.yml up
clean:
	docker-compose -f srcs/docker-compose.yml down
fclean: clean
	sudo docker rmi -f $(sudo docker images -qa)
	sudo docker volume rm $(sudo docker volume ls -q)
	sudo docker system prune -a --force
