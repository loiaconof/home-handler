# home-handler

## Getting Started

### Prerequisites

- docker https://docs.docker.com/engine/install/

### Installation

run composer install
```
docker-compose run --rm composer install
```

### Run
```
docker-compose up -d server
```

### Developer

Run
```
docker-compose up -d --build server
```

Launch symfony cli
```
docker-compose run --rm symfony-console -- arg1 arg2 ... argn
[example] docker-compose run --rm symfony-console -- cache:clear
```