build: ## Build docker image
	docker-compose build
	make up

up: down ## Run containers
	docker-compose up -d

down: ## Stop all containers
	docker-compose down

php: ## Connect to the PHP container
	docker-compose exec --user www-data php bash

node: ## Connect to the Node container
	docker-compose exec node /bin/bash

init-project: generate-env build download-symfony success-message

install: generate-env build up composer yarn

composer: ## Install Composer dependencies
	docker-compose exec --user www-data php bash -c 'composer install'

composer-u: ## Update Composer dependencies
	docker-compose exec --user www-data php bash -c 'composer update'

yarn: ## Install Yarn dependencies
	docker-compose exec node bash -c 'yarn install'

compile-assets: ## Compile assets
	docker-compose exec node bash -c 'yarn dev'

download-symfony: ## Download Symfony
	docker-compose exec --user www-data php bash -c 'mkdir symfony-temp && composer create-project symfony/skeleton:"7.0.*" symfony-temp && mv symfony-temp/* . && rm -rf symfony-temp'

generate-env:
	@rm -f .env
	@echo "HOST=`hostname -I | cut -d ' ' -f1`" >> .env

fix: ## Run PHP-CS-Fixer
	docker-compose exec --user www-data php bash -c 'vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php --allow-risky=yes'
	docker-compose exec php bash -c 'vendor/bin/phpstan analyse -c phpstan.neon --memory-limit 512M'

success-message: ## Display success message
	@printf "\n\n"
	@printf "================\n"
	@printf "Le site est disponible ici : https://symfony-immo.dev.localhost  \n"
	@printf "================\n"

help: ## Display this help message
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-20s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'